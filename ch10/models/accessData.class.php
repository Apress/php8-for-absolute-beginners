<?php
		use Shuchkin\SimpleXLSX;
		
		class accessData {
		
		function returnDatabases() {
			$user = 'root';
			$password = '';
			$dbInfo = "mysql:host=localhost";
			$pdo = new PDO($dbInfo, $user, $password);
			$stmt = $pdo->query('SHOW DATABASES');
			$databases = $stmt->fetchAll(PDO::FETCH_COLUMN);
			$data = "<select name='columns' id='columns'>";
			foreach($databases as $database){
				if(($database=="information_schema" or $database=="mysql" or
					$database=="performance_schema" or $database=="phpmyadmin"))
					{ continue; }
				$data .= "<option value='$database'>$database</option>";
			
			}
			$data .= "</select>";
			return $data;
		}

		function returnDatabaseTables($database){
			$user = 'root';
			$password = '';
			$dbInfo = "mysql:host=localhost;dbname=$database";
			$pdo = new PDO( $dbInfo, $user, $password );
			$stmt = $pdo->query('SHOW TABLES');
			$tables = $stmt->fetchAll(PDO::FETCH_COLUMN);
			$data = "<input type='hidden' id='database' name='database' value='$database'>";
			$data .= "<select name='columns' id='columns'>";
			foreach($tables as $table){
			   $data .= "<option value='$table'>$table</option>";
			}
			$data .= "</select>";
			return $data;			
		}
		
		function returnDatabaseTitles($database, $table, $title, $flag=false) {
			// $flag == false - all columns, == true only numeric columns
			$user = 'root';
			$password = '';
			$dbInfo = "mysql:host=localhost;dbname=$database";
			$pdo = new PDO( $dbInfo, $user, $password );	
			$sqlstring = "select * from " . $table . " limit 1";
			$result = $pdo->query($sqlstring);
			$data = "<input type='hidden' id='database' name='database' value='$database'>";
			$data .= "<input type='hidden' id='table' name='table' value='$table'>";
			$data .= "<input type='hidden' id='title' name='title' value='$title'>";
			$data .= "<select name='titles' id='titles'>";
			$fields = array_keys($result->fetch(PDO::FETCH_ASSOC));
			$column_count = 0;
			foreach($fields as $column) {
				if($column_count == 0) {
					$column_count = 1;
					continue;
				}
				if($flag==true) {
					$meta = $result->getColumnMeta($column_count);
					if($meta["native_type"]=="VAR_STRING") { 
						// assume string or number only
						$column_count++;
						continue;
					}
				}
				$data .= "<option value='$column'>$column</option>";
				$column_count++;
			}
			$data .= "</select>";
			return $data;
			}
			
		function returnDatabaseData($database, $table, $row, $column){
			$user = 'root';
			$password = '';
			$dbInfo = "mysql:host=localhost;dbname=$database";
			$pdo = new PDO( $dbInfo, $user, $password );	
			$sqlString = "SELECT " . $row . " , " . $column . " From " . $table;
			$results = $pdo->prepare($sqlString);
			$results->execute();
			$result = $results->fetchAll();
			return $result;
		}
		
		function returnExcelTitles($file, $title, $title_Name, $flag=false) {
			//$flag==true return only numbers, $flag==false return all
			if ( $xlsx = SimpleXLSX::parse($file) ) {
				$rows = $xlsx->rows();
				$data = "<input type='hidden' id='numeric_Title' name='numeric_Title' value='$title'>";
				$data .= "<input type='hidden' id='numeric_Name' name='numeric_Name' value='$title_Name'>";
				$data .= "<input type='hidden' id='filename' name='filename' value='$file'>";
				$data .= "<select name='all_Columns' id='all_Columns'>";
				$count = 0;
				foreach($rows[0] as $column) {
					if($flag==true) {
						if(is_string($rows[1][$count])) {
							//assume values numbers or strings
							$count++;
							continue;
						}
					}
					$value = $count . ',' . $column;
					$data .= "<option value='$value'>$column</option>";
					$count++;
				}
				$data .="</select>";
				return $data;
			} else {
			echo SimpleXLSX::parseError();
			}	
		}
		
		function returnExcelData($file, $row, $col) {
			
			if ( $xlsx = SimpleXLSX::parse($file) ) {
				$rows = $xlsx->rows();
				$i = 0;
				foreach($rows as $column) {
					$results[$i][0] = $column[$row];
					$results[$i][1] = $column[$col];
					$i++;
				}
			    return $results;
			} else {
			echo SimpleXLSX::parseError();
			}	
		}
		
		function returnCSVTitles($file, $title, $title_Name, $flag=false) {
			//$flag==true return only numbers, $flag==false return all
			$file_to_read = fopen($file, 'r');
 
			if($file_to_read !== FALSE){
            $data ="<input type='hidden' id='CSV_Numeric_Title' name='CSV_Numeric_Title' value='$title'>";
			$data .= "<input type='hidden' id='CSV_Numeric_Name' name='CSV_Numeric_Name' value='$title_Name'>";
			$data .= "<input type='hidden' id='CSV_Filename' name='CSV_Filename' value='$file'>";
				$data .= "<select name='columns' id='columns'>";
				$info = fgetcsv($file_to_read, 1000, ',');
				$info2 = fgetcsv($file_to_read, 1000, ',');
				for($i = 0; $i < count($info); $i++) {
					if($flag==true) {
						if(!is_numeric($info2[$i])) {
							continue;
						}
					}
					$value = $i . ',' . $info[$i];
					$data .= "<option value='$value'>$info[$i]</option>";
				}
				$data .= "</select>";
				fclose($file_to_read);
				return $data;
			}
		}
		
		
		function returnCSVData($file, $row, $col) {
			
			$file_to_read = fopen($file, 'r');
 
			if($file_to_read !== FALSE){
     
				$lines = array();
				while(!feof($file_to_read) && ($line = fgetcsv($file_to_read)) !== false) {
					$lines[] = $line;
				} 
				$i = 0;
				foreach($lines as $line) {
					$results[$i][0] = $line[$row];
					$results[$i][1] = $line[$col];
					$i++;
				}
			    return $results;
				fclose($file_to_read);
			}
		}		
		
		function returnJSONTitles($file, $title, $title_Name, $flag=false) {
			// Read the JSON file 
			$json = file_get_contents($file);
			// Decode the JSON file
			$json_data = json_decode($json,true);
            $data = "<input type='hidden' id='JSON_Numeric_Title' name='JSON_Numeric_Title' value='$title'>";
			$data .= "<input type='hidden' id='JSON_Numeric_Name' name='JSON_Numeric_Name' value='$title_Name'>";
			$data .= "<input type='hidden' id='JSON_Filename' name='JSON_Filename' value='$file'>";
			$data .= "<select name='columns' id='columns'>";
			// Display data
			$i = 0;
			foreach($json_data[0] as $title) {
				if($flag==true) {
					if(!is_numeric($json_data[1][$i])) {
						$i++;
						continue;
					}
				}
				$value = $i . ',' . $title;
				$data .= "<option value='$value'>$title</option>";
				$i++;
			}
			$data .= "</select>";
			return $data;
		}
		
		function returnJSONData($file, $row, $col) {
			
			// Read the JSON file 
			$json = file_get_contents($file);
  
			// Decode the JSON file
			$json_data = json_decode($json,true);
			$i = 0;
				foreach($json_data as $column) {
					$results[$i][0] = $column[$row];
					$results[$i][1] = $column[$col];
					$i++;
				}
			    return $results;
		}
		}
?>
