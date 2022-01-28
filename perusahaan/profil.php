<?php include 'header.php';?>
<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Tabel Profil <?php echo $_SESSION['nama'];?>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Foto/Logo</th>
                                                <th>Deskripsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $sql = "SELECT * FROM perusahaan WHERE id_perusahaan = $_SESSION[id_perusahaan]";
                                            $query = mysqli_query($dbc,$sql);
                                            while($perusahaan = mysqli_fetch_array($query))
                                            {
                                                echo "<tr>";
                                                echo "<td>".$perusahaan['nama']."</td>";
                                                echo "<td>".$perusahaan['username']."</td>";
                                                echo "<td><img src='../img/perusahaan/$perusahaan[foto]' width='100' height='100'></td>";
                                                echo "<td>".$perusahaan['deskripsi']."</td>";
                                                echo "<td>";
                                                echo "<a class='sidebar-link' href='edit_profil.php?id=".$perusahaan['id_perusahaan']."'><i class='fas fa-edit '></i></a>";
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