<html>
<head>
  <meta charset="utf-8">
  <title>Function</title>
  <link rel="stylesheet" href="../css/index.css">
  <style>
    table {width: 50%;}
    tr {text-align: center;}
    button{padding: 16px 32px;}
    
  </style>
    <script>
    function myFunction() {
        alert("Status is saved");
    }
    </script>
</head>
    <body>



            <div class="centerBody">
            <div class="header">
            <?php include 'logout.html'; ?>
             </div>
             <?php include 'Menu.html'; ?>
            <center>
                <?php
                echo "<table><tr><td>";
                echo "<table><tr><th>position</th><th>status</th> ";
                for ($x = 0; $x <= 20; $x++) {
                    echo "<tr><td> ";
                    echo $x+1 ;
                    echo "</td> <td> <select>
                          <option value=","0",">Free</option>
                          <option value=","1",">Booked</option>
                          <option value=","2",">Occupied</option>
                          <option value=","3",">Unavailable</option>
                          </select> </td> </tr>";
                }
                echo "</table></td> <td>";
                echo "<table><tr><th>position</th><th>status</th> ";
                for ($x = 0; $x <= 20; $x++) {
                    echo "<tr><td> ";
                    echo $x+21 ;
                    echo "</td> <td> <select>
                          <option value=","0",">Free</option>
                          <option value=","1",">Booked</option>
                          <option value=","2",">Occupied</option>
                          <option value=","3",">Unavailable</option>
                          </select> </td> </tr>";
                }
                echo "</table>";
                echo "</table><br><div><button Onclick='myFunction()'>Save</button>";
                ?>
            </center>
            </div>
    </body>
</html>
