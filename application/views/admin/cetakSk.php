

<p align="left" style="margin-left:100px">
<?=$lampiran?><br>
<?=$ket1?><br>
<?=$ket2?><br>
</p>

<?php $j=1; foreach($program_studi as $ps){?>
            <strong><?= $j ?>. <?= $ps->program_studi ?></strong>
              <table class="table" style="border-collapse:collapse;font-family:Calibri ; font-size:11;"  border="1" width="100%" >
                <thead>
                <tr align="center">
                  <th rowspan="2" width="5%">No</th>
                  <th rowspan="2">NAMA DOSEN</th>
                  <th colspan="2">PENILAI</th>
                </tr>
                <tr align="center">
                  <th width="30%">ASESOR 1</th>
                  <th width="30%">ASESOR 2</th>
                </tr>
                </thead>
                <tbody align="center">
                <?php $i=1; foreach($dosen as $ad){ if($ad->program_studi == $ps->id){?>
                <tr>
                  <td><?=$i?></td>
                  <td align="left"><?=$ad->nama?></td>
                  <td align="left" width="30%">
                    <?php 
                            foreach($sk as $s){ 
                                if($ad->id == $s->id_dosen){
                                    foreach($asesor as $as){ 
                                        if($as->id == $s->asesor1){
                                            echo $as->nama;
                                        }
                                     }
                                }
                             }
                    ?>
                  </td>
                  <td align="left" width="30%">
                  <?php 
                            foreach($sk as $s){ 
                                if($ad->id == $s->id_dosen){
                                    foreach($asesor as $as){ 
                                        if($as->id == $s->asesor2){
                                            echo $as->nama;
                                        }
                                     }
                                }
                             }
                    ?>
                  </td>
                </tr>
                <?php $i++;}}?>
                </tbody>
              </table><br><br>
                <?php $j++;}?>

          <table class="table" width="100%" style="font-family:Calibri ; font-size:11; font-weight:bold">
                    <tr>
                        <td width="70%"></td>
                        <td>Ditetapkan di : <?=$tempat?> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Pada tanggal : <?=$tanggal?> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Rektor, </td>
                    </tr>
              </table>
              <br><br>
              <table class="table" width="100%" style="font-family:Calibri ; font-size:11; font-weight:bold">
                    <tr>
                        <td width="70%"></td>
                        <td><?=$nama?></td>
                    </tr>
                    <!-- <tr>
                        <td></td>
                        <td>NIP. <?= $dosen[0]->nip?></td>
                    </tr> -->
              </table>