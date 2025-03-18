<section class="content">
      <div class="row">
        <div class="col-8">
          <div class="card">
            <div class="card-body">
            <!-- /.card-body -->
            <table class="table ">
                  <tbody>
                    <tr>
                      <th width="250px">Tugas Dosen</th>
                      <th width="20px">:</th>
                      <th><?=$pengabdian[0]->kegiatan?></th>
                    </tr>
                    <tr>
                      <th width="250px">Kinerja Persentase</th>
                      <th width="20px">:</th>
                      <th><?=$pengabdian[0]->persen_capaian?> %</th>
                    </tr>
                    <tr>
                      <th width="250px">Kinerja SKS</th>
                      <th width="20px">:</th>
                      <th><?=$pengabdian[0]->sks_capaian?></th>
                    </tr>
                    </tbody>
                </table>
            <form role="form" method="POST" action="<?=base_url()?>Asesor/editPengabdian/<?=$pengabdian[0]->id?>/do_edit">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Penilaian/Rekomendasi Asesor</label><br>    
                    <textarea type="text" class="form-control" name="penilaian_asesor"  ><?=$pengabdian[0]->penilaian_asesor?></textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                 <a href="<?=base_url()?>Asesor/bkd/<?=$pengabdian[0]->id_dosen?>" class="btn btn-default ">Batal</a>
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