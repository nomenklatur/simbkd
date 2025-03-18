
<div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Informasi</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form role="form" enctype="multipart/form-data" method="POST" action="<?=base_url()?>Admin/informasi/do_create">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Informasi</label><br> 
                    <textarea type="text" class="form-control" id="editor1" name="info" required> </textarea>
                  </div>
                  <div class="custom-file">
                        <input type="file" id="src" class="custom-file-input" name="foto" id="exampleInputFile">
                        <label class="custom-file-label" id="file" for="">Pilih file</label>
                    </div>
                  <div class="form-group">
                        <label>Kepada </label>
                        <select name="kepada" class="form-control">
                          <option value="0">Dosen</option>
                          <option value="1">Asesor</option>
                          <option value="2">Semua</option>
                        </select>
                   </div>
                   <div class="form-group">
                        <label>Tipe </label>
                        <select name="tipe" class="form-control">
                          <option value="0">Text</option>
                          <option value="1">Gambar</option>
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
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
          <div class="card-header">
                     <button type="button" class="btn btn-secondary btn-lg float-right" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus"> Tambah</i></button>
            </div>
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped" >
                <thead>
                <tr align="center">
                  <th>No</th>
                  <th>Informasi </th>
                  <th>Kepada </th>
                  <th>Tipe</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody align="center">
                <?php $i=1;foreach($info as $in){?>
                <tr>
                  <td><?=$i?></td>
                  <td><?=$in->info?></td>
                  <td> 
                  <?php 
                        if($in->kepada ==  0 ){
                            echo "Dosen";
                        }elseif($in->kepada == 1){
                            echo "Asesor";
                        }else{
                            echo "Semua";
                        }
                  
                  ?></td>
                  <td>
                        <?= $in->type==0 ? "Text":"Gambar"?>
                  </td>
                  <td>
                        <a href="<?=base_url()?>Admin/hapusInfo/<?=$in->id?>" type="button" class="btn btn-danger btn-sm"> Hapus</i></a>
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

  <script src="<?= base_url() ?>assets/vendor/ckeditor/ckeditor.js"></script>
        <script>
                CKEDITOR.replace( 'editor1' );
                CKEDITOR.replace( 'editor2' );
                CKEDITOR.replace( 'editor3' );
                CKEDITOR.replace( 'editor4' );
                CKEDITOR.replace( 'editor5' );
       </script>

       
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
                var src8 = document.getElementById("src8");
                var target = document.getElementById("target");
                showImage(src,target);
       </script>
            