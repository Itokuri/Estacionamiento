<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "estacionamiento";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  $dni = $_GET['dni'];
  $sql = "DELETE FROM propietario WHERE nombre LIKE (SELECT nombre FROM propietario WHERE dni = $dni)";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "<script>window.location='/verVehiculos.php'</script>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>