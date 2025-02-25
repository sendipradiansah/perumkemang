<?php echo view('header_view'); ?>

<!--/ Intro Single star /-->
<section class="intro-single">
    <div class="container">

      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->
<?php foreach($konten as $isi):?>
  <!--/ About Star /-->
  <section class="section-about" style=" background: 
        linear-gradient(45deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
        url('assets/img/profil.jpg'); background-size:cover;background-position:center;">
    <div class="container p-3">
      <div class="row">
        <div class="col text-center">
          <h2 class="text-white">Contact Me</h2>
          <h1 class="text-white">Greenland Kemang</h1>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col"><img src="assets/img/kontak.png" alt="" width="250"></div>
        <div class="col">
          <h3 class="text-white">CONTACT INFO</h3>
          <br>
          <h5 class="text-white">ZAENUDIN</h5>
          <h5 class="text-white">(SALES CONSULTANT)</h5>
          <ul class="list-group text-white" style="list-style: none;">
              <li class="nav-icon mb-3"><img src="assets/img/phone-icon.png" alt=""> <span>0812 9931 7044</span></li>
              <li class="nav-icon mb-3"><img src="assets/img/whatsapp-icon.png" alt=""> <span>081299317044</span></li>
              <li class="nav-icon mb-3"><img src="assets/img/mail-icon.png" alt=""> <span>marketing.greenland3@gmail.com</span></li>
          </ul>
        </div>
        <div class="col">
          <h3 class="text-white">OFFICE</h3>
          <h3 class="text-white">Greenland Kemang Bogor
Jl. Raya Parung Bogor, Kemang, Kecamatan Kemang, Kabupaten Bogor, Jawa Barat 16310</h3>
        </div>
      </div>
      <div class="row">
        <div class="col d-flex justify-content-center">
          <!-- <img src="assets/img/profil.jpg" alt=""> -->
        </div>
      </div>
      <div class="row">
        <div class="col">
          <span></span>
        </div>
      </div>
    </div>
    <span><?= $isi['kontak'];?></span>
  </section>
  <?php endforeach;?>
  <!--/ About End /-->

  <!--/ Team Star /-->
  
  <!--/ Team End /-->

<?php echo view('footer_view'); ?>