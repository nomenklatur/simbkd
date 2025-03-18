
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Tahun</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" method="POST" action="<?=base_url()?>Admin/tahunStudi/do_create">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun Akademik</label><br>
                    <span style="font-style:italic; font-size:15px">contoh format masukan : <?= date("Y")?>/<?=date("Y")+1?></span>
                    <input type="text" class="form-control" name="tahun" placeholder="cth : <?=date("Y")?>/<?=date("Y")+1?>" required>
                  </div>
                  <div class="form-group">
                        <label>Semester</label>
                        <select name="semester" class="form-control">
                          <option value="0">Ganjil</option>
                          <option value="1">Genap</option>
                        </select>
                   </div>
                  <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                          <option value="1">Aktif</option>
                          <option value="0">Non-Aktif</option>
                        </select>
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
                      <p style="font-style:italic; color:red"><span>* Pastikan Hanya Ada Satu Tahun Akademik Yang Aktif</span></p>
                     <button type="button" class="btn btn-secondary btn-lg float-right" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus"> Tambah</i></button>
            </div>
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped" >
                <thead>
                <tr align="center">
                  <th>No</th>
                  <th>Semester </th>
                  <th>Tahun ajaran </th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody align="center">
                <?php $i=1; foreach($tahun as $ad){?>
                <tr>
                  <td><?=$i?></td>
                  <td><?=$ad->semester == "0" ?"Ganjil":"Genap"?></td>
                  <td><?=$ad->tahun?></td>
                  <td><?=$ad->status == "0"?'<span class="badge bg-danger">Non-Aktif</span>':'<span class="badge bg-primary">Aktif</span>'?></td>
                  <td>
                        <a href="<?=base_url()?>Admin/editTahun/<?=$ad->id?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        <?php if($ad->status=="0"){?>
                        <a href="<?=base_url()?>Admin/tahunStatus/<?=$ad->id?>/1" onClick="return confirm('Apakah Anda yakin ingin mengubah data ini ? Pastikan hanya ada satu tahun akademik yang aktif')" type="button" class="btn btn-success btn-sm">Aktifkan</a>
                        <?php }?>
                        <?php if($ad->status=="1"){?>
                        <a href="<?=base_url()?>Admin/tahunStatus/<?=$ad->id?>/0" onClick="return confirm('Apakah Anda yakin ingin mengubah data ini ? Pastikan hanya ada satu tahun akademik yang aktif')" type="button" class="btn btn-dark btn-sm">Non-Aktifkan</a>
                        <?php }?>
                        <a href="<?=base_url()?>Admin/hapusTahun/<?=$ad->id?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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