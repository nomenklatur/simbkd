 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-header">
              <div class="card-body">
                    <div class="form-group">
                        <div class="text-center">
                                <?php if($dosen[0]->foto_dosen != "" || $dosen[0]->foto_dosen != null){?>
                        <img width="200px" height="200px" id="target"
                            src="<?=base_url()?>assets/<?=$dosen[0]->foto_dosen?>"
                            alt="User profile picture">
                        </div>
                        <?php }else{?>
                            <img width="200px" height="200px" id="target"
                            src="<?=base_url()?>images/ava.png"
                            alt="User profile picture">
                        </div>
                        <?php }?>
                    </div>
            </div>
            <!-- /.card-body -->
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>

            <!-- /.col -->
            <div class="col-md-9">
            <div class="card">
              <div class="card-body">
              <table class="table ">
                  <thead>                  
                    <tr>
                      <td width="40%">No. Sertifikat</td>
                      <td width="20px">:</td>
                      <td><?= $dosen[0]->no_sertifikat ?></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td width="40%">NIP</td>
                      <td width="20px">:</td>
                      <td><?= $dosen[0]->nip ?></td>
                    </tr>
                    <tr>
                    <td width="40%">NIDN</td>
                      <td width="20px">:</td>
                      <td><?= $dosen[0]->nidn ?></td>
                    </tr>
                    <tr>
                      <td width="40%">Nama</td>
                      <td width="20px">:</td>
                      <td><?= $dosen[0]->nama ?></td>
                    </tr>
                    <tr>
                      <td width="40%">Username</td>
                      <td width="20px">:</td>
                      <td><?= $dosen[0]->username ?></td>
                    </tr>
                    <tr>
                      <td width="40%">Nama PT.</td>
                      <td width="20px">:</td>
                      <td><?= $dosen[0]->nama_pt ?></td>
                    </tr>
                    <tr>
                      <td width="40%">Alamat PT.</td>
                      <td width="20px">:</td>
                      <td><?= $dosen[0]->alamat_pt ?></td>
                    </tr>
                    <tr>
                      <td width="40%">Fakultas</td>
                      <td width="20px">:</td>
                      <td>
                          <?php foreach($fakultas as $af){
                            if($dosen[0]->fakultas  ==  $af->id){
                                    echo $af->fakultas;
                            }
                        }?>
                      </td>
                    </tr>
                    <tr>
                      <td width="40%">Program Studi</td>
                      <td width="20px">:</td>
                      <td>
                        <?php foreach($studi as $af){
                              if($dosen[0]->program_studi  ==  $af->id){
                                      echo $af->program_studi;
                              }
                          }?>
                      </td>
                    </tr>
                    <tr>
                      <td width="40%">jab Fungsional</td>
                      <td width="20px">:</td>
                      <td><?= $dosen[0]->jab_fungsional ?></td>
                    </tr>
                    <tr>
                      <td width="40%">Golongan</td>
                      <td width="20px">:</td>
                      <td><?= $dosen[0]->golongan ?></td>
                    </tr>
                    <tr>
                      <td width="40%">Pendidikan S1</td>
                      <td width="20px">:</td>
                      <td><?= $dosen[0]->pend_s1 ?></td>
                    </tr>
                    <tr>
                      <td width="40%">Ijazah S1</td>
                      <td width="20px">:</td>
                      <td>
                        <?php if($dosen[0]->ijazah_s1 != null || $dosen[0]->ijazah_s1!= ""){?>
                        <a href="<?= base_url()?>Dosen/file/<?=$dosen[0]->ijazah_s1?>"  class="btn btn-primary" target="_blank"><i class="far fa-file"> File Ijazah S1</i></a></td>
                        <?php }else{?> class="btn btn-primary" 
                          File belum diunggah
                        <?php }?>
                    </tr>
                    <tr>
                      <td width="40%">Transkrip S1</td>
                      <td width="20px">:</td>
                      <td>
                        <?php if($dosen[0]->transkrip_s1 != null || $dosen[0]->transkrip_s1!= ""){?>
                        <a href="<?= base_url()?>Dosen/file/<?=$dosen[0]->transkrip_s1?>"  class="btn btn-primary" target="_blank"><i class="far fa-file"> File Transkrip S1</i></a></td>
                        <?php }else{?>
                          File belum diunggah
                        <?php }?>
                    </tr>
                    <tr>
                      <td width="40%">Judul Skripsi</td>
                      <td width="20px">:</td>
                      <td><?= $dosen[0]->judul_skripsi ?></td>
                    </tr>
                    <tr>
                      <td width="40%">Pendidikan S2</td>
                      <td width="20px">:</td>
                      <td><?= $dosen[0]->pend_s2 ?></td>
                    </tr>
                    <tr>
                      <td width="40%">Ijazah S2</td>
                      <td width="20px">:</td>
                      <td>
                        <?php if($dosen[0]->ijazah_s2 != null || $dosen[0]->ijazah_s2!= ""){?>
                        <a href="<?= base_url()?>Dosen/file/<?=$dosen[0]->ijazah_s2?>"  class="btn btn-primary" target="_blank"><i class="far fa-file"> File Ijazah S2</i></a></td>
                        <?php }else{?>
                          File belum diunggah
                        <?php }?>
                    </tr>
                    <tr>
                      <td width="40%">Transkrip S2</td>
                      <td width="20px">:</td>
                      <td>
                        <?php if($dosen[0]->transkrip_s2 != null || $dosen[0]->transkrip_s2!= ""){?>
                        <a href="<?= base_url()?>Dosen/file/<?=$dosen[0]->transkrip_s2?>"  class="btn btn-primary" target="_blank"><i class="far fa-file"> File Transkrip S2</i></a></td>
                        <?php }else{?>
                          File belum diunggah
                        <?php }?>
                    </tr>
                    <tr>
                      <td width="40%">Judul Tesis</td>
                      <td width="20px">:</td>
                      <td><?= $dosen[0]->judul_tesis ?></td>
                    </tr>
                    <tr>
                      <td width="40%">Pendidikan S3</td>
                      <td width="20px">:</td>
                      <td><?= $dosen[0]->pend_s3 ?></td>
                    </tr>
                    <tr>
                      <td width="40%">Ijazah S3</td>
                      <td width="20px">:</td>
                      <td>
                      <?php if($dosen[0]->ijazah_s3 != null || $dosen[0]->ijazah_s3!= ""){?>
                        <a href="<?= base_url()?>Dosen/file/<?=$dosen[0]->ijazah_s3?>"  class="btn btn-primary" target="_blank"><i class="far fa-file"> File Ijazah S3</i></a></td>
                        <?php }else{?>
                          File belum diunggah
                        <?php }?>
                    </tr>
                    <tr>
                      <td width="40%">Transkrip S2</td>
                      <td width="20px">:</td>
                      <td>
                        <?php if($dosen[0]->transkrip_s3 != null || $dosen[0]->transkrip_s3!= ""){?>
                        <a href="<?= base_url()?>Dosen/file/<?=$dosen[0]->transkrip_s3?>"  class="btn btn-primary" target="_blank"><i class="far fa-file"> File Transkrip S3</i></a></td>
                        <?php }else{?>
                          File belum diunggah
                        <?php }?>
                    </tr>
                    <tr>
                      <td width="40%">Judul Disertasi</td>
                      <td width="20px">:</td>
                      <td><?= $dosen[0]->judul_disertasi ?></td>
                    </tr>
                    <tr>
                      <td width="40%">Jenis Dosen</td>
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
                      <td width="40%">File Jenis Dosen</td>
                      <td width="20px">:</td>
                      <td>
                        <?php if($dosen[0]->file_jenis_dosen != null || $dosen[0]->file_jenis_dosen!= ""){?>
                        <a href="<?= base_url()?>Dosen/file/<?=$dosen[0]->file_jenis_dosen?>"  class="btn btn-primary" target="_blank"><i class="far fa-file"> File Jenis Dosen</i></a></td>
                        <?php }else{?>
                          File belum diunggah
                        <?php }?>
                    </tr>
                    <tr>
                      <td width="40%">Bidang Ilmu</td>
                      <td width="20px">:</td>
                      <td><?= $dosen[0]->bidang_ilmu ?></td>
                    </tr>
                    <tr>
                      <td width="40%">Minat</td>
                      <td width="20px">:</td>
                      <td><?= $dosen[0]->minat ?></td>
                    </tr>
                    <tr>
                      <td width="40%">No. Hp</td>
                      <td width="20px">:</td>
                      <td><?= $dosen[0]->no_hp ?></td>
                    </tr>
                    <tr>
                      <td width="40%">Email</td>
                      <td width="20px">:</td>
                      <td><?= $dosen[0]->email ?></td>
                    </tr>
                    <tr>
                      <td width="40%">Pimpinan</td>
                      <td width="20px">:</td>
                      <td><?= $dosen[0]->pimpinan ?></td>
                    </tr>
                    <tr>
                      <td width="40%">SPTJM</td>
                      <td width="20px">:</td>
                      <td>
                      <?php if($dosen[0]->sptjm != null || $dosen[0]->sptjm!= ""){?>  
                        <a href="<?= base_url()?>Dosen/file/<?=$dosen[0]->sptjm?>"  class="btn btn-primary" target="_blank"><i class="far fa-file"> File SPTJM</i></a>
                      <?php }else{?>
                        File belum diunggah
                      <?php }?>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <a href="<?= base_url()?>Dosen/editdataDiri/<?= $dosen[0]->id?>"class="btn btn-primary float-right"><i class="fas fa-edit"></i>Edit</a>
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

            