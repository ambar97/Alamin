<?php $this->load->view("admin/side/head"); ?>
<?php $this->load->view("admin/side/loader"); ?>
<?php $this->load->view("admin/side/header"); ?>
<?php $this->load->view("admin/side/sidebar"); ?>

<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Edit Ekstrakurikuler</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url("admin/Dashboard") ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url("admin/Extra") ?>">Ekstrakurikuler</a></li>
                    <li class="breadcrumb-item active">Edit Ekstrakurikuler</li>
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
        <div class="card">
            <div class="card-body bg-info">
                <h4 class="text-white card-title">Edit Ekstrakurikuler </h4>
            </div>
            <div class="card-body">
                <div class="message-box contact-box">
                    <h2 class="add-ct-btn"><button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark">+</button></h2>
                    <div class="message-widget contact-widget">
                    	<form class="form-horizontal form-material" method="post" action="<?php echo base_url(). 'index.php/admin/Extra/e_ekstra'; ?>" enctype="multipart/form-data">
                    			<?php foreach ($edit_eks->result() as $e_eks) { ?>
                         	<div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Upload Gambar Esktrakurikuler (+)</h4>
                                        <small>Maksimal ukuran upload 5 Mb.</small>
                                        <input type="file" id="input-file-now" class="dropify" name="gambar_eks" data-default-file="<?php echo base_url().$e_eks -> gambar_ekstra ?>" />
                                        <br>
                                        <form>
                                          <div class="form-group">
                                            <label>Nama Ekstrakurikuler</label>
                                            <input type="text" class="form-control" placeholder="" name="nm_ekstra" required="" value="<?php echo $e_eks -> nama_ekstrakurikuler; ?>">
                                          </div>
                                          <div class="form-group">
                                            <label>Keterangan ekstrakurikuler</label>
                                            <textarea type="textarea" rows="4" class="form-control" placeholder="" name="ket_ekstra" required=""><?php echo $e_eks -> keterangan_ekstrakurikuler; ?></textarea>
                                          </div>
                                          <button class="btn btn-success" style="float: right;" name="btnSimpan" value="OK">Simpan Perubahan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            	<?php } ?>
	                    </form>
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