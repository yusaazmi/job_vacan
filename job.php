<?php include 'header.php';?>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Semua <em>Pekerjaan</em></h2>
                        <p>Pekerjaan yang tersedia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>

            <div class="row">

                <div class="col-lg-12">
                    <div class="row">
                    <?php 
                        $sql = "SELECT * from lowongan,perusahaan WHERE lowongan.id_perusahaan = perusahaan.id_perusahaan";
                        $query = mysqli_query($dbc,$sql);
                        while($loker = mysqli_fetch_array($query)){
                            echo "<div class='col-md-4'>";
                                echo "<div class='trainer-item'>";
                                    echo "<div class='image-thumb'>";
                                        echo "<img src='img/perusahaan/$loker[foto]' style='width: 320px; height:200px;' alt=''>";
                                    echo "</div>";
                                    echo "<div class='down-content'>";
                                        // echo "<span> <sup>$</sup>70 000 </span>";
    
                                        echo "<h4>".$loker['nama']."</h4>";
    
                                        echo "<p>".$loker['posisi']."</p>";
    
                                        echo "<ul class='social-icons'>";
                                            echo "<li><a href='job_detail.php?id=".$loker['id_lowongan']."'>+ View More</a></li>";
                                        echo "</ul>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                        }
                    ?>
                    </div>
                </div>
            </div>

            <br>
                
            <nav>
              <ul class="pagination pagination-lg justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>

        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->

    
    <!-- ***** Footer Start ***** -->
<?php include 'footer.php';?>