<!DOCTYPE html>
<html>
<body style="background-color:#cce6ff;">
</body>


<?php
// إستقبال البيانات القادمة من الحقول في صفحة myform.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$Forwards = $_POST["F"];
$Right = $_POST["R"];
$Left = $_POST["L"];
}

// معلومات الإتصال بقاعدة البيانات

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Map";

// إنشاء الإتصال
$conn = mysqli_connect($servername, $username, $password, $dbname);
// إختبار الإتصال
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO mapdata (F, R, L) VALUES ('$Forwards', '$Right', '$Left')";

if (mysqli_query($conn, $sql)) {
echo "تم إرسال معلومات بنجاح";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

<br><input style="background-color:white;width: 100px;" type="button" value="Home" onclick="window.location.href='http://192.168.64.2/RobotMap/saveToDatabase.php'"><br>

</html>
