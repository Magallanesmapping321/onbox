<?php
require('config.php');
?>
<link rel="stylesheet" href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css">
<title>Mail - <?php echo $siteTitle; ?></title>
<h1><?php echo $siteTitle; ?> Mail</h1>
<p>Current account: <?php echo $usermail; ?></p>
<hr><center>Messages | <a href="compose.php">Compose message</a></center>
<hr>
Latest Messages | <a href="compose.php">Compose message</a> |  <a href="unread.php">Unread</a><br><hr>
<a href="1.php"><?php echo $siteTitle; ?>                             | Welcome to <?php echo $siteTitle; ?>!</a>
<hr>
