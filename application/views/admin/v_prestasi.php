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
                            <h2 class="add-ct-btn"><button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark" data-toggle="modal" data-target="#tambah_prestasi">+</button></h2>
                            <div id="tambah_prestasi" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Tambah prestasi (+)</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal form-material" method="post" action="<?php echo base_url('admin/Prestasi/t_prestasi') ?>" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" placeholder="Nama Siswa" name="nm_siswa" required=""> </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <div class="form-group">
                                                    <h6>Juara ke-</h6>
                                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="juara_p"> Pilih Juara
                                                        <option disabled="" >Pilih Juara</option>
                                                        <?php foreach ($juara->result() as $jr) { ?>
                                                        <option value="<?php echo $jr->id_juara; ?>"><?php echo $jr->nama_juara; ?></option>
                                                    <?php } ?>
                                                    </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" placeholder="Nama Lomba" name="nm_lomba" required=""> </div>
                                                    <div class="col-md-12 m-b-20">
                                                    <div class="form-group">
                                                    <h6>Lingkup Prestasi</h6>
                                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="kategori_juara">
                                                        <option disabled="" >Pilih Kategori</option>
                                                        <?php foreach ($lingkup->result() as $lin) { ?>
                                                            <option value="<?php echo $lin->id_lingkup_prestasi; ?>"><?php echo $lin->nama_lingkup_prestasi; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                                    <div class="col-md-12 m-b-20">
                                                        <input type="text" class="form-control" placeholder="Nama Pembimbing" name="nm_bimbing" required=""> </div>
                                                    <div class="col-md-12 m-b-20">
                                                         <input type="file" id="input-file-now" class="dropify" name="gambar" required="" />
                                                    </div>
                                                </div>
                                                <div style="float: right;">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-success" value="OK" name="btnSimpan">Save</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="message-widget contact-widget">
                                <a>
                                    <div class="user-img"> <img src="<?php echo base_url() ?>master/adm/assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Klik tombol Tambah (+) untuk Menambahkan prestasi </h5></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

<!-- List Prestasi -->
 				<div class="row">
                    <?php foreach ($prestasi->result() as $prs) { ?>
                    <!-- Column -->
                    <div class="col-lg-3">

                        <div class="card">
                            <img style="max-height: 230px;" class="card-img-top img-responsive" src="<?php echo base_url().$prs -> gambar_prestasi ?>" alt="Card image cap">
                            <div class="card-body">
                                <ul class="list-inline font-14">
                                    <li class="p-l-0"><?php echo $prs->nama_siswa_prestasi; ?></li><br>
                                    <li><h6 class="font-normal"><?php echo $prs->nama_juara; ?> <?php echo $prs->nama_lomba; ?></h6></li>
                                </ul>
                                <hr>
                                <div><center>
                                	<button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" title="Lihat Detail" data-toggle="modal" data-target="#view_photo<?php echo($prs->id_prestasi) ?>"><i class="mdi mdi-eye "></i> </button>
                                	<button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" title="Edit" onclick="updatejs('<?php echo $prs->id_prestasi; ?>')"><i class="mdi mdi-brush"></i></button>
                                	<button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" title="Hapus" onclick="deleted('<?php echo $prs->id_prestasi; ?>')"><i class="mdi mdi-close"></i> </button>
                                    <!-- Modal -->
                                    <div id="view_photo<?php echo($prs->id_prestasi) ?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                         <h4 class="modal-title" id="myModalLabel">Detail Prestasi </h4>
                                                        <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form-horizontal form-material" method="post" action="">
                                                            <div class="form-group">
                                                                <div class="col-md-12 m-b-20">
                                                                    <center><img style="max-height: 300px;" src="<?php echo base_url().$prs -> gambar_prestasi ?>"></center>
                                                                    <hr>
                                                                    <div class="col-md-12 row">
                                                                        <div class="col-md-5">
                                                                            <p>Nama Siswa</p>
                                                                            <p>Juara Ke</p>
                                                                            <p>Nama Lomba</p>
                                                                            <p>Lingkup Prestasi</p>
                                                                            <p>Nama Pembimbing</p>
                                                                        </div>
                                                                        <div class="col-md-7">
                                                                            <p>: <?php echo $prs->nama_siswa_prestasi; ?></p>
                                                                            <p>: <?php echo $prs->nama_juara; ?></p>
                                                                            <p>: <?php echo $prs->nama_lomba; ?></p>
                                                                            <p>: <?php echo $prs->nama_lingkup_prestasi; ?></p>
                                                                            <p>: <?php echo $prs->nama_pembimbing_lomba; ?></p>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
</div>
</div>
</div>
  <?php $this->load->view("admin/side/footer"); ?>
 <?php $this->load->view("admin/side/js"); ?>
 <!-- ============================================================== -->
    <script src="<?php echo base_url() ?>master/adm/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

    <!-- jQuery file upload -->
    <script src="<?php echo base_url() ?>master/adm/assets/plugins/dropify/dist/js/dropify.min.js"></script>
    <script type="text/javascript">
        function deleted(param){
   var proc = window.confirm('Are you sure delete this data?');
   if(proc){
      document.location='<?php echo base_url(); ?>admin/Prestasi/hapus/'+param;
    }
  }
        function updatejs(param){
      document.location='<?php echo base_url(); ?>admin/Prestasi/e_pres/'+param;
    }
</script>
<script type="text/javascript">
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
<?php if ($this->session->flashdata()) { ?>
    <?php echo $this->session->flashdata('Pesan'); ?>                  
    <?php } ?> 