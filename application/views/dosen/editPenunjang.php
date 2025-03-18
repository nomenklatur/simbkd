<section class="content">
      <div class="row">
        <div class="col-9">
          <div class="card">
            <div class="card-body">
            <form role="form" enctype="multipart/form-data" method="POST" action="<?=base_url()?>Dosen/editPenunjang/<?=$penunjang[0]->id?>/<?=$tahunS?>/do_edit">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kegiatan</label>
                    <textarea type="text" class="form-control" name="kegiatan" ><?=$penunjang[0]->kegiatan?></textarea>
                  </div>
                  <div class="form-group"  align="center">
                    <label for="exampleInputEmail1">Beban Kerja</label>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bukti Kegiatan</label>
                    <textarea type="text" class="form-control" name="bukti_kegiatan_bk" ><?=$penunjang[0]->bukti_penugasan_bk?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">File Bukti Kegiatan</label>
                        <div class="custom-file">
                            <input type="file" id="src2" class="custom-file-input"  name="file_bukti_bk" >
                            <label class="custom-file-label" id="file2" for="src2">Pilih file</label>
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sks</label>
                    <input type="text" class="form-control" name="sks_bk" value="<?=$penunjang[0]->sks_bk?>">
                  </div>
                  <div class="form-group"  align="center">
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
                  <div class="form-group"  align="center">
                    <label for="exampleInputEmail1">Kinerja</label>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bukti Kegiatan</label>
                    <textarea type="text" class="form-control" name="bukti_kegiatan_k" ><?=$penunjang[0]->bukti_penugasan_k?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">File Bukti Kegiatan</label>
                        <div class="custom-file">
                            <input type="file" id="src3" class="custom-file-input"  name="file_bukti_k" >
                            <label class="custom-file-label" id="file3" for="src3">Pilih file</label>
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Persentases</label>
                    <input type="text" class="form-control" name="persen" value="<?=$penunjang[0]->persen_capaian?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sks</label>
                    <input type="text" class="form-control" name="sks_k" value="<?=$penunjang[0]->sks_capaian?>">
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

  <script>
           

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
                var src2 = document.getElementById("src2");
                var src3 = document.getElementById("src3");
                showImage2(src2);
                showImage3(src3);
       </script>