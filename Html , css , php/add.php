<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar vehiculo</title>
    <link rel="stylesheet" href="styles/add.css">
    <script src="https://kit.fontawesome.com/e563786b45.js" crossorigin="anonymous"></script>
    <style>@import url('https://fonts.googleapis.com/css2?family=Antic+Slab&display=swap');</style>
</head>
<body>
    <!-- Volver al inicio -->
    <a href="index.php"><i class="fa-solid fa-arrow-left fa-5x fa-beat" style="color: white; opacity: 40%; margin-left: 2vh; margin-top: 2vh; float: left;"></i></a>
    <!-- Volver al inicio -->

    <!-- Formulario / Propietario -->
    <div class="formulario">
        <form action="php/conectarDB.php" method="get">
            <br><br>
            <label>Nombre</label><label style="margin-left: 22.5vh;">Edad</label>
            <br>
            <input type="text" name="nombreInput"><input type="number" name="edadInput" style="width: 5vh; text-align: center; margin-left: 5.2vh">
            <br><br>
            <label>Apellido</label>
            <br>
            <input type="text" name="apellidoInput">
            <br><br>
            <label>DNI</label>
            <br>
            <input type="number" name="dniInput">
            <br><br>
            <label>Matricula</label>
            <br>
            <input type="text" name="matriculaInput">
            <br><br>
            <label>Telefono</label>
            <br>
            <input type="text" name="telefonoInput">

            <br>
            <button type="submit" style="margin-top: 10vh; margin-left: 15vh"><i class="fa-solid fa-arrow-right fa-7x fa-bounce" style="color: white; opacity: 40%;"></i></button>
        </form>
    </div>
    <!-- Formulario / Propietario -->
</body>
</html>