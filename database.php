<?php

    require __DIR__ . '/vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    session_start();



    $host = $_ENV['HOST_DB'];
    $user =  'root';
    $password = '';
    $database = $_ENV['DATABASE'];

    $conexion = mysqli_connect(
        $host,
        $user,
        $password,
        $database
    );

    /*if(isset($conexion)){
        echo 'Todo listo';
    }*/
?>