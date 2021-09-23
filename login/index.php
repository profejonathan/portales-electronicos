<?php
    session_start();
    if ( isset( $_SESSION['email']) ){
        $email = $_SESSION['email'];
        $visible = 'none';

    } else {
        $email = 'NO Logueado';
        $visible = 'block';
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <main class="container">
        <div class="row mt-4">
            <div class="col"></div>
            <div class="col">

                <form class="card p-4" action="login.php" method="POST" style="display: <?php echo $visible; ?>">
                <h2>Formulario</h2>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" class="form-control" type="email">
                    </div>
                    <div class="form-group mt-2">

                        <label for="password">Contraseña</label>
                        <input name="pass" class="form-control" type="password">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary mt-3">Ingresar</button>
                    </div>
                </form>

            </div>
            <div class="col">
                <ul>
                    <li><?php echo $email; ?></li>
                    <li><a href="logout.php">Salir</a></li>
                </ul>
            </div>
        </div>
    </main>

</body>
</html>



