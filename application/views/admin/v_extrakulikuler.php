<?php $this->load->view("admin/side/head"); ?>
<?php $this->load->view("admin/side/loader"); ?>
<?php $this->load->view("admin/side/header"); ?>
<?php $this->load->view("admin/side/sidebar"); ?>

 <!-- Popup CSS -->
<link href="<?php echo base_url() ?>master/adm/assets/plugins/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">

<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Ekstrakulikuler Sekolah</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url("admin/Dashboard") ?>">Home</a></li>
                    <li class="breadcrumb-item active">Ekstrakulikuler</li>
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
                <h4 class="text-white card-title">Tambah Ekstrakulikuler </h4>
            </div>
            <div class="card-body">
                <div class="message-box contact-box">
                    <h2 class="add-ct-btn"><button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark">+</button></h2>
                    <!-- <div id="edit_ekstra" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Edit ekstrakulikuler (+)</h4> 
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal form-material" method="post" action="<?php echo base_url(). 'index.php/admin/Extra/t_ekstra'; ?>" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="col-md-12 m-b-20">
                                                <input type="text" class="form-control" placeholder="Nama Ekstrakulikuler" name="nm_ekstra" required=""> </div>
                                            <div class="col-md-12 m-b-20">
                                                <div class="form-group">
                                        			<textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Keterangan" name="ket_ekstra"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12 m-b-20">
                                                 <input type="file" id="input-file-now" class="dropify" name="gambar_eks" required="" />
                                            </div>
                                        </div>
                                    <button type="submit" class="btn btn-success waves-effect" value="OK" name="btnSimpan" style="float: right;">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="message-widget contact-widget">
                    	<form class="form-horizontal form-material" method="post" action="<?php echo base_url(). 'index.php/admin/Extra/t_ekstra'; ?>" enctype="multipart/form-data">
                         	<div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Upload Gambar Esktrakurikuler (+)</h4>
                                        <small>Maksimal ukuran upload 5 Mb.</small>
                                        <input type="file" id="input-file-now" class="dropify" name="gambar_eks" required="" />
                                        <br>
                                        <form>
                                          <div class="form-group">
                                            <label>Nama Ekstrakurikuler</label>
                                            <input type="text" class="form-control" placeholder="" name="nm_ekstra" required="">
                                          </div>
                                          <div class="form-group">
                                            <label>Keterangan ekstrakurikuler</label>
                                            <textarea type="textarea" rows="4" class="form-control" placeholder="" name="ket_ekstra" required=""></textarea>
                                          </div>
                                          <button class="btn btn-success" style="float: right;" name="btnSimpan" value="OK">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
	                    </form>
                    </div>
                </div>
            </div>
        </div>

    <!-- List Ekstrakulikuler  -->
        <div class="row el-element-overlay">
            <div class="col-md-12">
                <h4 class="card-title">List Ekstrakulikuler</h4>
                <h6 class="card-subtitle m-b-20 text-muted">Kumpulan nama ekstrakulikuler sekolah</h6>
            </div>
            	<?php foreach ($ekstra->result() as $eks) { ?>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="<?php echo base_url().$eks -> gambar_ekstra ?>" alt="user" />
                            <div class="el-overlay">
                                <ul class="el-info">
                                    <li>
                                    	<a class="btn default btn-outline image-popup-vertical-fit" href="<?php echo base_url().$eks -> gambar_ekstra ?>"><i class="icon-magnifier" title="zoom"></i>
                                    	</a>
                                	</li>
                                    <li><a class="btn default btn-outline" href="<?php echo base_url() ?>admin/Extra/edit_view/<?php echo $eks -> id_ekstrakurikuler; ?>"><i class="icon-pencil" title="edit"></i></a></li>
                                    <li><a class="btn default btn-outline" href="<?php echo base_url('admin/Extra/hapus/'.$eks-> id_ekstrakurikuler) ?>"><i class="icon-trash" title="hapus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h3 class="box-title"><?php echo $eks -> nama_ekstrakurikuler; ?></h3> <small><?php echo $eks -> keterangan_ekstrakurikuler; ?></small>
                            <br/> </div>
                    </div>
                </div>
            </div>
            	<?php } ?>
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

<!-- Magnific popup JavaScript -->
<script src="<?php echo base_url() ?>master/adm/assets/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url() ?>master/adm/assets/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>