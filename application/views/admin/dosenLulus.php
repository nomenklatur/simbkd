

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
                  <th>Kesimpulan Asesor 1</th>
                  <th>Kesimpulan Asesor 2</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody align="center">
                <?php $i=1; foreach($dosen as $ad){
                            foreach($kesimpulanAsessor1 as $as1){ if($ad->id == $as1->id_dosen){
                                foreach($kesimpulanAsessor2 as $as2){ if($ad->id == $as2->id_dosen){
                    ?>
                <tr>
                  <td><?=$i?></td>
                  <td><?=$ad->nama?></td>
                  <td><?=$as1->total?></td>
                  <td><?=$as2->total?></td>
                  <td>
                    <a href="<?=base_url()?>Admin/lihatDosen/<?=$ad->id?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-check"> Lihat Dosen</i></a>
                  </td>
                </tr>
                <?php $i++;}}}}}?>
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