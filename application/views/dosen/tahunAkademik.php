

    <section class="content">
      <div>
      <?php 
            $timeStamp = strtotime($masa[0]->tanggal);
            $dates = date('j F Y', $timeStamp);
        ?>
        <b>Masa pengisian BKD akan ditutup pada tanggal : <span class="text text-danger"><?=$dates?></span></b>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
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
                  <td><?=$ad->status == "0"?'<span class="badge bg-danger">Non-Aktif</span>':'<span class="badge bg-primary">Tahun Aktif</span>'?></td>
                  <td>
                        <a href="<?=base_url()?>Dosen/bkd/<?=$ad->id?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-check"> Pilih Tahun</i></a>
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