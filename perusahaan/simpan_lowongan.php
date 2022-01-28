<?php
include '../koneksi.php';

$id_perusahaan = $_POST['id_perusahaan'];
$brosur = $_FILES['brosur']['name'];
$posisi = $_POST['posisi'];
$deskripsi_pekerjaan = $_POST['deskripsi_pekerjaan'];

$tmp = $_FILES['brosur']['tmp_name'];

$gambar = date('dmYHis').$brosur;

$path = '../img/lowongan/'.$gambar;
if(move_uploaded_file($tmp , $path)){

    $query = "INSERT INTO lowongan (id_perusahaan,brosur,posisi,deskripsi_pekerjaan) values ('$id_perusahaan','$gambar','$posisi','$deskripsi_pekerjaan')";
    mysqli_query($dbc,$query) or die(mysqli_error($dbc));
    
    if($query)
    {
        echo "<script>alert('Berhasil Menambahkan!');window.location='tabel_lowongan.php'</script>";
    }
    else
    {
        echo "gagal";
    }
}
else{
    //  echo "<script>alert('Gagal Mendaftar, Silahkan coba lagi!');window.location='tambah_lowongan.php';</script>";
}
?>