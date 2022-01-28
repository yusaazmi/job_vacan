<?php
include 'koneksi.php';

$id = $_POST['id'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$foto = $_FILES['foto']['name'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];
$tentang = $_POST['tentang'];

$tmp = $_FILES['foto']['tmp_name'];

$gambar = date('dmYHis').$foto;

$path = 'img/'.$gambar;
if(move_uploaded_file($tmp , $path)){

    $query = "UPDATE user SET username = '$username', password = '$password', email='$email',nama ='$nama',no_hp = '$no_hp', foto = '$gambar',alamat ='$alamat',jurusan = '$jurusan',tentang = '$tentang' WHERE id_user = '$id'";
    $sql = mysqli_query($dbc,$query) or die(mysqli_error($dbc));
    
    if($sql)
    {
        echo "<script>alert('Berhasil Menambahkan!');window.location='profil.php?id=".$id."';</script>";
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