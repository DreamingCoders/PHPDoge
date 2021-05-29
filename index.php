<?php
// index.php
// DreamingCoders
  // First page you will see on your server
  
include($_SERVER['DOCUMENT_ROOT']."/config.php");
$rerouter = "<script>window.location.replace('/install.php');</script>".
      exit();
/* GET request already handled on config, added for reference purposes
if(isset($_GET['installSuccess'])){

  $installSuccess = "true";
   if($installSuccess == "true"){
      // Overwrite core variables for simplicity
   }

}
*/

if(isset($installSuccess)){
  if($installSuccess == "true"){
    // Main website page handler
  }else{
    return $rerouter;
  }
}else{
  return $rerouter;
}

?>

<div class="container">

</div>

<?php
//include($_SERVER['DOCUMENT_ROOT']."/footer.php);
// Note: check if rerouter variable compiles
  //DreamingCoders 2021
?>
