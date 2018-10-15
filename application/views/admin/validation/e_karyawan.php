<?php $this->load->view("admin/side/head"); ?>
  <?php $this->load->view("admin/side/loader"); ?> 
 <?php $this->load->view("admin/side/header"); ?>
 <?php $this->load->view("admin/side/sidebar"); ?>

 <div class="page-wrapper">
    <div class="container-fluid">
    
<div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Edit Karyawan</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url("admin/Dashboard") ?>">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo base_url("admin/Karyawan") ?>"> Karyawan</a></li>
                    <li class="breadcrumb-item active">Edit Karyawan</li>
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
<!-- Edit Data Karyawan -->
						<div class="modal-content">
                                <div class="modal-header">
                                     <h4 class="modal-title" id="myModalLabel">Edit data karyawan</h4> 
                                    <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal form-material" method="post" action="<?php echo base_url("admin/Karyawan/aksi_edit")?>" enctype="multipart/form-data">
                                    	<?php foreach ($karyaw->result() as $karya) { ?>
                                        <div class="form-group">
                                				<div class="col-md-12 m-b-20">
                                					<h6>Nama Lengkap</h6>
                                					<input type="text" name="id_karyawan" value="<?php echo $karya->NIPA_karyawan; ?>" hidden>
                                                <textarea  type="text" class="form-control" placeholder="" name="nama_k" required=""><?php echo $karya->nama_karyawan; ?></textarea></div>
                                            <div class="col-md-12 m-b-20">
                                                <h6>Tanggal Lahir</h6>
                                                <p><?php echo $karya->tanggal_lahir_karyawan; ?> || <span>Tanggal Lahir Lama</span></p>
                                                <input type="date" class="form-control" placeholder="" value="" name="tl_k" required=""> </div>
                                            <div class="col-md-12 m-b-20">
                                            	<h6>Tempat Lahir</h6>
                                                <textarea type="text" class="form-control" placeholder="" name="tempat_k" required=""><?php echo $karya->tempat_lahir_karyawan; ?></textarea> </div>
                                            <div class="col-md-12 m-b-20">
                                            	<h6>NIPA Karyawan</h6>
                                                <textarea type="text" class="form-control" placeholder="" name="nipa_k" required=""><?php echo $karya->NIPA_karyawan; ?></textarea> </div>
                                            <div class="col-md-12 m-b-20">
                                                <div class="form-group">
                                                    <h6>Jabatan</h6>
                                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="jabatan_k">
                                                        <option disabled=""> Pilih Jabatan</option>
                                                        <?php foreach ($jabatan->result() as $jbt) { ?>
                                                        <option value="<?php echo $jbt->id_jabatan ; ?>"><?php echo $jbt->nama_jabatan; ?></option>
                                                    <?php }?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12 m-b-20">
                                                <div class="form-group">

                                                    <h6>Bidang</h6>
                                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="bidang_k">
                                                        <option disabled="" >Pilih Bidang</option>
                                                        <?php foreach ($bidang->result() as $bid) { ?>
                                                        <option value="<?php echo $bid->id_bidang; ?>"><?php echo $bid->nama_bidang; ?></option>
                                                        <?php } ?>
                                                    
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12 m-b-20">
                                            	<h6>Alamat Karyawan</h6>
                                                <textarea type="text" class="form-control" placeholder="" name="alamat_k" required=""><?php echo $karya->NIPA_karyawan; ?></textarea> 
                                            </div>
                                            <h6>Foto Karyawan</h6>
                                            <img style="max-height: 200px;" src="<?php echo base_url().$karya -> gambar_karyawan ?>">
                                            <div class="col-md-12 m-b-20">
                                            	<br>
                                                <input type="file" name="gambar" required="">
                                            </div>
                                        </div>
                                        <div style="float: right;">
		                                    <button type="submit" class="btn btn-primary" name="btnSimpan" value="OK">Simpan</button>
		                                    <a href="<?php echo base_url("admin/Karyawan") ?>"><button type="button" class="btn btn-default waves-effect" data-dismiss="modal"> Batal</button></a>
                                    	</div>
                                    <?php } ?>
                                    </form>
                                </div>
                            </div>
    </div>
</div>
<?php $this->load->view("admin/side/footer"); ?>
 <?php $this->load->view("admin/side/js"); ?>
<?php if ($this->session->flashdata()) { ?>
                        <?php echo $this->session->flashdata('Pesan'); ?></div>                    
                    <?php } ?> 