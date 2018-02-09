<?php


$username=$_POST["username"];
if ($username=="admin") {
  header('Location: admin/index.php');
    exit;
}else{
  header('Location: member/index.php');
    exit;

}

 ?>
