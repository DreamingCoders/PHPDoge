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
	 */
	 $checkIfDbInst = $phpDoge->prepare("SELECT * FROM `phpdoge_config`");
	 	$checkIfDbInst->execute();
			if($checkIfDbInst->rowCount() <= 0){
				// DB NOT CONFIGURED NEEDS INSTALLMENT
				// SQL statement for creating new tables
$instStmts = [
	'CREATE TABLE phpdoge_config( 
        id INT AUTO_INCREMENT,
        websiteName  VARCHAR(100) NOT NULL, 
        websiteDesc VARCHAR(255) NULL, 
        mvcEnabled   VARCHAR(100) NULL,
        PRIMARY KEY(id)
    /*);',
	'CREATE TABLE book_authors (
        book_id   INT NOT NULL, 
        author_id INT NOT NULL, 
        PRIMARY KEY(book_id, author_id), 
        CONSTRAINT fk_book 
            FOREIGN KEY(book_id) 
            REFERENCES books(book_id) 
            ON DELETE CASCADE, 
            CONSTRAINT fk_author 
                FOREIGN KEY(author_id) 
                REFERENCES authors(author_id) 
                ON DELETE CASCADE
	*/
    )'];
				$phpDoge->exec($instStmts);
			}
         $installDataParameters = $phpDoge->prepare("UPDATE `phpdoge_config` SET `websiteName` = :sName AND `websiteDesc` = :sDesc");
         	$installDataParameters->bindParam(":sName", $serverName, PDO::PARAM_STR);
			$installDataParameters->bindParam(":sDesc", $serverDesc, PDO::PARAM_STR);
				$installDataParameters->execute();
				/*
				try to make the get request for server info secured perhaps a base64 one time request
					<meta http-equiv='cache-control' content='no-cache'>
						<meta http-equiv='expires' content='0'>
						<meta http-equiv='pragma' content='no-cache'>
						
						just include these tags to make the cache virtually impossible to be able to be stored on client side
							makes it easier to prevent human error.
         */
      }
     }
    }
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
