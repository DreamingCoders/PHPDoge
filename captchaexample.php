<?php
include('core/config.php');
  //form
?>
    <form action="" method="POST">
      <input type="text" name="email" placeholder="Email" />
      <input type="password" name="password" placeholder="Password" />
      <?php
        include('html/captcha.php');
      ?>
      <br />
      <input type="submit" value="Submit" />
    </form>
