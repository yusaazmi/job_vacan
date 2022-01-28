<?php
include '../koneksi.php';
session_start();

$brosur = $_FILES['brosur']['name'];
$tmp = $_FILES['brosur']['tmp_name'];
$gambar = date('dmYHis').$brosur;
$path = '../img/lowongan/'.$gambar;
$posisi = $_POST['posisi'];
if(move_uploaded_file($tmp , $path)){

    $update = mysqli_query($dbc, "UPDATE lowongan 
    SET
    id_perusahaan='$_POST[id_perusahaan]', 
    brosur= '$gambar',
    posisi= '$_POST[posisi]'
    WHERE id_lowongan='$_POST[id_lowongan]'");
    
    if($update)
        {
            echo "<script>alert('Berhasil Update!');window.location='tabel_lowongan.php';</script>";
        }
    else
        {
            die(mysqli_error($dbc));
            echo "<script>alert('Gagal Update!');window.location='tabel_lowongan.php';</script>";
        }
}

?>