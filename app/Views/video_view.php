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
  <section class="section-about">
    <div class="container">
      <div class="row">
        <div class="col">
          <span><?= $isi['video'];?></span>
        </div>
      </div>
      <div class="row">
        <div class="col d-flex justify-content-center">

        </div>
      </div>
      <div class="row">
        <div class="col">
        <span></span>
        </div>
      </div>
    </div>
  </section>
  <?php endforeach;?>
  <!--/ About End /-->

  <!--/ Team Star /-->
  
  <!--/ Team End /-->

<?php echo view('footer_view'); ?>