<?php
require('config.php');
?>
<title><?php echo $siteTitle; ?> - Compose a mail</title>
<style>
textarea{
width: 658px;
 height: 400px;
}</style>
<center><h1>compose a mail</h1>to:<input type="text" placeholder="amongus@innersloth.com"><br>
title:<input type="text" placeholder="i saw among us at 3 am"><br>
<textarea>
 <?php echo $compose; ?>
  </textarea><br><a href="login.php">compose xd</a></center>
