
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Jenis Dosen</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" method="POST" action="<?=base_url()?>Admin/jenisDosen/do_create">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Dosen</label><br>
                    <input type="text" class="form-control" name="jenis_dosen" placeholder="jenis dosen" required>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary float-right">Tambah</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-header">
                     <button type="button" class="btn btn-secondary btn-lg float-right" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus"> Tambah</i></button>
            </div>
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped" >
                <thead>
                <tr align="center">
                  <th>No</th>
                  <th>Jenis Dosen</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody align="center">
                <?php $i=1; foreach($dosen as $ad){?>
                <tr>
                  <td><?=$i?></td>
                  <td align="left"><?=$ad->jenis_dosen?></td>
                  <td>
                        <a href="<?=base_url()?>Admin/editJdosen/<?=$ad->id?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="<?=base_url()?>Admin/hapusJdosen/<?=$ad->id?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                  </td>
                </tr>
                <?php $i++;}?>
                </tbody>
              </table>
              </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>