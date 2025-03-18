<section class="content">
      <div class="row">
        <div class="col-6">
          <div class="card">
            <div class="card-body">
            <form role="form" method="POST" action="<?=base_url()?>Admin/editPenunjang/<?=$penunjang[0]->id?>/do_edit">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kegiatan</label>
                    <textarea type="text" class="form-control" name="kegiatan" ><?=$penunjang[0]->kegiatan?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sub Kegiatan</label>
                    <textarea type="text" class="form-control" name="subkegiatan" ><?=$penunjang[0]->sub_kegiatan?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <textarea type="text" class="form-control" name="keterangan" ><?=$penunjang[0]->keterangan?></textarea>
                  </div>
                  <div class="form-group">
                        <label>Jenis Kegiatan</label>
                        <select name="jenis" class="form-control">
                          <option value="0" <?=$penunjang[0]->jenis =="0"? "selected" :null?>>Pembinaan Sivitas Akademika</option>
                          <option value="1" <?=$penunjang[0]->jenis =="1"? "selected" :null?>>Administrasi dan Manajemen</option>
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