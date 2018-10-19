<?php $this->load->view("user/side/head"); ?>
<?php $this->load->view("user/side/navbar"); ?>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col">
				<ul class="breadcrumb">
					<li><a style="color: #10ac84" href="<?php echo base_url('./') ?>">Home</a></li>
					<li class="active">Extrakulikuler</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h1>Extrakulilkuler Siswa Sekolah</h1>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="col-lg-12">
			<div class="row">
				<?php foreach ($tampil_ekstra->result() as $tampil) { ?>
				<div class="col-lg-12">
					<div class="tabs tabs-vertical tabs-left">
						<ul class="nav nav-tabs">
							<li class="nav-item active">
								<a class="nav-link" href="#popular11<?php echo($tampil-> id_ekstrakurikuler)?>" data-toggle="tab"><?php echo $tampil -> nama_ekstrakurikuler; ?></a>
							</li>
						</ul>
						<div class="tab-content">
							<div id="popular11<?php echo($tampil-> id_ekstrakurikuler)?>" class="tab-pane active">
								<img style="height: 400px" src="<?php echo base_url().$tampil-> gambar_ekstra ?>">
								<p><?php echo $tampil -> keterangan_ekstrakurikuler; ?></p>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>

<?php $this->load->view("user/side/footer"); ?>
<?php $this->load->view("user/side/js"); ?>
