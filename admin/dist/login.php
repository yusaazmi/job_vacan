<?php
session_start();
include '../../koneksi.php';
if (isset($_POST['username']) AND isset($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];   
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
            echo "<script>alert('berhasil login');window.location='tabel_user.php'</script>";
        }
        else{
            echo "salah";
        }
    }
    else
    {
        echo "<script>alert('login gagal');window.location='index.php'</script>";
    }
}
?>