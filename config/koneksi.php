<?php
    
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $db_name = 'db_tes';
    $koneksi = mysqli_connect($server,$user,$password,$db_name);

    if($koneksi){
        //echo "berhasil";
    } else{
        echo "gagal";
    }


?>
