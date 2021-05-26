<?php
require($_SERVER['DOCUMENT_ROOT']."/compiler.php");
require($_SERVER['DOCUMENT_ROOT']."/transport.php");

if(isset($_GET['c'])){
    if(!isset($command)){
        $command = htmlspecialchars($_GET['c']); //dogeSay'hi';
    }
}else{
    // no command found instantiating default method
        //$command = "dogeSay'test'.";
}

if(!isset($command)){ // use outside else in case of get request not running
    $command = "dogeSay'test'.";
}

class deobfuscate{
  public function rewrite(){
      global $command;
      //      example - $command = "dogeSay'test'.";

    $replacerFunc = str_replace("dogeSay", "echo", "".$command."");
    $replacerPeriod = str_replace(".", ";", "".$replacerFunc."");
        echo $replacerPeriod;
  }
  
}

class doge extends deobfuscate{

public function interpreter(){
  echo "<script>console.log('PHPDoge Library by DreamingCoders');</script>";
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
 /* Solve/verify hash (Award)
 * Usage
  * $foo->bar(award());
    * $foo->wow();
  */
}

}

if(!isset($command)){
    $command = "dogeSay\"Hello\"\;";
}

$deobfuscate = new deobfuscate;
$doge = new doge;

$rewriteALG = $deobfuscate->rewrite();

  // Load core doge
    echo $doge->interpreter()."<br>";
    //echo $doge->sha512();

        echo $rewriteALG;

?>
