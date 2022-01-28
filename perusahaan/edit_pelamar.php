<?php
include '../koneksi.php';
session_start();

$id_daftar = $_POST['id_daftar'];
$status = $_POST['status'];

    $update = mysqli_query($dbc, "UPDATE daftar_lowongan 
    SET
    status= '$status'
    WHERE id_daftar='$_POST[id_daftar]'");
    
    if($update)
        {
            echo "<script>alert('Berhasil Update!');window.location='pelamar.php';</script>";
        }
    else
        {
            die(mysqli_error($dbc));
            echo "<script>alert('Gagal Update!');window.location='pelamar.php';</script>";
        }

?>