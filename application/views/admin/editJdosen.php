
    <section class="content">
      <div class="row">
        <div class="col-8">
          <div class="card">
            <div class="card-body">
            <!-- /.card-body -->

            <form role="form" method="POST" action="<?=base_url()?>Admin/editJdosen/<?=$dosen[0]->id?>/do_edit">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Dosen</label><br>    
                    <input type="text" class="form-control" name="jenis_dosen" value="<?=$dosen[0]->jenis_dosen?>" placeholder="jenis dosen" >
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                 <a href="<?=base_url()?>Admin/jenisDosen" class="btn btn-default ">Batal</a>
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