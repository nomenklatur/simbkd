
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Fakultas</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" method="POST" action="<?=base_url()?>Admin/pStudi/do_create">
                <div class="card-body">
                <div class="form-group">
                        <label>Pilih Fakultas</label>
                        <select name="id_fakultas" class="form-control">
                        <?php foreach($fakultas as $af){ ?>
                          <option value="<?= $af->id?>"><?= $af->fakultas?></option>
                        <?php }?>
                        </select>
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Program Studi</label><br>
                    <input type="text" class="form-control" name="program_studi" placeholder="program studi" required>
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
            <div class="card-header">
                     <button type="button" class="btn btn-secondary btn-lg float-right" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus"> Tambah</i></button>
            </div>
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped" >
                <thead>
                <tr align="center">
                  <th>No</th>
                  <th>Fakultas</th>
                  <th>Program Studi</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody align="center">
                <?php $i=1; foreach($studi as $ad){?>
                <tr>
                  <td><?=$i?></td>
                  <td align="left">
                    <?php foreach($fakultas as $af){
                        if($ad->id_fakultas ==  $af->id){
                                echo $af->fakultas;
                        }
                     }?>
                  </td>
                  <td align="left"><?=$ad->program_studi?></td>
                  <td>
                        <a href="<?=base_url()?>Admin/editpStudi/<?=$ad->id?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="<?=base_url()?>Admin/hapuspStudi/<?=$ad->id?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                  </td>
                </tr>
                <?php $i++;}?>
                </tbody>
              </table>
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