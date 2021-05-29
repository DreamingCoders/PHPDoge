<?php
// DreamingCoders
include($_SERVER['DOCUMENT_ROOT']."/core/config.php");

if(isset($mvcEnabled)){ // check if mvc is instantiated  
  if($mvcEnabled == "true"){
    define('Public', str_replace("Public/index.php", "", "".$_SERVER['SCRIPT_NAME']."");
    require($_SERVER['DOCUMENT_ROOT']."/router.php");
    require($_SERVER['DOCUMENT_ROOT']."/request.php");
  }
  
}else{
  exit(); 
}
