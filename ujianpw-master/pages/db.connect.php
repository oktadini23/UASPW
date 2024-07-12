<?php
    $server = '127.0.0.1'; //localhost
    $username = 'root'; //atau root
    $password = ''; //atau root
    $namadb = 'mahasiswa';

    mysqli_connect($server, $username, $password, $namadb);

    $k = new mysqli($server, $username, $password, $namadb);
    if($k->connect_errno)
    {
        echo "failed", $k->connect_error;
        exit();
    }