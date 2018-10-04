<?php $this->load->view("admin/side/head"); ?>
 <?php $this->load->view("admin/side/loader"); ?>
 <?php $this->load->view("admin/side/header"); ?>
 <?php $this->load->view("admin/side/sidebar"); ?>

<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Prestasi</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url("admin/Dashboard") ?>">Home</a></li>
                            <li class="breadcrumb-item active">Prestasi</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <div class="d-flex m-t-10 justify-content-end">
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                <div class="chart-text m-r-10">
                                    <h6 class="m-b-0"><small>THIS MONTH</small></h6>
                                    <h4 class="m-t-0 text-info">$58,356</h4></div>
                                <div class="spark-chart">
                                    <div id="monthchart"></div>
                                </div>
                            </div>
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                <div class="chart-text m-r-10">
                                    <h6 class="m-b-0"><small>LAST MONTH</small></h6>
                                    <h4 class="m-t-0 text-primary">$48,356</h4></div>
                                <div class="spark-chart">
                                    <div id="lastmonthchart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- Tambah Prestasi -->
							<div class="card">
	                            <div class="card-body bg-info">
	                                <h4 class="text-white card-title">Tambah Prestasi </h4>
	                            </div>
	                            <div class="card-body">
	                                <div class="message-box contact-box">
	                                    <h2 class="add-ct-btn"><button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark">+</button></h2>
	                                    <div class="message-widget contact-widget">
	                                        <!-- Message -->
	                                        <a href="#">
	                                            <div class="user-img"> <img src="<?php echo base_url() ?>master/adm/assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
	                                            <div class="mail-contnet">
	                                                <h5>Klik tomobol Tambah (+) untuk Menambahkan prestasi </h5></div>
	                                        </a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>

<!-- List Prestasi -->
 				<div class="row">
                    <!-- Column -->
                    <div class="col-lg-3">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="<?php echo base_url() ?>master/adm/assets/images/big/img1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <ul class="list-inline font-14">
                                    <li class="p-l-0">Nama Siswa</li>
                                </ul>
                                <h3 class="font-normal">Judul</h3>
                                <hr>
                                <div><center>
                                	<button type="button" class="btn btn-warning btn-circle" title="Lihat Detail"><i class="mdi mdi-eye "></i> </button>
                                	<button type="button" class="btn btn-info btn-circle" title="Edit"><i class="mdi mdi-brush"></i> </button>
                                	<button type="button" class="btn btn-danger btn-circle" title="Hapus"><i class="mdi mdi-close"></i> </button>
                                </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="<?php echo base_url() ?>master/adm/assets/images/big/img2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <ul class="list-inline font-14">
                                    <li class="p-l-0">Nama Siswa</li>
                                </ul>
                                <h3 class="font-normal">Judul</h3>
                                <hr>
                                <div><center>
                                	<button type="button" class="btn btn-warning btn-circle" title="Lihat Detail"><i class="mdi mdi-eye "></i> </button>
                                	<button type="button" class="btn btn-info btn-circle" title="Edit"><i class="mdi mdi-brush"></i> </button>
                                	<button type="button" class="btn btn-danger btn-circle" title="Hapus"><i class="mdi mdi-close"></i> </button>
                                </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="<?php echo base_url() ?>master/adm/assets/images/big/img4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <ul class="list-inline font-14">
                                    <li class="p-l-0">Nama Siswa</li>
                                </ul>
                                <h3 class="font-normal">Judul</h3>
                                <hr>
                                <div><center>
                                	<button type="button" class="btn btn-warning btn-circle" title="Lihat Detail"><i class="mdi mdi-eye "></i> </button>
                                	<button type="button" class="btn btn-info btn-circle" title="Edit"><i class="mdi mdi-brush"></i> </button>
                                	<button type="button" class="btn btn-danger btn-circle" title="Hapus"><i class="mdi mdi-close"></i> </button>
                                </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-3">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="<?php echo base_url() ?>master/adm/assets/images/big/img4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <ul class="list-inline font-14">
                                    <li class="p-l-0">Nama Siswa</li>
                                </ul>
                                <h3 class="font-normal">Judul</h3>
                                <button class="btn btn-success btn-rounded waves-effect waves-light m-t-20">Read more</button>
                            </div>
                        </div>
                    </div>
                </div>


</div>
</div>
  <?php $this->load->view("admin/side/footer"); ?>
 <?php $this->load->view("admin/side/js"); ?>
 <!-- ============================================================== -->
    <script src="<?php echo base_url() ?>master/adm/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>