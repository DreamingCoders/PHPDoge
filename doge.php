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
    
public function templating(){ // make class when finished-navbar
    ?>
<!doctype html>
<html>
    <head>
        <title>PHPDoge</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">PHPDoge</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Documentation</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    </body>
</html>
    <?php
}

public function interpreter(){
  echo "<script>console.log('PHPDoge Library by DreamingCoders');</script>";
}

// Blockchain cryptography
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
    echo $doge->templating();
    echo $doge->interpreter()."<br>";
    //echo $doge->sha512();

        echo $rewriteALG;

?>
