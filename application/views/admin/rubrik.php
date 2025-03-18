
    
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Kegiatan Pendidikan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" method="POST" action="<?=base_url()?>Admin/rubrik/create_pendidikan">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kegiatan</label>
                    <textarea type="text" class="form-control" name="kegiatan" placeholder="kegiatan ..." required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sub Kegiatan</label>
                    <textarea type="text" class="form-control" name="subkegiatan" placeholder="isi jika ada  ..." ></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <textarea type="text" class="form-control" name="keterangan" placeholder="keterangan ..." ></textarea>
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

      <div class="modal fade" id="modal-penelitian">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Kegiatan Penelitian</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" method="POST" action="<?=base_url()?>Admin/rubrik/create_penelitian">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kegiatan</label>
                    <textarea type="text" class="form-control" name="kegiatan" placeholder="kegiatan ..." required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sub Kegiatan</label>
                    <textarea type="text" class="form-control" name="subkegiatan" placeholder="isi jika ada  ..." ></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <textarea type="text" class="form-control" name="keterangan" placeholder="keterangan ..." ></textarea>
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
      
      <div class="modal fade" id="modal-pengabdian">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Kegiatan Pengabdian</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" method="POST" action="<?=base_url()?>Admin/rubrik/create_pengabdian">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kegiatan</label>
                    <textarea type="text" class="form-control" name="kegiatan" placeholder="kegiatan ..." required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sub Kegiatan</label>
                    <textarea type="text" class="form-control" name="subkegiatan" placeholder="isi jika ada  ..." ></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <textarea type="text" class="form-control" name="keterangan" placeholder="keterangan ..." ></textarea>
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
       
      <div class="modal fade" id="modal-penunjang">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Kegiatan Penunjang</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" method="POST" action="<?=base_url()?>Admin/rubrik/create_penunjang">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kegiatan</label>
                    <textarea type="text" class="form-control" name="kegiatan" placeholder="kegiatan ..." required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sub Kegiatan</label>
                    <textarea type="text" class="form-control" name="subkegiatan" placeholder="isi jika ada  ..." ></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <textarea type="text" class="form-control" name="keterangan" placeholder="keterangan ..." ></textarea>
                  </div>
                  <div class="form-group">
                        <label>Jenis Kegiatan</label>
                        <select name="jenis" class="form-control">
                          <option value="0">Pembinaan Sivitas Akademika</option>
                          <option value="1">Administrasi dan Manajemen</option>
                        </select>
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
      <div class="modal fade" id="modal-khusus">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Kegiatan Khusus Profesor</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" method="POST" action="<?=base_url()?>Admin/rubrik/create_khusus">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kegiatan</label>
                    <textarea type="text" class="form-control" name="kegiatan" placeholder="kegiatan ..." required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sub Kegiatan</label>
                    <textarea type="text" class="form-control" name="subkegiatan" placeholder="isi jika ada  ..." ></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <textarea type="text" class="form-control" name="keterangan" placeholder="keterangan ..." ></textarea>
                  </div>
                  <div class="form-group">
                        <label>Jenis Kegiatan</label>
                        <select name="jenis" class="form-control">
                          <option value="0">Menulis Buku</option>
                          <option value="1">Menghasilkan Karya Ilmiah</option>
                          <option value="2">Menyebarluaskan Gagasan</option>
                        </select>
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
            <!-- <div class="card-header">
                     <button type="button" class="btn btn-secondary btn-lg float-right" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus"> Tambah</i></button>
            </div> -->
            <div class="card-body">
            <div class="col-12 col-sm-12">
            <div class="card card-primary card-outline card-outline-tabs">
              <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link <?=$this->session->active?>" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">PENDIDIKAN</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?=$this->session->active1?>" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">PENELITIAN DAN PENGEMBANGAN ILMU</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?=$this->session->active2?>" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">PENGABDIAN KEPADA MASYARAKAT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?=$this->session->active3?>" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">BIDANG PENUNJANG</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?=$this->session->active4?>" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-prof" role="tab" aria-controls="custom-tabs-four-prof" aria-selected="false">KHUSUS PROFESOR</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                  <div class="tab-pane fade <?=$this->session->active?> <?=$this->session->show?>" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                    <table id="example1a" class="table table-bordered table-striped" >
                        <thead>
                            <tr align="center">
                            <th>No</th>
                            <th>Kegiatan</th>
                            <th>Sub Kegiatan</th>
                            <th>Keterangan</th>
                            <th width="200px">Aksi</th>
                        </tr>
                        </thead>
                        <tbody align="center">
                        <?php $i= 1; foreach($pendidikan as $pen){?>
                        <tr>
                        <td><?=$i?></td>
                        <td align="left"><?=$pen->kegiatan?></td>
                        <td align="left"><?=$pen->sub_kegiatan?></td>
                        <td><?=$pen->keterangan?></td>
                        <td>
                                <a href="<?=base_url()?>Admin/editPendidikan/<?=$pen->id?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?=base_url()?>Admin/hapusPendidikan/<?=$pen->id?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        </tr>
                        <?php $i++;}?>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus-circle"> Tambah Kegiatan</i></button>
                  </div>
                  <div class="tab-pane fade <?=$this->session->active1?> <?=$this->session->show1?>" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                  <table id="example1a" class="table table-bordered table-striped" >
                  <thead>
                            <tr align="center">
                            <th>No</th>
                            <th>Kegiatan</th>
                            <th>Sub Kegiatan</th>
                            <th>Keterangan</th>
                            <th width="200px">Aksi</th>
                        </tr>
                        </thead>
                        <tbody align="center">
                        <?php $i= 1; foreach($penelitian as $pen){?>
                        <tr>
                        <td><?=$i?></td>
                        <td align="left"><?=$pen->kegiatan?></td>
                        <td align="left"><?=$pen->sub_kegiatan?></td>
                        <td><?=$pen->keterangan?></td>
                        <td>
                                <a href="<?=base_url()?>Admin/editPenelitian/<?=$pen->id?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?=base_url()?>Admin/hapusPenelitian/<?=$pen->id?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        </tr>
                        <?php $i++;}?>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-penelitian"><i class="fas fa-plus-circle"> Tambah Kegiatan</i></button>
                  </div>
                  <div class="tab-pane fade <?=$this->session->active2?> <?=$this->session->show2?>" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                  <table id="example1a" class="table table-bordered table-striped" >
                        <thead>
                        <tr align="center">
                        <th>No</th>
                        <th>Kegiatan</th>
                        <th>Sub Kegiatan</th>
                        <th>Keterangan</th>
                        <th width="200px">Aksi</th>
                        </tr>
                        </thead>
                        <tbody align="center">
                        <?php $i= 1; foreach($pengabdian as $pen){?>
                        <tr>
                        <td><?=$i?></td>
                        <td align="left"><?=$pen->kegiatan?></td>
                        <td align="left"><?=$pen->sub_kegiatan?></td>
                        <td><?=$pen->keterangan?></td>
                        <td>
                                <a href="<?=base_url()?>Admin/editPengabdian/<?=$pen->id?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?=base_url()?>Admin/hapusPengabdian/<?=$pen->id?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        </tr>
                        <?php $i++;}?>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-pengabdian"><i class="fas fa-plus-circle"> Tambah Kegiatan</i></button>
                  </div>
                  <div class="tab-pane fade <?=$this->session->active3?> <?=$this->session->show3?>" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                  <table id="example1a" class="table table-bordered table-striped" >
                        <thead>
                        <tr align="center">
                        <th>No</th>
                        <th>Kegiatan</th>
                        <th>Sub Kegiatan</th>
                        <th>Keterangan</th>
                        <th width="200px">Aksi</th>
                        </tr>
                        </thead>
                        <tbody align="center">
                        <tr>
                          <th >A</th>
                          <th >Pembinaan Sivitas Akademika</th>
                          <td colspan="3"></td>
                        </tr>
                        <?php $i= 1; foreach($penunjang as $pen){ if($pen->jenis == "0"){?>
                        <tr>
                        <td><?=$i?></td>
                        <td align="left"><?=$pen->kegiatan?></td>
                        <td align="left"><?=$pen->sub_kegiatan?></td>
                        <td><?=$pen->keterangan?></td>
                        <td>
                                <a href="<?=base_url()?>Admin/editPenunjang/<?=$pen->id?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?=base_url()?>Admin/hapusPenunjang/<?=$pen->id?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        </tr>
                        <?php $i++;}}?>
                        <tr>
                          <th >B</th>
                          <th >Administrasi dan Manajemen</th>
                          <td colspan="3"></td>
                        </tr>
                        <?php $i= 1; foreach($penunjang as $pen){ if($pen->jenis == "1"){?>
                        <tr>
                        <td><?=$i?></td>
                        <td align="left"><?=$pen->kegiatan?></td>
                        <td align="left"><?=$pen->sub_kegiatan?></td>
                        <td><?=$pen->keterangan?></td>
                        <td>
                                <a href="<?=base_url()?>Admin/editPenunjang/<?=$pen->id?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?=base_url()?>Admin/hapusPenunjang/<?=$pen->id?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        </tr>
                        <?php $i++;}}?>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-penunjang"><i class="fas fa-plus-circle"> Tambah Kegiatan</i></button>
                  </div>

                  <div class="tab-pane fade <?=$this->session->active4?> <?=$this->session->show4?>" id="custom-tabs-four-prof" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                  <table id="example1a" class="table table-bordered table-striped" >
                        <thead>
                        <tr align="center">
                        <th>No</th>
                        <th>Kegiatan</th>
                        <th>Sub Kegiatan</th>
                        <th>Keterangan</th>
                        <th width="200px">Aksi</th>
                        </tr>
                        </thead>
                        <tbody align="center">
                        <tr>
                          <th >A</th>
                          <th >Menulsi Buku</th>
                          <td colspan="3"></td>
                        </tr>
                        <?php $i= 1; foreach($khusus as $pen){ if($pen->jenis=="0"){?>
                        <tr>
                        <td><?=$i?></td>
                        <td align="left"><?=$pen->kegiatan?></td>
                        <td align="left"><?=$pen->sub_kegiatan?></td>
                        <td><?=$pen->keterangan?></td>
                        <td>
                                <a href="<?=base_url()?>Admin/editKhusus/<?=$pen->id?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?=base_url()?>Admin/hapusKhusus/<?=$pen->id?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        </tr>
                        <?php $i++;}}?>
                        <tr>
                          <th>B</th>
                          <th>Menghasilkan Karya Ilmiah</th>
                          <td colspan="3"></td>
                        </tr>
                        <?php $i= 1; foreach($khusus as $pen){ if($pen->jenis=="1"){?>
                        <tr>
                        <td><?=$i?></td>
                        <td align="left"><?=$pen->kegiatan?></td>
                        <td align="left"><?=$pen->sub_kegiatan?></td>
                        <td><?=$pen->keterangan?></td>
                        <td>
                                <a href="<?=base_url()?>Admin/editKhusus/<?=$pen->id?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?=base_url()?>Admin/hapusKhusus/<?=$pen->id?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        </tr>
                        <?php $i++;}}?>
                        <tr>
                          <th>C</th>
                          <th>Menyebarluaskan Gagasan</th>
                          <td colspan="3"></td>
                        </tr>
                        <?php $i= 1; foreach($khusus as $pen){ if($pen->jenis=="2"){?>
                        <tr>
                        <td><?=$i?></td>
                        <td align="left"><?=$pen->kegiatan?></td>
                        <td align="left"><?=$pen->sub_kegiatan?></td>
                        <td><?=$pen->keterangan?></td>
                        <td>
                                <a href="<?=base_url()?>Admin/editKhusus/<?=$pen->id?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?=base_url()?>Admin/hapusKhusus/<?=$pen->id?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        </tr>
                        <?php $i++;}}?>
                        </tbody>
                    </table><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-khusus"><i class="fas fa-plus-circle"> Tambah Kegiatan</i></button>
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
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