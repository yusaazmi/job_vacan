<?php include 'header.php';?>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Features Item Start ***** -->
    
    <!-- ***** Features Item End ***** -->
   
    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us" style="margin-top: 0">
        <div class="container-fluid">
            <div class="row">
                    <div class="contact-form section-bg" style="">
                        <form id="contact" action="simpan_perusahaan.php" method="POST" enctype="multipart/form-data">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="username" type="text" id="username" placeholder="Username*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="password" type="password" id="password" placeholder="Password*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="nama" type="text" id="nama" placeholder="Nama Perusahaan*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="alamat" type="alamat" id="alamat" placeholder="Alamat Perusahaan*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-3 col-sm-12">
                              <fieldset>
                                <input type="file" data-toggle="tooltip" class="form-control" name="foto" id="foto" placeholder="foto*" required>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="deskripsi" rows="6" id="deskripsi" placeholder="Deskripsi" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Daftar</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
<?php include 'footer.php';?>