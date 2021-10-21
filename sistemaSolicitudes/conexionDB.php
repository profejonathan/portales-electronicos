<?php
    $usuario = "root";
    $pass = "";
    $dbname = "solicitudes";
try {
    $mbd = new PDO('mysql:host=localhost;dbname='.$dbname, $usuario, $pass);
     foreach($mbd->query('SELECT * from Solicitudes') as $fila) {
        print_r($fila);
    } 
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>