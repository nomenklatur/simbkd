
    
     <div class="modal fade" id="modal-kesimpulan">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Kesimpulan Dosen</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" enctype="multipart/form-data" method="POST" action="<?php base_url()?>Asesor/create_kesimpulan/<?=$tahunS?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">PENDIDIKAN</label>
                        <select name="pendidikan" class="form-control">
                          <option value="M" >M</option>
                          <option value="T" >T</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">PENELITIAN</label>
                        <select name="penelitian" class="form-control">
                          <option value="M" >M</option>
                          <option value="T" >T</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">PENGABDIAN</label>
                        <select name="pengabdian" class="form-control">
                          <option value="M" >M</option>
                          <option value="T" >T</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">PENUNJANG</label>
                        <select name="penunjang" class="form-control">
                          <option value="M" >M</option>
                          <option value="T" >T</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">PENDIDIKAN + PENELITIAN</label>
                        <select name="pd1" class="form-control">
                          <option value="M" >M</option>
                          <option value="T" >T</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">PENGABDIAN + PENUNJANG</label>
                        <select name="pd2" class="form-control">
                          <option value="M" >M</option>
                          <option value="T" >T</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">TOTAL KINERJA</label>
                        <select name="total" class="form-control">
                          <option value="M" >M</option>
                          <option value="T" >T</option>
                        </select>
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
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <!-- <div class="card-header">
                     <button type="button" class="btn btn-secondary btn-lg float-right" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus"> Tambah</i></button>
            </div> -->
            <div class="card-body">
            <div class="col-12 col-sm-12">
            <div class="card card-primary card-outline card-outline-tabs">
              <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link <?=$this->session->active?>" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="false">PENDIDIKAN</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?=$this->session->active1?>" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="true">PENELITIAN DAN PENGEMBANGAN ILMU</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?=$this->session->active2?>" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">PENGABDIAN KEPADA MASYARAKAT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?=$this->session->active3?>" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">BIDANG PENUNJANG</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?=$this->session->active4?>" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-prof" role="tab" aria-controls="custom-tabs-four-prof" aria-selected="false">KHUSUS PROFESOR</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?=$this->session->active6?>" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-berkas" role="tab" aria-controls="custom-tabs-four-berkas" aria-selected="false">LIHAT BERKAS</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                  <div class="tab-pane fade <?=$this->session->active?> <?=$this->session->show?>" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                    <table id="dtHorizontalExample" class="table table-bordered table-striped" >
                        <thead>
                        <tr align="center">
                            <th rowspan="3">No</th>
                            <th rowspan="3">Jenis Kegiatan</th>
                            <th colspan="2">Beban Kerja</th>
                            <th rowspan="3">Masa Pelaksanaan Tugas</th>
                            <th colspan="3">Kinerja</th>
                            <th rowspan="3">Penilaian/Rekomendasi Asesor</th>
                            <!-- <th rowspan="3">Aksi</th> -->
                        </tr>
                        <tr align="center">
                            <th rowspan="2">Bukti Penugasan</th>
                            <th rowspan="2">Sks</th>
                            <th rowspan="2">Bukti Kinerja Pendidikan</th>
                            <th colspan="2">Capaian</th>
                        </tr>
                        <tr align="center">
                            <th >%</th>
                            <th >Sks</th>
                        </tr>
                        </thead>
                        <tbody >
                        <?php $i= 1; $jml=0; $jml1=0; foreach($pendidikan as $pen){?>
                        <tr align="center">
                        <td><?=$i?></td>
                        <td align="left"><?=$pen->kegiatan?></td>
                        <td align="left">
                                <?=$pen->bukti_penugasan_bk?> <br>
                                <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasanbk?>">File Bukti Penugasan</a>
                                
                        </td>
                        <td><?=$pen->sks_bk?></td>
                        <td>
                            <?php
                                foreach($tahun as $t){
                                    if($t->id==$pen->masa_pelaksaan){
                                        if($t->semester =="0"){
                                            echo "Semester Ganjil "; 
                                        }else{
                                            echo "Semester Genap "; 
                                        }
                                        echo $t->tahun;
                                    }
                                }
                            ?>
                        </td>
                        <td>
                            <?=$pen->bukti_penugasan_k?> <br>
                            <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasank?>">File Bukti kinerja Pendidikan </a>
                        </td>
                        <td><?=$pen->persen_capaian?></td>
                        <td><?=$pen->sks_capaian?></td>
                        <td><?=$pen->penilaian_asesor?></td>
                        <!-- <td>
                                <a href="<?=base_url()?>Asesor/editPendidikan/<?=$pen->id?>/<?=$tahunS?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        </td> -->
                        </tr>
                        <?php $i++; $jml += (float)$pen->sks_bk; $jml1 += (float)$pen->sks_capaian; }?>
                        </tbody>
                        <tfoot>
                        <tr>
                          <td colspan="2" align="center">Jumlah Beban Kerja</td>
                          <td></td>
                          <td><?= $jml?></td>
                          <td colspan="2" align="center">Jumlah Kinerja</td>
                          <td></td>
                          <td><?= $jml1?></td>
                          <td></td>
                          <!-- <td></td> -->
                        </tr>
                        </tfoot>
                    </table>
                    <a href="<?=base_url()?>Admin/kePenelitian/<?=$id?>/<?=$tahunS?>" class="btn btn-success btn-sm float-right"><i class="fas fa-arrow-right"> Selanjutnya</i></a>
                  </div>
                  <div  class="tab-pane fade <?=$this->session->active1?> <?=$this->session->show1?>" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                  <table id="dtHorizontalExample1"class="table table-bordered table-striped" style="width: 100%;">
                         <thead style="width: 100%;">
                            <tr align="center">
                                <th rowspan="3">No</th>
                                <th rowspan="3">Jenis Kegiatan</th>
                                <th colspan="2">Beban Kerja</th>
                                <th rowspan="3">Masa Pelaksanaan Tugas</th>
                                <th colspan="3">Kinerja</th>
                                <th rowspan="3">Penilaian/Rekomendasi Asesor</th>
                                <!-- <th rowspan="3">Aksi</th> -->
                            </tr>
                            <tr align="center">
                                <th rowspan="2">Bukti Penugasan</th>
                                <th rowspan="2">Sks</th>
                                <th rowspan="2">Bukti Kinerja Penelitian</th>
                                <th colspan="2">Capaian</th>
                            </tr>
                            <tr align="center">
                                <th >%</th>
                                <th >Sks</th>
                            </tr>
                         </thead>
                         <tbody align="center">
                         <?php $i= 1; $jml=0; $jml1=0;foreach($penelitian as $pen){?>
                        <tr align="center">
                        <td><?=$i?></td>
                        <td align="left"><?=$pen->kegiatan?></td>
                        <td align="left">
                                <?=$pen->bukti_penugasan_bk?> <br>
                                <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasanbk?>">File Bukti Penugasan</a>
                                
                        </td>
                        <td><?=$pen->sks_bk?></td>
                        <td>
                        <?php
                                foreach($tahun as $t){
                                    if($t->id==$pen->masa_pelaksaan){
                                        if($t->semester =="0"){
                                            echo "Semester Ganjil "; 
                                        }else{
                                            echo "Semester Genap "; 
                                        }
                                        echo $t->tahun;
                                    }
                                }
                            ?></td>
                        <td>
                            <?=$pen->bukti_penugasan_k?><br>
                            <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasank?>">File Bukti kinerja Penelitian</a>
                        </td>
                        <td><?=$pen->persen_capaian?></td>
                        <td><?=$pen->sks_capaian?></td>
                        <td><?=$pen->penilaian_asesor?></td>
                        <!-- <td>
                                <a href="<?=base_url()?>Asesor/editPenelitian/<?=$pen->id?>/<?=$tahunS?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        </td> -->
                        </tr>
                        <?php $i++;$jml += (float)$pen->sks_bk; $jml1 += (float)$pen->sks_capaian; }?>
                        </tbody>
                        <tfoot>
                        <tr>
                          <td colspan="2" align="center">Jumlah Beban Kerja</td>
                          <td></td>
                          <td><?= $jml?></td>
                          <td colspan="2" align="center">Jumlah Kinerja</td>
                          <td></td>
                          <td><?= $jml1?></td>
                          <td></td>
                          <!-- <td></td> -->
                        </tr>
                        </tfoot>
                    </table>
                    <a href="<?=base_url()?>Admin/kePengabdian/<?=$id?>/<?=$tahunS?>"  class="btn btn-success btn-sm float-right" ><i class="fas fa-arrow-right"> Selanjutnya</i></a>
                    <a href="<?=base_url()?>Admin/kePendidikan/<?=$id?>/<?=$tahunS?>" class="btn btn-primary btn-sm float-right" ><i class="fas fa-arrow-left"> Sebelumnya</i></a>
                  </div>
                  <div class="tab-pane fade <?=$this->session->active2?> <?=$this->session->show2?>" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                  <table id="dtHorizontalExample2" class="table table-bordered table-striped" >
                  <thead>
                        <tr align="center">
                            <th rowspan="3">No</th>
                            <th rowspan="3">Jenis Kegiatan</th>
                            <th colspan="2">Beban Kerja</th>
                            <th rowspan="3">Masa Pelaksanaan Tugas</th>
                            <th colspan="3">Kinerja</th>
                            <th rowspan="3">Penilaian/Rekomendasi Asesor</th>
                            <!-- <th rowspan="3">Aksi</th> -->
                        </tr>
                        <tr align="center">
                            <th rowspan="2">Bukti Penugasan</th>
                            <th rowspan="2">Sks</th>
                            <th rowspan="2">Bukti Kinerja Pengabdian</th>
                            <th colspan="2">Capaian</th>
                        </tr>
                        <tr align="center">
                            <th >%</th>
                            <th >Sks</th>
                        </tr>
                        </thead>
                        <tbody align="center">
                        <?php $i= 1; $jml=0; $jml1=0;foreach($pengabdian as $pen){?>
                        <tr align="center">
                        <td><?=$i?></td>
                        <td align="left"><?=$pen->kegiatan?></td>
                        <td align="left">
                                <?=$pen->bukti_penugasan_bk?> <br>
                                <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasanbk?>">File Bukti Penugasan</a>
                                
                        </td>
                        <td><?=$pen->sks_bk?></td>
                        <td>
                        <?php
                                foreach($tahun as $t){
                                    if($t->id==$pen->masa_pelaksaan){
                                        if($t->semester =="0"){
                                            echo "Semester Ganjil "; 
                                        }else{
                                            echo "Semester Genap "; 
                                        }
                                        echo $t->tahun;
                                    }
                                }
                            ?>
                        </td>
                        <td>
                            <?=$pen->bukti_penugasan_k?><br>
                            <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasank?>">File Bukti kinerja Pengabdian</a>
                        </td>
                        <td><?=$pen->persen_capaian?></td>
                        <td><?=$pen->sks_capaian?></td>
                        <td><?=$pen->penilaian_asesor?></td>
                        <!-- <td>
                                <a href="<?=base_url()?>Asesor/editPengabdian/<?=$pen->id?>/<?=$tahunS?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        </td> -->
                        </tr>
                        <?php $i++;$jml += (float)$pen->sks_bk; $jml1 += (float)$pen->sks_capaian;}?>
                        </tbody>
                        <tfoot>
                        <tr>
                          <td colspan="2" align="center">Jumlah Beban Kerja</td>
                          <td></td>
                          <td><?= $jml?></td>
                          <td colspan="2" align="center">Jumlah Kinerja</td>
                          <td></td>
                          <td><?= $jml1?></td>
                          <td></td>
                          <!-- <td></td> -->
                        </tr>
                        </tfoot>
                    </table>
                    <a href="<?=base_url()?>Admin/kePenunjang/<?=$id?>/<?=$tahunS?>" class="btn btn-success btn-sm float-right" ><i class="fas fa-arrow-right"> Selanjutnya</i></a>
                    <a href="<?=base_url()?>Admin/kePenelitian/<?=$id?>/<?=$tahunS?>" class="btn btn-primary btn-sm float-right" ><i class="fas fa-arrow-left"> Sebelumnya</i></a>
                  </div>
                  <div class="tab-pane fade <?=$this->session->active3?> <?=$this->session->show3?>" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                  <table id="dtHorizontalExample3" class="table table-bordered table-striped" >
                  <thead>
                        <tr align="center">
                            <th rowspan="3">No</th>
                            <th rowspan="3">Jenis Kegiatan</th>
                            <th colspan="2">Beban Kerja</th>
                            <th rowspan="3">Masa Pelaksanaan Tugas</th>
                            <th colspan="3">Kinerja</th>
                            <th rowspan="3">Penilaian/Rekomendasi Asesor</th>
                            <!-- <th rowspan="3">Aksi</th> -->
                        </tr>
                        <tr align="center">
                            <th rowspan="2">Bukti Penugasan</th>
                            <th rowspan="2">Sks</th>
                            <th rowspan="2">Bukti Kinerja Penunjang</th>
                            <th colspan="2">Capaian</th>
                        </tr>
                        <tr align="center">
                            <th >%</th>
                            <th >Sks</th>
                        </tr>
                        </thead>
                        <tbody align="center">
                        <?php $i= 1; $jml=0; $jml1=0;foreach($penunjang as $pen){?>
                        <tr align="center">
                        <td><?=$i?></td>
                        <td align="left"><?=$pen->kegiatan?></td>
                        <td align="left">
                                <?=$pen->bukti_penugasan_bk?><br>
                                <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasanbk?>">File Bukti Penugasan</a>
                                
                        </td>
                        <td><?=$pen->sks_bk?></td>
                        <td>
                        <?php
                                foreach($tahun as $t){
                                    if($t->id==$pen->masa_pelaksaan){
                                        if($t->semester =="0"){
                                            echo "Semester Ganjil "; 
                                        }else{
                                            echo "Semester Genap "; 
                                        }
                                        echo $t->tahun;
                                    }
                                }
                            ?>
                        </td>
                        <td>
                            <?=$pen->bukti_penugasan_k?><br>
                            <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasank?>">File Bukti Kinerja Penunjang</a>
                        </td>
                        <td><?=$pen->persen_capaian?></td>
                        <td><?=$pen->sks_capaian?></td>
                        <td><?=$pen->penilaian_asesor?></td>
                        <!-- <td>
                                <a href="<?=base_url()?>Asesor/editPenunjang/<?=$pen->id?>/<?=$tahunS?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        </td> -->
                        </tr>
                        <?php $i++;$jml += (float)$pen->sks_bk; $jml1 += (float)$pen->sks_capaian;}?>
                        </tbody>
                        <tfoot>
                        <tr>
                          <td colspan="2" align="center">Jumlah Beban Kerja</td>
                          <td></td>
                          <td><?= $jml?></td>
                          <td colspan="2" align="center">Jumlah Kinerja</td>
                          <td></td>
                          <td><?= $jml1?></td>
                          <td></td>
                          <!-- <td></td> -->
                        </tr>
                        </tfoot>
                    </table>
                    <a href="<?=base_url()?>Admin/keKhusus/<?=$id?>/<?=$tahunS?>" class="btn btn-success btn-sm float-right" ><i class="fas fa-arrow-right"> Selanjutnya</i></a>
                    <a href="<?=base_url()?>Admin/kePengabdian/<?=$id?>/<?=$tahunS?>" class="btn btn-primary btn-sm float-right" ><i class="fas fa-arrow-left"> Sebelumnya</i></a>
                  </div>


                  <div class="tab-pane fade <?=$this->session->active6?> <?=$this->session->show6?>" id="custom-tabs-four-berkas" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                  <table id="example1a" class="table table-bordered" >
                <thead>
                <tr align="center">
                  <th>SPTJM Dosen</th>
                  <th>SPTJM Rektor</th>
                  <th>Pernyataan Asesor</th>
                </tr>
                </thead>
                <tbody align="center">
                <tr>
                  <td>
                       <a href="<?=base_url()?>Admin/file/file/file1.docx" type="button"  class="btn btn-success btn-sm"><i class="fas fa-download"> Download</i></a>
                  </td>
                  <td>
                       <a href="<?=base_url()?>Admin/file/file/file2.docx" type="button"   class="btn btn-success btn-sm"><i class="fas fa-download"> Download</i></a>
                  </td>
                  <td>
                  <?php if($dosen[0]->pertnyataan_as!="" || $dosen[0]->pertnyataan_as != null){?>
                        <a href="<?=base_url()?>Admin/file/<?=$dosen[0]->pertnyataan_as?>" type="button" class="btn btn-success btn-sm"><i class="fas fa-download"> Download</i></a>
                    <?php }else{?>
                          <p>File belum diunggah</p>
                    <?php }?>
                  </td>
                </tr>
                <!-- <?php $i=1; foreach($tahun as $ad){?> -->
                <tr>
                  <td>
                      
                  </td>
                  <td>
                      
                  </td>
                  <td>
                   
                  </td>
                </tr>
                <tr>
                  <td>
                  <?php if($dosen[0]->sptjm_dosen!="" || $dosen[0]->sptjm_dosen != null){?>
                        <a href="<?=base_url()?>Dosen/file/<?=$dosen[0]->sptjm_dosen?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-download"> Download</i></a>
                    <?php }else{?>
                          <p>File belum diunggah</p>
                    <?php }?>
                  </td>
                  <td>
                       
                  <?php if($dosen[0]->sptjm_pimpinan!="" || $dosen[0]->sptjm_pimpinan != null){?>
                        <a href="<?=base_url()?>Dosen/file/<?=$dosen[0]->sptjm_pimpinan?>" type="button" class="btn btn-primary btn-sm">Download SPTJM DOSEN</i></a>
                     <?php }else{?>
                           <p>File belum diunggah</p>
                     <?php }?>
                  </td>
                  <td>
                        <!-- <a href="<?=base_url()?>Dosen/bkd/" type="button" class="btn btn-success btn-sm"><i class="fas fa-download"> Download</i></a> -->
                  </td>
                </tr>
                <!-- <?php $i++;}?> -->
                </tbody>
              </table>
                    
              <a href="<?=base_url()?>Admin/kesimpulan/<?=$id?>/<?=$tahunS?>" class="btn btn-success btn-sm float-right"><i class="fas fa-arrow-right"> Kesimpulan</i></a>
                    <a href="" class="btn btn-primary btn-sm float-right" ><i class="fas fa-arrow-left"> Sebelumnya</i></a>
                    
                  </div>

                  <div class="tab-pane fade <?=$this->session->active4?> <?=$this->session->show4?>" id="custom-tabs-four-prof" role="tabpanel" aria-labelledby="custom-tabs-four-prof-tab">
                  <table id="dtHorizontalExample4" class="table table-bordered table-striped" >
                        <thead>
                        <tr align="center">
                            <th rowspan="3">No</th>
                            <th rowspan="3">Jenis Kegiatan</th>
                            <th colspan="2">Beban Kerja</th>
                            <th rowspan="3">Masa Pelaksanaan Tugas</th>
                            <th colspan="3">Kinerja</th>
                            <th rowspan="3">Penilaian/Rekomendasi Asesor</th>
                            <!-- <th rowspan="3">Aksi</th> -->
                        </tr>
                        <tr align="center">
                            <th rowspan="2">Bukti Penugasan</th>
                            <th rowspan="2">Sks</th>
                            <th rowspan="2">Bukti Kinerja</th>
                            <th colspan="2">Capaian</th>
                        </tr>
                        <tr align="center">
                            <th >%</th>
                            <th >Sks</th>
                        </tr>
                        </thead>
                        <tbody align="center">
                        <tr align="left">
                          <th >A</th>
                          <th colspan="9" >Menulis Buku</th>
                        </tr>
                        <?php $i= 1;  $jml=0; $jml1=0;foreach($khusus as $pen){ if($pen->jenis=="0"){?>
                        <tr align="center">
                        <td><?=$i?></td>
                        <td align="left"><?=$pen->kegiatan?></td>
                        <td align="left">
                                <?=$pen->bukti_penugasan_bk?><br>
                                <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasanbk?>">File Bukti Penugasan</a>
                                
                        </td>
                        <td><?=$pen->sks_bk?></td>
                        <td>
                        <?php
                                foreach($tahun as $t){
                                    if($t->id==$pen->masa_pelaksaan){
                                        if($t->semester =="0"){
                                            echo "Semester Ganjil "; 
                                        }else{
                                            echo "Semester Genap "; 
                                        }
                                        echo $t->tahun;
                                    }
                                }
                            ?>
                        </td>
                        <td>
                            <?=$pen->bukti_penugasan_k?><br>
                            <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasank?>">File Bukti Kinerja</a>
                        </td>
                        <td><?=$pen->persen_capaian?></td>
                        <td><?=$pen->sks_capaian?></td>
                        <td><?=$pen->penilaian_asesor?></td>
                        <!-- <td>
                                <a href="<?=base_url()?>Asesor/editKhusus/<?=$pen->id?>/<?=$tahunS?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        </td> -->
                        </tr>
                        <?php $i++;$jml += (float)$pen->sks_bk; $jml1 += (float)$pen->sks_capaian;}}?> 
                        <tr align="left">
                          <th >B</th>
                          <th colspan="9">Menghasilkan Karya Ilmiah</th>
                        </tr>
                        <?php $i= 1; foreach($khusus as $pen){ if($pen->jenis=="1"){?>
                        <tr>
                        <td><?=$i?></td>
                        <td align="left"><?=$pen->kegiatan?></td>
                        <td align="left">
                                <?=$pen->bukti_penugasan_bk?><br>
                                <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasanbk?>">File Bukti Penugasan</a>
                                
                        </td>
                        <td><?=$pen->sks_bk?></td>
                        <td>
                        <?php
                                foreach($tahun as $t){
                                    if($t->id==$pen->masa_pelaksaan){
                                        if($t->semester =="0"){
                                            echo "Semester Ganjil "; 
                                        }else{
                                            echo "Semester Genap "; 
                                        }
                                        echo $t->tahun;
                                    }
                                }
                            ?>
                            </td>
                        <td>
                            <?=$pen->bukti_penugasan_k?><br>
                            <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasank?>">File Bukti Penugasan</a>
                        </td>
                        <td><?=$pen->persen_capaian?></td>
                        <td><?=$pen->sks_capaian?></td>
                        <td><?=$pen->penilaian_asesor?></td>
                        <!-- <td>
                                <a href="<?=base_url()?>Asesor/editKhusus/<?=$pen->id?>/<?=$tahunS?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        </td> -->
                        </tr>
                        <?php $i++;$jml += (float)$pen->sks_bk; $jml1 += (float)$pen->sks_capaian;}}?>
                        <tr align="left">
                          <th>C</th>
                          <th colspan="9" >Menyebarluaskan Gagasan</th>
                        </tr>
                        <?php $i= 1; foreach($khusus as $pen){ if($pen->jenis=="2"){?>
                        <tr>
                        <td><?=$i?></td>
                        <td align="left"><?=$pen->kegiatan?></td>
                        <td align="left">
                                <?=$pen->bukti_penugasan_bk?><br>
                                <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasanbk?>">File Bukti Penugasan</a>
                                
                        </td>
                        <td><?=$pen->sks_bk?></td>
                        <td>
                        <?php
                                foreach($tahun as $t){
                                    if($t->id==$pen->masa_pelaksaan){
                                        if($t->semester =="0"){
                                            echo "Semester Ganjil "; 
                                        }else{
                                            echo "Semester Genap "; 
                                        }
                                        echo $t->tahun;
                                    }
                                }
                            ?>
                        </td>
                        <td>
                            <?=$pen->bukti_penugasan_k?><br>
                            <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasank?>">File Bukti Penugasan</a>
                        </td>
                        <td><?=$pen->persen_capaian?></td>
                        <td><?=$pen->sks_capaian?></td>
                        <td><?=$pen->penilaian_asesor?></td>
                        <!-- <td>
                                <a href="<?=base_url()?>Asesor/editKhusus/<?=$pen->id?>/<?=$tahunS?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        </td> -->
                        </tr>
                        <?php $i++;$jml += (float)$pen->sks_bk; $jml1 += (float)$pen->sks_capaian;}}?>
                        </tbody>
                        <tfoot>
                        <tr>
                          <td colspan="2" align="center">Jumlah Beban Kerja</td>
                          <td></td>
                          <td><?= $jml?></td>
                          <td colspan="2" align="center">Jumlah Kinerja</td>
                          <td></td>
                          <td><?= $jml1?></td>
                          <td></td>
                          <!-- <td></td> -->
                        </tr>
                        </tfoot>
                    </table>
                      <a href="<?=base_url()?>Admin/kesimpulan/<?=$id?>/<?=$tahunS?>" class="btn btn-success btn-sm float-right"><i class="fas fa-arrow-right"> Kesimpulan</i></a>
             
                    <a href="<?=base_url()?>Admin/kePenunjang/<?=$id?>/<?=$tahunS?>" class="btn btn-primary btn-sm float-right" ><i class="fas fa-arrow-left"> Sebelumnya</i></a>
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
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

  <script>
            function showImage(src,target) {
                var fr=new FileReader();
                // when image is loaded, set the src of the image where you want to display it
                fr.onload = function(e) { target.src = this.result; };
                src.addEventListener("change",function() {
                    // fill fr with image data    
                    document.getElementById("file").innerHTML  = src.files[0]['name']
                    fr.readAsDataURL(src.files[0]);
                });
            }

            function showImage1(src) {
                var fr=new FileReader();
                // when image is loaded, set the src of the image where you want to display it
                src.addEventListener("change",function() {
                    // fill fr with image data    
                    document.getElementById("file1").innerHTML  = src.files[0]['name']
                    fr.readAsDataURL(src.files[0]);
                });
            }

            function showImage2(src) {
                var fr=new FileReader();
                // when image is loaded, set the src of the image where you want to display it
                src.addEventListener("change",function() {
                    // fill fr with image data    
                    document.getElementById("file2").innerHTML  = src.files[0]['name']
                    fr.readAsDataURL(src.files[0]);
                });
            }

            function showImage3(src) {
                var fr=new FileReader();
                // when image is loaded, set the src of the image where you want to display it
                src.addEventListener("change",function() {
                    // fill fr with image data    
                    document.getElementById("file3").innerHTML  = src.files[0]['name']
                    fr.readAsDataURL(src.files[0]);
                });
            }

            function showImage4(src) {
                var fr=new FileReader();
                // when image is loaded, set the src of the image where you want to display it
                src.addEventListener("change",function() {
                    // fill fr with image data    
                    document.getElementById("file4").innerHTML  = src.files[0]['name']
                    fr.readAsDataURL(src.files[0]);
                });
            }

            function showImage5(src) {
                var fr=new FileReader();
                // when image is loaded, set the src of the image where you want to display it
                src.addEventListener("change",function() {
                    // fill fr with image data    
                    document.getElementById("file5").innerHTML  = src.files[0]['name']
                    fr.readAsDataURL(src.files[0]);
                });
            }

            function showImage6(src) {
                var fr=new FileReader();
                // when image is loaded, set the src of the image where you want to display it
                src.addEventListener("change",function() {
                    // fill fr with image data    
                    document.getElementById("file6").innerHTML  = src.files[0]['name']
                    fr.readAsDataURL(src.files[0]);
                });
            }

            function showImage7(src) {
                var fr=new FileReader();
                // when image is loaded, set the src of the image where you want to display it
                src.addEventListener("change",function() {
                    // fill fr with image data    
                    document.getElementById("file7").innerHTML  = src.files[0]['name']
                    fr.readAsDataURL(src.files[0]);
                });
            }

            function showImage8(src) {
                var fr=new FileReader();
                // when image is loaded, set the src of the image where you want to display it
                src.addEventListener("change",function() {
                    // fill fr with image data    
                    document.getElementById("file8").innerHTML  = src.files[0]['name']
                    fr.readAsDataURL(src.files[0]);
                });
            }

            function showImage9(src) {
                var fr=new FileReader();
                // when image is loaded, set the src of the image where you want to display it
                src.addEventListener("change",function() {
                    // fill fr with image data    
                    document.getElementById("file9").innerHTML  = src.files[0]['name']
                    fr.readAsDataURL(src.files[0]);
                });
            }

                var src = document.getElementById("src");
                var src1 = document.getElementById("src1");
                var src2 = document.getElementById("src2");
                var src3 = document.getElementById("src3");
                var src4 = document.getElementById("src4");
                var src5 = document.getElementById("src5");
                var src6 = document.getElementById("src6");
                var src7 = document.getElementById("src7");
                var src8 = document.getElementById("src8");
                var src9 = document.getElementById("src9");
                var target = document.getElementById("target");
                showImage(src,target);
                showImage1(src1);
                showImage2(src2);
                showImage3(src3);
                showImage4(src4);
                showImage5(src5);
                showImage6(src6);
                showImage7(src7);
                showImage8(src8);
                showImage9(src9);
       </script>