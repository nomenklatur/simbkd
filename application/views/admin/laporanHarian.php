
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
                     <form method="POST" action="<?= base_url()?>Admin/cetakLaporan/<?=$id_dosen?>">
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

<section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-header">
            
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
                  <th>Tanggal Input</th>
                  <th>Keterangan</th>
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
                  <td><?=$lap->tanggal?></td>
                  <td><?=$lap->keterangan?></td>
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
    </section>
    <!-- /.content -->
  </div>