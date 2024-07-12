<?php
    // if($_SESSION['is_logged_in'] != TRUE)
    // {
    //     header("Location: forms.php");
    // }
    include("dbconnect.php");

    
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $program_studi = $_POST['program_studi'];
    $id = $_POST['userid'];

    $edit = $k->query("UPDATE admin SET nim='".$nim."', nama='".$nama."', jenis_kelamin='".$jenis_kelamin."', alamat='".$alamat."', program_studi='".$program_studi."' WHERE id='".$id."'");

    if($edit)
    {
       header("Location: index.php?page=datamhs".$page);
    }
    else
    {
        echo "edit data gagal";
    }