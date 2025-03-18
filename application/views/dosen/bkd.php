
    
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah BKD Pendidikan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" enctype="multipart/form-data" method="POST" action="<?=base_url()?>Dosen/bkd/<?=$tahunS?>/create_pendidikan">
                <div class="card-body">
                <div class="form-group">
                  <label for="sel1" class="mr-sm-2">Status Dosen :</label>
                  <select class="form-control mr-sm-2" id="sel1" name="status">
                    <option value="DOSEN BIASA">Dosen Biasa</option>
                    <option value="DOSEN BIASA DENGAN TUGAS TAMBAHAN">Dosen Biasa dengan Tugas Tambahan</option>
                  </select>
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kegiatan</label>
                    <textarea type="text" class="form-control" name="kegiatan" placeholder="jenis kegiatan ..." required></textarea>
                  </div>
                  <div class="form-group"  align="center">
                    <label for="exampleInputEmail1">Beban Kerja</label>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bukti Penugasan</label>
                    <textarea type="text" class="form-control" name="bp" placeholder="bukti penugasan  ..." ></textarea>
                  </div>
                  <div class="form-group">
                        <label for="src">File Bukti Penugasan</label>
                            <div class="custom-file">
                                <input type="file" id="src" class="custom-file-input" name="fbp" >
                                <label class="custom-file-label" id="file" for="src">Pilih file</label>
                            </div>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sks</label>
                    <input type="text" class="form-control" name="sks" placeholder="sks ..." >
                  </div>
                  <div class="form-group">
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Masa Pelaksanaan Tugas</label>
                      <select name="masa" class="form-control">
                          <?php foreach($tahun as $th){?>
                            <option value="<?=$th->id?>" selected><?=$th->semester=="0"?"Semester Ganjil":"Semester Genap"?> <?=$th->tahun?></option>
                          <?php }?>
                        </select>
                  </div>
                  <div class="form-group" align="center">
                    <label for="exampleInputEmail1" >Kinerja</label>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bukti Kinerja Pendidikan</label>
                    <textarea type="text" class="form-control" name="bpk" placeholder="bukti kinerja bidang pendidikan  ..." ></textarea>
                  </div>
                  <div class="form-group">
                        <label for="src1">File Bukti Kinerja Pendidikan</label>
                            <div class="custom-file">
                                <input type="file" id="src1" class="custom-file-input" name="fbpk" >
                                <label class="custom-file-label" id="file1" for="src1">Pilih file</label>
                            </div>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Persentase %</label>
                    <input type="text" class="form-control" name="persen" placeholder="% ..." >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sks</label>
                    <input type="text" class="form-control" name="sksk" placeholder="sks ..." >
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
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah BKD Penelitian</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" enctype="multipart/form-data" method="POST" action="<?=base_url()?>Dosen/bkd/<?=$tahunS?>/create_penelitian">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kegiatan</label>
                    <textarea type="text" class="form-control" name="kegiatan" placeholder="jenis kegiatan ..." required></textarea>
                  </div>
                  <div class="form-group"  align="center">
                    <label for="exampleInputEmail1">Beban Kerja</label>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bukti Penugasan</label>
                    <textarea type="text" class="form-control" name="bp" placeholder="bukti penugasan  ..." ></textarea>
                  </div>
                  <div class="form-group">
                        <label for="src">File Bukti Penugasan</label>
                            <div class="custom-file">
                                <input type="file" id="src2" class="custom-file-input" name="fbp" >
                                <label class="custom-file-label" id="file2" for="src2">Pilih file</label>
                            </div>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sks</label>
                    <input type="text" class="form-control" name="sks" placeholder="sks ..." >
                  </div>
                  <div class="form-group">
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Masa Pelaksanaan Tugas</label>
                        <select name="masa" class="form-control">
                          <?php foreach($tahun as $th){?>
                            <option value="<?=$th->id?>" selected><?=$th->semester=="0"?"Semester Ganjil":"Semester Genap"?> <?=$th->tahun?></option>
                          <?php }?>
                        </select>
                  </div>
                  <div class="form-group" align="center">
                    <label for="exampleInputEmail1" >Kinerja</label>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bukti Kinerja Penelitian</label>
                    <textarea type="text" class="form-control" name="bpk" placeholder="bukti Kinerja Penelitian  ..." ></textarea>
                  </div>
                  <div class="form-group">
                        <label for="src1">File Bukti Kinerja Penelitian</label>
                            <div class="custom-file">
                                <input type="file" id="src3" class="custom-file-input" name="fbpk" >
                                <label class="custom-file-label" id="file3" for="src3">Pilih file</label>
                            </div>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Persentase %</label>
                    <input type="text" class="form-control" name="persen" placeholder="% ..." >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sks</label>
                    <input type="text" class="form-control" name="sksk" placeholder="sks ..." >
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
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah BKD Pengabdian</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" enctype="multipart/form-data" method="POST" action="<?=base_url()?>Dosen/bkd/<?=$tahunS?>/create_pengabdian">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kegiatan</label>
                    <textarea type="text" class="form-control" name="kegiatan" placeholder="jenis kegiatan ..." required></textarea>
                  </div>
                  <div class="form-group"  align="center">
                    <label for="exampleInputEmail1">Beban Kerja</label>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bukti Penugasan</label>
                    <textarea type="text" class="form-control" name="bp" placeholder="bukti penugasan  ..." ></textarea>
                  </div>
                  <div class="form-group">
                        <label for="src">File Bukti Penugasan</label>
                            <div class="custom-file">
                                <input type="file" id="src4" class="custom-file-input" name="fbp" >
                                <label class="custom-file-label" id="file4" for="src4">Pilih file</label>
                            </div>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sks</label>
                    <input type="text" class="form-control" name="sks" placeholder="sks ..." >
                  </div>
                  <div class="form-group">
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Masa Pelaksanaan Tugas</label>
                      <select name="masa" class="form-control" >
                          <?php foreach($tahun as $th){?>
                            <option value="<?=$th->id?>" selected><?=$th->semester=="0"?"Semester Ganjil":"Semester Genap"?> <?=$th->tahun?></option>
                          <?php }?>
                        </select>
                  </div>
                  <div class="form-group" align="center">
                    <label for="exampleInputEmail1" >Kinerja</label>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bukti Kinerja Pengabdian</label>
                    <textarea type="text" class="form-control" name="bpk" placeholder="bukti kinerja pengabdian  ..." ></textarea>
                  </div>
                  <div class="form-group">
                        <label for="src1">File Bukti Kinerja Pengabdian</label>
                            <div class="custom-file">
                                <input type="file" id="src5" class="custom-file-input" name="fbpk" >
                                <label class="custom-file-label" id="file5" for="src5">Pilih file</label>
                            </div>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Persentase %</label>
                    <input type="text" class="form-control" name="persen" placeholder="% ..." >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sks</label>
                    <input type="text" class="form-control" name="sksk" placeholder="sks ..." >
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
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah BKD Penunjang</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" enctype="multipart/form-data" method="POST" action="<?=base_url()?>Dosen/bkd/<?=$tahunS?>/create_penunjang">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kegiatan</label>
                    <textarea type="text" class="form-control" name="kegiatan" placeholder="jenis kegiatan ..." required></textarea>
                  </div>
                  <div class="form-group"  align="center">
                    <label for="exampleInputEmail1">Beban Kerja</label>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bukti Penugasan</label>
                    <textarea type="text" class="form-control" name="bp" placeholder="bukti penugasan  ..." ></textarea>
                  </div>
                  <div class="form-group">
                        <label for="src">File Bukti Penugasan</label>
                            <div class="custom-file">
                                <input type="file" id="src6" class="custom-file-input" name="fbp" >
                                <label class="custom-file-label" id="file6" for="src6">Pilih file</label>
                            </div>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sks</label>
                    <input type="text" class="form-control" name="sks" placeholder="sks ..." >
                  </div>
                  <div class="form-group">
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Masa Pelaksanaan Tugas</label>
                        <select name="masa" class="form-control">
                          <?php foreach($tahun as $th){?>
                            <option value="<?=$th->id?>" selected><?=$th->semester=="0"?"Semester Ganjil":"Semester Genap"?> <?=$th->tahun?></option>
                          <?php }?>
                        </select>
                  </div>
                  <div class="form-group" align="center">
                    <label for="exampleInputEmail1" >Kinerja</label>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bukti Kinerja Penunjang</label>
                    <textarea type="text" class="form-control" name="bpk" placeholder="bukti penugasan  ..." ></textarea>
                  </div>
                  <div class="form-group">
                        <label for="src1">File Bukti Kinerja Penunjang</label>
                            <div class="custom-file">
                                <input type="file" id="src7" class="custom-file-input" name="fbpk" >
                                <label class="custom-file-label" id="file7" for="src7">Pilih file</label>
                            </div>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Persentase %</label>
                    <input type="text" class="form-control" name="persen" placeholder="% ..." >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sks</label>
                    <input type="text" class="form-control" name="sksk" placeholder="sks ..." >
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
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah BKD Khusus Profesor</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" enctype="multipart/form-data" method="POST" action="<?=base_url()?>Dosen/bkd/<?=$tahunS?>/create_khusus">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kegiatan</label>
                    <textarea type="text" class="form-control" name="kegiatan" placeholder="jenis kegiatan ..." required></textarea>
                  </div>
                  <div class="form-group"  align="center">
                    <label for="exampleInputEmail1">Beban Kerja</label>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bukti Penugasan</label>
                    <textarea type="text" class="form-control" name="bp" placeholder="bukti penugasan  ..." ></textarea>
                  </div>
                  <div class="form-group">
                        <label for="src">File Bukti Penugasan</label>
                            <div class="custom-file">
                                <input type="file" id="src8" class="custom-file-input" name="fbp" >
                                <label class="custom-file-label" id="file8" for="src8">Pilih file</label>
                            </div>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sks</label>
                    <input type="text" class="form-control" name="sks" placeholder="sks ..." >
                  </div>
                  <div class="form-group">
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Masa Pelaksanaan Tugas</label>
                        <select name="masa" class="form-control">
                          <?php foreach($tahun as $th){?>
                            <option value="<?=$th->id?>" selected><?=$th->semester=="0"?"Semester Ganjil":"Semester Genap"?> <?=$th->tahun?></option>
                          <?php }?>
                        </select> 
                  </div>
                  <div class="form-group" align="center">
                    <label for="exampleInputEmail1" >Kinerja</label>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bukti Kinerja Khusus Profesor</label>
                    <textarea type="text" class="form-control" name="bpk" placeholder="bukti penugasan  ..." ></textarea>
                  </div>
                  <div class="form-group">
                        <label for="src1">File Bukti Kinerja Khusus Profesor</label>
                            <div class="custom-file">
                                <input type="file" id="src9" class="custom-file-input" name="fbpk" >
                                <label class="custom-file-label" id="file9" for="src9">Pilih file</label>
                            </div>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Persentase %</label>
                    <input type="text" class="form-control" name="persen" placeholder="% ..." >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sks</label>
                    <input type="text" class="form-control" name="sksk" placeholder="sks ..." >
                  </div>
                  <div class="form-group row">
                        <label for="inputEmail7" class="col-sm-2 col-form-label">Jenis</label>
                        <div class="col-sm-10">
                        <select name="jenis" class="form-control">
                          <option value="0">Menulis Buku</option>
                          <option value="1">Menghasilkan Karya Ilmiah</option>
                          <option value="2">Menyebarluaskan Gagasan</option>
                        </select>
                        </div>
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
      <!-- /.modal -->
      <div class="modal fade" id="modal-kesimpulan">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Kesimpulan Dosen</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" enctype="multipart/form-data" method="POST" action="<?=base_url()?>Dosen/create_kesimpulan/<?=$tahunS?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">PENDIDIKAN</label>
                        <select name="pendidikan" class="form-control">
                          <option value="M" >M</option>
                          <option value="T" >T</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">PENELITIAN</label>
                        <select name="penelitian" class="form-control">
                          <option value="M" >M</option>
                          <option value="T" >T</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">PENGABDIAN</label>
                        <select name="pengabdian" class="form-control">
                          <option value="M" >M</option>
                          <option value="T" >T</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">PENUNJANG</label>
                        <select name="penunjang" class="form-control">
                          <option value="M" >M</option>
                          <option value="T" >T</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">PENDIDIKAN + PENELITIAN</label>
                        <select name="pd1" class="form-control">
                          <option value="M" >M</option>
                          <option value="T" >T</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">PENGABDIAN + PENUNJANG</label>
                        <select name="pd2" class="form-control">
                          <option value="M" >M</option>
                          <option value="T" >T</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">TOTAL KINERJA</label>
                        <select name="total" class="form-control">
                          <option value="M" >M</option>
                          <option value="T" >T</option>
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

 <!-- /.modal -->
 <div class="modal fade" id="modal-sptjm">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Upload SPTJM Dosen</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" enctype="multipart/form-data" method="POST" action="<?=base_url()?>Dosen/uploadFile/<?=$dosfot[0]->id?>/<?=$tahunS?>">
                  <div class="form-group row">
                        <label for="src1" class="col-sm-2 col-form-label">Pilih File</label>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" id="src1"  class="custom-file-input" name="sptjmD" id="">
                                <label class="custom-file-label" id="file1" for="src1">Pilih file</label>
                            </div>
                        </div>
                    </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary float-right">Upload</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <div class="modal fade" id="modal-sptjmr">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Upload SPTJM REKTOR</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" enctype="multipart/form-data" method="POST" action="<?=base_url()?>Dosen/uploadFile1/<?=$dosfot[0]->id?>/<?=$tahunS?>">
                  <div class="form-group row">
                        <label for="src1" class="col-sm-2 col-form-label">Pilih File</label>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" id="src1"  class="custom-file-input" name="sptjmR" id="">
                                <label class="custom-file-label" id="file1" fsptjor="src1">Pilih file</label>
                            </div>
                        </div>
                    </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary float-right">Upload</button>
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
                    <a class="nav-link <?=$this->session->active?>" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="false">PENDIDIKAN</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?=$this->session->active1?>" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="true">PENELITIAN DAN PENGEMBANGAN ILMU</a>
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
                  <li class="nav-item">
                    <a class="nav-link <?=$this->session->active6?>" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-berkas" role="tab" aria-controls="custom-tabs-four-berkas" aria-selected="false">UPLOAD BERKAS</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                  <div class="tab-pane fade <?=$this->session->active?> <?=$this->session->show?>" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                    <table id="dtHorizontalExample" class="table table-bordered table-striped" >
                        <thead>
                        <tr align="center">
                            <th rowspan="3">No</th>
                            <th rowspan="3">Jenis Kegiatan</th>
                            <th colspan="2">Beban Kerja</th>
                            <th rowspan="3">Masa Pelaksanaan Tugas</th>
                            <th colspan="3">Kinerja</th>
                            <th rowspan="3">Penilaian/Rekomendasi Asesor</th>
                            <th rowspan="3">Aksi</th>
                        </tr>
                        <tr align="center">
                            <th rowspan="2">Bukti Penugasan</th>
                            <th rowspan="2">Sks</th>
                            <th rowspan="2">Bukti Kinerja Pendidikan</th>
                            <th colspan="2">Capaian</th>
                        </tr>
                        <tr align="center">
                            <th >%</th>
                            <th >Sks</th>
                        </tr>
                        </thead>
                        <tbody >
                        <?php $i= 1; $jml=0; $jml1=0; foreach($pendidikan as $pen){?>
                        <tr align="center">
                        <td><?=$i?></td>
                        <td align="left"><?=$pen->kegiatan?></td>
                        <td align="left">
                                <?=$pen->bukti_penugasan_bk?> <br>
                                <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasanbk?>">File Bukti Penugasan</a>
                                
                        </td>
                        <td><?=$pen->sks_bk?></td>
                        <td>
                            <?php
                                foreach($tahun as $t){
                                    if($t->id==$pen->masa_pelaksaan){
                                        if($t->semester =="0"){
                                            echo "Semester Ganjil "; 
                                        }else{
                                            echo "Semester Genap "; 
                                        }
                                        echo $t->tahun;
                                    }
                                }
                            ?>
                        </td>
                        <td>
                            <?=$pen->bukti_penugasan_k?> <br>
                            <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasank?>">File Bukti kinerja Pendidikan </a>
                        </td>
                        <td><?=$pen->persen_capaian?></td>
                        <td><?=$pen->sks_capaian?></td>
                        <td><?=$pen->penilaian_asesor?></td>
                        <td>
                                <a href="<?=base_url()?>Dosen/editPendidikan/<?=$pen->id?>/<?=$tahunS?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?=base_url()?>Dosen/hapusPendidikan/<?=$pen->id?>/<?=$tahunS?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        </tr>
                        <?php $i++; $jml += (float)$pen->sks_bk; $jml1 += (float)$pen->sks_capaian; }?>
                        </tbody>
                        <tfoot>
                        <tr>
                          <td colspan="2" align="center">Jumlah Beban Kerja</td>
                          <td></td>
                          <td><?= $jml?></td>
                          <td colspan="2" align="center">Jumlah Kinerja</td>
                          <td></td>
                          <td><?= $jml1?></td>
                          <td></td>
                          <td></td>
                        </tr>
                        </tfoot>
                    </table>
                    <?php if($tahunAktif[0]->id == $tahunS){?>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus-circle"> Tambah Kegiatan</i></button>
                    <?php }?>
                    <a href="<?=base_url()?>Dosen/kePenelitian/<?=$tahunS?>" class="btn btn-success btn-sm float-right"><i class="fas fa-arrow-right"> Selanjutnya</i></a>
                  </div>
                  <div  class="tab-pane fade <?=$this->session->active1?> <?=$this->session->show1?>" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                  <table id="dtHorizontalExample1"class="table table-bordered table-striped" style="width: 100%;">
                         <thead style="width: 100%;">
                            <tr align="center">
                                <th rowspan="3">No</th>
                                <th rowspan="3">Jenis Kegiatan</th>
                                <th colspan="2">Beban Kerja</th>
                                <th rowspan="3">Masa Pelaksanaan Tugas</th>
                                <th colspan="3">Kinerja</th>
                                <th rowspan="3">Penilaian/Rekomendasi Asesor</th>
                                <th rowspan="3">Aksi</th>
                            </tr>
                            <tr align="center">
                                <th rowspan="2">Bukti Penugasan</th>
                                <th rowspan="2">Sks</th>
                                <th rowspan="2">Bukti Kinerja Penelitian</th>
                                <th colspan="2">Capaian</th>
                            </tr>
                            <tr align="center">
                                <th >%</th>
                                <th >Sks</th>
                            </tr>
                         </thead>
                         <tbody align="center">
                         <?php $i= 1; $jml=0; $jml1=0;foreach($penelitian as $pen){?>
                        <tr align="center">
                        <td><?=$i?></td>
                        <td align="left"><?=$pen->kegiatan?></td>
                        <td align="left">
                                <?=$pen->bukti_penugasan_bk?> <br>
                                <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasanbk?>">File Bukti Penugasan</a>
                                
                        </td>
                        <td><?=$pen->sks_bk?></td>
                        <td>
                        <?php
                                foreach($tahun as $t){
                                    if($t->id==$pen->masa_pelaksaan){
                                        if($t->semester =="0"){
                                            echo "Semester Ganjil "; 
                                        }else{
                                            echo "Semester Genap "; 
                                        }
                                        echo $t->tahun;
                                    }
                                }
                            ?></td>
                        <td>
                            <?=$pen->bukti_penugasan_k?><br>
                            <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasank?>">File Bukti kinerja Penelitian</a>
                        </td>
                        <td><?=$pen->persen_capaian?></td>
                        <td><?=$pen->sks_capaian?></td>
                        <td><?=$pen->penilaian_asesor?></td>
                        <td>
                                <a href="<?=base_url()?>Dosen/editPenelitian/<?=$pen->id?>/<?=$tahunS?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?=base_url()?>Dosen/hapusPenelitian/<?=$pen->id?>/<?=$tahunS?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        </tr>
                        <?php $i++;$jml += (float)$pen->sks_bk; $jml1 += (float)$pen->sks_capaian; }?>
                        </tbody>
                        <tfoot>
                        <tr>
                          <td colspan="2" align="center">Jumlah Beban Kerja</td>
                          <td></td>
                          <td><?= $jml?></td>
                          <td colspan="2" align="center">Jumlah Kinerja</td>
                          <td></td>
                          <td><?= $jml1?></td>
                          <td></td>
                          <td></td>
                        </tr>
                        </tfoot>
                    </table>
                    <?php if($tahunAktif[0]->id == $tahunS){?>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-penelitian"><i class="fas fa-plus-circle"> Tambah Kegiatan</i></button>
                    <?php }?>
                    <a href="<?=base_url()?>Dosen/kePengabdian/<?=$tahunS?>"  class="btn btn-success btn-sm float-right" ><i class="fas fa-arrow-right"> Selanjutnya</i></a>
                    <a href="<?=base_url()?>Dosen/kePendidikan/<?=$tahunS?>" class="btn btn-primary btn-sm float-right" ><i class="fas fa-arrow-left"> Sebelumnya</i></a>
                  </div>
                  <div class="tab-pane fade <?=$this->session->active2?> <?=$this->session->show2?>" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                  <table id="dtHorizontalExample2" class="table table-bordered table-striped" >
                  <thead>
                        <tr align="center">
                            <th rowspan="3">No</th>
                            <th rowspan="3">Jenis Kegiatan</th>
                            <th colspan="2">Beban Kerja</th>
                            <th rowspan="3">Masa Pelaksanaan Tugas</th>
                            <th colspan="3">Kinerja</th>
                            <th rowspan="3">Penilaian/Rekomendasi Asesor</th>
                            <th rowspan="3">Aksi</th>
                        </tr>
                        <tr align="center">
                            <th rowspan="2">Bukti Penugasan</th>
                            <th rowspan="2">Sks</th>
                            <th rowspan="2">Bukti Kinerja Pengabdian</th>
                            <th colspan="2">Capaian</th>
                        </tr>
                        <tr align="center">
                            <th >%</th>
                            <th >Sks</th>
                        </tr>
                        </thead>
                        <tbody align="center">
                        <?php $i= 1; $jml=0; $jml1=0;foreach($pengabdian as $pen){?>
                        <tr align="center">
                        <td><?=$i?></td>
                        <td align="left"><?=$pen->kegiatan?></td>
                        <td align="left">
                                <?=$pen->bukti_penugasan_bk?> <br>
                                <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasanbk?>">File Bukti Penugasan</a>
                                
                        </td>
                        <td><?=$pen->sks_bk?></td>
                        <td>
                        <?php
                                foreach($tahun as $t){
                                    if($t->id==$pen->masa_pelaksaan){
                                        if($t->semester =="0"){
                                            echo "Semester Ganjil "; 
                                        }else{
                                            echo "Semester Genap "; 
                                        }
                                        echo $t->tahun;
                                    }
                                }
                            ?>
                        </td>
                        <td>
                            <?=$pen->bukti_penugasan_k?><br>
                            <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasank?>">File Bukti kinerja Pengabdian</a>
                        </td>
                        <td><?=$pen->persen_capaian?></td>
                        <td><?=$pen->sks_capaian?></td>
                        <td><?=$pen->penilaian_asesor?></td>
                        <td>
                                <a href="<?=base_url()?>Dosen/editPengabdian/<?=$pen->id?>/<?=$tahunS?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?=base_url()?>Dosen/hapusPengabdian/<?=$pen->id?>/<?=$tahunS?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        </tr>
                        <?php $i++;$jml += (float)$pen->sks_bk; $jml1 += (float)$pen->sks_capaian;}?>
                        </tbody>
                        <tfoot>
                        <tr>
                          <td colspan="2" align="center">Jumlah Beban Kerja</td>
                          <td></td>
                          <td><?= $jml?></td>
                          <td colspan="2" align="center">Jumlah Kinerja</td>
                          <td></td>
                          <td><?= $jml1?></td>
                          <td></td>
                          <td></td>
                        </tr>
                        </tfoot>
                    </table>
                    <?php if($tahunAktif[0]->id == $tahunS){?>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-pengabdian"><i class="fas fa-plus-circle"> Tambah Kegiatan</i></button>
                    <?php }?>
                    <a href="<?=base_url()?>Dosen/kePenunjang/<?=$tahunS?>" class="btn btn-success btn-sm float-right" ><i class="fas fa-arrow-right"> Selanjutnya</i></a>
                    <a href="<?=base_url()?>Dosen/kePenelitian/<?=$tahunS?>" class="btn btn-primary btn-sm float-right" ><i class="fas fa-arrow-left"> Sebelumnya</i></a>
                  </div>




                <div class="tab-pane fade <?=$this->session->active6?> <?=$this->session->show6?>" id="custom-tabs-four-berkas" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                  <table id="example1a" class="table table-bordered" >
                <thead>
                <tr align="center">
                  <th>SPTJM Dosen</th>
                  <th>SPTJM Rektor</th>
                  <th>Pernyataan Asesor</th>
                </tr>
                </thead>
                <tbody align="center">
                <tr>
                  <td>
                       <a href="<?=base_url()?>Dosen/file/file/file1.docx" type="button"  class="btn btn-success btn-sm"><i class="fas fa-download"> Download</i></a>
                  </td>
                  <td>
                       <a href="<?=base_url()?>Dosen/file/file/file2.docx" type="button"   class="btn btn-success btn-sm"><i class="fas fa-download"> Download</i></a>
                  </td>
                  <td>
                    
                  </td>
                </tr>
                <!-- <?php $i=1; foreach($tahun as $ad){?> -->
                <tr>
                  <td>
                       <a href="#" type="button" data-toggle="modal" data-target="#modal-sptjm" class="btn btn-primary btn-sm"><i class="fas fa-upload"> Upload</i></a>
                  </td>
                  <td>
                       <a href="#" type="button"  data-toggle="modal" data-target="#modal-sptjmr" class="btn btn-primary btn-sm"><i class="fas fa-upload"> Upload</i></a>
                  </td>
                  <td>
                    <?php if($dosfot[0]->pertnyataan_as!="" || $dosfot[0]->pertnyataan_as != null){?>
                        <a href="<?=base_url()?>Dosen/file/<?=$dosfot[0]->pertnyataan_as?>" type="button" class="btn btn-success btn-sm"><i class="fas fa-download"> Download</i></a>
                    <?php }else{?>
                          <p>File belum diunggah</p>
                    <?php }?>
                  </td>
                </tr>
                <tr>
                  <td>
                  <?php if($dosfot[0]->sptjm_dosen!="" || $dosfot[0]->sptjm_dosen != null){?>
                        <a href="<?=base_url()?>Dosen/file/<?=$dosfot[0]->sptjm_dosen?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-download"> Download</i></a>
                    <?php }else{?>
                          <p>File belum diunggah</p>
                    <?php }?>
                  </td>
                  <td>
                       
                  <?php if($dosfot[0]->sptjm_pimpinan!="" || $dosfot[0]->sptjm_pimpinan != null){?>
                        <a href="<?=base_url()?>Dosen/file/<?=$dosfot[0]->sptjm_pimpinan?>" type="button" class="btn btn-primary btn-sm">Download SPTJM DOSEN</i></a>
                     <?php }else{?>
                           <p>File belum diunggah</p>
                     <?php }?>
                  </td>
                  <td>
                        <!-- <a href="<?=base_url()?>Dosen/bkd/" type="button" class="btn btn-success btn-sm"><i class="fas fa-download"> Download</i></a> -->
                  </td>
                </tr>
                <!-- <?php $i++;}?> -->
                </tbody>
              </table>
                    
              <a href="<?=base_url()?>Dosen/kesimpulan/<?=$tahunS?>" class="btn btn-success btn-sm float-right"><i class="fas fa-arrow-right"> Kesimpulan</i></a>
                    <a href="<?=base_url()?>Dosen/keKhusus/<?=$tahunS?>" class="btn btn-primary btn-sm float-right" ><i class="fas fa-arrow-left"> Sebelumnya</i></a>
                    
                  </div>
                    



                  <div class="tab-pane fade <?=$this->session->active3?> <?=$this->session->show3?>" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                  <table id="example1a" class="table table-bordered table-striped" >
                  <thead>
                        <tr align="center">
                            <th rowspan="3">No</th>
                            <th rowspan="3">Jenis Kegiatan</th>
                            <th colspan="2">Beban Kerja</th>
                            <th rowspan="3">Masa Pelaksanaan Tugas</th>
                            <th colspan="3">Kinerja</th>
                            <th rowspan="3">Penilaian/Rekomendasi Asesor</th>
                            <th rowspan="3">Aksi</th>
                        </tr>
                        <tr align="center">
                            <th rowspan="2">Bukti Penugasan</th>
                            <th rowspan="2">Sks</th>
                            <th rowspan="2">Bukti Kinerja Penunjang</th>
                            <th colspan="2">Capaian</th>
                        </tr>
                        <tr align="center">
                            <th >%</th>
                            <th >Sks</th>
                        </tr>
                        </thead>
                        <tbody align="center">
                        <?php $i= 1; $jml=0; $jml1=0;foreach($penunjang as $pen){?>
                        <tr align="center">
                        <td><?=$i?></td>
                        <td align="left"><?=$pen->kegiatan?></td>
                        <td align="left">
                                <?=$pen->bukti_penugasan_bk?><br>
                                <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasanbk?>">File Bukti Penugasan</a>
                                
                        </td>
                        <td><?=$pen->sks_bk?></td>
                        <td>
                        <?php
                                foreach($tahun as $t){
                                    if($t->id==$pen->masa_pelaksaan){
                                        if($t->semester =="0"){
                                            echo "Semester Ganjil "; 
                                        }else{
                                            echo "Semester Genap "; 
                                        }
                                        echo $t->tahun;
                                    }
                                }
                            ?>
                        </td>
                        <td>
                            <?=$pen->bukti_penugasan_k?><br>
                            <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasank?>">File Bukti Kinerja Penunjang</a>
                        </td>
                        <td><?=$pen->persen_capaian?></td>
                        <td><?=$pen->sks_capaian?></td>
                        <td><?=$pen->penilaian_asesor?></td>
                        <td>
                                <a href="<?=base_url()?>Dosen/editPenunjang/<?=$pen->id?>/<?=$tahunS?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?=base_url()?>Dosen/hapusPenunjang/<?=$pen->id?>/<?=$tahunS?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        </tr>
                        <?php $i++;$jml += (float)$pen->sks_bk; $jml1 += (float)$pen->sks_capaian;}?>
                        </tbody>
                        <tfoot>
                        <tr>
                          <td colspan="2" align="center">Jumlah Beban Kerja</td>
                          <td></td>
                          <td><?= $jml?></td>
                          <td colspan="2" align="center">Jumlah Kinerja</td>
                          <td></td>
                          <td><?= $jml1?></td>
                          <td></td>
                          <td></td>
                        </tr>
                        </tfoot>
                    </table>
                    <?php if($tahunAktif[0]->id == $tahunS){?>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-penunjang"><i class="fas fa-plus-circle"> Tambah Kegiatan</i></button>
                    <?php }?>
                    <a href="<?=base_url()?>Dosen/keKhusus/<?=$tahunS?>" class="btn btn-success btn-sm float-right" ><i class="fas fa-arrow-right"> Selanjutnya</i></a>
                    <a href="<?=base_url()?>Dosen/kePengabdian/<?=$tahunS?>" class="btn btn-primary btn-sm float-right" ><i class="fas fa-arrow-left"> Sebelumnya</i></a>
                  </div>

                  <div class="tab-pane fade <?=$this->session->active4?> <?=$this->session->show4?>" id="custom-tabs-four-prof" role="tabpanel" aria-labelledby="custom-tabs-four-prof-tab">
                  <table id="dtHorizontalExample4" class="table table-bordered table-striped" >
                        <thead>
                        <tr align="center">
                            <th rowspan="3">No</th>
                            <th rowspan="3">Jenis Kegiatan</th>
                            <th colspan="2">Beban Kerja</th>
                            <th rowspan="3">Masa Pelaksanaan Tugas</th>
                            <th colspan="3">Kinerja</th>
                            <th rowspan="3">Penilaian/Rekomendasi Asesor</th>
                            <th rowspan="3">Aksi</th>
                        </tr>
                        <tr align="center">
                            <th rowspan="2">Bukti Penugasan</th>
                            <th rowspan="2">Sks</th>
                            <th rowspan="2">Bukti Kinerja</th>
                            <th colspan="2">Capaian</th>
                        </tr>
                        <tr align="center">
                            <th >%</th>
                            <th >Sks</th>
                        </tr>
                        </thead>
                        <tbody align="center">
                        <tr align="left">
                          <th >A</th>
                          <th colspan="9" >Menulis Buku</th>
                        </tr>
                        <?php $i= 1;  $jml=0; $jml1=0;foreach($khusus as $pen){ if($pen->jenis=="0"){?>
                        <tr align="center">
                        <td><?=$i?></td>
                        <td align="left"><?=$pen->kegiatan?></td>
                        <td align="left">
                                <?=$pen->bukti_penugasan_bk?><br>
                                <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasanbk?>">File Bukti Penugasan</a>
                                
                        </td>
                        <td><?=$pen->sks_bk?></td>
                        <td>
                        <?php
                                foreach($tahun as $t){
                                    if($t->id==$pen->masa_pelaksaan){
                                        if($t->semester =="0"){
                                            echo "Semester Ganjil "; 
                                        }else{
                                            echo "Semester Genap "; 
                                        }
                                        echo $t->tahun;
                                    }
                                }
                            ?>
                        </td>
                        <td>
                            <?=$pen->bukti_penugasan_k?><br>
                            <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasank?>">File Bukti Penugasan</a>
                        </td>
                        <td><?=$pen->persen_capaian?></td>
                        <td><?=$pen->sks_capaian?></td>
                        <td><?=$pen->penilaian_asesor?></td>
                        <td>
                                <a href="<?=base_url()?>Dosen/editKhusus/<?=$pen->id?>/<?=$tahunS?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?=base_url()?>Dosen/hapusKhusus/<?=$pen->id?>/<?=$tahunS?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        </tr>
                        <?php $i++;$jml += (float)$pen->sks_bk; $jml1 += (float)$pen->sks_capaian;}}?> 
                        <tr align="left">
                          <th >B</th>
                          <th colspan="9">Menghasilkan Karya Ilmiah</th>
                        </tr>
                        <?php $i= 1; foreach($khusus as $pen){ if($pen->jenis=="1"){?>
                        <tr>
                        <td><?=$i?></td>
                        <td align="left"><?=$pen->kegiatan?></td>
                        <td align="left">
                                <?=$pen->bukti_penugasan_bk?><br>
                                <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasanbk?>">File Bukti Penugasan</a>
                                
                        </td>
                        <td><?=$pen->sks_bk?></td>
                        <td>
                        <?php
                                foreach($tahun as $t){
                                    if($t->id==$pen->masa_pelaksaan){
                                        if($t->semester =="0"){
                                            echo "Semester Ganjil "; 
                                        }else{
                                            echo "Semester Genap "; 
                                        }
                                        echo $t->tahun;
                                    }
                                }
                            ?>
                            </td>
                        <td>
                            <?=$pen->bukti_penugasan_k?><br>
                            <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasank?>">File Bukti Penugasan</a>
                        </td>
                        <td><?=$pen->persen_capaian?></td>
                        <td><?=$pen->sks_capaian?></td>
                        <td><?=$pen->penilaian_asesor?></td>
                        <td>
                                <a href="<?=base_url()?>Dosen/editKhusus/<?=$pen->id?>/<?=$tahunS?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?=base_url()?>Dosen/hapusKhusus/<?=$pen->id?>/<?=$tahunS?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        </tr>
                        <?php $i++;$jml += (float)$pen->sks_bk; $jml1 += (float)$pen->sks_capaian;}}?>
                        <tr align="left">
                          <th>C</th>
                          <th colspan="9" >Menyebarluaskan Gagasan</th>
                        </tr>
                        <?php $i= 1; foreach($khusus as $pen){ if($pen->jenis=="2"){?>
                        <tr>
                        <td><?=$i?></td>
                        <td align="left"><?=$pen->kegiatan?></td>
                        <td align="left">
                                <?=$pen->bukti_penugasan_bk?><br>
                                <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasanbk?>">File Bukti Penugasan</a>
                                
                        </td>
                        <td><?=$pen->sks_bk?></td>
                        <td>
                        <?php
                                foreach($tahun as $t){
                                    if($t->id==$pen->masa_pelaksaan){
                                        if($t->semester =="0"){
                                            echo "Semester Ganjil "; 
                                        }else{
                                            echo "Semester Genap "; 
                                        }
                                        echo $t->tahun;
                                    }
                                }
                            ?>
                        </td>
                        <td>
                            <?=$pen->bukti_penugasan_k?><br>
                            <a href="<?=base_url()?>uploads/<?=$pen->file_bukti_penugasank?>">File Bukti Penugasan</a>
                        </td>
                        <td><?=$pen->persen_capaian?></td>
                        <td><?=$pen->sks_capaian?></td>
                        <td><?=$pen->penilaian_asesor?></td>
                        <td>
                                <a href="<?=base_url()?>Dosen/editKhusus/<?=$pen->id?>/<?=$tahunS?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?=base_url()?>Dosen/hapusKhusus/<?=$pen->id?>/<?=$tahunS?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        </tr>
                        <?php $i++;$jml += (float)$pen->sks_bk; $jml1 += (float)$pen->sks_capaian;}}?>
                        </tbody>
                        <tfoot>
                        <tr>
                          <td colspan="2" align="center">Jumlah Beban Kerja</td>
                          <td></td>
                          <td><?= $jml?></td>
                          <td colspan="2" align="center">Jumlah Kinerja</td>
                          <td></td>
                          <td><?= $jml1?></td>
                          <td></td>
                          <td></td>
                        </tr>
                        </tfoot>
                    </table>
                    <?php if($tahunAktif[0]->id == $tahunS){?>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-khusus"><i class="fas fa-plus-circle"> Tambah Kegiatan</i></button>
                    <?php }?>
                      <!-- <button data-toggle="modal" data-target="#modal-kesimpulan" class="btn btn-success btn-sm float-right"><i class="fas fa-arrow-right"> Kesimpulan</i></button>
                     -->
                     <a href="<?=base_url()?>Dosen/keUpload/<?=$tahunS?>" class="btn btn-success btn-sm float-right" ><i class="fas fa-arrow-right"> Selanjutnya</i></a>
                    <a href="<?=base_url()?>Dosen/kePenunjang/<?=$tahunS?>" class="btn btn-primary btn-sm float-right" ><i class="fas fa-arrow-left"> Sebelumnya</i></a>
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

  <script>
            function showImage(src,target) {
                var fr=new FileReader();
                // when image is loaded, set the src of the image where you want to display it
                fr.onload = function(e) { target.src = this.result; };
                src.addEventListener("change",function() {
                    // fill fr with image data    
                    document.getElementById("file").innerHTML  = src.files[0]['name']
                    fr.readAsDataURL(src.files[0]);
                });
            }

            function showImage1(src) {
                var fr=new FileReader();
                // when image is loaded, set the src of the image where you want to display it
                src.addEventListener("change",function() {
                    // fill fr with image data    
                    document.getElementById("file1").innerHTML  = src.files[0]['name']
                    fr.readAsDataURL(src.files[0]);
                });
            }

            function showImage2(src) {
                var fr=new FileReader();
                // when image is loaded, set the src of the image where you want to display it
                src.addEventListener("change",function() {
                    // fill fr with image data    
                    document.getElementById("file2").innerHTML  = src.files[0]['name']
                    fr.readAsDataURL(src.files[0]);
                });
            }

            function showImage3(src) {
                var fr=new FileReader();
                // when image is loaded, set the src of the image where you want to display it
                src.addEventListener("change",function() {
                    // fill fr with image data    
                    document.getElementById("file3").innerHTML  = src.files[0]['name']
                    fr.readAsDataURL(src.files[0]);
                });
            }

            function showImage4(src) {
                var fr=new FileReader();
                // when image is loaded, set the src of the image where you want to display it
                src.addEventListener("change",function() {
                    // fill fr with image data    
                    document.getElementById("file4").innerHTML  = src.files[0]['name']
                    fr.readAsDataURL(src.files[0]);
                });
            }

            function showImage5(src) {
                var fr=new FileReader();
                // when image is loaded, set the src of the image where you want to display it
                src.addEventListener("change",function() {
                    // fill fr with image data    
                    document.getElementById("file5").innerHTML  = src.files[0]['name']
                    fr.readAsDataURL(src.files[0]);
                });
            }

            function showImage6(src) {
                var fr=new FileReader();
                // when image is loaded, set the src of the image where you want to display it
                src.addEventListener("change",function() {
                    // fill fr with image data    
                    document.getElementById("file6").innerHTML  = src.files[0]['name']
                    fr.readAsDataURL(src.files[0]);
                });
            }

            function showImage7(src) {
                var fr=new FileReader();
                // when image is loaded, set the src of the image where you want to display it
                src.addEventListener("change",function() {
                    // fill fr with image data    
                    document.getElementById("file7").innerHTML  = src.files[0]['name']
                    fr.readAsDataURL(src.files[0]);
                });
            }

            function showImage8(src) {
                var fr=new FileReader();
                // when image is loaded, set the src of the image where you want to display it
                src.addEventListener("change",function() {
                    // fill fr with image data    
                    document.getElementById("file8").innerHTML  = src.files[0]['name']
                    fr.readAsDataURL(src.files[0]);
                });
            }

            function showImage9(src) {
                var fr=new FileReader();
                // when image is loaded, set the src of the image where you want to display it
                src.addEventListener("change",function() {
                    // fill fr with image data    
                    document.getElementById("file9").innerHTML  = src.files[0]['name']
                    fr.readAsDataURL(src.files[0]);
                });
            }

                var src = document.getElementById("src");
                var src1 = document.getElementById("src1");
                var src2 = document.getElementById("src2");
                var src3 = document.getElementById("src3");
                var src4 = document.getElementById("src4");
                var src5 = document.getElementById("src5");
                var src6 = document.getElementById("src6");
                var src7 = document.getElementById("src7");
                var src8 = document.getElementById("src8");
                var src9 = document.getElementById("src9");
                var target = document.getElementById("target");
                showImage(src,target);
                showImage1(src1);
                showImage2(src2);
                showImage3(src3);
                showImage4(src4);
                showImage5(src5);
                showImage6(src6);
                showImage7(src7);
                showImage8(src8);
                showImage9(src9);
       </script>