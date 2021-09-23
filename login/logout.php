<?php
    session_start();
    unset($_SESSION['email']);
    echo 'Saliendo de la Página';

    header('location: index.php');


?>