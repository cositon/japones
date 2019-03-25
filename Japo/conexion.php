<?php
    const SERVER = 'localhost';
    const USUARIO = 'root';
    const CLAVE = '1';
    const BASE = 'id5568929_japones';

    $link = mysqli_connect(SERVER, USUARIO, CLAVE, BASE);
    mysqli_query($link,"SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
    //mysqli_set_charset($link, 'utf8');
?>