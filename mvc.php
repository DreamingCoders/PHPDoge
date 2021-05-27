<?php
// DreamingCoders
include($_SERVER['DOCUMENT_ROOT']."/core/config.php");

if(isset($mvc)){ // check if mvc is instantiated

  // note: this is not the correct mvc variable I am concept-writing this
  
  
  define('Public', str_replace("Public/index.php", "", "".$_SERVER['SCRIPT_NAME']."");
  require($_SERVER['DOCUMENT_ROOT']."/router.php");
  require($_SERVER['DOCUMENT_ROOT']."/request.php");
  
}else{
  exit(); 
}
