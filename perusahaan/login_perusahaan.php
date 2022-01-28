<?php
session_start();
include '../koneksi.php';
if (isset($_POST['username']) AND isset($_POST['password']))
{
    $username = $_POST['username'];
    $password = md5($_POST['password']);   
    $login = mysqli_query($dbc, "SELECT * FROM perusahaan WHERE username='$username' AND password='$password'");
    $cek = mysqli_num_rows($login);
    if($cek > 0)
    {
        $data = mysqli_fetch_array($login);
            $_SESSION['id_perusahaan'] = $data['id_perusahaan'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['nama'] = $data['nama'];
            $_SESSION['foto'] = $data['foto'];
            $_SESSION['deskripsi'] = $data['deskripsi'];
            echo "<script>alert('berhasil login');window.location='tabel_lowongan.php?id=".$data['id_perusahaan']. "'</script>";
    }
    else
    {
        echo "<script>alert('login gagal');window.location='login.php'</script>";
    }
}
?>