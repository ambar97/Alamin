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
                        <h3 class="text-themecolor">Sarana & Prasarana</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url("admin/Dashboard") ?>">Home</a></li>
                            <li class="breadcrumb-item active">Sarpras</li>
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

<!-- Tambah Galery -->
                <div class="card">
                    <div class="card-body bg-info">
                        <h4 class="text-white card-title">Tambah Sarana & Prasarana</h4>
                    </div>
                    <div class="card-body">
                        <div class="message-box contact-box">
                            <h2 class="add-ct-btn"><button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark">+</button></h2>
                            <div class="message-widget contact-widget">
                                <!-- Message -->
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Upload Gambar Sarpras (+)</h4>
                                            <small>Maksimal ukuran upload 5 Mb.</small>
                                            <input type="file" id="input-file-now" class="dropify" />
                                            <br>
                                            <form>
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Judul Sarpras</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan judul">
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
                        <h4 class="card-title">Sarana & Prasarana</h4>
                        <h6 class="card-subtitle m-b-20 text-muted">You can use by default </h6> 
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
                                 <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                    <br/> </div>
                            </div>
                        </div>
                    </div>
                </div>

    </div>
</div>

<?php $this->load->view("admin/side/footer"); ?>
<?php $this->load->view("admin/side/js"); ?>


 <!-- jQuery file upload -->
    <script src="<?php echo base_url() ?>master/adm/assets/plugins/dropify/dist/js/dropify.min.js"></script>
    <script>
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
    </script>