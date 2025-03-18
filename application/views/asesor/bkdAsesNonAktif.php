

    <section class="content">
        <?php 
            $timeStamp = strtotime($masa[0]->tanggal);
            $dates = date('j F Y', $timeStamp);
        ?>
      <div class="row">
        <div class="col-12">
        <div class="card text-center">
            <div class="card-header">
                
            </div>
            <div class="card-body" style="text-align : center;">
                <h1 class="card-text">Masa penilaian BKD telah ditutup</h1>
                <p class="card-text">Penilaian BKD akan dibuka pada tanggal : <?=$dates?>.</p>
                <a href="<?=base_url()?>Asesor/" class="btn btn-primary">Kembali</a>
            </div>
            <div class="card-footer text-muted">
                Hubungi admin untuk informasi lebih lanjut
            </div>
            </div>
        </div>
      </div>
    </section>