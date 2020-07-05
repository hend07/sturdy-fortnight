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

<?php
   if (empty($_POST["L"])) {
     $Left = "";
   } else {
     $Left = test_input($_POST["L"]);
   }

   if (empty($_POST["R"])) {
     $Right = "";
   } else {
     $Right = test_input($_POST["R"]);
   }

   if (empty($_POST["F"])) {
     $Forwards = "";
   } else {
     $Forwards = test_input($_POST["F"]);
   }

   function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
   }
?>


<form action="send.php" method="post" >
<input style="background-color:white;width: 100px;" type="button" value="Forwards" onclick="picture1()"><input type="text" name="F" value="<?php echo $Forwards;?>">
    <br><br>
<input style="background-color:white;width: 100px;" type="button" value="Right" onclick="picture2()"><input type="text" name="R" value="<?php echo $Right;?>">
    <br><br>
    <input style="background-color:white;width: 100px;" type="button" value="Left" onclick="picture()"><input type="text" name="L" value="<?php echo $Left;?>">
  <br><br>

<br><input style="background-color:white;width: 100px;" type="reset" value="delete" ><br>
<br><input style="background-color:white;width: 100px;" type="submit" value="Save"><br>


</form>

<br><input style="background-color:white;width: 100px;" type="button" value="Show" onclick="window.location.href='http://192.168.64.2/RobotMap/SaveToData.php'"><br>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


    <script type="text/javascript">

        function picture(){
        var pic = "http://192.168.64.2/RobotMap/left.png"
        document.getElementById('left').src = pic.replace('90x90', '225x225');
        document.getElementById('left').style.display='block';

        }

        function picture1(){
        var pic = "http://192.168.64.2/RobotMap/forwards.png"
        document.getElementById('forward').src = pic.replace('90x90', '225x225');
        document.getElementById('forward').style.display='block';

        }

        function picture2(){
        var pic = "http://192.168.64.2/RobotMap/right.png "
        document.getElementById('right').src = pic.replace('90x90', '225x225');
        document.getElementById('right').style.display='block';


        }



    </script>


</head>

<body>

    <img id="left" src="left" width="50" height="60" style="display:none;" />
    <img id="right" src="right" width="50" height="60" style="display:none;" />
    <img id="forward" src="forward" width="50" height="60" style="display:none;" />



</body>

 </body>
 </html>
