

    <section class="content">
      <?php 
        if($bkdDosen[0]->status == 'Non-Aktif'){
          $class = 'badge-danger';
          $kata = 'Aktifkan';
        }
        else{
          $class = 'badge-success';
          $kata = 'Non-Aktifkan';
        }

        if($bkdAsessor[0]->status == 'Non-Aktif'){
          $class2 = 'badge-danger';
          $kata2 = 'Aktifkan';
        }
        else{
          $class2 = 'badge-success';
          $kata2 = 'Non-Aktifkan'; 
        }
      ?>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h5>Status masa pengisian BKD dosen : <span class="badge <?= $class ?>"><?= $bkdDosen[0]->status?></span></h5>
              <br>
              <form class="form-inline" action="<?=base_url()?>Admin/masaBKD/simpanMasaDosen" method="POST">
                <label class="mr-sm-2"><?= $kata?> hingga tanggal :</label>
                <input type="date" class="form-control mb-2 mr-sm-2" placeholder="" name="tanggalDosen" required>
                <label class="mr-sm-2">Masa BKD Dosen :</label>
                <select class="form-control mb-2 mr-sm-2" name="masaDosen" required>
                  <option value="" selected disabled>Pilih status</option>
                  <option value="Aktif">Aktif</option>
                  <option value="Non-Aktif">Non-Aktif</option>
                </select>
                <button type="submit" class="btn btn-primary mb-2">Simpan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h5>Status masa pengisian BKD Asessor : <span class="badge <?= $class2 ?>"><?= $bkdAsessor[0]->status?></span></h5>
              <br>
              <form class="form-inline" action="<?=base_url()?>Admin/masaBKD/simpanMasaAses" method="POST">
                <label class="mr-sm-2"><?=$kata2?> hingga tanggal :</label>
                <input type="date" class="form-control mb-2 mr-sm-2" placeholder="" name="tanggalAses" required>
                <label class="mr-sm-2">Masa BKD Asessor :</label>
                <select class="form-control mb-2 mr-sm-2" name="masaAses" required>
                  <option value="" selected disabled>Pilih status</option>
                  <option value="Aktif">Aktif</option>
                  <option value="Non-Aktif">Non-Aktif</option>
                </select>
                <button type="submit" class="btn btn-primary mb-2">Simpan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>