<?php
/* config.php contains all the information you need to set up your application automatically
  * it is recommended to add on to config.php with your own configurations as you progress in your application
*/

$allowSourceProtection = "false"; // Set to true if you would like to configure an automated process to protect your PHP code

if(isset($allowSourceProtection){
  if($allowSourceProtection == "true"){
    $serverIpAddress = "127.0.0.1"; // Add your server IP address in the event allowSourceProtection is enabled
  }else{
    $serverIpAddress = null;
}

$DbHost = "localhost";
$DbName = "";
$DbPassword = "";
$DbPort = "80";

$serverName = "PHPDoge";
$emptyPageTitles = "PHPDoge - A Powerful PHP framework";

$projectImage = "";
?>
