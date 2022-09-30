<?php
use Shuchkin\SimpleXLSX;

include_once "models/Table.class.php";
require_once __DIR__.'/simplexlsx-master/src/SimpleXLSX.php';

if ( $xlsx = SimpleXLSX::parse('testdata.xlsx') ) {

  $dbInfo = "mysql:host=localhost;dbname=studentresults";
	$dbUser = "root";
	$dbPassword = "";
    $db = new PDO( $dbInfo, $dbUser, $dbPassword );
    $rows = $xlsx->rows();
	foreach($rows as $row) {
		if($row[0]=="Last Name") {
			continue;
		}
		
		$lastname = $row[0];
		$firstname = $row[1];
		$gender = $row[2];
		$assignmentaverage = $row[3];
		$discussionaverage = $row[4];
		$researchaverage = $row[5];
		$semesteraverage = $row[6];
		$semestergrade = $row[7];
		
		$entrySQL = "INSERT INTO student_data( lastname, firstname, gender, assignmentaverage, discussionaverage, 
			researchaverage, semesteraverage, semestergrade) 
                 VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)";
		$formData = array($lastname, $firstname, $gender, $assignmentaverage, $discussionaverage, $researchaverage, $semesteraverage, $semestergrade);
		 $statement = $db->prepare( $entrySQL );
         $statement->execute( $formData );

	}
	echo "Database studentresults, database table student_data populated";

} else {
    echo SimpleXLSX::parseError();
}
?>

