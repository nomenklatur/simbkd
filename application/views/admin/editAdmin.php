           
    <section class="content">
      <div class="row">
        <div class="col-6">
          <div class="card">
            <div class="card-body">
            <form role="form" method="POST" action="<?=base_url()?>Admin/editAdmin/<?=$admin[0]->id?>/do_edit">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIP</label>
                    <input type="text" class="form-control" name="nip" value="<?=$admin[0]->nip?>" placeholder="nip ..." >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?=$admin[0]->nama?>"  placeholder="nama ..." >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Admin</label>
                    <select name="jenis_admin" class="form-control">
                          <option value="10" <?=$admin[0]->level == '10' ?"selected":null ?>>Admin LPM</option>
                          <option value="9" <?=$admin[0]->level == '9' ?"selected":null ?>>Admin Fakultas</option>
                        </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary float-right"><i class="fas fa-edit"></i>Edit</button>
                </div>
              </form>

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