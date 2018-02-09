
<html>
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <div class="centerBody">
<div class="header">
    <?php include 'login.html'; ?>
     </div>
     <?php include 'Menu.html'; ?>
     <h1>Register</h1>
     <form method="post" action="Register2.php">
       <table>
         <tr><td>usernmae:</td><td><input type="text" name="username"/></td></tr>
         <tr><td>password:</td><td><input type="text" name="password"/></td></tr>
         <tr><td>phone:</td><td><input type="text" name="phone"/></td></tr>
         <tr><td>email:</td><td><input type="text" name="email"/></td></tr>
         <tr><td>name:</td><td><input type="text" name="name"/></td></tr>
         <tr><td>birthday:</td><td><input type="date" name="birthday"/></td></tr>
         <tr><td>gender:</td><td><input type="radio" name="gender" value="M"/>M<input type="radio" name="gender" value="F"/>F</td>         </tr>
         <tr><td>  <input type="submit" name="submit" value="submit"></td><td>  <input type="reset" name="reset" value="reset"></td></tr>
       </table>


     </form>

   </div>
  </body>
</html>
