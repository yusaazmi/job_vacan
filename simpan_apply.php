<?php
include 'koneksi.php';

$id_lowongan = $_POST['id_lowongan'];
$id_user = $_POST['id_user'];
$cv = $_FILES['cv']['name'];
$ijazah = $_FILES['ijazah']['name'];
$surat_lamaran = $_POST['surat_lamaran'];
$tmp = $_FILES['cv']['tmp_name'];
$tmp1 = $_FILES['ijazah']['tmp_name'];

$gambar1 = date('dmYHis').$cv;
$gambar2 = date('dmYHis').$ijazah;

$path = 'img/'.$gambar1;
$path2 = 'img/'.$gambar2;
if(move_uploaded_file($tmp, $path)){
    if(move_uploaded_file($tmp1, $path2)){
    $query = "INSERT INTO daftar_lowongan (id_lowongan,id_user,cv,ijazah,surat_lamaran) values ('$id_lowongan','$id_user','$gambar1','$gambar2','$surat_lamaran')";
    mysqli_query($dbc,$query) or die(mysqli_error($dbc));
    if($query)
    {
        echo "<script>alert('Berhasil Menambahkan!');window.location='job.php';</script>";
    }
    else
    {
        echo "gagal";
    }
}
}
else{
    //  echo "<script>alert('Gagal Mendaftar, Silahkan coba lagi!');window.location='daftar_user.php';</script>";
}
?>