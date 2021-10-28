<?php
    $usuario = "root";
    $pass = "";
    $dbname = "solicitudes";

    $fecha = "2021-10-21";
    $detalles = "Algo";
    $usuarioId = 1;
    $estadoId = 1;

    try {
        $pdoConexion = new PDO('mysql:host=localhost;dbname='.$dbname, $usuario, $pass);


        $query = $pdoConexion->prepare("INSERT into Solicitudes (Fecha, Detalles, UsuarioId, EstadoId)
                                VALUES(:fecha, :detalles, :usuarioId, :estadoId)");
        $query->bindParam(':fecha', $fecha);
        $query->bindParam(':detalles', $detalles);
        $query->bindParam(':usuarioId', $usuarioId);
        $query->bindParam(':estadoId', $estadoId);

        $query->execute();

/*         foreach($mbd->query('SELECT * from Solicitudes') as $fila) {
            print_r($fila);
        } 
 */



        $mbd = null;
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>