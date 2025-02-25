<?php echo view('panel_admin/header_view'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kontak</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-12">
                <?php if(isset($validation)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $validation->listErrors(); ?>
                        </div>
                <?php } ?>
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Kontak Isi Profile</h3>
                </div>
                <!-- /.card-header -->
                <form action="<?php echo base_url();?>paneladmin/kontak/update/<?php echo $kontak['id']; ?>" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="content">Masukkan Isi</label>
                                <textarea name="content" id="content" cols="30" rows="10"><?= $kontak['kontak']?></textarea> 
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">

        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h2 class="h2">Apakah anda yakin?</h2>
        <p>Data akan dihapus dari sistem.</p>
      </div>
      <div class="modal-footer">
        <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<?php echo view('panel_admin/footer_view'); ?>