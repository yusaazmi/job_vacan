<?php
include '../../koneksi.php';
if( isset($_GET['id']) ){

    // ambil id dari query string
    $loker= $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM lowongan WHERE id_lowongan=$loker";
    $query = mysqli_query($dbc, $sql);
    
    // apakah query hapus berhasil?
    if( $query ){
        echo "<script>alert('Berhasil Hapus!');window.location='tabel_lowongan.php';</script>";
        
    } 
    else {
        die("gagal menghapus...");
    }
} 

 else {
    die("akses dilarang...");
 }


?>