<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$nama = $_POST['nama'];
$foto = $_FILES['foto']['name'];
$alamat = $_POST['alamat'];
$deskripsi = $_POST['deskripsi'];

$tmp = $_FILES['foto']['tmp_name'];

$gambar = date('dmYHis').$foto;

$path = 'img/perusahaan/'.$gambar;
if(move_uploaded_file($tmp , $path)){

    $query = "INSERT INTO perusahaan (username,password,nama,foto,alamat,deskripsi) values ('$username','$password','$nama','$gambar','$alamat','$deskripsi')";
    mysqli_query($dbc,$query) or die(mysqli_error($dbc));
    
    if($query)
    {
        echo "<script>alert('Berhasil Menambahkan!');window.location='index.php';</script>";
    }
    else
    {
        echo "gagal";
    }
}
else{
     echo "<script>alert('Gagal Mendaftar, Silahkan coba lagi!');window.location='daftar_user.php';</script>";
}
?>