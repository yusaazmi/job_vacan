<?php include 'header.php';?>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Features Item Start ***** -->
    
    <!-- ***** Features Item End ***** -->
   
    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us" style="margin-top: 0">
        <div class="container-fluid">
            <div class="row">
                    <div class="contact-form section-bg" style="">
                        <form id="contact" action="simpan_daftar.php" method="POST" enctype="multipart/form-data">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="type_user" type="hidden" value="user" id="type_user" required="">
                                <input name="username" type="text" id="username" placeholder="Username*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="password" type="password" id="password" placeholder="Password*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="nama" type="text" id="nama" placeholder="Nama*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="no_hp" type="text" id="no_hp" placeholder="Nomor HP*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-3 col-sm-12">
                            <span>Foto</span>
                              <fieldset>
                                <input type="file" data-toggle="tooltip" class="form-control" name="foto" id="foto" required>
                              </fieldset>
                            </div>
                            <div class="col-md-3 col-sm-12">
                            <span>Jurusan</span>
                              <fieldset>
                                <input type="text" data-toggle="tooltip" class="form-control" name="jurusan" id="jurusan" required>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="alamat" rows="6" id="alamat" placeholder="Alamat" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="tentang" rows="6" id="tentang" placeholder="Tentang Saya" required=""></textarea>
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