<?php $this->load->view("admin/side/head"); ?>
  <!-- <?php $this->load->view("admin/side/loader"); ?>  -->
 <?php $this->load->view("admin/side/header"); ?>
 <?php $this->load->view("admin/side/sidebar"); ?>
 <div class="page-wrapper">
    <div class="container-fluid">
<div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Prestasi</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url("admin/Dashboard") ?>">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo base_url("admin/Prestasi") ?>"> Prestasi </a></li>
                    <li class="breadcrumb-item active">Edit Prestasi</li>
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

			<div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Edit prestasi </h4> 
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal form-material" method="post" action="<?php echo base_url('admin/Prestasi/proses') ?>" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <div class="col-md-12 m-b-20">
                                                    	<h6>Nama Siswa</h6>
                                                    	<?php foreach ($prestasi->result() as $prs) { ?>
                                                        <textarea type="text" class="form-control" placeholder="Nama Siswa" name="nm_siswa" required=""><?php echo $prs->nama_siswa_prestasi; ?></textarea> <?php } ?>
                                                    </div>
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
                                                    	<h6>Nama Lomba</h6>
                                                    	<?php foreach ($prestasi->result() as $prs) { ?>
                                                        <textarea type="text" class="form-control" placeholder="Nama Lomba" name="nm_lomba" required=""><?php echo $prs->nama_lomba; ?></textarea> <?php } ?></div>
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
                                                    	<h6>Nama Pembimbing</h6>
                                                    	<?php foreach ($prestasi->result() as $prs) { ?>
                                                        <textarea type="text" class="form-control" placeholder="Nama Pembimbing" name="nm_bimbing" required=""><?php echo $prs->nama_pembimbing_lomba; ?></textarea><?php } ?> </div>
                                                        <h6>Foto Siswa</h6>
                                                        <?php foreach ($prestasi->result() as $prs) { ?>
                                            			<img style="max-height: 200px;" src="<?php echo base_url().$prs -> gambar_prestasi ?>"> <?php } ?>
                                                    <div class="col-md-12 m-b-20">
                                                    	<br>
                                                         <input type="file" id="input-file-now" class="dropify" name="gambar" required="" />
                                                    </div>
                                                </div>
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-default waves-effect" value="OK" name="btnSimpan">Save</button>
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