<?php
require($_SERVER['DOCUMENT_ROOT']."/compiler.php");

class doge{

public function interpreter(){
  echo "PHPDoge Library by DreamingCoders";
}

public function sha512(){
  $crypto = "sha512 string";
    echo $crypto;
}

/*
private function wow(){
  return $this->execute();
}
*/

private function sha512Verify(){
 // Solve/verify hash (Award)
  //$foo->bar(award());
    //$foo->wow();
}
  
}

$doge = new doge;
echo $doge->interpreter();
echo $doge->sha512();
?>
