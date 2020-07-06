<!DOCTYPE html>
<html>
<body style="background-color:#cce6ff;">
</body>

<?php
try
{
  $db = new PDO('mysql:host=localhost;dbname=Map;charset=utf8', 'root', '');
}
catch(PDOException $e)
{
  die('خطأ : ' . $e->getMessage());
}

$response = $db->prepare('SELECT * FROM mapdata');
$response->execute();
$mapdata  = $response->fetchAll();
$response->CloseCursor();



echo "<table border='1'>

<tr>

<th>Forwards</th>

<th>Right</th>

<th>Left</th>

</tr>";


foreach($mapdata  as $mapdata )
  {

  echo "<tr>";

  echo "<td>" . $mapdata['F'] . "</td>";

  echo "<td>" . $mapdata['R'] . "</td>";

  echo "<td>" . $mapdata['L'] . "</td>";

  echo "</tr>";

  }

echo "</table>";


?>
<br><input style="background-color:white;width: 100px;" type="button" value="Home" onclick="window.location.href='http://192.168.64.2/RobotMap/saveToDatabase.php'"><br>

</html>
