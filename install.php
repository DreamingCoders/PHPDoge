<?php
include($_SERVER['DOCUMENT_ROOT']."/config.php");
$actual_link = "http://".$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]."";

// Posts
  // End integral parts

if(isset($_GET['forceInstall']){
   $forceInstall = htmlentities($_GET['forceInstall']);
}
if(isset($installSuccess)){
  if($installSuccess == "true"){
    die();
  }else{
  }
}else if(!isset($_GET['forceInstall']){
  die("PHPDoge has not detected an install, please proceed <a href='?forceInstall=true'>here</a> to continue"); // Encountered an unexpected error, will proceed with possible installation
}
?>

<script>
  installDoge = function installDoge();
  function installDoge(){
    alert("Loading installation.");
    alert("Installation complete. Please do not delete this file as it is still required for PHPDoge to run.\
          View your application live at: <?=$actual_link?>");
    $.get("/config.php?installSuccess=true");
  }
</script>

<div class="container">
  <div class="card">
    <div class="card-body">
      
      <h2>PHPDoge Install</h2>
        <p>Automatically configure your website by installing PHPDoge</p>
          <p>If you use install.php to install PHPDoge, config.php will be manually initialized.</p>
      <div class="card-divider"></div>
      
      <form action="#" method="GET">
          <input type="text" name="serverName" class="form-control" placeholder="Project name"><br>
          <input type="checkbox" id="mvc1" name="mvc1" class="form-control" value="Enable MVC"><br>
        <textarea type="text" name="projectDescription" class="form-control" placeholder="Project description"></textarea><br>
            <label for="mvc1"> Check to enable MVC (Leave blank if unsure)</label><br>
              <input id="installDoge" type="submit" name="submitInstall" class="btn btn-success" value="Install">
      </form>
      
    </div>
  </div>
</div>
