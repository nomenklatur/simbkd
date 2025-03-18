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
 
    // return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    return $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

?>
<style>
    p{
      display: block;
      height:80px
    }
    hr{
      width:100%;
    }
</style>
<p style="font-family:Calibri ; font-size:12; font-weight:bold;height:30px" align="center">LAPORAN CAPAIAN KINERJA HARIAN <br>
PEGAWAI NEGERI SIPIL KEMENTERIAN AGAMA
</p>
            <table class="table" style="border-collapse: collapse;font-family:Calibri ; font-size:10;height:30px" width="50%">
                <tr align="left">
                  <th>NAMA</th>
                  <th>:</th>
                  <th><?= $dosen[0]->nama?></th>
                </tr>
                <tr align="left">
                  <th>Jabatan</th>
                  <th>:</th>
                  <th><?= $dosen[0]->jab_fungsional?></th>
                </tr>
                <tr align="left">
                  <th>Unit Kerja</th>
                  <th>:</th>
                  <th> Institut Agama Kristen Negeri Tarutung</th>
                </tr>
                <tr align="left">
                  <th>Bulan</th>
                  <th>:</th>
                  <th><?= @tgl_indo($laporan[0]->tanggal)?></th>
                </tr>
            </table><br>
<table class="table"  border="1" style="border-collapse: collapse; font-family:Calibri ; font-size:11;" width="100%">
                <thead>
                <tr align="center">
                  <!-- <th>No</th> -->
                  <th>Hari/Tanggal </th>
                  <th>Kegiatan Tugas Jabatan </th>
                  <th>Output</th>
                  <th>Volume</th>
                  <th>Satuan</th>
                  <!-- <th>Tanggal Input</th> -->
                  <th>Keterangan</th>
                </tr>
                </thead>
                <tbody align="left">
                <?php $i=1; foreach(@$laporan as $lap){?>
                <tr>
                  <!-- <td><?=@$i?></td> -->
                  <td align="center"><?=@$lap->waktu?></td>
                  <td><?=@$lap->kegiatan?></td>
                  <td><?=@$lap->output?></td>
                  <td align="center"><?=@$lap->volume?></td>
                  <td><?=@$lap->satuan?></td>
                  <!-- <td><?=@$lap->tanggal?></td> -->
                  <td><?=@$lap->keterangan?></td>
                </tr>
                <?php $i++; }?>
                </tbody>
              </table>
                <br>
              <table class="table" width="100%" style="font-family:Calibri ; font-size:11; font-weight:bold">
                    <tr>
                        <td width="70%"></td>  
                        <td>Tarutung, <?php echo date("d");echo " "; echo @tgl_indo(date("Y-m-d"))?></td>
                    </tr>
                    <tr>
                        <td>Pejabat Penilai Atasan Langsung</td>
                        <td>Pejabat Yang Dinilai</td>
                    </tr>
              </table>
              <br><br>
              <table class="table" width="100%" style="font-family:Calibri ; font-size:11; font-weight:bold">
                    <tr>
                        <td width="70%"><?=$atasan?></td>
                        <td><?= $dosen[0]->nama?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>NIP. <?= $dosen[0]->nip?></td>
                    </tr>
              </table>