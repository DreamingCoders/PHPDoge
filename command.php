<?php
include($_SERVER['DOCUMENT_ROOT']."doge.php");
?>

<div class="container">
  
<?php
// Automatic execution
if(isset($_GET['auto'])){
  $addYourDogeCode = "";
  
  if(strlen($addYourDogeCode >= 5)){
    echo"<script>window.location.replace('/doge.php?c=".$addYourDogeCode."');</script>";
  }
}
// Manual execution
?>

<form action="#" method="GET">
  <input type="text" class="form-control" name="c" placeholder="Enter Dogecode to compile to PHP">
  <input type="submit" class="btn btn-success" name="submitCommand" value="Submit">
</form>

</div>
