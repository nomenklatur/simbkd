

    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped" >
                <thead>
                <tr align="center">
                  <th>No</th>
                  <th>Nama Dosen </th>
                  <th>Status Asesor 1</th>
                  <th>Status Asesor 2</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody align="center">
                <?php $i=1; foreach($dosen as $ad){
                            foreach($asesor as $as){ if($ad->id == $as->id_dosen){
                    ?>
                <tr>
                  <td><?=$i?></td>
                  <td><?=$ad->nama?></td>
                  <td><?=$as->nilai=="0"?'<span class="badge bg-danger">Belum Dinilai</span>':'<span class="badge bg-success">Sudah Dinilai</span>'?></td>
                  <td><?=$as->nilai1=="0"?'<span class="badge bg-danger">Belum Dinilai</span>':'<span class="badge bg-success">Sudah Dinilai</span>'?></td>
                  <td>
                  <?php if(date('Y-m-d')==date('Y-m-d',$as->date_create+(60 * 60 * 24 * 42))){?>
                        <button disabled  type="button" class="btn btn-primary btn-sm">Batas Waktu Penilaian Sudah Lewat</i></button>
                  <?php }else{?>
                       <a href="<?=base_url()?>Admin/bkd/<?=$ad->id?>/<?=$tahun?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-check"> Pilih Dosen</i></a>
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