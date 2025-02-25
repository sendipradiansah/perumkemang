<?php echo view('panel_admin/header_view'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User</h1>
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
                  <a href="<?php echo base_url(); ?>/paneladmin/user/add"><button class="btn btn-primary"><i class="fas fa-plus-circle"></i> Add</button></a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Nama</th>
                      <th>super-admin</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($users as $user): ?>
                    <tr>
                      <td><?php echo $user['nama']; ?></td>
                      <td><?php echo $user['username']; ?></td>
                      <td><?php echo ($user['status'] == 1 ? 'Aktif' :  'Tidak Aktif'); ?></td>
                      <td align="center" class="w-25">
                        <a href="<?php base_url();?>/paneladmin/user/edit/<?php echo $user['id']; ?>"><button class="btn btn-success"><i class="fas fa-pen-square"></i> Edit</button></a>
                        <a href="#"><button class="btn btn-danger" onClick="confirmToDelete('<?php echo $user['id']; ?>')"><i class="far fa-trash-alt"></i> Delete</button></a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                  </table>
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

<?php echo view('panel_admin/footer_view'); ?>