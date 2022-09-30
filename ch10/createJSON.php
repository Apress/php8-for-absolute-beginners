<?php
use Shuchkin\SimpleXLSX;

require_once __DIR__.'/simplexlsx-master/src/SimpleXLSX.php';

if ( $xlsx = SimpleXLSX::parse('testdata.xlsx') ) {

  $netJSON = json_encode($xlsx->rows());
  file_put_contents("data.json", $netJSON);
  echo "data.json created";
} else {
    echo SimpleXLSX::parseError();
}
?>
