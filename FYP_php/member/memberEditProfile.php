<html>
<head>
  <title>Smart Car Park System --- Edit your profile</title>
  <link rel="stylesheet" href="../css/index.css">
</head>

<body>
  <div class="centerBody">
  <div class="header">
  <?php include 'logout.html'; ?>
   </div>
   <?php include 'Menu.html'; ?>
  <div class="memInfo">
    <h1>Edit</h1>
    <fieldset>
  <form method="post" action="">
    Username:         <input type="text" name="uname" value="" placeholder=""></input> <br/>
    Password:         <input type="password" name="pwd"></input> <br/>
    Confirm Password: <input type="password" name="cPwd" ></input> <br/>
    Telphone:         <input type="text" name="tel" value="" placeholder=""></input> <br/>
    Email:            <input type="email" name="email" value=""></input> <br/>
    <input type="submit" name="submit" value="Submit" />
    <input type="reset" name="reset" value="Reset" /><p/>

    <div class="hint">
    <legend>
    *Only the input attributes will be changed.</legend>
    </div>
    </div>
  </form>
  </fieldset>
  </div>
</body>
</html>
