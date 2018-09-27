<?php $this->load->view("user/side/head"); ?>
<?php $this->load->view("user/side/navbar"); ?>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col">
				<ul class="breadcrumb">
					<li><a style="color: #10ac84" href="<?php echo base_url('./') ?>">Home</a></li>
					<li class="active">Informasi</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h1>Informasi Berita</h1>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-9">
					<article class="post post-medium">
						<div class="row">

							<div class="col-lg-5">
								<div class="post-image">
									<div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
										<div>
											<div class="img-thumbnail d-block">
												<img class="img-fluid" style="height: 40%;" src="<?php echo base_url(); ?>master/client/img/blog/blog-image-1.jpg" alt="">
											</div>
										</div>
										<div>
											<div class="img-thumbnail d-block">
												<img class="img-fluid" src="<?php echo base_url(); ?>master/client/img/blog/blog-image-2.jpg" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-7">

								<div class="post-content">

									<h2><a href="blog-post.html">Class aptent taciti sociosqu ad litora torquent</a></h2>
									<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>

								</div>
							</div>

						</div>
						<div class="row">
							<div class="col">
								<div class="post-meta">
									<span><i class="fas fa-calendar-alt"></i> January 10, 2017 </span>
									<span><i class="fas fa-user"></i> By <a href="#">John Doe</a> </span>
									<span><i class="fas fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
									<span><i class="fas fa-comments"></i> <a href="#">12 Comments</a></span>
									<span class="d-block d-md-inline-block float-md-right mt-3 mt-md-0"><a href="blog-post.html" class="btn btn-xs btn-primary">Read more...</a></span>
								</div>
							</div>
						</div>

					</article>
					<hr>
					<article class="post post-medium">
						<div class="row">

							<div class="col-lg-5">
								<div class="post-image">
									<div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
										<div>
											<div class="img-thumbnail d-block">
												<img class="img-fluid" style="height: 40%;" src="<?php echo base_url(); ?>master/client/img/blog/blog-image-1.jpg" alt="">
											</div>
										</div>
										<div>
											<div class="img-thumbnail d-block">
												<img class="img-fluid" src="<?php echo base_url(); ?>master/client/img/blog/blog-image-2.jpg" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-7">

								<div class="post-content">

									<h2><a href="blog-post.html">Class aptent taciti sociosqu ad litora torquent</a></h2>
									<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>

								</div>
							</div>

						</div>
						<div class="row">
							<div class="col">
								<div class="post-meta">
									<span><i class="fas fa-calendar-alt"></i> January 10, 2017 </span>
									<span><i class="fas fa-user"></i> By <a href="#">John Doe</a> </span>
									<span><i class="fas fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
									<span><i class="fas fa-comments"></i> <a href="#">12 Comments</a></span>
									<span class="d-block d-md-inline-block float-md-right mt-3 mt-md-0"><a href="blog-post.html" class="btn btn-xs btn-primary">Read more...</a></span>
								</div>
							</div>
						</div>

					</article>
				</div>
				<div class="tabs col-lg-3">
					<h2><strong>Berita Lainnya</strong></h2>
					<hr>
					<ul class="nav nav-tabs">
						<li class="nav-item active"><a class="nav-link" href="#popularPosts" data-toggle="tab"><i class="fas fa-star"></i> Popular</a></li>
						<li class="nav-item"><a class="nav-link" href="#recentPosts" data-toggle="tab">Recent</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="popularPosts">
							<ul class="simple-post-list">
								<li>
									<div class="post-image">
										<div class="img-thumbnail d-block">
											<a href="blog-post.html">
												<img src="<?php echo base_url() ?>master/client/img/blog/blog-thumb-1.jpg" alt="">
											</a>
										</div>
									</div>
									<div class="post-info">
										<a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
										<div class="post-meta">
											 Jan 10, 2017
										</div>
									</div>
								</li>
								<li>
									<div class="post-image">
										<div class="img-thumbnail d-block">
											<a href="blog-post.html">
												<img src="<?php echo base_url() ?>master/client/img/blog/blog-thumb-2.jpg" alt="">
											</a>
										</div>
									</div>
									<div class="post-info">
										<a href="blog-post.html">Vitae Nibh Un Odiosters</a>
										<div class="post-meta">
											 Jan 10, 2017
										</div>
									</div>
								</li>
								<li>
									<div class="post-image">
										<div class="img-thumbnail d-block">
											<a href="blog-post.html">
												<img src="<?php echo base_url() ?>master/client/img/blog/blog-thumb-3.jpg" alt="">
											</a>
										</div>
									</div>
									<div class="post-info">
										<a href="blog-post.html">Odiosters Nullam Vitae</a>
										<div class="post-meta">
											 Jan 10, 2017
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="tab-pane" id="recentPosts">
							<ul class="simple-post-list">
								<li>
									<div class="post-image">
										<div class="img-thumbnail d-block">
											<a href="blog-post.html">
												<img src="<?php echo base_url() ?>master/client/img/blog/blog-thumb-2.jpg" alt="">
											</a>
										</div>
									</div>
									<div class="post-info">
										<a href="blog-post.html">Vitae Nibh Un Odiosters</a>
										<div class="post-meta">
											 Jan 10, 2017
										</div>
									</div>
								</li>
								<li>
									<div class="post-image">
										<div class="img-thumbnail d-block">
											<a href="blog-post.html">
												<img src="<?php echo base_url() ?>master/client/img/blog/blog-thumb-3.jpg" alt="">
											</a>
										</div>
									</div>
									<div class="post-info">
										<a href="blog-post.html">Odiosters Nullam Vitae</a>
										<div class="post-meta">
											 Jan 10, 2017
										</div>
									</div>
								</li>
								<li>
									<div class="post-image">
										<div class="img-thumbnail d-block">
											<a href="blog-post.html">
												<img src="<?php echo base_url() ?>master/client/img/blog/blog-thumb-1.jpg" alt="">
											</a>
										</div>
									</div>
									<div class="post-info">
										<a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
										<div class="post-meta">
											 Jan 10, 2017
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<br>
					<!-- Polling -->
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
					<br>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $this->load->view("user/side/footer"); ?>
<?php $this->load->view("user/side/js"); ?>
