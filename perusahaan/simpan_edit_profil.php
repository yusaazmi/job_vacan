<?php
include '../koneksi.php';
session_start();

if(file_exists($_FILES['foto']['size'] != 0)){

    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $gambar = date('dmYHis').$foto;
    $password = md5($_POST['password']);
    $path = '../img/perusahaan/'.$gambar;
    
    if(move_uploaded_file($tmp , $path)){
        $update = mysqli_query($dbc, "UPDATE perusahaan 
    SET
    username='$_POST[username]', 
    password= '$password',
    nama='$_POST[nama]',
    foto= '$gambar',
    deskripsi= '$_POST[deskripsi]'
    WHERE id_perusahaan='$_POST[id_perusahaan]'");
    
    if($update)
    {
        echo "<script>alert('Berhasil Update!');window.location='profil.php';</script>";
    }
    else
    {
        die(mysqli_error($dbc));
        echo "<script>alert('Gagal Update!');window.location='profil.php';</script>";
    }
}
}
else{
    $update = mysqli_query($dbc, "UPDATE perusahaan 
    SET
    username='$_POST[username]', 
    nama='$_POST[nama]',
    deskripsi= '$_POST[deskripsi]'
    WHERE id_perusahaan='$_POST[id_perusahaan]'");
    
    if($update)
    {
        echo "<script>alert('Berhasil Update!');window.location='profil.php';</script>";
    }
    else
    {
        die(mysqli_error($dbc));
        echo "<script>alert('Gagal Update!');window.location='profil.php';</script>";
    }
}

?>