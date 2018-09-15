 <?php $this->load->view("user/side/head"); ?>
 <?php $this->load->view("user/side/navbar"); ?>
<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Elements</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<h1>Image Gallery</h1>
							</div>
						</div>
					</div>
				</section>
<div class="container">
<div class="row">
	<div class="col">
							<ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter">
								<li class="nav-item" data-option-value="*"><a class="nav-link active" href="#">Show All</a></li>
								<li class="nav-item" data-option-value=".websites"><a class="nav-link" href="#">Websites</a></li>
								<li class="nav-item" data-option-value=".logos"><a class="nav-link" href="#">Logos</a></li>
								<li class="nav-item" data-option-value=".brands"><a class="nav-link" href="#">Brands</a></li>
								<li class="nav-item" data-option-value=".medias"><a class="nav-link" href="#">Medias</a></li>
							</ul>

							<hr>

							<div class="sort-destination-loader sort-destination-loader-showing">
								<div class="row image-gallery sort-destination lightbox" data-sort-id="portfolio" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
									<div class="col-sm-6 col-lg-3 isotope-item websites mb-4 mb-lg-0">
										<div class="image-gallery-item">
											<a href="<?php echo base_url() ?>master/client/img/projects/project.jpg" class="lightbox-portfolio">
												<span class="thumb-info">
													<span class="thumb-info-wrapper">
														<img src="<?php echo base_url() ?>master/client/img/projects/project.jpg" class="img-fluid" alt="">
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
						</div>
					</div>
</div>
<section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-9 col-lg-9">
							<div class="call-to-action-content">
								<h3>Porto is <strong>everything</strong> you need to create an <strong>awesome</strong> website!</h3>
								<p class="mb-0">The <strong>#1 Selling</strong> HTML Site Template on ThemeForest</p>
							</div>
						</div>
						<div class="col-md-3 col-lg-3">
							<div class="call-to-action-btn">
								<a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-lg btn-primary">Buy Now!</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="top: -40px; left: 70%;"></span>
							</div>
						</div>
					</div>
				</div>
			</section>
<?php $this->load->view("user/side/footer"); ?>
<?php $this->load->view("user/side/js"); ?>