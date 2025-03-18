

<!-- Main content -->
<section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped" >
                <thead>
                <tr align="center">
                  <th>No</th>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody align="center">
                <?php $i=1; foreach($dosen as $ad){?>
                <tr>
                  <td><?=$i?></td>
                  <td><?=$ad->nip?></td>
                  <td><?=$ad->nama?></td>
                  <td>
                         <a href="<?=base_url()?>Admin/laporanHarian/<?=$ad->id?>" type="button" class="btn btn-info btn-sm"><i class="fas fa-search"></i>Lihat Laporan</a>
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

      