<?php include 'header.php';?>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Features Item Start ***** -->
    
    <!-- ***** Features Item End ***** -->
   
    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section section-bg" id="call-to-action" style="">
    <section class="section" id="contact-us" style="margin-top: 1">
        <div class="container-fluid">
            <div class="row">
                  <div class="contact-form section-bg" style="">
                      <form id="contact" action="login.php" method="POST">
                        <h2>Login</h2>
                        <br>
                        <br>
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="username" type="text" id="username" placeholder="Username*" required="">
                            </fieldset>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="password" type="password" id="password" placeholder="Password" required="">
                            </fieldset>
                          </div>
                        </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-button">Login</button>
                            </fieldset>
                            <br>
                              <a href="daftar_user.php">daftar</a>
                              <br>
                              <a href="daftar_perusahaan.php">daftar sbg Perusahaan</a>
                              <br>
                              <a href="perusahaan/login.php">Login Perusahaan</a>
                          </div>
                        </div>
                      </form>              
                  </div>
            </div>
        </div>
    </section>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
<?php include 'footer.php';?>