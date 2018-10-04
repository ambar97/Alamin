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
                        <h3 class="text-themecolor">Karyawan</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url("admin/Dashboard") ?>">Home</a></li>
                            <li class="breadcrumb-item active">Karyawan</li>
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
                            <div class="">
                                <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

<!-- Tambah Data                 -->
<!-- Tambah Prestasi -->
                            <div class="card">
                                <div class="card-body bg-info">
                                    <h4 class="text-white card-title">Tambah Karyawan </h4>
                                </div>
                                <div class="card-body">
                                    <div class="message-box contact-box">
                                        <h2 class="add-ct-btn"><button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark" data-toggle="modal" data-target="#tambah_karyawan">+</button></h2>
                                        <div id="tambah_karyawan" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Tambah data karyawan (+)</h4> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <from class="form-horizontal form-material">
                                                            <div class="form-group">
                                                                <div class="col-md-12 m-b-20">
                                                                    <input type="text" class="form-control" placeholder="Nama"> </div>
                                                                <div class="col-md-12 m-b-20">
                                                                    <input type="text" class="form-control" placeholder="Tempat Lahir"> </div>
                                                                <div class="col-md-12 m-b-20">
                                                                    <input type="text" class="form-control" placeholder="Tanggal Lahir"> </div>
                                                                <div class="col-md-12 m-b-20">
                                                                    <input type="text" class="form-control" placeholder="NIPA"> </div>
                                                                <div class="col-md-12 m-b-20">
                                                                    <input type="text" class="form-control" placeholder="Jabatan"> </div>
                                                                <div class="col-md-12 m-b-20">
                                                                    <input type="text" class="form-control" placeholder="Bidang"> </div>
                                                                <div class="col-md-12 m-b-20">
                                                                    <input type="text" class="form-control" placeholder="Alamat"> </div>
                                                                <div class="col-md-12 m-b-20">
                                                                    <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Contact Image</span>
                                                                        <input type="file" class="upload"> </div>
                                                                </div>
                                                            </div>
                                                        </from>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <div class="message-widget contact-widget">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="<?php echo base_url() ?>master/adm/assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Klik tomobol Tambah (+) untuk Menambahkan Data Karyawan </h5>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
<!-- Tabel -->
 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Contact Emplyee list</h4>
                                <h6 class="card-subtitle"></h6>
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Foto</th>
                                                <th>Nama</th>
                                                <th>TTL</th>
                                                <th>NIPA</th>
                                                <th>Jabatan</th>
                                                <th>Bidang</th>
                                                <th>Alamat</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <a href=""><img style="height: 60px; width: 60px;" src="<?php echo base_url() ?>master/adm/assets/images/users/4.jpg" alt="user" width="100" class="img-circle" /></a>
                                                </td>
                                                <td>Aprian Si anak Coli</td>
                                                <td>23 January 1999</td>
                                                <td>E411565675677</td>
                                                <td>Gigolo</td>
                                                <td>Pemasaran</td>
                                                <td>Gg.Doly Surabaya</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline edit-row-btn" data-toggle="tooltip" data-original-title="Edit"><i class="ti-close" aria-hidden="true"></i></button>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <a href=""><img style="height: 60px; width: 60px;" src="<?php echo base_url() ?>master/adm/assets/images/users/4.jpg" alt="user" width="100" class="img-circle" /></a>
                                                </td>
                                                <td>arijit@gmail.com</td>
                                                <td>+234 456 789</td>
                                                <td><span class="label label-info">Developer</span> </td>
                                                <td>26</td>
                                                <td>10-09-2014</td>
                                                <td>$1800</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="7">
                                                    <div class="text-right">
                                                        <ul class="pagination"> </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                       
                    </div>
                </div>




</div>
</div>
 <?php $this->load->view("admin/side/footer"); ?>
 <?php $this->load->view("admin/side/js"); ?>
    <!-- Footable -->
    <script src="<?php echo base_url() ?>master/adm/assets/plugins/footable/js/footable.all.min.js"></script>
    <script src="<?php echo base_url() ?>master/adm/assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <!--FooTable init-->
    <script src="<?php echo base_url() ?>master/adm/js/footable-init.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url() ?>master/adm/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>