<section class="content">
      <div class="row">
        <div class="col-6">
          <div class="card">
            <div class="card-body">
            <form role="form" method="POST" action="<?=base_url()?>Admin/editKhusus/<?=$khusus[0]->id?>/do_edit">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kegiatan</label>
                    <textarea type="text" class="form-control" name="kegiatan" ><?=$khusus[0]->kegiatan?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sub Kegiatan</label>
                    <textarea type="text" class="form-control" name="subkegiatan" ><?=$khusus[0]->sub_kegiatan?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <textarea type="text" class="form-control" name="keterangan" ><?=$khusus[0]->keterangan?></textarea>
                  </div>
                  <div class="form-group">
                        <label>Jenis Kegiatan</label>
                        <select name="jenis" class="form-control">
                          <option value="0" <?=$khusus[0]->jenis == "0"? "selected":null?>>Menulis Buku</option>
                          <option value="1" <?=$khusus[0]->jenis == "1"? "selected":null?>>Menghasilkan Karya Ilmiah</option>
                          <option value="2" <?=$khusus[0]->jenis == "2"? "selected":null?>>Menyebarluaskan Gagasan</option>
                        </select>
                      </div>
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