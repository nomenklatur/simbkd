
    <section class="content">
      <div class="row">
        <div class="col-8">
          <div class="card">
            <div class="card-body">
            <!-- /.card-body -->

            <form role="form" method="POST" action="<?=base_url()?>Admin/editpStudi/<?=$program_studi[0]->id?>/do_edit">
                <div class="card-body">
                <div class="form-group">
                    <label>Pilih Fakultas</label>
                        <select name="id_fakultas" class="form-control">
                        <?php foreach($fakultas as $af){ ?>
                            <option value="<?= $af->id?>" <?=$program_studi[0]->id_fakultas == $af->id ? "selected":null?>><?= $af->fakultas?></option>
                        <?php }?>
                        </select>
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Program Studi</label><br>    
                    <input type="text" class="form-control" name="program_studi" value="<?=$program_studi[0]->program_studi?>" placeholder="fakultas" >
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                 <a href="<?=base_url()?>Admin/pStudi" class="btn btn-default ">Batal</a>
                  <button type="submit" class="btn btn-primary float-right"><i class="fas fa-edit"></i>Edit</button>
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