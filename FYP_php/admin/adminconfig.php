<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
  <meta charset="utf-8">
  <title>Appointment</title>
  <link rel="stylesheet" href="../css/index.css">
</head>
    <body>



            <div class="centerBody">
            <div class="header">
            <?php include 'logout.html'; ?>
             </div>
             <?php include 'Menu.html'; ?>

             <center><h1> Admin Config</h1>
             <table border="1">
            <tr><th>Gold member:</th><td><input placeholder="%"></td></tr>
            <tr><th>Platinum member:</th><td><input placeholder="%"></td></tr>
            <tr><th>Diamond member:</th><td><input placeholder="%"></td></tr>
            <tr><th>Coupon:</th><td><input placeholder="e.g $50"></td></tr>
            <tr><th>Extension fee:</th><td><input placeholder="%"></td></tr>
            <tr><td colspan="2" align="center">
              <input type="submit" value="Submit">
              <input type="Reset" value="Reset">
            </td></tr>
          </table></center>
        <center><b><p>Here you can customize the discount/additonal charge of different type of members</p></b></center>
            </div>

    </body>
</html>
