<?php
	$conexion=mysqli_connect('localhost','root','','estacionamiento_carrefour');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de vehiculos</title>
    <link rel="stylesheet" href="styles/list.css">
    <script src="https://kit.fontawesome.com/e563786b45.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Volver al inicio -->
    <a href="index.php"><i class="fa-solid fa-arrow-left fa-5x fa-beat" style="color: white; opacity: 40%; margin-left: 2vh; margin-top: 2vh; float: left;"></i></a>
    <!-- Volver al inicio -->

    <br><br><br>
    <!-- Tabla -->
    <script>
        $(window).on("load resize ", function() {
            var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
            $('.tbl-header').css({'padding-right':scrollWidth});
        }).resize();
    </script>

    <section>
        <h1>Lista de vehiculos registrados</h1>
        <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Edad</th>
                <th>Matricula</th>
                <th>Telefono</th>
            </tr>
            <?php 
		        $sql="SELECT * from propietario";
		        $result=mysqli_query($conexion,$sql);

		        while($mostrar=mysqli_fetch_array($result)){
		    ?>
            </thead>
        </table>
        </div>
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
            <tr>
                <td><?php echo $mostrar['nombre'] ?></td>
                <td><?php echo $mostrar['apellido'] ?></td>
                <td><?php echo $mostrar['dni'] ?></td>
                <td><?php echo $mostrar['edad'] ?></td>
                <td><?php echo $mostrar['patente'] ?></td>
                <td><?php echo $mostrar['telefono'] ?></td>
            </tr>
            <?php 
	            }
	        ?>
            </tbody>
        </table>
    </section>
    <!-- Tabla -->
</body>
</html>