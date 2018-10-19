<?php $this->load->view("user/side/head"); ?>
<?php $this->load->view("user/side/navbar"); ?>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col">
				<ul class="breadcrumb">
					<li><a style="color: #10ac84" href="<?php echo base_url('./') ?>">Home</a></li>
					<li class="active">Prestasi</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h1>Seputar Prestasi Sekolah</h1>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-9">
					<div class="row image-gallery sort-destination lightbox" data-sort-id="portfolio">
						<?php foreach ($prestasi->result() as $prs) { ?>
							<div class="col-sm-9 col-lg-4 isotope-item website mb-4 mb-lg-0">
								<div class="image-gallery-item">
									<a href="<?php echo base_url() ?>master/client/img/projects/project.jpg" data-toggle="modal" data-target="#exampleModal<?php echo($prs->id_prestasi)?>">
										<span class="thumb-info">
											<span class="thumb-info-wrapper" >
												<img  src="<?php echo base_url().$prs->gambar_prestasi ?>" class="img-fluid" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner"><?php echo $prs->nama_juara; ?> <?php echo $prs->nama_lomba; ?></span>
													<span class="thumb-info-type"><?php echo $prs->nama_siswa_prestasi; ?></span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon"><i class="fas fa-link"></i></span>
												</span>
											</span>
										</span>
									</a>
								</div>
							</div>


							<!-- Modal -->
							<div class="modal fade" id="exampleModal<?php echo($prs->id_prestasi)?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Detail Prestasi</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<div>
												<center>
													<img style="width: 50%" src="<?php echo base_url().$prs->gambar_prestasi ?>">
												</center>
												<hr>
											</div>
											<div class="container">
												<div class="row">
												<div class="col-lg-5" >
													 <p >Nama : </p>
													<p>Juara : </p>
													<p>Nama Lomba: </p>
													<p>Tingkat Kejuaraan : </p>
													<p>Nama Pembimbing : </p> 
												</div>
												<div class="col-lg-7">
													<p><?php echo $prs->nama_siswa_prestasi; ?></p>
													<p><?php echo $prs->nama_juara; ?></p>
													<p><?php echo $prs->nama_lomba; ?></p>
													<p><?php echo $prs->nama_lingkup_prestasi; ?></p>
													<p><?php echo $prs->nama_pembimbing_lomba; ?></p>
												</div>
											</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
					</div>
				</div>
				<div class="col-lg-3">
					<h2 style="font-weight: bold;">Detail Prestasi</h2>
					<hr>
					<p>dcghvhkgvtgrf</p>
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
