  <!-- /.modal -->
  <div class="modal fade" id="modal-komentar">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Komentar Asesor</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" enctype="multipart/form-data" method="POST" action="<?=base_url()?>Asesor/catatan/<?=$id?>/<?= $asesor?>">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Komentar</label>
                    <input type="text" class="form-control" name="catatan" placeholder="keterangan ..." >
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
  
  
  <div class="modal fade" id="modal-kesimpulan">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Penilaian Asesor</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" enctype="multipart/form-data" method="POST" action="<?=base_url()?>Asesor/nilaiKesimpulan/<?=$id?>/do_create">
                <div class="card-body">
                  <div class="form-group">
                    <label>PENDIDIKAN</label>
                        <select name="pendidikan" class="form-control">
                          <option value="M" >M</option>
                          <option value="T" >T</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label>KETERANGAN</label>
                    <input type="text" class="form-control" name="ket_pend" placeholder="keterangan ..." >
                  </div>
                  <div class="form-group">
                    <label>PENELITIAN</label>
                        <select name="penelitian" class="form-control">
                          <option value="M" >M</option>
                          <option value="T" >T</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label>KETERANGAN</label>
                    <input type="text" class="form-control" name="ket_pene" placeholder="keterangan ..." >
                  </div>
                  <div class="form-group">
                    <label>PENGABDIAN</label>
                        <select name="pengabdian" class="form-control">
                          <option value="M" >M</option>
                          <option value="T" >T</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label>KETERANGAN</label>
                    <input type="text" class="form-control" name="ket_peng" placeholder="keterangan ..." >
                  </div>
                  <div class="form-group">
                    <label>PENUNJANG</label>
                        <select name="penunjang" class="form-control">
                          <option value="M" >M</option>
                          <option value="T" >T</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label>KETERANGAN</label>
                    <input type="text" class="form-control" name="ket_penun" placeholder="keterangan ..." >
                  </div>
                  <div class="form-group">
                    <label>KESIMPULAN AKHIR</label>
                        <select name="total" class="form-control">
                          <option value="M" >M</option>
                          <option value="T" >T</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">KETERANGAN</label>
                    <input type="text" class="form-control" name="ket_akhir" placeholder="keterangan ..." >
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
<section class="content">
      <div class="row">
        <div class="col-9">
          <div class="card">
            <div class="card-body">
            <div class="card-header">
            <a href="<?=base_url()?>Asesor/kesimpulan/<?=$dosen[0]->id?>" type="button" class="text-danger float-left" ><i class="fas fa-arrow-left"> Kembali</i></a>
                     <a href="<?=base_url()?>Asesor/cetakNilai/<?=$dosen[0]->id?>" type="button" class="btn btn-primary float-right mr-sm-2" ><i class="fas fa-print"> Cetak</i></a>
                     <button type="button" data-toggle="modal" data-target="#modal-kesimpulan" class="btn btn-success float-right mr-sm-2" ><i class="fas fa-pen"> Tambah Penilaian</i></button>
                     <button type="button" data-toggle="modal" data-target="#modal-komentar" class="btn btn-warning float-right mr-sm-2" ><i class="fas fa-pen"> Tambah Komentar</i></button>
            </div>
            <table class="table ">
                  <tbody>
                    <tr>
                      <td width="250px">NAMA</td>
                      <td width="20px">:</td>
                      <td><?=$dosen[0]->nama?></td>
                    </tr>
                    <tr>
                      <td width="250px">ASAL</td>
                      <td width="20px">:</td>
                      <td>IAKN Tarutung</td>
                    </tr>
                    <tr>
                      <td width="250px">TAHUN SEMESTER</td>
                      <td width="20px">:</td>
                      <td>
                      <?php
                                foreach($tahun as $t){
                                        if($t->semester =="0"){
                                            echo "GANJIL "; 
                                        }else{
                                            echo "GENAP "; 
                                        }
                                        echo $t->tahun;
                                }
                            ?>
                      </td>
                    </tr>
                    <tr>
                      <td width="250px">JENIS DOSEN</td>
                      <td width="20px">:</td>
                      <td>
                            <?php foreach($jenis_dosen as $j){
                                if($j->id == $dosen[0]->jenis_dosen){
                                  echo $j->jenis_dosen;
                                }

                          }?>
                      </td>
                    </tr>
                    <tr>
                      <td width="250px">STATUS DOSEN</td>
                      <td width="20px">:</td>
                      <td><?=$pendidikan[0]->status?></td>
                    </tr>
                    </tbody>
                </table>
            <table  class="table table-bordered table-striped" >
                <thead>
                <tr align="center">
                  <th>BIDANG  </th>
                  <th>SKS </th>
                  <th>KESIMPULAN (M/T)</th>
                  <th>KETERANGAN </th>
                </tr>
                </thead>
                <tbody align="center">
                <tr>
                  <td>PENDIDIKAN</td>
                  <td><?php 
                        $jml = 0;
                      foreach($pendidikan as $pen){
                          $jml +=(float)$pen->sks_capaian;
                      }

                      echo $jml;
                  ?></td>
                  <td><?=@$kesimpulan[0]->pendidikan?></td>
                  <td><?=@$kesimpulan[0]->keterangan_pend?></td>
                </tr>
                <tr>
                  <td>PENELITIAN</td>
                  <td><?php 
                        $jml = 0;
                      foreach($penelitian as $pen){
                          $jml +=(float)$pen->sks_capaian;
                      }

                      echo $jml;
                  ?></td>
                  <td><?=@$kesimpulan[0]->penelitian?></td>
                  <td><?=@$kesimpulan[0]->keterangan_pene?></td>
                </tr>
                <tr>
                  <td>PENGABDIAN</td>
                  <td><?php 
                        $jml = 0;
                      foreach($pengabdian as $pen){
                          $jml +=(float)$pen->sks_capaian;
                      }

                      echo $jml;
                  ?></td>
                  <td><?=@$kesimpulan[0]->pengabdian?></td>
                  <td><?=@$kesimpulan[0]->keterangan_peng?></td>
                </tr>
                <tr>
                  <td>PENUNJANG</td>
                  <td><?php 
                        $jml = 0;
                      foreach($penunjang as $pen){
                          $jml +=(float)$pen->sks_capaian;
                      }

                      echo $jml;
                  ?></td>
                  <td><?=@$kesimpulan[0]->penunjang?></td>
                  <td><?=@$kesimpulan[0]->keterangan_penun?></td>
                </tr>
                <tr>
                  <td>KESIMPULAN  AKHIR</td>
                  <td><?php 
                        $jml = 0;$jml1 = 0;$jml2 = 0;$jml3 = 0;
                    foreach($pendidikan as $pen){
                        $jml +=(float)$pen->sks_capaian;
                    }
                    foreach($penelitian as $pen){
                      $jml1 +=(float)$pen->sks_capaian;
                      }
                    foreach($pengabdian as $pen){
                      $jml2 +=(float)$pen->sks_capaian;
                    }  
                    foreach($penunjang as $pen){
                      $jml3 +=(float)$pen->sks_capaian;
                    }
                      echo $jml + $jml1 + $jml2 + $jml3;
                  ?></td>
                  <td><?=@$kesimpulan[0]->total?></td>
                  <td><?=@$kesimpulan[0]->keterangan_total?></td>
                </tr>
                </tbody>
              </table>
            </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>