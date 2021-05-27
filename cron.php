<?php
// Automatic cron jobs for minimal updates
    // Doing a different approach for this. The cron will use random intervals and will mathematically update itself based on luck
      // Cron gets referenced via get request on compiler.php as this is considered server direct interactions

$randomTimedInterval = rand(1,1000);

if($randomTimedInterval == 13){
  $cronAccess = "Doge";
    exec("echo -e 'Random time interval loaded!'");
}

if($_SERVER['REMOTE_ADDR'] == $_SERVER['SERVER_ADDR']){ // if the server is accessing itself
  
  if($cronAccess == "Doge"){
    exec("sudo apt-get update -y");
    exec("sudo apt-get upgrade -y");
    exec("sudo apt-get dist-upgrade -y");
    exec("sudo apt-get full-upgrade -y");
  }

}

?>
