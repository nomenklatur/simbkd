
    <section class="content">
      <div class="row">
        <div class="col-8">
          <div class="card">
            <div class="card-body">
            <!-- /.card-body -->

              <form role="form" method="POST" action="<?=base_url()?>Admin/editSk/<?=$dosen[0]->id?>/do_edit">
                <div class="form-group">
                        <label for="exampleInputEmail1">Nama Dosen</label><br>
                        <input disabled type="text" class="form-control" name="id_dosen" value="<?=$dosen[0]->nama?>" placeholder="Dosen" required>
                </div>
                <div class="form-group">
                    <label>Pilih Asessor 1</label>
                        <select name="asesor1" class="form-control">
                        <?php foreach($asesor as $af){ ?>
                            <option value="<?= $af->id?>" <?=@$sk[0]->asesor1 == @$af->id ? "selected":null ?>><?= $af->nama?></option>
                        <?php }?>
                        </select>
                </div>
                <div class="form-group">
                    <label>Pilih Asessor 2</label>
                        <select name="asesor2" class="form-control">
                        <?php foreach($asesor as $af){ ?>
                            <option value="<?= $af->id?>"  <?=@$sk[0]->asesor2 == @$af->id ? "selected":null?> ><?= $af->nama?></option>
                        <?php }?>
                        </select>
                </div>
                <div class="card-footer">
                 <a href="<?=base_url()?>Admin/sk" class="btn btn-danger "><i class="fas fa-arrow-left"></i> Batal</a>
                  <button type="submit" class="btn btn-primary float-right"><i class="fas fa-edit"></i> Edit</button>
                </div>
              </form>
            </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>