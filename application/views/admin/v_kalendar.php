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
                <h3 class="text-themecolor">Kalendar Akademik</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url("admin/Dashboard") ?>">Home</a></li>
                    <li class="breadcrumb-item active">Kalendar Akademik</li>
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
                <h4 class="text-white card-title">Tambah Agenda </h4>
            </div>
            <div class="card-body">
                <div class="message-box contact-box">
                    <h2 class="add-ct-btn"><button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark" data-toggle="modal" data-target="#tambah_karyawan">+</button></h2>
                    <div id="tambah_karyawan" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                     <h4 class="modal-title" id="myModalLabel">Tambah Agenda (+)</h4> 
                                    <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="<?php echo base_url("admin/Kalendar/i_kalendar")?>" enctype="multipart/form-data">
                                <div class="modal-body">
                                        <div class="form-group">
                                            <label for="recipient-name" class="control-label">Tanggal:</label>
                                            <input type="text" class="form-control" name="tanggal_akademik">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="control-label">Kegiatan:</label>
                                            <textarea type="text" class="form-control" name="kegiatan_akademik"></textarea>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save </button>
                                </div>
                                </form>
                                </div>
                                
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <div class="message-widget contact-widget">
                        <!-- Message -->
                        <a>
                            <div class="user-img"> <img src="<?php echo base_url() ?>master/adm/assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                            <div class="mail-contnet">
                                <h5>Klik tombol Tambah (+) untuk Menambahkan Agenda </h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-lg-12">
            <div class="card">
                <!-- <div class="card-body">
                    <h4 class="card-title">Kalender Akademik</h4>
                    <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title">Tambah Kegiatan</h4>
                                </div>
                                <form method="post" action="<?php echo base_url("admin/Kalendar/i_kalendar")?>" enctype="multipart/form-data">
                                <div class="modal-body">
                                        <div class="form-group">
                                            <label for="recipient-name" class="control-label">Tanggal:</label>
                                            <input type="text" class="form-control" name="tanggal_akademik">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="control-label">Kegiatan:</label>
                                            <textarea type="text" class="form-control" name="kegiatan_akademik"></textarea>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger waves-effect waves-light">Save changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <button type="button" name="button" data-toggle="modal" data-target="#responsive-modal">Tambah</button> -->
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tanggal</th>
                                    <th>Kegiatan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $no = 1; foreach ($agenda->result() as $a) { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $a->tanggal_agenda; ?></td>
                                    <td><span class="peity-line" data-width="120" data-peity='{ "fill": ["#009efb"], "stroke":["#009efb"]}' data-height="40"><?php echo $a->nama_kegiatan; ?></span> </td>
                                    <td><button class="btn btn-sm btn-icon btn-pure btn-outline vier-row-btn"  data-original-title="Ubah Data" data-toggle="tooltip" onclick="updatejs('<?php echo $a->id_agenda; ?>')"><i class="mdi mdi-brush" aria-hidden="true" ></i></button>
                                        <button class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete" onclick="deleted('<?php echo $a->id_agenda; ?>')"><i class="mdi mdi-close" aria-hidden="true"></i></button></td>
                              <?php } ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
<script type="text/javascript">
 function deleted(param){
   var proc = window.confirm('Are you sure delete this data?');
   if(proc){
      document.location='<?php echo base_url(); ?>admin/Kalendar/delete_kalendar/'+param;
    }
  }
  function updatejs(param){
      document.location='<?php echo base_url(); ?>admin/Kalendar/d_kalendar/'+param;
  }
</script>

  <?php $this->load->view("admin/side/footer"); ?>
 <?php $this->load->view("admin/side/js"); ?>
<?php if ($this->session->flashdata()) { ?>
                        <?php echo $this->session->flashdata('Pesan'); ?>                    
                    <?php } ?>