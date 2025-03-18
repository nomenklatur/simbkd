<div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Laporan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" method="POST" action="<?=base_url()?>Dosen/laporan/do_create">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hari/Tanggal</label><br>
                    <span style="font-style:italic; font-size:15px">contoh format masukan : Jumat, 1 Maret 2019</span>
                    <input type="text" class="form-control" name="waktu" placeholder="cth : Jumat, 1 Maret 2019" required>
                  </div>
                  <div class="form-group">
                           <label for="exampleInputEmail1">Tanggal Input</label><br>
                           <span style="font-style:italic; font-size:15px">Klik tombol kalender disaming untuk menampilkan tanggal otomatis</span>
                                <div class='col-sm-6'>
                                          <div class='input-group date' id='datetimepicker9'>
                                              <input type='text' name="tanggal_input" value="<?= date('Y-m-d') ?>" class="form-control" />
                                              <span class="input-group-addon">
                                                  <i class="fa fa-calendar" aria-hidden="true"></i>
                                              </span>
                                          </div>
                                      </div>
                  </div>
                  <div class="form-group">
                        <label>Kegiatan</label>
                        <input type="text"   class="form-control" name="kegiatan"  required></input>
                   </div>
                  <div class="form-group">
                        <label>Output</label>
                        <input type="text" id="editor2" class="form-control" name="output" placeholder="output" required></input>
                   </div>
                   <div class="form-group">
                        <label>Volume</label>
                        <input type="text" id="editor3" class="form-control" name="volume" placeholder="volume" required></input>
                   </div>
                   <div class="form-group">
                        <label>Satuan</label>
                        <input type="text" id="editor4" class="form-control" name="satuan" placeholder="satuan" required></input>
                   </div>
                   <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" id="editor5" class="form-control" name="keterangan" placeholder="keterangan" ></input>
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

      <div class="modal fade" id="modal-cetak">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Cetak Laporan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span >&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <span style="font-style:italic;color:red">*Klik gambar kalender untuk memunculkan tanggal</span>
                     <form method="POST" action="<?= base_url()?>Dosen/cetakLaporan">
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker6'>
                                    <h4>Tanggal</h4> &nbsp
                                        <input type='text' name="tanggal_satu" value="<?= date('Y-m-d') ?>" class="form-control" />
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker7'>
                                    <h4>Sampai</h4> &nbsp
                                        <input type='text' name="tanggal_dua" value="<?= date('Y-m-d') ?>" class="form-control" />
                                        <span class="input-group-addon">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h4>Pejabat Penilai Atasan Langsung</h4> &nbsp
                                    <input type='text' name="atasan" class="form-control" placeholder="Pejabat Penilai" required/>
                                </div>
                            <button class="btn btn-primary float-right" type="submit" ><i class="fas fa-print"></i> Cetak</button>
                            </form>
          </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

<div class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-header">
            
                            <button type="button" class="btn btn-secondary float-right" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus"> Tambah</i></button>
                                <button class="btn btn-primary float-right" type="button" data-toggle="modal" data-target="#modal-cetak"><i class="fas fa-print"></i> Cetak</button>
            </div>
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped" >
                <thead>
                <tr align="center">
                  <th>No</th>
                  <th>Hari/Tanggal </th>
                  <th>Kegiatan Tugas Jabatan </th>
                  <th>Output</th>
                  <th>Volume</th>
                  <th>Satuan</th>
                  <!-- <th>Tanggal Input</th> -->
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody align="center">
                <?php $i=1; foreach($laporan as $lap){?>
                <tr>
                  <td><?=$i?></td>
                  <td><?=$lap->waktu?></td>
                  <td><?=$lap->kegiatan?></td>
                  <td><?=$lap->output?></td>
                  <td><?=$lap->volume?></td>
                  <td><?=$lap->satuan?></td>
                  <!-- <td><?=$lap->tanggal?></td> -->
                  <td><?=$lap->keterangan?></td>
                  <td>
                        <a href="<?=base_url()?>Dosen/editLaporan/<?=$lap->id?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="<?=base_url()?>Dosen/hapusLaporan/<?=$lap->id?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                  </td>
                </tr>
                <?php $i++; }?>
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
    </div>
    <!-- /.content -->
  </div>

  <script src="<?= base_url() ?>assets/vendor/ckeditor/ckeditor.js"></script>
        <script>
                CKEDITOR.replace( 'editor1' );
                CKEDITOR.replace( 'editor2' );
                CKEDITOR.replace( 'editor3' );
                CKEDITOR.replace( 'editor4' );
                CKEDITOR.replace( 'editor5' );
       </script>