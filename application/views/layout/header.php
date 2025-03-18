<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi BKD</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon -->
  <link rel='icon' href='<?= base_url()?>images/fav.ico' type='image/x-icon'/>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/datetimepicker/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?=base_url()?>images/logo-new1.png" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SISTEM BKD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <?php if($this->session->level == 11 && @$dosfot[0]->foto_dosen != null || @$dosfot[0]->foto_dosen != ""){?>
          <img src="<?=base_url()?>assets/<?=@$dosfot[0]->foto_dosen ?>" class="img-circle elevation-2" alt="User Image">
          
        <?php }else{?>
            <img src="<?=base_url()?>assets/dist/img/avatar.jpg" class="img-circle elevation-2" alt="User Image">
        <?php }?>
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $nip?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <?php if($this->session->level == 9){?>
                <li class="nav-item has-treeview menu-open">
                  <a href="<?=base_url()?>Admin/index" class="nav-link <?= $this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='index' ? "active" : null ?>">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Dashboard
                    </p>
                  </a>
                </li>
                <li class="nav-item">
              <a href="<?=base_url()?>Admin/laporanDosen/<?= $this->session->id ?>" class="nav-link <?= $this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='laporanDosen'|| $this->uri->segment(2)=='daftarDosen'|| $this->uri->segment(2)=='laporanHarian'? "active" : null ?>">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Laporan Harian Dosen
                </p>
              </a>
            </li> 

            <li class="nav-item">
              <a href="<?=base_url()?>Admin/ubahPassAdmin/<?= $this->session->id ?>" class="nav-link <?= $this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='ubahPassAdmin'? "active" : null ?>">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                  Ubah Password
                </p>
              </a>
            </li> 

                  <?php }?>
          <?php if($this->session->level == 10 ){?>
            <li class="nav-item has-treeview menu-open">
              <a href="<?=base_url()?>Admin/index" class="nav-link <?= $this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='index' ? "active" : null ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?= $this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='admin' ||$this->uri->segment(2)=='dosen' ||$this->uri->segment(2)=='asessor' || $this->uri->segment(2)=='apenilai' || $this->uri->segment(2)=='editAdmin' || $this->uri->segment(2)=='ubahPassAdmin'|| $this->uri->segment(2)=='editAsessor' || $this->uri->segment(2)=='ubahPassasessor' || $this->uri->segment(2)=='editDosen' || $this->uri->segment(2)=='lihatDosen' || $this->uri->segment(2)=='ubahPassDosen'|| $this->uri->segment(2)=='adminFak'|| $this->uri->segment(2)=='editAdminFak'|| $this->uri->segment(2)=='ubahPassAdminFak'? "active" : null ?>">
              <i class="nav-icon fas fa-user-friends"></i>
              <p> 
                Manajemen Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url()?>Admin/admin" class="nav-link <?= $this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='admin' || $this->uri->segment(2)=='editAdmin' || $this->uri->segment(2)=='ubahPassAdmin' ? "active" : null ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url()?>Admin/adminFak" class="nav-link <?= $this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='adminFak' || $this->uri->segment(2)=='editAdmin' || $this->uri->segment(2)=='ubahPassAdmin' || $this->uri->segment(2)=='editAdminFak' || $this->uri->segment(2)=='ubahPassAdminFak'? "active" : null ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Fakultas</p> 
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url()?>Admin/dosen" class="nav-link <?= $this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='dosen' || $this->uri->segment(2)=='editDosen' || $this->uri->segment(2)=='lihatDosen'|| $this->uri->segment(2)=='ubahPassDosen'? "active" : null ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dosen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url()?>Admin/asessor" class="nav-link <?= $this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='asessor' || $this->uri->segment(2)=='editAsessor'|| $this->uri->segment(2)=='ubahPassasessor' ? "active" : null ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Asessor</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
              <a href="<?=base_url()?>Admin/rubrik/" class="nav-link <?= $this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='rubrik' || $this->uri->segment(2)=="editRubrik" || $this->uri->segment(2)=="editPendidikan" || $this->uri->segment(2)=="editPenelitian"|| $this->uri->segment(2)=="editPengabdian"|| $this->uri->segment(2)=="editPenunjang"|| $this->uri->segment(2)=="editKhusus"? "active" : null ?>">
                <i class="nav-icon fas fa-database"></i>
                <p>
                  Rubrik
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?=base_url()?>Admin/pilihTahun" class="nav-link <?= $this->uri->segment(1)=='Dosen' && $this->uri->segment(2)=='bkd'||$this->uri->segment(2)=='editPendidikan' ||$this->uri->segment(2)=='editPenunjang' ||$this->uri->segment(2)=='editPenelitian' ||$this->uri->segment(2)=='editPengabdian'||$this->uri->segment(2)=='bkd'||$this->uri->segment(2)=='kesimpulan'||$this->uri->segment(2)=='pilihTahun'||$this->uri->segment(2)=='bkdDosen'? "active" : null ?>">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  BKD Dosen
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?=base_url()?>Admin/aktivasi" class="nav-link <?= $this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='aktivasi'? 'active': null?>">
                <i class="nav-icon fas fa-clock-o"></i>
                <p>
                  Masa BKD
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?=base_url()?>Admin/sk/" class="nav-link <?= $this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='sk' || $this->uri->segment(2)=="editSk"? "active" : null ?>">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>
                  SK
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url()?>Admin/fakultas/" class="nav-link <?= $this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='fakultas' || $this->uri->segment(2)=="editfakultas"? "active" : null ?>">
                <i class="nav-icon fas fa-graduation-cap"></i>
                <p>
                  Fakultas
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url()?>Admin/pStudi/" class="nav-link <?= $this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='pStudi' || $this->uri->segment(2)=="editpStudi"? "active" : null ?>">
                <i class="nav-icon fas fa-user-graduate"></i>
                <p>
                  Program Studi
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url()?>Admin/jenisDosen/" class="nav-link <?= $this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='jenisDosen' || $this->uri->segment(2)=="editJdosen"? "active" : null ?>">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Jenis Dosen
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url()?>Admin/tahunStudi/" class="nav-link <?= $this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='tahunStudi' || $this->uri->segment(2)=="editTahun"? "active" : null ?>">
                <i class="nav-icon fas fa-calendar-alt"></i>
                <p>
                  Tahun Studi
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?=base_url()?>Admin/informasi/" class="nav-link <?= $this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='informasi' || $this->uri->segment(2)=="editInformasi"? "active" : null ?>">
                <i class="nav-icon fa fa-info-circle"></i>
                <p>
                  Informasi
                </p>
              </a>
            </li>
          <?php }?>
          <?php if($this->session->level == 11 ){?>
            <li class="nav-item has-treeview menu-open">
              <a href="<?=base_url()?>Dosen/index" class="nav-link <?= $this->uri->segment(1)=='Dosen' && $this->uri->segment(2)=='index' ? "active" : null ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?=base_url()?>Dosen/dataDiri" class="nav-link <?= $this->uri->segment(1)=='Dosen' && $this->uri->segment(2)=='dataDiri'||$this->uri->segment(2)=='editdataDiri' ? "active" : null ?>">
                <i class="nav-icon fas fa-user-graduate"></i>
                <p>
                  Data Diri
                </p>
              </a>
            </li>

            
            <li class="nav-item">
              <a href="<?=base_url()?>Dosen/pilihTahun" class="nav-link <?= $this->uri->segment(1)=='Dosen' && $this->uri->segment(2)=='bkd'||$this->uri->segment(2)=='editPendidikan' ||$this->uri->segment(2)=='editPenunjang' ||$this->uri->segment(2)=='editPenelitian' ||$this->uri->segment(2)=='editPengabdian'||$this->uri->segment(2)=='editKhusus'||$this->uri->segment(2)=='kesimpulan'||$this->uri->segment(2)=='pilihTahun'? "active" : null ?>">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>
                  BKD
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?=base_url()?>Dosen/laporan" class="nav-link <?= $this->uri->segment(1)=='Dosen' && $this->uri->segment(2)=='laporan' || $this->uri->segment(2)=='editLaporan' ? "active" : null ?>">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Laporan Harian Dosen
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?=base_url()?>Dosen/lampiran" class="nav-link <?= $this->uri->segment(1)=='Dosen' && $this->uri->segment(2)=='lampiran' || $this->uri->segment(2)=='editLampiran' ? "active" : null ?>">
                <i class="nav-icon fas fa-folder-open"></i>
                <p>
                  Lampiran
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?=base_url()?>Dosen/ubahPass/<?= $this->session->id ?>" class="nav-link <?= $this->uri->segment(1)=='Dosen' && $this->uri->segment(2)=='ubahPass'? "active" : null ?>">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                  Ubah Password
                </p>
              </a>
            </li>              
          <?php }?>
          <?php if($this->session->level == 12){?>

            <li class="nav-item has-treeview menu-open">
              <a href="<?=base_url()?>Asesor/index" class="nav-link <?= $this->uri->segment(1)=='Asesor' && $this->uri->segment(2)=='index' ? "active" : null ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?=base_url()?>Asesor/bkdDosen" class="nav-link  <?= $this->uri->segment(1)=='Asesor' && $this->uri->segment(2)=='bkdDosen' || $this->uri->segment(2)=='bkd'|| $this->uri->segment(2)=='editMutu' || $this->uri->segment(2)=='editPendidikan'|| $this->uri->segment(2)=='editPenelitian'|| $this->uri->segment(2)=='editPengabdian'|| $this->uri->segment(2)=='editPenunjang'|| $this->uri->segment(2)=='kesimpulan'|| $this->uri->segment(2)=='nilaiKesimpulan'? "active" : null ?>">
                <i class="nav-icon fas fa-pen-square"></i>
                <p>
                  BKD Dosen
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url()?>Asesor/ubahPass/<?= $this->session->id ?>" class="nav-link <?= $this->uri->segment(1)=='Asesor' && $this->uri->segment(2)=='ubahPass'? "active" : null ?>">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                  Ubah Password
                </p>
              </a>
            </li>   
          <?php }?>
           
            <li class="nav-item">
              <a href="<?=base_url()?>Welcome/logout" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Log Out
                </p>
              </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $judul?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?=$judul?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>