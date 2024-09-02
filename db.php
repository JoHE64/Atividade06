<?php
    $severname = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "crud_system";

    $conn = new mysqli($severname, $username, $password, $dbname);

    if($conn -> connect_error){
        die("Conexão Falhou". $conn -> connect_error);
    }

?>