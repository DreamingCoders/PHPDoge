<?php
include($_SERVER['DOCUMENT_ROOT']."/config.php");
?>

<script>
  installDoge = function installDoge();
  function installDoge(){
    alert("Loading installation.");
  }
</script>

<div class="container">
  <div class="card">
    <div class="card-body">
      
      <h2>PHPDoge Install</h2>
        <p>Automatically configure your website by installing PHPDoge</p>
          <p>If you use install.php to install PHPDoge, config.php will be manually initialized.</p>
      <form action="#" method="GET">
          <input type="text" name="serverName" class="form-control">
            <input id="installDoge" type="submit" name="submitInstall" class="btn btn-success" value="Install">
      </form>
      
    </div>
  </div>
</div>
