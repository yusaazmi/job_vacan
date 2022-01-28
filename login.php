<?php
session_start();
include 'koneksi.php';
if (isset($_POST['username']) AND isset($_POST['password']))
{
    $username = $_POST['username'];
    $password = md5($_POST['password']);   
    $login = mysqli_query($dbc, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    $cek = mysqli_num_rows($login);
    if($cek > 0)
    {
        $data = mysqli_fetch_array($login);
        if($data['type_user']=="admin")
        {
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['type_user'] = "admin";
            echo "<script>alert('berhasil login');window.location='admin/index.php'</script>";
        }
        else if($data['type_user']=="user")
        {
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['nama'] = $data['nama'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['alamat'] = $data['alamat'];
            $_SESSION['no_hp'] = $data['no_hp'];
            $_SESSION['foto'] = $data['foto'];
            $_SESSION['jurusan'] = $data['jurusan'];
            $_SESSION['type_user'] = $data['type_user'];
            $_SESSION['tentang'] = $data['tentang'];
            echo "<script>alert('berhasil login');window.location='index.php?id=".$data['id_user']. "'</script>";
        }
    }
    else
    {
        echo "<script>alert('login gagal');window.location='index.php'</script>";
    }
}
?>