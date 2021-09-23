<?php
    require_once('class/Administador.php');
    require_once('class/Operador.php');
    require_once('class/Persona.php');
    require_once('class/Celular.php');
    require_once('class/Contacto.php');

    
    echo 'Programación Orientada a Objetos </br>';

    $c1 = new Contacto();
    $c1->setNumero(1020);
    $c1->setNombre('Juan');


    $c2 = new Contacto();
    $c2->setNumero(2050);
    $c2->setNombre('Nadia');

    //print_r($c1);
    //print_r($c2);

    echo 'El número de ' . $c1->getNombre() . ' es ' . $c1->getNumero();
    echo '<br>';

    $tel1 =  new Celular();
    $tel1->numero = 9010;

    $tel1->setContacto($c1);
    $tel1->setContacto($c2);

    echo '<br>';
    $tel1->getContatos();

?>