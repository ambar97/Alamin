<!DOCTYPE html>
<html>
	
<!-- Mirrored from preview.oklerthemes.com/porto/6.2.1/blog-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 02:41:10 GMT -->
<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Blog Post | Porto - Responsive HTML5 Template 6.2.1</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>master/client/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>master/client/vendor/font-awesome/css/fontawesome-all.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>master/client/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>master/client/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>master/client/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>master/client/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>master/client/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>master/client/css/theme.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>master/client/css/theme-elements.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>master/client/css/theme-blog.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>master/client/css/theme-shop.css">
		
		<!-- Demo CSS -->


		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>master/client/css/skins/default.css">		
		<script src="<?php echo base_url() ?>master/client/master/style-switcher/style.switcher.localstorage.js"></script> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>master/client/css/custom.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url() ?>master/client/vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>

		<div class="body">
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 55, 'stickySetTop': '-55px', 'stickyChangeLogo': true}">
    <div class="header-body" style="border-bottom: 4px solid #10ac84;">
      <div class="header-container container">
        <div class="header-row">
          <div class="header-column">
            <div class="header-row">
              <div class="header-logo">
                <a href="<?php echo base_url() ?>">
                  <img alt="Porto" width="200" height="75" data-sticky-width="150" data-sticky-height="55" data-sticky-top="33" src="<?php echo base_url() ?>master/client/img/Untitled-1.png">
                </a>
              </div>
            </div>
          </div>
          <div class="header-column justify-content-end">
            <div class="header-row pt-3">
              <nav class="header-nav-top" >
                <ul class="nav nav-pills">
                  <li class="nav-item d-none d-sm-block">
                    <a class="nav-link" href="<?php echo base_url("ContactUs") ?>"><i class="fas fa-angle-right"></i> Kontak</a>
                  </li>
                  <li class="nav-item">
                    <span class="ws-nowrap"><i class="fas fa-phone"></i> (0331) 485-416</span>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="header-row">
              <div class="header-nav">
                <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                  <nav class="collapse">
                    <ul class="nav nav-pills" id="mainNav">
                      <li>
                        <a class="<?php if($this->uri->segment('1')==""){ echo "active";}?>" href="<?php echo base_url() ?>">
                          Home
                        </a>
                      </li>
                      <li class="dropdown">
                        <a class="dropdown-item dropdown-toggle <?php if($this->uri->segment('1')=="Profile"){ echo "active";}?>" href="#">
                          Profil
                        </a>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href="<?php echo base_url('Profile/VisiMisi') ?>">Visi & Misi</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="<?php echo base_url('Profile/SejarahSek') ?>">Sejarah Sekolah</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="<?php echo base_url('Profile/SarPrasarana') ?>">Sarana & Prasarana</a>
                          </li>
                          <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">Struktur & Personalia</a>
                            <ul class="dropdown-menu">
                              <li>
                                <a class="dropdown-item" href="<?php echo base_url('Profile/KepSek') ?>">Kepala Sekolah</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="<?php echo base_url('Profile/BagTu') ?>">Bagian TU</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="<?php echo base_url('Profile/WakaKes') ?>">Waka Kesiswaan</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="<?php echo base_url('Profile/WakaKur') ?>">Waka Kurikulum</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="<?php echo base_url('Profile/WakaSap') ?>">Waka Sapras & Humas</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="<?php echo base_url('Profile/Guru') ?>">Guru</a>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a class="dropdown-item" href="<?php echo base_url('Profile/BagSekolah') ?>">Denah Sekolah</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="<?php echo base_url('Profile/Extra') ?>">Ekstrakurikuler Siswa</a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a class="<?php if($this->uri->segment('1')=="Prestasi"){ echo "active";}?>" href="<?php echo base_url('Prestasi/Sekolah') ?>">
                          Prestasi
                        </a>
                        <!-- <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href="<?php echo base_url('Prestasi/Sekolah') ?>">Sekolah</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="<?php echo base_url('Prestasi/Siswa_Siswi') ?>">Siswa & Siswi</a>
                          </li>
                        </ul> -->
                      </li>
                      <li>
                        <a class="<?php if($this->uri->segment('1')=="Informasi"){ echo "active";}?>" href="<?php echo base_url('Informasi/berita') ?>">
                          Informasi
                        </a>
                        <!-- <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href="<?php echo base_url('Informasi/berita') ?>">Berita</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="<?php echo base_url('Informasi/Pengumuman') ?>">Pengumuman</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="<?php echo base_url('Informasi/InfoKeg') ?>">Info Kegiatan</a>
                          </li>
                        </ul> -->
                      </li>
                      <li class="dropdown">
                        <a class="<?php if($this->uri->segment('1')=="Galery"){ echo "active";}?>" href="<?php echo base_url("Galery") ?>">
                         Galeri
                        </a>
                        <!-- <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href="">Galeri</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="">Video</a>
                          </li>
                        </ul> -->
                      </li>
                      <li>
                        <a class="<?php if($this->uri->segment('1')=="Agenda"){ echo "active";}?>" href="<?php echo base_url("Agenda") ?>">
                          Agenda
                        </a>
                      </li>
                      <li>
                        <a class="<?php if($this->uri->segment('1')=="ContactUs"){ echo "active";}?>" href="<?php echo base_url("ContactUs") ?>">
                          Kontak
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
                <ul class="header-social-icons social-icons d-none d-sm-block">
                  <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i style="padding-top: 8px" class="fab fa-facebook-f"></i></a></li>
                  <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i style="padding-top: 8px" class="fab fa-twitter"></i></a></li>
                  <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i style="padding-top: 8px" class="fab fa-linkedin-in"></i></a></li>
                </ul>
                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                  <i class="fas fa-bars"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</header>


			<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Blog</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<h1>Blog Post</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-lg-9">
							<div class="blog-posts single-post">

								<article class="post post-large blog-single-post">
									<div class="post-image">
										<div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
											<div>
												<div class="img-thumbnail d-block">
													<img class="img-fluid" src="img/blog/blog-image-1.jpg" alt="">
												</div>
											</div>
											<div>
												<div class="img-thumbnail d-block">
													<img class="img-fluid" src="img/blog/blog-image-2.jpg" alt="">
												</div>
											</div>
										</div>
									</div>

									<div class="post-date">
										<span class="day">10</span>
										<span class="month">Jan</span>
									</div>

									<div class="post-content">

										<h2><a href="blog-post.html">Class aptent taciti sociosqu ad litora torquent</a></h2>

										<div class="post-meta">
											<span><i class="fas fa-user"></i> By <a href="#">John Doe</a> </span>
											<span><i class="fas fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
											<span><i class="fas fa-comments"></i> <a href="#">12 Comments</a></span>
										</div>

										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus lacus, rutrum sit amet placerat et, bibendum nec mauris. Duis molestie, purus eget placerat viverra, nisi odio gravida sapien, congue tincidunt nisl ante nec tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent nec tempus nibh. Donec mollis commodo metus et fringilla. Etiam venenatis, diam id adipiscing convallis, nisi eros lobortis tellus, feugiat adipiscing ante ante sit amet dolor. Vestibulum vehicula scelerisque facilisis. Sed faucibus placerat bibendum. Maecenas sollicitudin commodo justo, quis hendrerit leo consequat ac. Proin sit amet risus sapien, eget interdum dui. Proin justo sapien, varius sit amet hendrerit id, egestas quis mauris.</p>
										<p>Ut ac elit non mi pharetra dictum nec quis nibh. Pellentesque ut fringilla elit. Aliquam non ipsum id leo eleifend sagittis id a lorem. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam massa mauris, viverra et rhoncus a, feugiat ut sem. Quisque ultricies diam tempus quam molestie vitae sodales dolor sagittis. Praesent commodo sodales purus. Maecenas scelerisque ligula vitae leo adipiscing a facilisis nisl ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
										<p>Curabitur non erat quam, id volutpat leo. Nullam pretium gravida urna et interdum. Suspendisse in dui tellus. Cras luctus nisl vel risus adipiscing aliquet. Phasellus convallis lorem dui. Quisque hendrerit, lectus ut accumsan gravida, leo tellus porttitor mi, ac mattis eros nunc vel enim. Nulla facilisi. Nam non nulla sed nibh sodales auctor eget non augue. Pellentesque sollicitudin consectetur mauris, eu mattis mi dictum ac. Etiam et sapien eu nisl dapibus fermentum et nec tortor.</p>
										<p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a. Curabitur nulla dui, fermentum sed dapibus at, adipiscing eget nisi. Aenean iaculis vehicula imperdiet. Donec suscipit leo sed metus vestibulum pulvinar. Phasellus bibendum magna nec tellus fringilla faucibus. Phasellus mollis scelerisque volutpat. Ut sed molestie turpis. Phasellus ultrices suscipit tellus, ac vehicula ligula condimentum et.</p>
										<p>Aenean metus nibh, molestie at consectetur nec, molestie sed nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec euismod urna. Donec gravida pharetra ipsum, non volutpat ipsum sagittis a. Phasellus ut convallis ipsum. Sed nec dui orci, nec hendrerit massa. Curabitur at risus suscipit massa varius accumsan. Proin eu nisi id velit ultrices viverra nec condimentum magna. Ut porta orci quis nulla aliquam at dictum mi viverra. Maecenas ultricies elit in tortor scelerisque facilisis. Mauris vehicula porttitor lacus, vel pretium est semper non. Ut accumsan rhoncus metus non pharetra. Quisque luctus blandit nisi, id tempus tellus pulvinar eu. Nam ornare laoreet mi a molestie. Donec sodales scelerisque congue. </p>



									</div>
								</article>

							</div>
						</div>

						<div class="col-lg-3">
							<aside class="sidebar">
							
								<div class="tabs mb-5">
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
																<img src="img/blog/blog-thumb-1.jpg" alt="">
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
																<img src="img/blog/blog-thumb-2.jpg" alt="">
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
																<img src="img/blog/blog-thumb-3.jpg" alt="">
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
																<img src="img/blog/blog-thumb-2.jpg" alt="">
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
																<img src="img/blog/blog-thumb-3.jpg" alt="">
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
																<img src="img/blog/blog-thumb-1.jpg" alt="">
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
								</div>
							
								<hr>
							
								<h4 class="heading-primary">About Us</h4>
								<p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>
							
							</aside>
						</div>
					</div>

				</div>

			</div>

			<footer id="footer" >
    <div class="container">
        <div class="row">
            <div class="footer-ribbon" >
                <span>Get in Touch</span>
            </div>
            <div class="col-lg-3">
                <div class="newsletter">
                    <h4>Newsletter</h4>
                    <p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>

                    <div class="alert alert-success d-none" id="newsletterSuccess">
                        <strong>Success!</strong> You've been added to our email list.
                    </div>

                    <div class="alert alert-danger d-none" id="newsletterError"></div>

                    <form id="newsletterForm" action="https://preview.oklerthemes.com/porto/6.2.1/php/newsletter-subscribe.php" method="POST">
                        <div class="input-group">
                            <input class="form-control form-control-sm" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
                            <span class="input-group-append">
                                <button class="btn btn-light" type="submit">Go!</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <h4>Tentang Kami</h4>
                <div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': 'oklerthemes', 'count': 2}">
                    <p>Kami adalah salah satu sekolah dasar islam Al-Baitul Amien 2 yang berada dalam satu naungan yayasan swasta Baitul Amien, Jember. </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-details">
                    <h4>Kontak Kami</h4>
                    <ul class="contact">
                        <li><p><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> Jalan Imam Bonjol No.45A,Kaliwates, Kabupaten Jember, Jawa Timur 68133</p></li>
                        <li><p><i class="fas fa-phone"></i> <strong>Phone:</strong> (0331) 485-416</p></li>
                        <li><p><i class="far fa-envelope"></i> <strong>Email:</strong> <a href="mailto:sdaba02@gmail.com">sdaba02@gmail.com</a></p></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <h4>Follow Us</h4>
                <ul class="social-icons" >
                    <li class="social-icons-facebook" ><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i style="padding-top: 8px" class="fab fa-facebook-f"></i></a></li>
                    <li class="social-icons-twitter"><a href="http://www.Youtube.com/" target="_blank" title="Youtube"><i style="padding-top: 8px" class="fab fa-youtube"></i></a></li>
                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i style="padding-top: 8px" class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright" style="border-top: 4px solid #10ac84;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>© Copyright 2018. All Rights Reserved    <a href="">,</a>   Developed by <a href="http://jemberkita.online"><em>Jemberkita</em></a></p>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</footer>

		</div>

		<!-- Vendor -->
		<script src="<?php echo base_url() ?>master/client/vendor/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url() ?>master/client/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="<?php echo base_url() ?>master/client/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?php echo base_url() ?>master/client/vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="<?php echo base_url() ?>master/client/master/style-switcher/style.switcher.js" id="styleSwitcherScript" data-base-path="" data-skin-src=""></script>
		<script src="<?php echo base_url() ?>master/client/vendor/popper/umd/popper.min.js"></script>
		<script src="<?php echo base_url() ?>master/client/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url() ?>master/client/vendor/common/common.min.js"></script>
		<script src="<?php echo base_url() ?>master/client/vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="<?php echo base_url() ?>master/client/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php echo base_url() ?>master/client/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="<?php echo base_url() ?>master/client/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="<?php echo base_url() ?>master/client/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="<?php echo base_url() ?>master/client/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?php echo base_url() ?>master/client/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo base_url() ?>master/client/vendor/vide/vide.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url() ?>master/client/js/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url() ?>master/client/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url() ?>master/client/js/theme.init.js"></script>

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-42715764-5', 'auto');
			ga('send', 'pageview');
		</script>
		<script src="<?php echo base_url() ?>master/client/master/analytics/analytics.js"></script>

	</body>

<!-- Mirrored from preview.oklerthemes.com/porto/6.2.1/blog-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 02:41:16 GMT -->
</html>
