 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-header">
              <div class="card-body">
                  <form enctype="multipart/form-data" class="form-horizontal" method="POST" action="<?=base_url()?>Dosen/editFoto/<?=$dosen[0]->id?>/do_edit">
              <div class="form-group">
                    <div class="text-center">
                        <?php if($dosen[0]->foto_dosen != "" || $dosen[0]->foto_dosen != null){?>
                        <img width="100%" id="target"
                            src="<?=base_url()?>assets/<?=$dosen[0]->foto_dosen?>"
                            alt="User profile picture">
                        </div>
                        <?php }else{?>
                            <img width="100%" id="target"
                            src="<?=base_url()?>images/ava.png"
                            alt="User profile picture">
                        </div>
                        <?php }?>
                    </div>
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" id="src" class="custom-file-input" name="foto_dosen" id="exampleInputFile">
                        <label class="custom-file-label" id="file" for="">Pilih file</label>
                      </div>
                      <!-- <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div> -->
                      
                    </div>
                    <br>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary float-right">Upload</button>
                    </div>
                </form>
                        
            <form enctype="multipart/form-data" class="form-horizontal" method="POST" action="<?=base_url()?>Dosen/editdataDiri/<?=$dosen[0]->id?>/do_edit">
            </div>
            <!-- /.card-body -->
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
            <div class="card">
              <div class="card-body">
              <div class="form-group row">
                        <label for="inputEmail1" class="col-sm-2 col-form-label">No Sertifikat</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail1" name="no_sertifikat" value="<?=$dosen[0]->no_sertifikat?>" placeholder="no. sertifikat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail2" class="col-sm-2 col-form-label">NIP</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail2" name="nip" value="<?=$dosen[0]->nip?>" placeholder="nip">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">NIDN</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="nidn" value="<?=$dosen[0]->nidn?>" placeholder="nidn">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword4" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword4" value="<?=$dosen[0]->username?>" name="username" placeholder="username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword4" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword4" value="<?=$dosen[0]->nama?>" name="nama" placeholder="nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail5" class="col-sm-2 col-form-label">Nama PT.</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail5" name="nama_pt" value="<?=$dosen[0]->nama_pt?>" placeholder="nama pt.">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail6" class="col-sm-2 col-form-label">Alamat PT.</label>
                        <div class="col-sm-10">
                        <textarea  class="form-control" id="inputEmail6" name="alamat_pt" ><?=$dosen[0]->alamat_pt == ""?"":$dosen[0]->alamat_pt?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail7" class="col-sm-2 col-form-label">Fakultas</label>
                        <div class="col-sm-10">
                        <select name="fakultas" class="form-control">
                        <?php foreach($fakultas as $af){ ?>
                          <option value="<?= $af->id?>"><?= $af->fakultas?></option>
                        <?php }?>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail8" class="col-sm-2 col-form-label">Program Studi</label>
                        <div class="col-sm-10">
                        <select name="program_studi" class="form-control" required>
                        <?php foreach($studi as $af){ ?>
                          <option value="<?= $af->id?>"><?= $af->program_studi?></option>
                        <?php }?>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail9" class="col-sm-2 col-form-label">jab. Fungsional</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail9" name="jab_fungsional" value="<?=$dosen[0]->jab_fungsional?>" placeholder="jab. fungsional">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail10" class="col-sm-2 col-form-label">Golongan</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail10" name="golongan" value="<?=$dosen[0]->golongan?>" placeholder="golongan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail11" class="col-sm-2 col-form-label">Pendidikan S1</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail11" name="pend_s1" value="<?=$dosen[0]->pend_s1?>" placeholder="pend. s1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="src1" class="col-sm-2 col-form-label">Ijazah s1</label>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" id="src1"  class="custom-file-input" name="ijazah_s1" id="">
                                <label class="custom-file-label" id="file1" for="src1">Pilih file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="src2" class="col-sm-2 col-form-label">Transkrip s1</label>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" id="src2" class="custom-file-input"  name="transkrip_s1" >
                                <label class="custom-file-label" id="file2" for="src2">Pilih file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail14" class="col-sm-2 col-form-label">Judul Skripsi</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail14" name="judul_skripsi" value="<?=$dosen[0]->judul_skripsi?>" placeholder="judul kripsi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail15" class="col-sm-2 col-form-label">Pendidikan S2</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail15" name="pend_s2" value="<?=$dosen[0]->pend_s2?>" placeholder="pend. s2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="src3" class="col-sm-2 col-form-label">Ijazah s2</label>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" id="src3" class="custom-file-input" name="ijazah_s2" >
                                <label class="custom-file-label" id="file3" for="src3">Pilih file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="src4" class="col-sm-2 col-form-label">Transkrip s2</label>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" id="src4" class="custom-file-input"  name="transkrip_s2" >
                                <label class="custom-file-label" id="file4" for="src4">Pilih file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail18" class="col-sm-2 col-form-label">Judul tesis</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail18" name="judul_tesis" value="<?=$dosen[0]->judul_tesis?>" placeholder="judul tesis">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail19" class="col-sm-2 col-form-label">Pendidikan S3</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail19" name="pend_s3" value="<?=$dosen[0]->pend_s3?>" placeholder="pend. s3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="src5"  class="col-sm-2 col-form-label">Ijazah s3</label>
                        <div class="col-sm-10">
                        <div class="custom-file">
                        <input type="file" id="src5" class="custom-file-input" name="ijazah_s3" >
                        <label class="custom-file-label" id="file5" for="src5">Pilih file</label>
                      </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="src6" class="col-sm-2 col-form-label">Transkrip s3</label>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" id="src6" class="custom-file-input" name="transkrip_s3" >
                                <label class="custom-file-label" id="file6" for="src6">Pilih file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail22" class="col-sm-2 col-form-label">Judul Disertasi</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail22" name="judul_disertasi" value="<?=$dosen[0]->judul_disertasi?>" placeholder="judul disertasi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail23" class="col-sm-2 col-form-label">Jenis Dosen</label>
                        <div class="col-sm-10">
                        <!-- <input type="text" class="form-control" id="inputEmail23" name="jenis_dosen" value="<?=$dosen[0]->jenis_dosen?>" placeholder="jenis dosen"> -->
                        <select name="jenis_dosen" class="form-control">
                        <?php foreach($jenis_dosen as $af){ ?>
                          <option value="<?= $af->id?>" <?= $af->id == $dosen[0]->jenis_dosen?"selected":null?>><?= $af->jenis_dosen?></option>
                        <?php }?>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="src7" class="col-sm-2 col-form-label">File Jenis Dosen</label>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" id="src7" class="custom-file-input" name="file_jenis_dosen" >
                                <label class="custom-file-label" id="file7" for="src7">Pilih file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail25" class="col-sm-2 col-form-label">Bidang Ilmu</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail25" name="bidang_ilmu" value="<?=$dosen[0]->bidang_ilmu?>" placeholder="bidang ilmu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail26" class="col-sm-2 col-form-label">Minat</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail26" name="minat" value="<?=$dosen[0]->minat?>" placeholder="minat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail27" class="col-sm-2 col-form-label">No. Hp</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputEmail27" name="no_hp" value="<?=$dosen[0]->no_hp?>" placeholder="no_hp">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail28" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail28" name="email" value="<?=$dosen[0]->email?>" placeholder="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail29" class="col-sm-2 col-form-label">Pimpinan</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail29" name="pimpinan" value="<?=$dosen[0]->pimpinan?>" placeholder="pimpinan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="src8"  class="col-sm-2 col-form-label">SPTJM</label>
                        <div class="col-sm-10">
                        <div class="custom-file">
                                <input type="file" id="src8" class="custom-file-input" name="sptjm" id="inputEmail30">
                                <label class="custom-file-label" id="file8" for="src8">Pilih file</label>
                            </div>
                        </div>
                    </div>
                     <!-- /.card-body -->
                     <div class="card-footer">
                    <button type="submit" class="btn btn-primary float-right"><i class="fas fa-edit"></i>Edit</button>
                    <a href="<?=base_url()?>Dosen/dataDiri" type="submit" class="btn btn-default ">Batal</a>
                    </div>
                    <!-- /.card-footer -->
                    </form>
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

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

                var src = document.getElementById("src");
                var src1 = document.getElementById("src1");
                var src2 = document.getElementById("src2");
                var src3 = document.getElementById("src3");
                var src4 = document.getElementById("src4");
                var src5 = document.getElementById("src5");
                var src6 = document.getElementById("src6");
                var src7 = document.getElementById("src7");
                var src8 = document.getElementById("src8");
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
       </script>
            