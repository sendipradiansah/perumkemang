<?php echo view('panel_admin/header_view'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profil</h1>
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
              <div class="card">
                <div class="card-header">
                  <!-- <a href="<?php echo base_url(); ?>paneladmin/profil/add"><button class="btn btn-primary"><i class="fas fa-plus-circle"></i> Add</button></a> -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  
                    <?php foreach($konten as $d) : ?>
                    
                      <?php echo $d['denah']; ?>
                      <a href="<?php base_url();?>/paneladmin/denah/edit/<?php echo $d['id']; ?>"><button class="btn btn-success"><i class="fas fa-pen-square"></i> Edit</button></a>
                      
                    <?php endforeach;?>
                    
           
                 
                </div>
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
<script>
  function confirmeToDelete(id){
    console.log('tesss ' + id);
      let url = "<?php echo base_url(); ?>paneladmin/profil/delete/" + id;
      $("#delete-button").attr("href", url);
      $("#confirm-dialog").modal('show');
  }
</script>
<?php echo view('panel_admin/footer_view'); ?>