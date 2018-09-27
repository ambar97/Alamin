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
						<div class="row image-gallery sort-destination lightbox" data-sort-id="portfolio" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
							<div class="col-sm-6 col-lg-3 isotope-item website mb-4 mb-lg-0">
								<div class="image-gallery-item">
									<a href="<?php echo base_url() ?>master/client/img/projects/project.jpg" class="lightbox-portfolio">
										<span class="thumb-info" style="max-height: 459px;">
											<span class="thumb-info-wrapper" >
												<img  src="<?php echo base_url() ?>master/client/img/projects/project.jpg" class="img-fluid" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Project Title</span>
													<span class="thumb-info-type">Project Type</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon"><i class="fas fa-link"></i></span>
												</span>
											</span>
										</span>
									</a>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 isotope-item logos mb-4 mb-lg-0">
								<div class="image-gallery-item">
									<a href="<?php echo base_url() ?>master/client/img/projects/project-2.jpg" class="lightbox-portfolio">
										<span class="thumb-info">
											<span class="thumb-info-wrapper">
												<img src="<?php echo base_url() ?>master/client/img/projects/project-2.jpg" class="img-fluid" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Project Title</span>
													<span class="thumb-info-type">Project Type</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon"><i class="fas fa-link"></i></span>
												</span>
											</span>
										</span>
									</a>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 isotope-item brands mb-4 mb-sm-0">
								<div class="image-gallery-item">
									<a href="<?php echo base_url() ?>master/client/img/projects/project-4.jpg" class="lightbox-portfolio">
										<span class="thumb-info">
											<span class="thumb-info-wrapper">
												<img src="<?php echo base_url() ?>master/client/img/projects/project-4.jpg" class="img-fluid" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Project Title</span>
													<span class="thumb-info-type">Project Type</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon"><i class="fas fa-link"></i></span>
												</span>
											</span>
										</span>
									</a>
								</div>
							</div>
					</div>
				</div>
				<div class="col-lg-3">
					<h2 style="font-weight: bold; padding-bottom: -10px;">Detail Prestasi</h2>
					<hr>
					<p style="margin-top: -20px;">dcghvhkgvtgrf</p>
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
