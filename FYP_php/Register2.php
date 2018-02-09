<?php
mysql_connect('localhost', 'root', 'usbw');
mysql_select_db("fyp");
mysql_query("INSERT INTO member
VALUES (".$_POST['username'].", ".$_POST['password'].",".$_POST['phone'].",".$_POST['email'].",
".$_POST['name'].",'".$_POST['birthday']."','".$_POST['gender']."')");

header('Location: index.php');
?>
