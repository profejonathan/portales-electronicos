<?php
    session_start();
    if ( !isset( $_SESSION['email']) ){
        header('location: privado.html');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Privada</title>
</head>
<body>
    <h1>Panel Principal</h1>
    <a href="logout.php">Salir</a>
</body>
</html>