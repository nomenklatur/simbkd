
    <section class="content">
    <div>
      <?php 
            $timeStamp = strtotime($masa[0]->tanggal);
            $dates = date('j F Y', $timeStamp);
        ?>
        <b>Masa penilaian BKD akan ditutup pada tanggal : <span class="text text-danger"><?=$dates?></span></b>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped" >
                <thead>
                <tr align="center">
                  <th>No</th>
                  <th>Nama Dosen </th>
                  <th>SPTJM DOSEN </th>
                  <th>SPTJM PIMPINAN </th>
                  <th>Jabatan Sebagai</th>
                  <th>Status Asesor 1</th>
                  <th>Status Asesor 2</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody align="center">
                <?php $i=1; foreach($dosen as $ad){
                            foreach($asesor1 as $as){ if($ad->id == $as->id_dosen && $as->masa_sk==$tahun1[0]->id){
                    ?>
                <tr>
                  <td><?=$i?></td>
                  <td><?=$ad->nama?></td>
                  <td>
                     <?php if($ad->sptjm_dosen != null || $ad->sptjm_dosen!= ""){?>  
                        <a href="<?= base_url()?>Asesor/file/<?=$ad->sptjm_dosen?>" class="btn btn-success" target="_blank"><i class="fas fa-download"> File SPTJM</i></a>
                      <?php }else{?>
                        File belum diunggah
                      <?php }?>
                  </td>
                  <td>
                  <?php if($ad->sptjm_pimpinan != null || $ad->sptjm_pimpinan!= ""){?>  
                        <a href="<?= base_url()?>Asesor/file/<?=$ad->sptjm_pimpinan?>" class="btn btn-success" target="_blank"><i class="fas fa-download"> File SPTJM</i></a>
                      <?php }else{?>
                        File belum diunggah
                      <?php }?>
                  </td>
                  <td>Asesor 1</td>
                  <td><?=$as->nilai=="0"?'<span class="badge bg-danger">Belum Dinilai</span>':'<span class="badge bg-success">Sudah Dinilai</span>'?></td>
                  <td><?=$as->nilai1=="0"?'<span class="badge bg-danger">Belum Dinilai</span>':'<span class="badge bg-success">Sudah Dinilai</span>'?></td>
                  <td>
                  <?php if(date('Y-m-d')==date('Y-m-d',$as->date_create+(100 * 100 * 24 * 42))){?>
                        <button disabled  type="button" class="btn btn-primary btn-sm">Batas Waktu Penilaian Sudah Lewat</i></button>
                  <?php }else{?>
                       <a href="<?=base_url()?>Asesor/bkd/<?=$ad->id?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-check"> Pilih Dosen</i></a>
                  <?php }?>
                  </td>
                </tr>
                <?php $i++;}}}?>
                <?php foreach($dosen as $ad){
                            foreach($asesor2 as $as){ if($ad->id == $as->id_dosen && $as->masa_sk==$tahun1[0]->id){
                    ?>
                <tr>
                  <td><?=$i?></td>
                  <td><?=$ad->nama?></td>
                  <td>
                     <?php if($ad->sptjm_dosen != null || $ad->sptjm_dosen!= ""){?>  
                        <a href="<?= base_url()?>Asesor/file/<?=$ad->sptjm_dosen?>" class="btn btn-success" target="_blank"><i class="fas fa-download"> File SPTJM</i></a>
                      <?php }else{?>
                        File belum diunggah
                      <?php }?>
                  </td>
                  <td>
                  <?php if($ad->sptjm_pimpinan != null || $ad->sptjm_pimpinan!= ""){?>  
                        <a href="<?= base_url()?>Asesor/file/<?=$ad->sptjm_pimpinan?>" class="btn btn-success" target="_blank"><i class="fas fa-download"> File SPTJM</i></a>
                      <?php }else{?>
                        File belum diunggah
                      <?php }?>
                  </td>
                  <td>Asesor 2</td>
                  <td><?=$as->nilai=="0"?'<span class="badge bg-danger">Belum Dinilai</span>':'<span class="badge bg-success">Sudah Dinilai</span>'?></td>
                  <td><?=$as->nilai1=="0"?'<span class="badge bg-danger">Belum Dinilai</span>':'<span class="badge bg-success">Sudah Dinilai</span>'?></td>
                  <td>
                  <?php if(date('Y-m-d')>=date('Y-m-d',$as->date_create+(100 * 100 * 24 * 42))){?>
                        <button disabled  type="button" class="btn btn-primary btn-sm">Batas Waktu Penilaian Sudah Lewat</i></button>
                  <?php }else{?>
                       <a href="<?=base_url()?>Asesor/bkd/<?=$ad->id?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-check"> Pilih Dosen</i></a>
                  <?php }?>
                  </td>
                </tr>
                <?php $i++;}}}?>
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
 <!-- /.modal -->
