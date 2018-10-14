<?php $this->load->view("admin/side/head"); ?>
<?php $this->load->view("admin/side/loader"); ?>
<?php $this->load->view("admin/side/header"); ?>
<?php $this->load->view("admin/side/sidebar"); ?>

<!-- summernotes CSS -->
<link href="<?php echo base_url() ?>master/adm/assets/plugins/summernote/dist/summernote.css" rel="stylesheet" />

<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Kepala Sekolah</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url("admin/Dashboard") ?>">Home</a></li>
                    <li class="breadcrumb-item active">Kepala Sekolah</li>
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
        <div class="row">
        	<div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30"> <img src="<?php echo base_url() ?>master/adm/assets/images/users/5.jpg" width="250" />
                            <h4 class="card-title m-t-10">Nama Kepsek</h4>
                            <h6 class="card-subtitle">Nipa</h6>
                        </center>
                    </div>
                </div>
            </div>
		    <div class="col-lg-8 col-xlg-9 col-md-7">
	            <div class="card">
            		<form>
		                <div class="card-body">
                      <h3 class="card-title">Edit Program Kerja</h3>
		                           <div class="summernote"></div>
		                </div>
		                <div class="card-body">
	                    	<button class="btn btn-success" style="float: right;">Simpan</button>
	                    </div>
		            </form>
	            </div>
        	</div>
        	<div class="col-lg-12 col-xlg-9 col-md-7">
	            <div class="card">
                <div class="card-body">
                  <h3>Program Kerja</h3>
                </div>
	                <div class="tab-content">
	                        <div class="card-body">
	                           <p>isi proker</p>
	                        </div>
	                </div>
	                <div class="card-body">
                    	<button class="btn btn-danger" style="float: right;">Hapus</button>
                  </div>
	            </div>
        	</div>
		</div>
    </div>
</div>

<?php $this->load->view("admin/side/footer"); ?>
<?php $this->load->view("admin/side/js"); ?>

<script src="<?php echo base_url() ?>master/adm/assets/plugins/summernote/dist/summernote.min.js"></script>
    <script>
    jQuery(document).ready(function() {

        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false // set focus to editable area after initializing summernote
        });

        $('.inline-editor').summernote({
            airMode: true
        });

    });

    window.edit = function() {
            $(".click2edit").summernote()
        },
        window.save = function() {
            $(".click2edit").summernote('destroy');
        }
    </script>
