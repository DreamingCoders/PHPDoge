<?php
include($_SERVER['DOCUMENT_ROOT']."/core/doge.php");
?>

<div class="container">
  
<?php
// Automatic execution
if(isset($_GET['auto'])){
  $addYourDogeCode = htmlspecialchars($_GET['c']);
  
  if(strlen($addYourDogeCode >= 5)){
    //echo"<script>window.location.replace('/doge.php?c=".$addYourDogeCode."');</script>"; //changed mind instead route it here much cleaner
      // return text here in future
    
    if(!isset($dogeOutput)){
        $dogeOutput = "Null";
    }
    ?>
    <h5>Your DogeCode</h5>
      <code><?=htmlspecialchars($addYourDogeCode)?>
    <h5>Your DogeCode converted to PHP</h5>
      <code><?=htmlspecialchars($rewriteALG) // if this doesnt work wrap it as function forgot what I called it from other page?>
    <?php
  }
}
// Manual execution
?>

<form action="#" method="GET">
  <input type="text" class="form-control" name="c" placeholder="Enter Dogecode to compile to PHP">
  <input type="submit" class="btn btn-success" name="submitCommand" value="Submit">
</form>

</div>
