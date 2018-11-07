<html lang="en">
<?php $this->load->view("admin/side/head"); ?>
<?php $this->load->view("admin/side/loader"); ?>
<?php $this->load->view("admin/side/header"); ?>
<?php $this->load->view("admin/side/sidebar"); ?>

<style type="text/css">
    .field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}
</style>
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
<div class="container">
    <div class="row">
                    <!-- Column -->
            <div class="col-lg-12 col-xlg-3 col-md-5">
                <div class="card">
                    <?php 
                    $dat = $this->M_alamin->data_admin($this->session->userdata('id'))->row(); ?>
                    <div class="card-body">
                        <center class="m-t-30"> <img src="<?php echo base_url().$dat->gambar_karyawan ?>" class="img-circle" width="200" height="200" />
                            <h4 class="card-title m-t-10"><?php echo $dat->nama_karyawan; ?></h4>
                            <h6 class="card-subtitle"><?php echo $dat->NIPA_karyawan; ?></h6>
                        </center>
                    </div>
                    <div>
                        <hr> </div>
                    <div class="card-body"> <small class="text-muted">Nipa Karyawan </small>
                        <h6><?php echo $dat->NIPA_karyawan; ?></h6> 
                        <small class="text-muted p-t-30 db">Nama Karyawan</small>
                        <h6><?php echo $dat->nama_karyawan; ?></h6>
                        <hr> 
                        <div class="row">
                        <div class="col-lg-11">
                        <small class="">Username</small> <h6><?php echo $dat->username_admin; ?></h6>
                        </div>
                        <div class="col-lg-1">
                            <li style="list-style-type: none;"><a class="btn default btn-outline" data-toggle="modal" data-target="#edit_username" title="Ubah Password"><i class="mdi mdi-brush"></i></a></li>
                        </div>
                        <div id="edit_username" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <h4 class="modal-title" id="myModalLabel">Edit Username(+)</h4>
                                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                   </div>
                                   <div class="modal-body">
                                       <form class="form-horizontal form-material" method="post" action="<?php echo base_url("admin/Profile/e_user")?>" enctype="multipart/form-data">
                                        <input type="text" name="id_admin" value="<?php echo $dat->id_admin; ?>" hidden="">
                                           <div class="form-group">
                                               <div class="col-md-12 m-b-20">
                                                 <input type="text" name="id_sejarah" value="1" hidden>
                                                <h6>Username</h6>
                                                   <input  name="username" value="<?php echo $dat->username_admin; ?>" class="form-control" id="exampleTextarea">
                                               </div>
                                           </div>
                                           <div class="" style="float: right;">
                                               <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                               <button type="submit" class="btn btn-info waves-effect" value="OK">Save</button>
                                           </div>
                                       </form>
                                   </div>

                               </div>
                               <!-- /.modal-content -->
                           </div>
                               <!-- /.modal-dialog -->
                       </div>
                        </div>
                        <hr>
                        <div class="row">
                        <div class="col-lg-11">
                        <small class="">Password</small>  <h6 type="password">*********</h6> 
                        </div>
                        <div class="col-lg-1">
                            <li style="list-style-type: none;"><a class="btn default btn-outline" data-toggle="modal" data-target="#edit_pass" title="Ubah Password"><i class="mdi mdi-brush"></i></a></li>
                        </div>
                        <div id="edit_pass" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <h4 class="modal-title" id="myModalLabel">Edit Password(+)</h4>
                                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                   </div>
                                   <div class="modal-body">
                                       <form class="form-horizontal form-material" method="post" action="<?php echo base_url("admin/Profile/e_pass")?>" enctype="multipart/form-data">
                                        <input type="text" name="id_admin" value="<?php echo $dat->id_admin; ?>" hidden="">
                                           <div class="form-group">
                                               <div class="col-md-12 m-b-20">
                                                 <input type="text" name="id_sejarah" value="1" hidden>
                                                <h6>Password</h6>
                                                   <input type="password"  name="password" class="form-control" id="password" required="">
                                               </div>
                                               <div class="col-md-12 m-b-20">
                                                 <input type="text" name="id_sejarah" value="1" hidden>
                                                <h6>Ulangi Password</h6>
                                                   <input type="password"  name="judul_sejarah" class="form-control" id="confirm_password" required="">
                                                   <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                               </div>
                                           </div>
                                           <div class="" style="float: right;">
                                               <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                               <button type="submit" class="btn btn-info waves-effect" value="OK">Save</button>
                                           </div>
                                       </form>
                                   </div>

                               </div>
                               <!-- /.modal-content -->
                           </div>
                               <!-- /.modal-dialog -->
                       </div>
                        </div>
                        <hr>
                        
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
                <?php $this->load->view("admin/side/footer"); ?>
<?php $this->load->view("admin/side/js"); ?>
<?php if ($this->session->flashdata()) { ?>
                        <?php echo $this->session->flashdata('Pesan'); ?>                    
                    <?php } ?>
</html>


<script type="text/javascript">
    var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords tidak cocok ! Ulangi");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;


$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>
