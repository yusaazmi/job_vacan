<?php include 'header.php';
?>
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
                                Tabel Pelamar
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nama Pelamar</th>
                                                <th>CV</th>
                                                <th>Ijazah</th>
                                                <th>Surat Lamaran</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <!-- "SELECT * FROM daftar_lowongan,lowongan,user WHERE daftar_lowongan.id_user = user.id_user AND lowongan.id_perusahaan = $_SESSION['id_perusahaan']"; -->
                                            <?php 
                                            $id_perusahaan = $_SESSION['id_perusahaan'];
                                            $sql = "SELECT * FROM daftar_lowongan,lowongan,user WHERE daftar_lowongan.id_lowongan = lowongan.id_lowongan AND lowongan.id_perusahaan = $id_perusahaan AND daftar_lowongan.id_user = user.id_user";
                                            $query = mysqli_query($dbc,$sql);
                                            while($pelamar = mysqli_fetch_array($query))
                                            {
                                                $status = "diterima ke tahap berikutnya";
                                                if($pelamar['status'] == $status){
                                                    echo "<tr>";
                                                    echo "<td>".$pelamar['nama']."</td>";
                                                    echo "<td><a href='download.php?filename=".$pelamar['cv']."'>".$pelamar['cv']."</a></td>";
                                                    echo "<td><a href='download.php?filename=".$pelamar['ijazah']."'>".$pelamar['ijazah']."</a></td>";
                                                    echo "<td>".$pelamar['surat_lamaran']."</td>";
                                                    echo "<form action='edit_pelamar.php' method='POST'>";
                                                    echo "<input type='hidden' value='$pelamar[id_daftar]'>";
                                                    echo "<input name='status' id='status' type='hidden' value='diterima ke tahap berikutnya'>";
                                                    echo "<td><button class='btn btn-success' type='submit' disabled>Pelamar Telah Diterima</button>";
                                                    echo "</form>";
                                                    echo "</td>";
                                                    echo "</tr>";
                                                }
                                                else{
                                                    echo "<tr>";
                                                    echo "<td>".$pelamar['nama']."</td>";
                                                    echo "<td><a href='download.php?filename=".$pelamar['cv']."'>".$pelamar['cv']."</a></td>";
                                                    echo "<td><a href='download.php?filename=".$pelamar['ijazah']."'>".$pelamar['ijazah']."</a></td>";
                                                    echo "<td>".$pelamar['surat_lamaran']."</td>";
                                                    echo "<form action='edit_pelamar.php' method='POST'>";
                                                    echo "<input type='hidden' id='id_daftar' name='id_daftar' value='$pelamar[id_daftar]'>";
                                                    echo "<input name='status' id='status' type='hidden' value='diterima ke tahap berikutnya'>";
                                                    echo "<td><button class='btn btn-success' onclick='myFunction()'>Terima Pelamar</button>";
                                                    echo "<script>";
                                                    function myFunction(){
                                                        confirm("Anda yakin menerima pelamar?");
                                                    }
                                                    echo "</script>";
                                                    echo "</form>";
                                                    echo "</td>";
                                                    echo "</tr>";
                                                    // function confirm
                                                }
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