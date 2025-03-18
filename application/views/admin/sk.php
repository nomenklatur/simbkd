<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Cetak SK</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" method="POST" action="<?=base_url()?>Admin/cetakSk">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Lampiran ke </label>
                    <input type="text" class="form-control" name="lampiran" placeholder="cth: LAMPIRAN II" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan 1 </label>
                    <textarea rows="5" cols="60" name="ket1" placeholder="cth : SURAT KEPUTUSAN REKTOR INSTITUT AGAMA KRISTEN NEGERI (IAKN) TARURUNG NOMOR 297 TAHUN 2019
                    " required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan 2 </label>
                    <textarea rows="5" cols="60" name="ket2" placeholder="cth : PENGANGKATAN ASESOR PENILAIAN BEBAN KERJA DOSEN PNS DAN DOSEN TETAP NON PNS INSTITUT AGAMA KRISTEN NEGERI (IAKN) TARUTUNG SEMESTER GENAP TAHUN AKADEMIK 2018/2019
                    " required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ditetapkan di </label>
                    <input type="text" class="form-control" name="tempat" placeholder="Ditetapkan di ..." required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pada Tanggal</label>
                    <input type="text" class="form-control" name="tanggal" placeholder="Pada Tanggal ..." required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Rektor</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Rektor ..." required>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary float-right">Cetak</button>
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
        <div class="col-6">
          <div class="card">
            <!-- /.card-header -->
            <!-- <div class="card-header">
                     <button type="button" class="btn btn-secondary btn-lg float-right" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus"> Tambah</i></button>
            </div> -->
            <div class="card-body">
            <div align="center">
                <strong>DAFTAR ASESOR</strong>
            </div>
              <table id="example" class="table table-bordered table-striped" >
                <thead>
                <tr align="center">
                  <th>No</th>
                  <th>NAMA</th>
                  <th>JABATAN DALAM TIM</th>
                </tr>
                </thead>
                <tbody align="center">
                <?php $i=1; foreach($asesor as $ad){?>
                <tr>
                  <td><?=$i?></td>
                  <td align="left"><?=$ad->nama?></td>
                  <td>Asesor</td>
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
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-header">
                  <div class="card-header">
                     <button type="button" class="btn btn-primary btn-lg float-right" data-toggle="modal" data-target="#modal-default"><i class="fas fa-print"> Cetak SK</i></button>
                  </div>
            </div>
            <?php $j=1; foreach($program_studi as $ps){?>
            <div class="card-body">
            <strong><?= $j ?>. <?= $ps->program_studi ?></strong>
              <table id="example" class="table table-bordered table-striped" >
                <thead>
                <tr align="center">
                  <th>No</th>
                  <th>NAMA DOSEN</th>
                  <th>ASESOR 1</th>
                  <th>ASESOR 2</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody align="center">
                <?php $i=1; foreach($dosen as $ad){ if($ad->program_studi == $ps->id){?>
                <tr>
                  <td><?=$i?></td>
                  <td align="left"><?=$ad->nama?></td>
                  <td align="left">
                    <?php 
                            foreach($sk as $s){ 
                                if($ad->id == $s->id_dosen){
                                    foreach($asesor as $as){ 
                                        if($as->id == $s->asesor1){
                                            echo $as->nama;
                                        }
                                     }
                                }
                             }
                    ?>
                  </td>
                  <td align="left">
                  <?php 
                            foreach($sk as $s){ 
                                if($ad->id == $s->id_dosen){
                                    foreach($asesor as $as){ 
                                        if($as->id == $s->asesor2){
                                            echo $as->nama;
                                        }
                                     }
                                }
                             }
                    ?>
                  </td>
                  <td>
                        <a href="<?=base_url()?>Admin/editSk/<?=$ad->id?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="<?=base_url()?>Admin/hapusSk/<?=$ad->id?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                  </td>
                </tr>
                <?php $i++;}}?>
                </tbody>
              </table>
              </div>
                <?php $j++;}?>
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

      