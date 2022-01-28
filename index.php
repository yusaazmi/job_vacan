<?php include 'header.php'; ?>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Selamat Datang</h6>
                <h2>Cari Pekerjaan <em>Sekarang</em></h2>
                <div class="main-button">
                    <a href="job.php">Lihat Semua Pekerjaan</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

   <!-- ***** Cars Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
            <?php
            $sql = "SELECT * FROM lowongan,perusahaan WHERE lowongan.id_perusahaan = perusahaan.id_perusahaan";
            $query = mysqli_query($dbc,$sql);
            while($q1 = mysqli_fetch_array($query)){
                echo "<div class='col-lg-4'>";
                    echo "<div class='trainer-item'>";
                        echo "<div class='image-thumb'>";
                            echo "<img src='img/lowongan/$q1[brosur]' style='width: 320px; height:200px;' alt=''>";
                        echo "</div>";
                        echo "<div class='down-content'>";
                            echo "<span> <sup></sup></span>";

                            echo "<h4>".$q1['nama']."</h4>";

                            echo "<p>".$q1['posisi']."</p>";
                            echo $q1['posisi'];
                            echo "<ul class='social-icons'>";
                                echo "<li><a href='job_detail.php?id=".$q1['id_lowongan']."'>+ View More</a></li>";
                            echo "</ul>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            }
            ?>
            </div>

            <br>

            <div class="main-button text-center">
                <a href="jobs.php">View Jobs</a>
            </div>
        </div>
    </section>
    <!-- ***** Cars Ends ***** -->

    
    
    <!-- ***** Footer Start ***** -->
<?php include 'footer.php';?>