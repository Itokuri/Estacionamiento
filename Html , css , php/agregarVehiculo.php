<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar vehiculo</title>
    <link rel="stylesheet" href="styles/CSS.css">
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
        <a href="verVehiculos.php" class="botonLateral" style="margin-top: 40px;" data-bs-toggle="tooltip" data-bs-placement="right" title="Ver lista de vehiculos">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-list" viewBox="0 0 16 16" style="margin-top: 40px;" >
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </a>
    </div>
    <!-- Final del menu lateral -->

    <!-- Cuestionario -->
    <div class="cuestionario">
        <form action="conectarDB.php" method="get">
            <label style="margin-top: 50px;">Nombre</label>
            <label style="margin-left: 200px;">DNI</label>
            <br>
            <input type="text" name="nombreInput" style="margin-left: 30px; font-family: Alegreya Sans SC; font-weight: bolder;">
            <input type="number" name="dniInput" style="width: 150px; font-family: Alegreya Sans SC; font-weight: bolder;">
            <br><br>
            <label>Apellido</label>
            <label style="margin-left: 185px;">Edad</label>
            <br>
            <input type="text" name="apellidoInput" style="margin-left: 30px; font-family: Alegreya Sans SC; font-weight: bolder;">
            <input type="number" name="edadInput" style="width: 50px; margin-left: 45px; text-align: center; font-family: Alegreya Sans SC; font-weight: bolder;">
            <br><br>
            <label>Matricula</label>
            <br>
            <input type="text" name="matriculaInput" style="margin-left: 30px; font-family: Alegreya Sans SC; font-weight: bolder;">
            <br><br>
            <label>Telefono</label>
            <br>
            <input type="text" name="telefonoInput" style="margin-left: 30px; font-family: Alegreya Sans SC; font-weight: bolder;">

            <br><br><br><br><br><br><br><br><br>
            <button type="submit" class="btn btn-light" style="font-family: Alegreya Sans SC; font-weight: bold; border-color: black; margin-left: 165px;" onclick="mostrarNotificacion()">Ingresar</button>
        </form>
    </div>
</body>
</html>