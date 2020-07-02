<!DOCTYPE html>
<html>
<body style="background-color:#cce6ff;">
</body>

<?php
try
{
  $db = new PDO('mysql:host=localhost;dbname=Robot_control;charset=utf8', 'root', '');
}
catch(PDOException $e)
{
  die('خطأ : ' . $e->getMessage());
}

$response = $db->prepare('SELECT * FROM Control_of_Robot');
$response->execute();
$Control_of_Robot = $response->fetchAll();
$response->CloseCursor();

foreach($Control_of_Robot as $Control_of_Robot) {
 echo $Control_of_Robot['Back'];

}
?>

<br><input style="background-color:white;width: 100px;" type="button" value="Home" onclick="window.location.href='http://192.168.64.2/practice/button.php'"></center></br>

</html>
