<h3 align="center">
LAPORAN BEBAN KERJA DOSEN
</h3>
<h4 align="left">
I. BIODATA
</h4>
<table class="table" border="1" style="font-family:Calibri ; font-size:11;" width="50%">
                  <thead>                  
                    <tr >
                      <th width="250px" align="right">No. Sertifikat :</th>
                      <td align="left"><?= $dosen[0]->no_sertifikat ?></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th width="250px" align="right">NIP :</th>
                      <td align="left"><?= $dosen[0]->nip ?></td>
                    </tr>
                    <tr>
                    <th width="250px" align="right">NIDN :</th>
                      <td align="left"><?= $dosen[0]->nidn ?></td>
                    </tr>
                    <tr>
                      <th width="250px" align="right">Nama :</th>
                      <td align="left"><?= $dosen[0]->nama ?></td>
                    </tr>
                    <tr>
                      <th width="250px" align="right">Nama PT. :</th>
                      <td align="left"><?= $dosen[0]->nama_pt ?></td>
                    </tr>
                    <tr>
                      <th width="250px" align="right">Alamat PT. :</th>
                      <td align="left"><?= $dosen[0]->alamat_pt ?></td>
                    </tr>
                    <tr>
                      <th width="250px" align="right">Fakultas :</th>
                      <td align="left">
                          <?php foreach($fakultas as $af){
                            if($dosen[0]->fakultas  ==  $af->id){
                                    echo $af->fakultas;
                            }
                        }?>
                      </td>
                    </tr>
                    <tr>
                      <th width="250px" align="right">Program Studi :</th>
                      <td align="left">
                        <?php foreach($studi as $af){
                              if($dosen[0]->program_studi  ==  $af->id){
                                      echo $af->program_studi;
                              }
                          }?>
                      </td>
                    </tr>
                    <tr>
                      <th width="250px" align="right">jab Fungsional :</th>
                      <td align="left"><?= $dosen[0]->jab_fungsional ?></td>
                    </tr>
                    <tr>
                      <th width="250px" align="right">Golongan :</th>
                      <td align="left"><?= $dosen[0]->golongan ?></td>
                    </tr>
                    <tr>
                      <th width="250px" align="right">Pendidikan S1 :</th>
                      <td align="left"><?= $dosen[0]->pend_s1 ?></td>
                    </tr>
                    <tr>
                      <th width="250px" align="right">Ijazah S1 :</th>
                      <td align="left">
                        <?php if($dosen[0]->ijazah_s1 != null || $dosen[0]->ijazah_s1!= ""){?>
                        <a href="<?= base_url()?>uploads/<?=$dosen[0]->ijazah_s1?>" target="_blank"><i class="far fa-file"> Lihat Dokumen</i></a></td>
                        <?php }else{?>
                          File belum diunggah
                        <?php }?>
                    </tr>
                    <tr>
                      <th width="250px" align="right">Transkrip S1 :</th>
                      <td align="left">
                        <?php if($dosen[0]->transkrip_s1 != null || $dosen[0]->transkrip_s1!= ""){?>
                        <a href="<?= base_url()?>uploads/<?=$dosen[0]->transkrip_s1?>" target="_blank"><i class="far fa-file"> Lihat Dokumen</i></a></td>
                        <?php }else{?>
                          File belum diunggah
                        <?php }?>
                    </tr>
                    <tr>
                      <th width="250px" align="right">Judul Skripsi :</th>
                      <td align="left"><?= $dosen[0]->judul_skripsi ?></td>
                    </tr>
                    <tr>
                      <th width="250px" align="right">Pendidikan S2 :</th>
                      <td align="left"><?= $dosen[0]->pend_s2 ?></td>
                    </tr>
                    <tr>
                      <th width="250px" align="right">Ijazah S2 :</th>
                      <td align="left">
                        <?php if($dosen[0]->ijazah_s2 != null || $dosen[0]->ijazah_s2!= ""){?>
                        <a href="<?= base_url()?>uploads/<?=$dosen[0]->ijazah_s2?>" target="_blank"><i class="far fa-file"> Lihat Dokumen</i></a></td>
                        <?php }else{?>
                          File belum diunggah
                        <?php }?>
                    </tr>
                    <tr>
                      <th width="250px" align="right">Transkrip S2 :</th>
                      <td align="left">
                        <?php if($dosen[0]->transkrip_s2 != null || $dosen[0]->transkrip_s2!= ""){?>
                        <a href="<?= base_url()?>uploads/<?=$dosen[0]->transkrip_s2?>" target="_blank"><i class="far fa-file"> Lihat Dokumen</i></a></td>
                        <?php }else{?>
                          File belum diunggah
                        <?php }?>
                    </tr>
                    <tr>
                      <th width="250px" align="right">Judul Tesis :</th>
                      <td align="left"><?= $dosen[0]->judul_tesis ?></td>
                    </tr>
                    <tr>
                      <th width="250px" align="right">Pendidikan S3 :</th>
                      <td align="left"><?= $dosen[0]->pend_s3 ?></td>
                    </tr>
                    <tr>
                      <th width="250px" align="right">Ijazah S3 :</th>
                      <td align="left">
                      <?php if($dosen[0]->ijazah_s3 != null || $dosen[0]->ijazah_s3!= ""){?>
                        <a href="<?= base_url()?>uploads/<?=$dosen[0]->ijazah_s3?>" target="_blank"><i class="far fa-file"> Lihat Dokumen</i></a></td>
                        <?php }else{?>
                          File belum diunggah
                        <?php }?>
                    </tr>
                    <tr>
                      <th width="250px" align="right">Transkrip S2 :</th>
                      <td align="left">
                        <?php if($dosen[0]->transkrip_s3 != null || $dosen[0]->transkrip_s3!= ""){?>
                        <a href="<?= base_url()?>uploads/<?=$dosen[0]->transkrip_s3?>" target="_blank"><i class="far fa-file"> Lihat Dokumen</i></a></td>
                        <?php }else{?>
                          File belum diunggah
                        <?php }?>
                    </tr>
                    <tr>
                      <th width="250px" align="right">Judul Disertasi :</th>
                      <td align="left"><?= $dosen[0]->judul_disertasi ?></td>
                    </tr>
                    <tr>
                      <th width="250px" align="right">Jenis Dosen :</th>
                      <td align="left">
                       <?php foreach($jenis_dosen as $j){
                                if($j->id == $dosen[0]->jenis_dosen){
                                  echo $j->jenis_dosen;
                                }

                          }?>
                      </td>
                    </tr>
                    <tr>
                      <th width="250px" align="right">Status Dosen :</th>
                      <td align="left"><?= $pendidikan[0]->status ?></td>
                    </tr>
                    <tr>
                      <th width="250px" align="right">File Jenis Dosen :</th>
                      <td align="left">
                        <?php if($dosen[0]->file_jenis_dosen != null || $dosen[0]->file_jenis_dosen!= ""){?>
                        <a href="<?= base_url()?>uploads/<?=$dosen[0]->file_jenis_dosen?>" target="_blank"><i class="far fa-file"> Lihat Dokumen</i></a></td>
                        <?php }else{?>
                          File belum diunggah
                        <?php }?>
                    </tr>
                    <tr>
                      <th width="250px" align="right">Bidang Ilmu :</th>
                      <td align="let"><?= $dosen[0]->bidang_ilmu ?></td>
                    </tr>
                    <tr>
                      <th width="250px" align="right">Minat :</th>
                      <td align="left"><?= $dosen[0]->minat ?></td>
                    </tr>
                    <tr>
                      <th width="250px" align="right">No. Hp :</th>
                      <td align="left"><?= $dosen[0]->no_hp ?></td>
                    </tr>
                    <tr>
                      <th width="250px" align="right">Email :</th>
                      <td align="left"><?= $dosen[0]->email ?></td>
                    </tr>
                    <tr>
                      <th width="250px" align="right">Pimpinan :</th>
                      <td align="left"><?= $dosen[0]->pimpinan ?></td>
                    </tr>
                    <tr>
                      <th width="250px" align="right">SPTJM :</th>
                      <td align="left">
                      <?php if($dosen[0]->sptjm != null || $dosen[0]->sptjm!= ""){?>  
                        <a href="<?= base_url()?>uploads/<?=$dosen[0]->sptjm?>" target="_blank"><i class="far fa-file"> Lihat Dokumen</i></a>
                      <?php }else{?>
                        File belum diunggah
                      <?php }?>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <h4 align="left">
                II. BIDANG PENDIDIKAN
                </h4>
                <table border="1" style="font-family:Calibri ; font-size:11;" width="100%">
                        <thead>
                        <tr align="center">
                            <th rowspan="3">No</th>
                            <th rowspan="3">Jenis Kegiatan</th>
                            <th colspan="2">Beban Kerja</th>
                            <th rowspan="3">Masa Pelaksanaan Tugas</th>
                            <th colspan="3">Kinerja</th>
                            <th rowspan="3">Penilaian/Rekomendasi Asesor</th>
                        </tr>
                        <tr align="center">
                            <th rowspan="2">Bukti Penugasan</th>
                            <th rowspan="2">Sks</th>
                            <th rowspan="2">Bukti Dokumen</th>
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
                                <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasanbk?>">berkas : <br>dokumen ke-1</a>
                                
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
                        <td align="left">
                            <?=$pen->bukti_penugasan_k?> <br>
                            <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasank?>">berkas : <br>dokumen ke-1</a>
                        </td>
                        <td><?=$pen->persen_capaian?></td>
                        <td><?=$pen->sks_capaian?></td>
                        <td><?=$pen->penilaian_asesor?></td>
                        </tr>
                        <?php $i++; $jml += (float)$pen->sks_bk; $jml1 += (float)$pen->sks_capaian; }?>
                        </tbody>
                        <tfoot>
                        <tr>
                          <td colspan="2" align="center">Jumlah Beban Kerja</td>
                          <td></td>
                          <td align="center"><?= $jml?></td>
                          <td colspan="2" align="center">Jumlah Kinerja</td>
                          <td></td>
                          <td align="center"><?= $jml1?></td>
                          <td></td>
                        </tr>
                        </tfoot>
                    </table>
                    <h4 align="left">
                      III. BIDANG PENELITIAN
                  </h4>
                  <table class="table" style="font-family:Calibri ; font-size:11;"  border="1" width="100%">
                         <thead style="width: 100%;">
                            <tr align="center">
                                <th rowspan="3">No</th>
                                <th rowspan="3">Jenis Kegiatan</th>
                                <th colspan="2">Beban Kerja</th>
                                <th rowspan="3">Masa Pelaksanaan Tugas</th>
                                <th colspan="3">Kinerja</th>
                                <th rowspan="3">Penilaian/Rekomendasi Asesor</th>
                            </tr>
                            <tr align="center">
                                <th rowspan="2">Bukti Penugasan</th>
                                <th rowspan="2">Sks</th>
                                <th rowspan="2">Bukti Dokumen</th>
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
                                <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasanbk?>">berkas : <br>dokumen ke-2</a>
                                
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
                            <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasank?>">berkas : <br>dokumen ke-2</a>
                        </td>
                        <td><?=$pen->persen_capaian?></td>
                        <td><?=$pen->sks_capaian?></td>
                        <td><?=$pen->penilaian_asesor?></td>
                        </tr>
                        <?php $i++;$jml += (float)$pen->sks_bk; $jml1 += (float)$pen->sks_capaian; }?>
                        </tbody>
                        <tfoot>
                        <tr>
                          <td colspan="2" align="center">Jumlah Beban Kerja</td>
                          <td></td>
                          <td align="center"><?= $jml?></td>
                          <td colspan="2" align="center">Jumlah Kinerja</td>
                          <td></td>
                          <td align="center"><?= $jml1?></td>
                          <td></td>
                        </tr>
                        </tfoot>
                    </table>
                    <h4 align="left">
                      IV. BIDANG PENGABDIAN
                  </h4>
                  <table class="table" style="font-family:Calibri ; font-size:11;"  border="1" width="100%" >
                  <thead>
                        <tr align="center">
                            <th rowspan="3">No</th>
                            <th rowspan="3">Jenis Kegiatan</th>
                            <th colspan="2">Beban Kerja</th>
                            <th rowspan="3">Masa Pelaksanaan Tugas</th>
                            <th colspan="3">Kinerja</th>
                            <th rowspan="3">Penilaian/Rekomendasi Asesor</th>
                        </tr>
                        <tr align="center">
                            <th rowspan="2">Bukti Penugasan</th>
                            <th rowspan="2">Sks</th>
                            <th rowspan="2">Bukti Dokumen</th>
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
                                <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasanbk?>">berkas : <br>dokumen ke-3</a>
                                
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
                            <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasank?>">berkas : <br>dokumen ke-3</a>
                        </td>
                        <td><?=$pen->persen_capaian?></td>
                        <td><?=$pen->sks_capaian?></td>
                        <td><?=$pen->penilaian_asesor?></td>
                        </tr>
                        <?php $i++;$jml += (float)$pen->sks_bk; $jml1 += (float)$pen->sks_capaian;}?>
                        </tbody>
                        <tfoot>
                        <tr>
                          <td colspan="2" align="center">Jumlah Beban Kerja</td>
                          <td></td>
                          <td align="center"><?= $jml?></td>
                          <td colspan="2" align="center">Jumlah Kinerja</td>
                          <td></td>
                          <td align="center"><?= $jml1?></td>
                          <td></td>
                        </tr>
                        </tfoot>
                    </table>
                    <h4 align="left">
                      V. BIDANG PENUNJANG
                  </h4>
                  <table class="table" style="font-family:Calibri ; font-size:11;"  border="1" width="100%" >
                  <thead>
                        <tr align="center">
                            <th rowspan="3">No</th>
                            <th rowspan="3">Jenis Kegiatan</th>
                            <th colspan="2">Beban Kerja</th>
                            <th rowspan="3">Masa Pelaksanaan Tugas</th>
                            <th colspan="3">Kinerja</th>
                            <th rowspan="3">Penilaian/Rekomendasi Asesor</th>
                        </tr>
                        <tr align="center">
                            <th rowspan="2">Bukti Penugasan</th>
                            <th rowspan="2">Sks</th>
                            <th rowspan="2">Bukti Dokumen</th>
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
                                <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasanbk?>">berkas : <br>dokumen ke-4</a>
                                
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
                            <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasank?>">berkas : <br>dokumen ke-4</a>
                        </td>
                        <td><?=$pen->persen_capaian?></td>
                        <td><?=$pen->sks_capaian?></td>
                        <td><?=$pen->penilaian_asesor?></td>
                        </tr>
                        <?php $i++;$jml += (float)$pen->sks_bk; $jml1 += (float)$pen->sks_capaian;}?>
                        </tbody>
                        <tfoot>
                        <tr>
                          <td colspan="2" align="center">Jumlah Beban Kerja</td>
                          <td></td>
                          <td align="center"><?= $jml?></td>
                          <td colspan="2" align="center">Jumlah Kinerja</td>
                          <td></td>
                          <td align="center"><?= $jml1?></td>
                          <td></td>
                        </tr>
                        </tfoot>
                    </table>