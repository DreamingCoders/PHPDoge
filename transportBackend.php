<div class="container">
<?php
// Forum
?>
  <div class="card">
    <div class="card-header">Forum</div>
    <div class="card-body">Forum description</div>
  </div>
<?php
// Blog
?>
    <div class="card">
    <div class="card-header">Blog</div>
    <div class="card-body">Blog Post</div>
  </div>
<?php
// Learn
?>
  <h2>Learning!</h2>
<?php
// Auth System
  $successAlert = "<div class='alert alert-success text-center'>Success!</div><br>";
  $successRedir = "<script>window.location('/');</script>";
    if(isset($_POST['login'])){
      $username = htmlentities($_POST['username']);
        return $successAlert . $successRedir;
    }
    if(isset($_POST['register'])){
      $username = htmlentities($_POST['username']);
        return $successAlert . $successRedir;
    }
?>
  <div class="row">
    <div class="col-md-6">
        <div class="card">
          <div class="card-header bg-success text-white">Login</div>
          <div class="card-body">
            <form action="#" method="POST">
              <input type="text" name="username" class="form-control" placeholder="Username">
            </form>
          </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
          <div class="card-header bg-primary text-white">Register</div>
          <div class="card-body">
            <form action="#" method="POST">
              <input type="text" name="username" class="form-control" placeholder="Username">
            </form>
          </div>
        </div>
    </div>
  </div>
<?php
  // End transport backend
// DreamingCoders
?>
</div>
