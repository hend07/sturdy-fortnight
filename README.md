# sturdy-fortnight

<?php

include 'db_connnection.php';
$conn = OpenCon();
//echo "Connected Successfully";
CloseCon($conn);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 <style>
  .center {
   display: flex;
   justify-content: center;
   align-items: center;
   height: 200px;

 }
 body {
     background-color: #cce6ff;
 }
 </style>
 </head>
 <body>

 <center><h1>My Control Panel</h1></center>

 <center><input style="background-color:white;width: 100px;" type="button" value="Forwards" onclick="window.location.href='http://192.168.64.2/practice/F.php'"></center>
 <center><input style="background-color:white;width: 100px;" type="button" value="Left" onclick="window.location.href='http://192.168.64.2/practice/L.php'">
 <input style="background-color:Red;width: 100px;" type="button" value="STOP" onclick="window.location.href='http://192.168.64.2/practice/S.php'">
 <input style="background-color:white;width: 100px;" type="button" value="Right" onclick="window.location.href='http://192.168.64.2/practice/R.php'"></center>
 <center><input style="background-color:white;width: 100px;" type="button" value="Backwards" onclick="window.location.href='http://192.168.64.2/practice/B.php'"></center>
 </body>
 </html>
