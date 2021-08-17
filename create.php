<?php
require('config.php');
?>
<link rel="stylesheet" href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css">
<title><?php echo $siteTitle; ?> sign up</title>
<center><br><h1><?php echo $siteTitle; ?> sign up</h1>
<br>
<input type="text" placeholder="<?php echo $usermail; ?> " disabled><br>
<input type="password" placeholder="type <?php echo $usertype; ?>"><br>
<a href="login.php">create</a><br>
<a href="index.php">back</a>

</center>
