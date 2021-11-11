<?php
    $request = $_SERVER['REQUEST_URI'];
    echo('Ruta ' . $request);
    echo('<br>');
    // controlladro / Methodo / Parametros
    $request = explode('/', $request);
  
    $controller = $request[2];
    $method = $request[3];
    $params = $request[4];

   /*  echo('Controller: ' . $controller);
    echo('<br>');
    echo('Method: ' . $method);
    echo('<br>');
    echo('Params: ' . $params);
    echo('<br>');
 */
    if ( $controller == 'carrera'){
        require_once 'controllers/CarreraController.php';
        $controllerCarrera = new CarreraController();
 
        if ( $method == 'listar'){
            $controllerCarrera->listar();
        }

        if ( $method == 'index'){
            $controllerCarrera->index();
        }
    }

?>