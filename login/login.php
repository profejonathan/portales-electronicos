<?php
    session_start();
    
    if(  isset($_POST['email'])  && isset($_POST['pass']) ){
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        // Imaginemos que tenemos una query en la DB
        $emailDB = 'pepe@mail.com';
        $passDB = '1234';
        // -------------------------------------

        if ( $email == $emailDB && $pass == $passDB){
            $_SESSION['email'] = $email;
            header('location: principal.php');

        } else {
            echo 'Usuarios o Contraseña Invalidos';
            echo ' <a href="index.php">Regresar</a> ';
        }

    } else {
        echo 'Error en el logueo';
        echo ' <a href="index.php">Regresar</a> ';
    }



?>