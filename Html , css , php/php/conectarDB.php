<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "estacionamiento_carrefour";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$dni = $_GET["dniInput"];
$nombre = $_GET["nombreInput"];
$apellido = $_GET["apellidoInput"];
$edad = $_GET["edadInput"];
$matricula = $_GET["matriculaInput"];
$telefono = $_GET["telefonoInput"];

$sql = "INSERT INTO propietario (dni, nombre, apellido, edad, patente, telefono)
VALUES ('$dni', '$nombre', '$apellido', '$edad', '$matricula', '$telefono')";

if (mysqli_query($conn, $sql)) {
  echo "<script>alert('¡Se ha ingresado el vehiculo con éxito!'); window.location='/add.php'</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>