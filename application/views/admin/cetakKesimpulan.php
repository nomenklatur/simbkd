
<?php
function tgl_indo($tanggal){
    $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);
 
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    // return $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>
<h3 align="center">KESIMPULAN</h3>
<table class="table" style=" font-family:Calibri ; font-size:11;">
                  <tbody>
                    <tr>
                      <td width="250px">NIP</td>
                      <td width="20px">:</td>
                      <td><?=$dosen[0]->nip?></td>
                    </tr>
                    <tr>
                      <td width="250px">NAMA</td>
                      <td width="20px">:</td>
                      <td><?=$dosen[0]->nama?></td>
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
                    <tr>
                      <td width="250px">STATUS DOSEN</td>
                      <td width="20px">:</td>
                      <td><?=$pendidikan[0]->status?></td>
                    </tr>
                    </tr>
                    <tr>
                      <td width="250px">TAHUN AKADEMIK</td>
                      <td width="20px">:</td>
                      <td>
                      <?php
                                foreach($tahun as $t){
                                        if($t->semester =="0"){
                                            echo "Semester Ganjil "; 
                                        }else{
                                            echo "Semester Genap "; 
                                        }
                                        echo $t->tahun;
                                }
                            ?>
                      </td>
                    </tr>
                    </tbody>
                </table>

                <table class="table"  border="1" style="border-collapse: collapse; font-family:Calibri ; font-size:11;" width="100%">
                <thead>
                <tr align="center">
                  <th>KETERANGAN  </th>
                  <th>SYARAT </th>
                  <th>KINERJA</th>
                  <th>KESIMPULAN DOSEN </th>
                  <th>KESIMPULAN ASESOR 1</th>
                  <th>KESIMPULAN ASESOR 2 </th>
                  <th>KESIMPULAN AKHIR</th>
                </tr>
                </thead>
                <tbody align="center">
                <tr>
                  <td>PENDIDIKAN</td>
                  <td>Tidak Boleh Kosong</td>
                  <td><?php 
                        $jml = 0;
                      foreach($pendidikan as $pen){
                          $jml +=(float)$pen->sks_capaian;
                      }

                      echo $jml;
                  ?></td>
                  <td><?=@$kesimpulan[0]->pendidikan?></td>
                  <td><?=@$kesimpulan1[0]->pendidikan?></td>
                  <td><?=@$kesimpulan2[0]->pendidikan?></td>
                  <td></td>
                </tr>
                <tr>
                  <td>PENELITIAN</td>
                  <td>Tidak Boleh Kosong</td>
                  <td><?php 
                        $jml = 0;
                      foreach($penelitian as $pen){
                          $jml +=(float)$pen->sks_capaian;
                      }

                      echo $jml;
                  ?></td>
                  <td><?=@$kesimpulan[0]->penelitian?></td>
                  <td><?=@$kesimpulan1[0]->penelitian?></td>
                  <td><?=@$kesimpulan2[0]->penelitian?></td>
                  <td></td>
                </tr>
                <tr>
                  <td>PENGABDIAN</td>
                  <td>Tidak Boleh Kosong</td>
                  <td><?php 
                        $jml = 0;
                      foreach($pengabdian as $pen){
                          $jml +=(float)$pen->sks_capaian;
                      }

                      echo $jml;
                  ?></td>
                  <td><?=@$kesimpulan[0]->pengabdian?></td>
                  <td><?=@$kesimpulan1[0]->pengabdian?></td>
                  <td><?=@$kesimpulan2[0]->pengabdian?></td>
                  <td></td>
                </tr>
                <tr>
                  <td>PENUNJANG</td>
                  <td></td>
                  <td><?php 
                        $jml = 0;
                      foreach($penunjang as $pen){
                          $jml +=(float)$pen->sks_capaian;
                      }

                      echo $jml;
                  ?></td>
                  <td><?=@$kesimpulan[0]->penunjang?></td>
                  <td><?=@$kesimpulan1[0]->penunjang?></td>
                  <td><?=@$kesimpulan2[0]->penunjang?></td>
                  <td></td>
                </tr>
                <tr>
                  <td>PENDIDIKAN + PENELITIAN</td>
                  <td><i>Minimal 9 SKS</i></td>
                  <td><?php 
                      $jml = 0;$jml1 = 0;
                      foreach($pendidikan as $pen){
                          $jml +=(float)$pen->sks_capaian;
                      }
                      foreach($penelitian as $pen){
                        $jml1 +=(float)$pen->sks_capaian;
                    }

                      echo (float)$jml + (float)$jml1;
                  ?></td>
                  <td><?=@$kesimpulan[0]->pd_pl?></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>PENGABDIAN + PENUNJANG</td>
                  <td>Tidak Boleh Kosong</td>
                  <td><?php 
                        $jml = 0;$jml1 = 0;
                      foreach($pengabdian as $pen){
                          $jml +=(float)$pen->sks_capaian;
                      }

                      foreach($penunjang as $pen){
                        $jml1 +=(float)$pen->sks_capaian;
                    }

                      echo $jml + $jml1;
                  ?></td>
                  <td><?=@$kesimpulan[0]->pg_pj?></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>TOTAL KINERJA</td>
                  <td>Minimal 12 SKS Max 16 SKS</td>
                  <td>
                  <?php 
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
                  ?>
                  </td>
                  <td><?=@$kesimpulan[0]->total?></td>
                  <td><?=@$kesimpulan1[0]->total?></td>
                  <td><?=@$kesimpulan2[0]->total?></td>
                  <td></td>
                </tr>
                </tbody>
              </table>
              <br><br>
              <table class="table" width="100%" style="font-family:Calibri ; font-size:11; font-weight:bold">
                    <tr>
                        <td width="70%"></td>
                        <td>Tarutung, <?=tgl_indo(date('Y-m-d'))?> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Dosen,</td>
                    </tr>
              </table>
              <br><br>
              <table class="table" width="100%" style="font-family:Calibri ; font-size:11; font-weight:bold">
                    <tr>
                        <td width="70%"></td>
                        <td><?= $dosen[0]->nama?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>NIP. <?= $dosen[0]->nip?></td>
                    </tr>
              </table>