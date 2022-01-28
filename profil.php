<?php include 'header.php';

$query = "SELECT * from user where id_user = '$_GET[id]'";
$sql = mysqli_query($dbc,$query);
$data = mysqli_fetch_array($sql);
?>
    <!-- ***** Header Area End ***** -->

    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2><em>Your Profile</em></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <br>
            <br>
            <br>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <section class='tabs-content'>
                  <article id='tabs-1' >
                    <?php echo "<img src='img/".$data['foto']."' style='width:300px; height:300px;' alt=''>";
                    echo "<p>".$data['alamat']."</p>";
                    ?>
                  </article>
                </section>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content' id="lil">
                  <article id='tabs-1'>
                  <div class="row">
                    <div class="col-lg-8">
                      <p><h5><?php echo $data['nama']; ?></h5></p>
                    </div>
                    <div class="col-lg-4">
                      <button class="btn btn-secondary btn-sm" style="font-size=8px" onclick="addClass()">edit profile</button>
                    </div>
                  </div>
                  <p>Email : <?php echo $data['email']; ?></p>
                  <p>Telp : <?php echo $data['no_hp']; ?></p>

                  <h5>Tentang Saya</h5>
                  <br>
                  <p><?php echo $data['tentang']; ?></p>
                  </article>
                </section>
                <section class='tabs-content d-none' id="lul">
                  <article id='tabs-1'>
                  <form action="simpan_edit_profile.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-6">
                        <input type="hidden" name="id" value="<?php echo $data['id_user']; ?>">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data['username'];?>">
                      </div>
                      <div class="col-6">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $data['email'];?>">
                  </div>
                  <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $data['nama'];?>">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-6">
                        <label for="exampleInputEmail1">Nomor Hp</label>
                        <input type="text" name="no_hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data['no_hp'];?>">
                      </div>
                      <div class="col-6">
                        <label for="exampleInputPassword1">Foto</label>
                        <input type="file" name="foto" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-6">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data['alamat'];?>">
                      </div>
                      <div class="col-6">
                        <label for="exampleInputPassword1">Jurusan</label>
                        <input type="text" name="jurusan" class="form-control" id="exampleInputPassword1" value="<?php echo $data['jurusan'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <textarea name="tentang" id="tentang" cols="80" rows="5"><?php echo $data['tentang'];?></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                  </article>
                </section>
              </div>
              <!-- <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><i class="fa fa-soccer-ball-o"></i> Our Goals</a></li>
                </ul>
              </div> -->
            </div>
        </div>
    </section>
<script>
  function addClass(){
    var element = document.getElementById('lil');
    element.classList.add("d-none");
    var element2 = document.getElementById('lul');
    element2.classList.remove("d-none");
  }
</script>
    <!-- ***** Our Classes End ***** -->

    <!-- ***** Call to Action Start ***** -->
  
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Footer Start ***** -->
<?php include 'footer.php';?>