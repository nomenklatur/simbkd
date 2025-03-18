           
           
    <section class="content">
      <div class="row">
        <div class="col-8">
          <div class="card">
            <div class="card-body">
            <!-- /.card-body -->
            </div>
          <!-- /.card -->
          <form role="form" method="POST" action="<?=base_url()?>Dosen/editLaporan/<?=$laporan[0]->id?>/do_edit">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hari/Tanggal</label><br>
                    <span style="font-style:italic; font-size:15px">contoh format masukan : Jumat, 1 Maret 2019</span>
                    <input type="text" class="form-control" name="waktu" value="<?=$laporan[0]->waktu?>">
                  </div>
                  <div class="form-group">
                        <label>Kegiatan</label>
                        <textarea type="text" class="form-control" name="kegiatan"  ><?=$laporan[0]->kegiatan?></textarea>
                   </div>
                  <div class="form-group">
                        <label>Output</label>
                        <input type="text" class="form-control" name="output" value="<?=$laporan[0]->output?>">
                   </div>
                   <div class="form-group">
                        <label>Volume</label>
                        <input type="text" class="form-control" name="volume" value="<?=$laporan[0]->volume?>">
                   </div>
                   <div class="form-group">
                        <label>Satuan</label>
                        <input type="text" class="form-control" name="satuan" value="<?=$laporan[0]->satuan?>">
                   </div>
                   <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" value="<?=$laporan[0]->keterangan?>">
                   </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary float-right">Tambah</button>
                </div>
              </form>
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>