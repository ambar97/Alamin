<?php $this->load->view("user/side/head"); ?>
<?php $this->load->view("user/side/navbar"); ?>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col">
				<ul class="breadcrumb">
					<li><a style="color: #10ac84" href="<?php echo base_url('./') ?>">Home</a></li>
					<li class="active">Sarana & Prasarana</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h1>Sarana & Prasarana Sekolah</h1>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-9">
				<!-- Gambar -->
				<div class="row">
					<?php foreach ($sarpras->result() as $sarpras) { ?>
				<div class="col-12 col-sm-6 col-lg-6 product">
					<span class="product-thumb-info">
							<span>
								<img style="height: 300px; width: 100%;" alt="" class="img-fluid" src="<?php echo base_url().$sarpras->gambar_sarana; ?>">
							</span>
						<span class="product-thumb-info-content">
								<h4><?php echo $sarpras->ket_sarana_prasarana; ?></h4>
						</span>
					</span>
				<hr></div>

			<?php } ?>
				</div>
				</div>
				<div class="col-lg-3">
					<h2 style="font-weight: bold;">Detail Lainnya</h2>
					<hr>
					<ul>
						<li>
							<a href="<?php echo base_url('Profile/VisiMisi') ?>">Visi & Misi</a>
						</li>
						<li>
							<a href="<?php echo base_url('Profile/SejarahSek') ?>">Sejarah Sekolah</a>
						</li>
						<li>
							<a href="<?php echo base_url('Profile/SarPrasarana') ?>">Sarana & Prasarana</a>
						</li>
						<li>
							<a href="">Struktur & Personalia</a>
							<ul>
								<li>
									<a href="<?php echo base_url('Profile/KepSek') ?>">Kepala Sekolah</a>
								</li>
								<li>
									<a href="<?php echo base_url('Profile/BagTu') ?>">Bagian TU</a>
								</li>
								<li>
									<a href="<?php echo base_url('Profile/WakaKes') ?>">Waka Kesiswaan</a>
								</li>
								<li>
									<a href="<?php echo base_url('Profile/WakaKur') ?>">Waka Kurikulum</a>
								</li>
								<li>
									<a href="<?php echo base_url('Profile/WakaSap') ?>">Waka Sapras & Humas</a>
								</li>
								<li>
									<a href="<?php echo base_url('Profile/Guru') ?>">Guru</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="<?php echo base_url('Profile/BagSekolah') ?>">Bagan Sekolah</a>
						</li>
						<li>
							<a href="<?php echo base_url('Profile/ProgKerja') ?>">Program Kerja</a>
						</li>
						<li>
							<a href="<?php echo base_url('Profile/Extra') ?>">Extrakulikuler</a>
						</li>
					</ul>
					<div>
		                <h2><strong>Polling</strong></h2>
		                <hr>
		                <p>Bagaimana tanggapan anda mengenai desain website kami?</p>
		                <input type=checkbox name=c1 checked>Sangat baik<br>
		                <input type=checkbox name=c2 >Baik<br>
		                <input type=checkbox name=c3 >Cukup baik<br><br>
		                <a href="#" class="btn btn-lg btn-primary">Vote</a>
		                <a href="#" class="btn btn-lg btn-primary">View result</a><br>
		            </div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $this->load->view("user/side/footer"); ?>
<?php $this->load->view("user/side/js"); ?>
