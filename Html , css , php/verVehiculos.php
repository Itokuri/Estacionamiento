<?php
	$conexion=mysqli_connect('localhost','root','','estacionamiento');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista vehiculos</title>
    <link rel="stylesheet" href="styles/lista.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@100&display=swap" rel="stylesheet">
</head>
<body style="background-color: #e8eddf;">
    <!-- Menu lateral -->
    <div class="menuLateral">
        <a href="index.php" class="botonLateral" style="margin-top: 300px;" data-bs-toggle="tooltip" data-bs-placement="right" title="Inicio">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="White" class="bi bi-house-fill" viewBox="0 0 16 16" style="margin-top: 300px;">
            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
            </svg>
        </a>
        <a href="agregarVehiculo.php" class="botonLateral" style="margin-top: 40px;" data-bs-toggle="tooltip" data-bs-placement="right" title="Agregar vehiculo">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-plus-circle-fill" viewBox="0 0 16 16" style="margin-top: 40px;">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
            </svg>
        </a>
    </div>
    <!-- Final del menu lateral -->

    <br><br><br>
    <div class="table-title">
        <h3 style="margin-left: 125px; color: #242423; font-family: Alegreya Sans SC; font-weight: bold;">Lista de vehiculos registrados</h3>
    </div>
    <table class="table-fill">
        <thead>
        <tr>
        <th class="text-left">Nombre</th>
        <th class="text-left">Apellido</th>
        <th class="text-left">DNI</th>
        <th class="text-left">Edad</th>
        <th class="text-left">Matricula</th>
        <th class="text-left">Telefono</th>
        <th></th>
        </tr>
        <?php 
		    $sql="SELECT * from propietario";
		    $result=mysqli_query($conexion,$sql);

		    while($mostrar=mysqli_fetch_array($result)){
		?>
        </thead>
        <tbody class="table-hover">
        <tr>
        <td class="text-left" style="text-align: center;"><?php echo $mostrar['nombre'] ?></td>
        <td class="text-left" style="text-align: center;"><?php echo $mostrar['apellido'] ?></td>
        <td class="text-left" style="text-align: center;"><?php echo $mostrar['dni'] ?></td>
        <td class="text-left" style="text-align: center;"><?php echo $mostrar['edad'] ?></td>
        <td class="text-left" style="text-align: center;"><?php echo $mostrar['matricula'] ?></td>
        <td class="text-left" style="text-align: center;"><?php echo $mostrar['telefono'] ?></td>
        <td class="text-left"><a class="btn btn-danger" href="borrar.php?dni=<?php echo $mostrar['dni'];?>">Borrar</a></td> 
        </tr>
        <?php 
	        }
	    ?>
        </tbody>
    </table>
</body>
</html>