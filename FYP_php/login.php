<?php


$username=$_POST["username"];
if ($username=="admin") {
  header('Location: admin/index.php');
    exit;
}else{
  header('Location: member/index.php');
    exit;

}
// the code for auto log out, need adjustment
if(time() - $_SESSION['timestamp'] > 900) { //subtract new timestamp from the old one
    echo"<script>alert('15 Minutes over!');</script>";
    unset($_SESSION['username'], $_SESSION['password'], $_SESSION['timestamp']);
    $_SESSION['logged_in'] = false;
    header("Location: " . index.php); //redirect to index.php
    exit;
} else {
    $_SESSION['timestamp'] = time(); //set new timestamp
}

 ?>
