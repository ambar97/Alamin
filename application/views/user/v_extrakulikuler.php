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

				<div class="col-lg-12">
					<p>Pilih Tab untuk detail ekstrakurikuler:</p>
					<div class="tabs tabs-vertical tabs-left">
						<ul class="nav nav-tabs">
							<?php foreach ($tampil_ekstra->result() as $tampil) { ?>
							<li class="nav-item">
								<a class="nav-link" href="#popular11<?php echo($tampil-> id_ekstrakurikuler)?>" data-toggle="tab"><?php echo $tampil -> nama_ekstrakurikuler; ?></a>
							</li>
							<?php } ?>
						</ul>
						<div class="tab-content">
							<?php foreach ($tampil_ekstra->result() as $key) { ?>
								<div id="popular11<?php echo($key-> id_ekstrakurikuler)?>" class="tab-pane">
									<img style="height: 400px" src="<?php echo base_url().$key->gambar_ekstra ?>">
									<p><?php echo $key->keterangan_ekstrakurikuler; ?></p>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<?php $this->load->view("user/side/footer"); ?>
<?php $this->load->view("user/side/js"); ?>
