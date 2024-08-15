<?php

$conDB = new mysqli("localhost", "root", "", "teste");

if ($conDB->connect_error) {
    die("Erro ao se conectar com banco de dados" . $conDB->connect_error);
}

$query = "SELECT * FROM usuario";
$result = $conDB->query($query);

if ($result->num_rows > 0) {
    $usuarios = array();

    while ($row = $result->fetch_assoc()) {
        $usuarios[] = $row;
    }
    return $usuarios;
} else {
    return [];
}


$conDB->close();
