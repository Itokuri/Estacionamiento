<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "estacionamiento";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$nombreInput = $_GET["nombreInput"];
$apellidoInput = $_GET["apellidoInput"];
$dniInput = $_GET["dniInput"];
$edadInput = $_GET["edadInput"];
$matriculaInput = $_GET["matriculaInput"];
$telefonoInput = $_GET["telefonoInput"];

$sql = "INSERT INTO propietario (nombre, apellido, dni, edad, matricula, telefono)
VALUES ('$nombreInput', '$apellidoInput', '$dniInput', '$edadInput', '$matriculaInput', '$telefonoInput')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('¡Se ha ingresado el vehiculo con éxito!'); window.location='/agregarVehiculo.php'</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>