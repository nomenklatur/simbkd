<table width="100%">
    <tr styel="align:;eft">
        <td style="width:5%"><img width="80px" heigth="80px" src="./images/logo-new1.png" /></td>
        <td text-align="left" style="width:100%">
            <P align="center" style="line-height:10%;font-weight:bold;font-family:arial ; font-size:14;" >KEMENTERIAN AGAMA REPUBLIK INDONESIA</P>
            <P align="center" style="line-height:10%;font-weight:bold;font-family:arial ; font-size:12">INSTITUT AGAMA KRISTEN  NEGERI (IAKN) TARUTUNG</P>
            <P align="center" style="line-height:10%;;font-family:arial ; font-size:9">
                Kampus I : Jalan. Pemuda Ujung No. 17 Telp/Fax. (0633) 21628 Tarutung
            </P>
            <P align="center" style="line-height:10%;;font-family:arial ; font-size:9">
            Kampus I : Jalan. Raya Tarutung-Siborongborong KM 11 Silangkitang
            </P>
            <P align="center" style="line-height:10%;;font-family:arial ; font-size:9">
            Kec. Sipoholon Telp. (0633) 322060, 322062 Tapanuli Utara     
            </P>
            <P align="center" style="line-height:10%;;font-family:arial ; font-size:9">
            Sumatera Utara  22411 
            </P>
        </td>
    </tr>
    <hr style="width:100%; heigth:3px;">
 </table>

<br>
<p style="text-transform:uppercase; font-weight:bold" align="center">
FORMAT PENILAIAN BEBAN KERJA DOSEN<br>
<?php foreach($studi as $s){
    if($s->id==$dosen[0]->program_studi){
            echo $s->program_studi;
    }
}?>
</p>

<table class="table" style="border-collapse: collapse; font-family:arial ; font-size:10;" width="80%">
                  <tbody>
                    <tr>
                      <td width="100px">NAMA</td>
                      <td width="20px">:</td>
                      <td><?=$dosen[0]->nama?></td>
                    </tr>
                    <tr>
                      <td width="150px">ASAL</td>
                      <td width="20px">:</td>
                      <td>IAKN Tarutung</td>
                    </tr>
                    <tr>
                      <td width="100px">TAHUN SEMESTER</td>
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
                      <td width="100px">JENIS DOSEN</td>
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
                      <td><?=@$pendidikan[0]->status?></td>
                    </tr>
                    </tbody>
                </table>
<table  class="table"  border="1" style="border-collapse: collapse; font-family:arial ; font-size:10;" width="100%">
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

              <table class="table" style="border-collapse: collapse; font-family:arial ; font-size:9;" width="50%">
                  <tbody>
                  <tr>
                      <td width="90px"><strong>Keterangan</strong></td>
                      <td width="20px"></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td width="90px">M</td>
                      <td width="20px">=</td>
                      <td>Memenuhi Undang- Undang</td>
                    </tr>
                    <tr>
                      <td width="90px">T</td>
                      <td width="20px">=</td>
                      <td>Tidak Memenuhi Undang- undang	</td>
                    </tr>
                    </tbody>
                </table>

                <table class="table" width="100%" style="font-family:arial ; font-size:11; ">
                    <tr>
                        <td width="70%"></td>
                        <td>Tarutung,  </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Assesor <?=$asesor?></td>
                    </tr>
              </table>
              <br><br>
              <table class="table" width="100%" style="font-family:Calibri ; font-size:11;">
                    <tr>
                        <td width="70%"></td>
                        <td><?= @$as[0]->nama?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>NIRA. <?= @$as[0]->nira?></td>
                    </tr>
              </table>