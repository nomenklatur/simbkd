<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Asessor</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" method="POST" action="<?=base_url()?>Admin/asessor/do_create">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIP</label>
                    <input type="text" class="form-control" name="nip" placeholder="nip ..." required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIRA</label>
                    <input type="text" class="form-control" name="nira" placeholder="nira ..." required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="nama ..." required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="email ..." required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No. WhatsApp</label><br>
                    <span style="font-style:italic; font-size:15px">contoh format masukan : 812345678981. tanpa angka 0</span>
                    <input type="number" class="form-control" name="nowa" placeholder="no. wa" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control"  id="pw1" name="pass" placeholder="password ..." required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="pw2" name="pass" placeholder="konfirmasi password ..." required>
                  </div>
                  <p id="notif"></p>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" id="tambah" disabled class="btn btn-primary float-right">Tambah</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


<!-- Main content -->
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
                  <th>NIP</th>
                  <th>NIRA</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>No. WA</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody align="center">
                <?php $i=1; foreach($asessor as $ad){?>
                <tr>
                  <td><?=$i?></td>
                  <td><?=$ad->nip?></td>
                  <td><?=$ad->nira?></td>
                  <td><?=$ad->nama?></td>
                  <td><?=$ad->email?></td>
                  <td>0<?=$ad->no_whatsapp?></td>
                  <td>
                        <?php if($ad->no_whatsapp!="" || $ad->no_whatsapp != null){?>
                        <a href="https://wa.me/62<?=$ad->no_whatsapp?>" type="button" class="btn btn-success btn-sm"><i class="fab fa-whatsapp"></i></a>
                        <?php }?>
                        <a href="<?=base_url()?>Admin/editAsessor/<?=$ad->id?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="<?=base_url()?>Admin/ubahPassasessor/<?=$ad->id?>" type="button" class="btn btn-success btn-sm"><i class="fas fa-cogs"></i></a>
                        <a href="<?=base_url()?>Admin/hapusAsessor/<?=$ad->id?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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

      