 <?php $this->load->view("admin/side/head"); ?>
 <?php $this->load->view("admin/side/loader"); ?>
 <?php $this->load->view("admin/side/header"); ?>
 <?php $this->load->view("admin/side/sidebar"); ?>

 <!-- Dropzone css -->
<link href="<?php echo base_url() ?>master/adm/assets/plugins/dropzone-master/dist/dropzone.css" rel="stylesheet" type="text/css" />

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
                        <h3 class="text-themecolor">Galeri</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url("admin/Dashboard") ?>">Home</a></li>
                            <li class="breadcrumb-item active">Galeri</li>
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

<!-- Tambah Galery -->
                            <div class="card">
                                <div class="card-body bg-info">
                                    <h4 class="text-white card-title">Tambah Galery Kegiatan</h4>
                                </div>
                                <div class="card-body">
                                    <div class="message-box contact-box">
                                        <h2 class="add-ct-btn"><button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark" data-toggle="modal" data-target="#tambah_galeri">+</button></h2>
                                        <div id="tambah_galeri" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Tambah galery (+)</h4> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <from class="form-horizontal form-material">
                                                            <div class="form-group">
                                                                <div class="col-md-12 m-b-20">
                                                                    <input type="text" class="form-control" placeholder="Type name"> </div>
                                                                <div class="col-md-12 m-b-20">
                                                                    <input type="text" class="form-control" placeholder="Email"> </div>
                                                                <div class="col-md-12 m-b-20">
                                                                    <input type="text" class="form-control" placeholder="Phone"> </div>
                                                                <div class="col-md-12 m-b-20">
                                                                    <input type="text" class="form-control" placeholder="Designation"> </div>
                                                                <div class="col-md-12 m-b-20">
                                                                    <input type="text" class="form-control" placeholder="Age"> </div>
                                                                <div class="col-md-12 m-b-20">
                                                                    <input type="text" class="form-control" placeholder="Date of joining"> </div>
                                                                <div class="col-md-12 m-b-20">
                                                                    <input type="text" class="form-control" placeholder="Salary"> </div>
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
                                            <div class="col-lg-12 col-md-12">
                                                <!-- <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Upload Gambar Galery (+)</h4>
                                                        <small>Maksimal ukuran upload 5 Mb.</small>
                                                        <input type="file" id="input-file-now" class="dropify" />
                                                        <br>
                                                        <form>
                                                          <div class="form-group">
                                                            <label for="exampleInputEmail1">Judul Galery</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan judul">
                                                          </div>
                                                        </form>
                                                    </div>
                                                </div> -->
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Upload Gambar</h4>
                                                        <h6 class="card-subtitle">Untuk menggunggah beberapa banyak file gambar ke dalam form</h6>
                                                        <form action="#" class="dropzone">
                                                            <div class="fallback">
                                                                <input name="file" type="file" multiple />
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<!-- List Galery -->
                <div class="row el-element-overlay">
                    <div class="col-md-12">
                        <h4 class="card-title">Galery</h4>
                        <h6 class="card-subtitle m-b-20 text-muted">You can use by default </h6> </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="<?php echo base_url() ?>master/adm/assets/images/users/1.jpg" alt="user" />
                                    <div class="el-overlay">
                                        
                                    </div>
                                </div>
                                <div class="el-card-content">
                                 <small>Managing Director</small>
                                    <br/> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="<?php echo base_url() ?>master/adm/assets/images/users/2.jpg" alt="user" />
                                    <div class="el-overlay">
                                        
                                    </div>
                                </div>
                                <div class="el-card-content">
                                 <small>Managing Director</small>
                                    <br/> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="<?php echo base_url() ?>master/adm/assets/images/users/3.jpg" alt="user" />
                                    <div class="el-overlay">
                                        
                                    </div>
                                </div>
                                <div class="el-card-content">
                                 <small>Managing Director</small>
                                    <br/> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="<?php echo base_url() ?>master/adm/assets/images/users/4.jpg" alt="user" />
                                    <div class="el-overlay">
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <small>Managing Director</small>
                                    <br/> </div>
                            </div>
                        </div>
                    </div>
                </div>



</div>
</div>
  <?php $this->load->view("admin/side/footer"); ?>
 <?php $this->load->view("admin/side/js"); ?>

 <!-- Dropzone Plugin JavaScript -->
    <script src="<?php echo base_url() ?>master/adm/assets/plugins/dropzone-master/dist/dropzone.js"></script>

 <!-- jQuery file upload -->
    <!-- <script src="<?php echo base_url() ?>master/adm/assets/plugins/dropify/dist/js/dropify.min.js"></script> -->
    <!-- <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script> -->