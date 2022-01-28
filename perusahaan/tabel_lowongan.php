<?php include 'header.php';

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
                                Tabel User
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID Lowongan</th>
                                                <th>Brosur</th>
                                                <th>Posisi</th>
                                                <th>Deskripsi Pekerjaan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $sql = "SELECT * FROM lowongan WHERE lowongan.id_perusahaan =". $_SESSION['id_perusahaan']."";
                                            $query = mysqli_query($dbc,$sql);
                                            while($lowongan = mysqli_fetch_array($query))
                                            {
                                                echo "<tr>";
                                                echo "<td>".$lowongan['id_lowongan']."</td>";
                                                echo "<td><img src='../img/lowongan/$lowongan[brosur]' width='100' height='100'></td>";
                                                echo "<td>".$lowongan['posisi']."</td>";
                                                echo "<td>".$lowongan['deskripsi_pekerjaan']."</td>";
                                                echo "<td><a class='sidebar-link' href='delete_lowongan.php?id=".$lowongan['id_lowongan']."'><i class='fas fa-delete'></i></a>";
                                                echo "<br>";
                                                echo "<a class='sidebar-link' href='edit_lowongan.php?id=".$lowongan['id_lowongan']."'><i class='fas fa-edit '></i></a>";  
                                                echo "</td>";
                                                echo "</tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<?php include 'footer.php';?>