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
                                Tabel User
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID User</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Nomor HP</th>
                                                <th>Alamat</th>
                                                <th>Foto</th>
                                                <th>Jurusan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $sql = "SELECT * FROM user";
                                            $query = mysqli_query($dbc,$sql);
                                            while($user = mysqli_fetch_array($query))
                                            {
                                                echo "<tr>";
                                                echo "<td>".$user['id_user']."</td>";
                                                echo "<td>".$user['username']."</td>";
                                                echo "<td>".$user['password']."</td>";
                                                echo "<td>".$user['nama']."</td>";
                                                echo "<td>".$user['email']."</td>";
                                                echo "<td>".$user['no_hp']."</td>";
                                                echo "<td>".$user['alamat']."</td>";
                                                echo "<td><img src='../../img/$user[foto]' width='100' height='100'></td>";
                                                echo "<td>".$user['jurusan']."</td>";
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