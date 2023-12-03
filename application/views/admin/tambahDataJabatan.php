<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">APP Penggajian</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">
                    <!--<i class="fas fa-fw fa-tachometer-alt"></i>-->
                    <span>Dashboard</span></a>
            </li>

          

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <!--<i class="fa-solid fa-fw fa-database"></i>-->
                    <span>Master Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                       
                        <a class="collapse-item" href="<?php echo base_url('admin/dataPegawai') ?>">Data Pegawai</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/dataJabatan') ?>">Data Jabatan</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <!--<i class="far  fa-money-check-alt"></i>-->
                    <span>Transaksi</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                       <a class="collapse-item" href="<?php echo base_url('admin/dataAbsensi') ?>">Data Absensi</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/dataPenggaji') ?>">Data Gaji</a>

                    </div>
                </div>
            </li>         

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <!--<i class="fas fa-fw fa-folder"></i>-->
                    <span>Laporan</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url('admin/laporanGaji') ?>">Laporan Gaji</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/laporanAbsensi') ?>">Laporan Absensi</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/slipGaji') ?>">Slip Gaji</a>
                         </div>
                </div>
            </li>

           >
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <!--<i class="fas fa-fw fa-chart-area"></i>-->
                    <span>Ubah Password</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <!--<i class="fas fa-fw fa-table"></i>-->
                    <span>Logout</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
           

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                   <h4 class="font-weight-bold">PT. SEJAHTERAH SELALU</h4>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                       

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Selamat Datang</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

  	<div class="card" style="width: 60%">
  		<div class="card-body">

            <form method="POST" action="<?php echo base_url('admin/dataJabatan/tambahDataAksi') ?>">
                <div class="form-group">
                    <label>Nama Jabatan</label>
                    <input type="text" name="nama_jabatan" class="form-control">
                    <?php echo form_error('nama_jabatan','<div class="text-small text-denger"></div>') ?>
                </div>
                <div class="form-group">
                    <label>Gaji Pokok</label>
                    <input type="text" name="gaji_pokok" class="form-control">
                    <?php echo form_error('gaji_pokok','<div class="text-small text-denger"></div>') ?>
                </div>
                <div class="form-group">
                    <label>Tunjangan Transport</label>
                    <input type="text" name="tj_transport" class="form-control">
                    <?php echo form_error('tj_transport','<div class="text-small text-denger"></div>') ?>
                </div>
                <div class="form-group">
                    <label>Uang Makan</label>
                    <input type="text" name="uang_makan" class="form-control">
                    <?php echo form_error('uang_makan','<div class="text-small text-denger"></div>') ?>
                </div>
                <button type="submit" class="btn btn-success">SUBMIT</button>

            </form>
  			

  		</div>
  	</div>

</div>

