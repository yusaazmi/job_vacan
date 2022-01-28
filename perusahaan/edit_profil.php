<?php include 'header.php';
$sql = "SELECT * from perusahaan WHERE id_perusahaan =". $_GET['id']."";
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
                                <form action="simpan_edit_profil.php" method="POST" class="row g-3" enctype="multipart/form-data">
                                    <div class="col-md-3">
                                    <input type="hidden" name="id_perusahaan" id="id_perusahaan" value="<?php echo $_GET['id']; ?>">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" name="username" id="username" value="<?php echo $q1['username']; ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" id="password" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $q1['nama']; ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="foto" class="form-label">foto</label>
                                        <input type="file" name="foto" id="foto" class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="deskripsi" class="form-label">Deskripsi</label>
                                        <textarea class="form-control" id="deskripsi" name="deskripsi" value="<?php echo $q1['deskripsi']; ?>" rows="3"><?php echo $q1['deskripsi']; ?></textarea>
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