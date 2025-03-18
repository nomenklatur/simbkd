

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-12 col-12">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h5>Selamat Datang di Sistem Informasi Beban Kinerja Dosen IAKN Tarutung
                </h5>
              </div>
            </div>
          </div>
         <!-- Timelime example  -->
         <div class="row">
          <div class="col-md-12">
            <!-- The time line -->
            <div class="timeline">
              <!-- timeline time label -->
              <!-- /.timeline-label -->

              <?php foreach($info as $in){ if($in->kepada=='0'||$in->kepada=='2'){?>
              <!-- timeline item -->
              <div>
                <i class="fas fa-envelope bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> <?=$in->tanggal?></span>
                  <h3 class="timeline-header"><a href="#">Admin IAKN Tarutung</a> Menginformasikan</h3>
                  <?php if($in->type=='1'){?>
                      <div class="timeline-body">
                          <img width="80%" height="80%" src="<?=base_url()?>assets/<?= $in->gambar ?>" alt="Foto">
                      </div>
                  <?php }else{?>
                        <div class="timeline-body">
                        <?=$in->info?> 
                      </div>
                  <?php }?>
                  <div class="timeline-footer">
                    <a class="btn btn-primary btn-sm">Read more</a>
                    <a class="btn btn-danger btn-sm">Delete</a>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <?php }}?>
              
             
            </div>
          </div>
          <!-- /.col -->
        </div>
      </div>
      <!-- /.timeline -->


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>