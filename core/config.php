<?php
/* config.php contains all the information you need to set up your application automatically
  * it is recommended to add on to config.php with your own configurations as you progress in your application
*/

if(isset($_GET['installSuccess'])){
  $installSuccess = "true";
   if($installSuccess == "true"){
      // Overwrite core variables for simplicity
    if(isset($_GET['serverName'])){
     if(isset($_GET['serverDesc'])){
      if(isset($_GET['mvc'])){
       $serverName = htmlentities($_GET['serverName']);
       $serverDesc = htmlspecialchars($_GET['serverDesc']);
       //$mvc
       //$projectImage = "";
         // need to figure out how to get this to save over to config file from
           // I figured it out, going to use an sql string
         /* conceptual / templating / future implementation only / for when framework release
         * colin
         $installDataParameters = $phpDoge->prepare("UPDATE `phpdoge_config` SET `websiteName` = :sName AND `websiteDesc` = :sDesc");
         	$installDataParameters->bindParam(":sName", $serverName, PDO::PARAM_STR);
			$installDataParameters->bindParam(":sDesc", $serverDesc, PDO::PARAM_STR);
				$installDataParameters->execute();
         */
      }
     }
    }
    "?installSuccess=true&serverName=".$sNP."&serverDesc=".$sDP."&mvc=".$eMVCP.""
   }
}

$allowSourceProtection = "false"; // Set to true if you would like to configure an automated process to protect your PHP code

if(isset($allowSourceProtection){
  if($allowSourceProtection == "true"){
    $serverIpAddress = "127.0.0.1"; // Add your server IP address in the event allowSourceProtection is enabled
  }else{
    $serverIpAddress = null;
}
require($_SERVER['DOCUMENT_ROOT']."/transport.php");
// MVC checker
//$mvcEnabled = "false";
$DbHost = "localhost";
$DbName = "";
$DbPassword = "";
$DbPort = "80";

$serverName = "PHPDoge";
$serverDesc = "Welcome to my website.";
$emptyPageTitles = "PHPDoge - A Powerful PHP framework";

$projectImage = "";
 
$projectAdditives = array("blog", "network");
?>
