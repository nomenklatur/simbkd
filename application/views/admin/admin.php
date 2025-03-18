<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Admin</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" method="POST" action="<?=base_url()?>Admin/admin/do_create">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIP</label>
                    <input type="text" class="form-control" name="nip" placeholder="nip ..." required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="nama ..." required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control"  id="pw1" name="pass" placeholder="password ..." required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="pw2" name="pass" placeholder="konfirmasi password ..." required>
                  </div>
                  <p id="notif"></p>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" id="tambah" disabled class="btn btn-primary float-right">Tambah</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


<!-- Main content -->
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
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Jenis Admin</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody align="center">
                <?php $i=1; foreach($admin as $ad){?>
                <tr>
                  <td><?=$i?></td>
                  <td><?=$ad->nip?></td>
                  <td><?=$ad->nama?></td>
                  <td><?=$ad->level=='10' ?"Admin LPM":"Admin Fakultas"?></td>
                  <td>
                        <a href="<?=base_url()?>Admin/editAdmin/<?=$ad->id?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="<?=base_url()?>Admin/ubahPassAdmin/<?=$ad->id?>" type="button" class="btn btn-success btn-sm"><i class="fas fa-cogs"></i></a>
                        <a href="<?=base_url()?>Admin/hapus/<?=$ad->id?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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

      