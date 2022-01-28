<?php include 'header.php';
$sql = "SELECT * from lowongan WHERE id_lowongan =". $_GET['id']."";
$query = mysqli_query($dbc,$sql);
$q1 = mysqli_fetch_array($query);
?>
<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <a href="tambah_lowongan.php?id=<?php echo $_SESSION['id_perusahaan']; ?>">Tambah Lowongan</a>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Edit Tabel
                            </div>
                            <div class="card-body">
                                <form action="simpan_edit_lowongan.php" method="POST" class="row g-3" enctype="multipart/form-data">
                                <input type="hidden" name="id_lowongan" value="<?php echo $_GET['id']; ?>">
                                <input type="hidden" name="id_perusahaan" value="<?php echo $q1['id_perusahaan']; ?>">
                                    <div class="col-md-3">
                                        <label for="posisi" class="form-label">Posisi</label>
                                        <input type="text" class="form-control" name="posisi" id="posisi" value="<?php echo $q1['posisi']; ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputPassword4" class="form-label">Brosur Lowongan</label>
                                        <input type="file" name="brosur" id="brosur" class="form-control" id="inputPassword4">
                                    </div>
                                    <div class="col-md-8">
                                        <label for="deskripsi_pekerjaan" class="form-label">Deskripsi Pekerjaan</label>
                                        <textarea class="form-control" id="deskripsi_pekerjaan" name="deskripsi_pekerjaan" value="<?php echo $q1['deskripsi_pekerjaan']; ?>" rows="3"><?php echo $q1['deskripsi_pekerjaan']; ?></textarea>
                                    </div>
                                    <br>                    
                                    <div class="col-12 py-2">
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>            
<?php include 'footer.php';?>