<?php
include($_SERVER['DOCUMENT_ROOT']."/config.php");
$actual_link = "http://".$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]."";
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
          <input type="text" name="serverName" class="form-control">
            <input id="installDoge" type="submit" name="submitInstall" class="btn btn-success" value="Install">
      </form>
      
    </div>
  </div>
</div>