<?php include 'header.php';?>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
        <?php
        if(isset($_GET['id'])){
          $a = $_GET['id'];

          $job = "SELECT * from lowongan,perusahaan WHERE lowongan.id_lowongan = $a AND lowongan.id_perusahaan = perusahaan.id_perusahaan";
          $query = mysqli_query($dbc, $job);
          $q1 = mysqli_fetch_array($query);
        }
        ?>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2><em><?php echo $q1['nama']; ?></em></h2>
                        <p><?php echo $q1['posisi']; ?></p>

                        <div class="main-button">
                          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#applyModal">Apply for this Job</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->
<!-- modal -->
<div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Lamaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="simpan_apply.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $q1['id_lowongan'];?>" name="id_lowongan">
        <input type="hidden" value="<?php echo $_SESSION['id_user'];?>" name="id_user">
          <div class="form-group">
            <label for="cv" class="col-form-label">CV</label>
            <input type="file" class="form-control" id="cv" name="cv">
          </div>
          <div class="form-group">
            <label for="ijazah" class="col-form-label">Ijazah/Transkrip nilai</label>
            <input type="file" class="form-control" id="ijazah" name="ijazah">
          </div>
          <div class="form-group">
            <label for="surat_lamaran" class="col-form-label">Surat lamaran</label>
            <textarea class="form-control" id="surat_lamaran" name="surat_lamaran"></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end modal -->
    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>

            <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="assets/images/job-image-1-1200x600.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/images/job-image-1-1200x600.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/images/job-image-1-1200x600.jpg" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div> -->
            
            <br>
            <br>

            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><i class="fa fa-cog"></i> Deskripsi Pekerjaan</a></li>
                  <li><a href='#tabs-2'><i class="fa fa-info-circle"></i> Tentang Perusahaan</a></li>
                  <!-- <li><a href='#tabs-3'><i class="fa fa-phone"></i> Contact Details</a></li> -->
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content' style="width: 100%;">
                  <article id='tabs-1'>
                    <h4>Deskripsi Pekerjaan</h4>

                    <p><?php echo $q1['deskripsi_pekerjaan']; ?></p>

                    <p></p>

                    <p></p>

                    <p></p>
                  </article>

                  <article id='tabs-2'>
                    <h4>Tentang Perusahaan</h4>

                    <p class="lead"> <i class="fa fa-map-marker"></i><?php echo $q1['alamat']; ?></p>
                    
                    <p><?php echo $q1['deskripsi']; ?></p> 
                    
                    <p></p>
                    
                    <p></p>
                   </article>

                  <!-- <article id='tabs-3'>
                    <h4>Contact Details</h4>

                    <div class="row">   
                        <div class="col-sm-6">
                            <label>Name</label>

                            <p>John Smith</p>
                        </div>
                        <div class="col-sm-6">
                            <label>Phone</label>

                            <p>123-456-789 </p>
                        </div>
                        <div class="col-sm-6">
                            <label>Mobile phone</label>
                            <p>456789123 </p>
                        </div>
                        <div class="col-sm-6">
                            <label>Email</label>
                            <p><a href="#">john@carsales.com</a></p>
                        </div>
                        <div class="col-sm-6">
                            <label>Website</label>
                            <p><a href="http://www.cannonguards.com/">http://www.cannonguards.com/</a></p>
                        </div>
                    </div>
                  </article> -->
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <?php include 'footer.php';?>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Enquiry</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-us">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter full name" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <div class="row">
                             <div class="col-md-6">
                                <fieldset>
                                  <input type="text" class="form-control" placeholder="From date" required="">
                                </fieldset>
                             </div>

                             <div class="col-md-6">
                                <fieldset>
                                  <input type="text" class="form-control" placeholder="To date" required="">
                                </fieldset>
                             </div>
                          </div>
                       </div>
                  </div>
              </form>
           </div>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Send Request</button>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>