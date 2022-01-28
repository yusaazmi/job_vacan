<?php
include 'koneksi.php';

$type_user = $_POST['type_user'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$foto = $_FILES['foto']['name'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$tentang = $_POST['tentang'];
$tmp = $_FILES['foto']['tmp_name'];

$gambar = date('dmYHis').$foto;

$path = 'img/'.$gambar;
if(move_uploaded_file($tmp , $path)){

    $query = "INSERT INTO user (type_user,username,password,nama,email,no_hp,alamat,foto,jurusan,tentang) values ('$type_user','$username','$password','$nama','$email','$no_hp','$alamat','$gambar','$jurusan','$tentang')";
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