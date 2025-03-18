
    <section class="content">
      <div class="row">
        <div class="col-8">
          <div class="card">
            <div class="card-body">
            <!-- /.card-body -->

            <form role="form" method="POST" action="<?=base_url()?>Admin/editTahun/<?=$tahun[0]->id?>/do_edit">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun Ajaran</label><br>
                      <span style="font-style:italic; font-size:15px">contoh format masukan : <?= date("Y")?>/<?=date("Y")+1?></span>
                    <input type="text" class="form-control" name="tahun" value="<?=$tahun[0]->tahun?>" placeholder="cth : <?= date("Y")?>/<?=date("Y")+1?> ..." >
                  </div>
                  <div class="form-group">
                        <label>Semester</label>
                        <select name="semester" class="form-control">
                          <option value="0" <?=$tahun[0]->semester == "0"?"selected":null?>>Ganjil</option>
                          <option value="1" <?=$tahun[0]->semester == "1"?"selected":null?>>Genap</option>
                        </select>
                   </div>
                  <div class="form-group">
                        <label>Select</label>
                        <select name="status" class="form-control">
                          <option value="1" <?=$tahun[0]->status=="1"?"selected":null?>>Aktif</option>
                          <option value="0" <?=$tahun[0]->status=="0"?"selected":null?>>Non-Aktif</option>
                        </select>
                   </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                 <a href="<?=base_url()?>Admin/tahunStudi" class="btn btn-default ">Batal</a>
                  <button type="submit" class="btn btn-primary float-right"><i class="fas fa-edit"></i>Edit</button>
                </div>
              </form>
            </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>