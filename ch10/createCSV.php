<?php
use Shuchkin\SimpleXLSX;

require_once __DIR__.'/simplexlsx-master/src/SimpleXLSX.php';

if ( $xlsx = SimpleXLSX::parse('testdata.xlsx') ) {
  $values = $xlsx->rows();
  $file = fopen("data.csv","w");
	foreach ($values as $value) {
		fputcsv($file, $value);
	}
	echo "data.csv created";
  fclose($file);
} else {
    echo SimpleXLSX::parseError();
}
?>
