           
    <section class="content">
      <div class="row">
        <div class="col-6">
          <div class="card">
            <div class="card-body">
            <form role="form" method="POST" action="<?=base_url()?>Admin/editAsessor/<?=$asessor[0]->id?>/do_edit">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIP</label>
                    <input type="text" class="form-control" name="nip" value="<?=$asessor[0]->nip?>" placeholder="nip ..." >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIRA</label>
                    <input type="text" class="form-control" name="nira" value="<?=$asessor[0]->nira?>" placeholder="nip ..." >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?=$asessor[0]->nama?>"  placeholder="nama ..." >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" name="email" value="<?=$asessor[0]->email?>" placeholder="email ..." >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No. WhatsApp</label><br>
                    <span style="font-style:italic; font-size:15px">contoh format masukan : 812345678981. tanpa angka 0</span>
                    <input type="number" class="form-control" name="nowa" value="<?=$asessor[0]->no_whatsapp?>" placeholder="no. wa" >
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary float-right"><i class="fas fa-edit"></i>Edit</button>
                </div>
              </form>

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