<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            background-color: #cad2c5;
            font-family: Arial, sans-serif;
            margin: 20px;
            align-items: center;
        }

        .container {
            display: flex;
            justify-content: space-around;
        }

        .login-logo {
            text-align: center;
            margin-top: -20px;
            margin-bottom: 18px;
        }

        h1 {
            text-align: center;
        }

    </style>
</head>
<body>

<h1>Dashboard</h1> <br></br>
<div class="login-logo">
    <img src="https://i.ibb.co/FxLfs9h/Captura-de-pantalla-2023-10-28-213558.png" alt="Captura-de-pantalla-2023-10-28-213558" border="0" width="135px"></a>
</div>


<?php
    session_start();

    if (isset($_SESSION['nom_usuario'])) {
        $nom_usuario = $_SESSION['nom_usuario'];
        echo "<h2>Bienvenido/a, $nom_usuario</h2>";
    } else {
        echo "<h2>Bienvenido/a a Iris</h2>";
    }
?>
?>

</body>
</html>