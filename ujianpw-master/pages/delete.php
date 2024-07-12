<?php
    include("dbconnect.php");

    // $jenis = $_GET['jenis'];
    // $page = $_GET['page'];
    
    // if($jenis == 'datamhs')
    // {
        $id = $_GET['urut'];
        $delete = $k->query("DELETE FROM admin WHERE id=".$id);
    // }

    if($delete)
    {
        header("Location: datamhs?page=pages".$page);
    }
    else
    {
        echo "hapus data gagal";
    }