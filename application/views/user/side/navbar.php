<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 55, 'stickySetTop': '-55px', 'stickyChangeLogo': true}">
    <div class="header-body" style="border-bottom: 4px solid #10ac84;">
      <div class="header-container container">
        <div class="header-row">
          <div class="header-column">
            <div class="header-row">
              <div class="header-logo">
                <a href="<?php echo base_url() ?>">
                  <img alt="Porto" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="<?php echo base_url() ?>master/client/img/logo.png">
                </a>
              </div>
            </div>
          </div>
          <div class="header-column justify-content-end">
            <div class="header-row pt-3">
              <nav class="header-nav-top" >
                <ul class="nav nav-pills">
                  <li class="nav-item d-none d-sm-block">
                    <a class="nav-link" href="about-us.html"><i class="fas fa-angle-right"></i> Tentang Kami</a>
                  </li>
                  <li class="nav-item d-none d-sm-block">
                    <a class="nav-link" href="<?php echo base_url("ContactUs") ?>"><i class="fas fa-angle-right"></i> Kontak</a>
                  </li>
                  <li class="nav-item">
                    <span class="ws-nowrap"><i class="fas fa-phone"></i> (123) 456-789</span>
                  </li>
                </ul>
              </nav>
              <!-- <div class="header-search d-none d-md-block">
                <form id="searchForm" action="https://preview.oklerthemes.com/porto/6.2.1/page-search-results.html" method="get">
                  <div class="input-group">
                    <input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
                    <span class="input-group-append">
                      <button class="btn btn-light" type="submit"><i class="fas fa-search"></i></button>
                    </span>
                  </div>
                </form>
              </div> -->
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
                                <a class="dropdown-item" href="#">Kepala Sekolah</a>
                              </li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Bagian TU</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Kepala TU</a></li>
                                  <li><a class="dropdown-item" href="#">Bagian Administrasi</a></li>
                                  <li><a class="dropdown-item" href="#">Bagian Keuangan</a></li>
                                  <li><a class="dropdown-item" href="#">Bagian RT dan Badan Usaha</a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Waka Kesiswaan</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">BP</a></li>
                                  <li><a class="dropdown-item" href="#">Extrakulikuler</a></li>
                                  <li><a class="dropdown-item" href="#">Perpustakaan</a></li>
                                  <li><a class="dropdown-item" href="#">UKS</a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Waka Kurikulum</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Ketua KKG</a></li>
                                  <li><a class="dropdown-item" href="#">Koord. Al-Qur'an & Ibadah</a></li>
                                  <li><a class="dropdown-item" href="#">Wali Kelas</a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Waka Sapras & Humas</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Satpam</a></li>
                                  <li><a class="dropdown-item" href="#">Cleaning Service</a></li>
                                  <li><a class="dropdown-item" href="#">Laboratorium</a></li>
                                </ul>
                              </li>
                              <li><a class="dropdown-item" href="index-header-narrow.html">Wali Kelas</a></li>
                            </ul>
                          </li>
                          <li>
                            <a class="dropdown-item" href="<?php echo base_url('Profile/BagSekolah') ?>">Bagan Sekolah</a>
                          </li>
                         <!--  <li>
                            <a class="dropdown-item" href="#">Komite Sekolah</a>
                          </li> -->
                          <li>
                            <a class="dropdown-item" href="<?php echo base_url('Profile/ProgKerja') ?>">Program Kerja</a>
                          </li>
                        </ul>
                      </li>
                      <li class="dropdown">
                        <a class="dropdown-item dropdown-toggle <?php if($this->uri->segment('1')=="Prestasi"){ echo "active";}?>" href="#">
                          Prestasi
                        </a> 
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href="<?php echo base_url('Prestasi/Sekolah') ?>">Sekolah</a>
                            <!-- <ul class="dropdown-menu">
                              <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Default</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="index-classic.html">Default</a></li>
                                  <li><a class="dropdown-item" href="index-header-language-dropdown.html">Default + Language Dropdown</a></li>
                                  <li><a class="dropdown-item" href="index-header-big-logo.html">Default + Big Logo</a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Flat</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="index-header-flat.html">Flat</a></li>
                                  <li><a class="dropdown-item" href="index-header-flat-top-bar.html">Flat + Top Bar</a></li>
                                  <li><a class="dropdown-item" href="index-header-flat-colored-top-bar.html">Flat + Colored Top Bar</a></li>
                                  <li><a class="dropdown-item" href="index-header-flat-top-bar-search.html">Flat + Top Bar with Search</a></li>
                                </ul>
                              </li>
                              <li><a class="dropdown-item" href="index-header-center.html">Center</a></li>
                              <li><a class="dropdown-item" href="index-header-below-slider.html">Below Slider</a></li>
                              <li><a class="dropdown-item" href="index-header-full-video.html">Full Video</a></li>
                              <li><a class="dropdown-item" href="index-header-narrow.html">Narrow</a></li>
                              <li><a class="dropdown-item" href="index-header-always-sticky.html">Always Sticky</a></li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Transparent</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="index-header-transparent.html">Transparent</a></li>
                                  <li><a class="dropdown-item" href="index-header-transparent-bottom-border.html">Transparent - Bottom Border</a></li>
                                  <li><a class="dropdown-item" href="index-header-semi-transparent.html">Semi Transparent</a></li>
                                  <li><a class="dropdown-item" href="index-header-semi-transparent-light.html">Semi Transparent - Light</a></li>
                                </ul>
                              </li>
                              <li><a class="dropdown-item" href="index-header-full-width.html">Full-Width</a></li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Navbar</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="index-header-navbar.html">Navbar</a></li>
                                  <li><a class="dropdown-item" href="index-header-navbar-extra-info.html">Navbar + Extra Info</a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Side Header</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="index-header-side-header-left.html">Side Header Left</a></li>
                                  <li><a class="dropdown-item" href="index-header-side-header-right.html">Side Header Right</a></li>
                                  <li><a class="dropdown-item" href="index-header-side-header-semi-transparent.html">Side Header Semi Transparent</a></li>
                                </ul>
                              </li>
                              <li><a class="dropdown-item" href="index-header-signin.html">Sign In / Sign Up</a></li>
                              <li><a class="dropdown-item" href="index-header-logged.html">Logged</a></li>
                            </ul> -->
                          </li>
                          <li>
                            <a class="dropdown-item" href="<?php echo base_url('Prestasi/Siswa_Siswi') ?>">Siswa & Siswi</a>
                            <!-- <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="index-classic.html">Default</a></li>
                              <li><a class="dropdown-item" href="index-navigation-stripe.html">Stripe</a></li>
                              <li><a class="dropdown-item" href="index-navigation-top-line.html">Top Line</a></li>
                              <li><a class="dropdown-item" href="index-navigation-dark-dropdown.html">Dark Dropdown</a></li>
                              <li><a class="dropdown-item" href="index-navigation-colors.html">Colors</a></li>
                            </ul> -->
                          </li>
                        </ul>
                      </li>
                      <li class="dropdown">
                        <a class="dropdown-item dropdown-toggle <?php if($this->uri->segment('1')=="Informasi"){ echo "active";}?>" href="#">
                          Informasi
                        </a>
                        <ul class="dropdown-menu">
                          <li class="dropdown-submenu">
                            <a class="dropdown-item" href="<?php echo base_url('Informasi/Berita') ?>">Berita</a>
                            <!-- <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="about-us.html">About Us</a></li>
                              <li><a class="dropdown-item" href="about-us-basic.html">About Us - Basic</a></li>
                              <li><a class="dropdown-item" href="about-me.html">About Me</a></li>
                            </ul> -->
                          </li>
                          <li class="dropdown-submenu">
                            <a class="dropdown-item" href="<?php echo base_url('Informasi/Pengumuman') ?>">Pengumuman</a>
                            <!-- <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="shop-full-width.html">Shop - Full Width</a></li>
                              <li><a class="dropdown-item" href="shop-sidebar.html">Shop - Sidebar</a></li>
                              <li><a class="dropdown-item" href="shop-product-full-width.html">Shop - Product Full Width</a></li>
                              <li><a class="dropdown-item" href="shop-product-sidebar.html">Shop - Product Sidebar</a></li>
                              <li><a class="dropdown-item" href="shop-cart.html">Shop - Cart</a></li>
                              <li><a class="dropdown-item" href="shop-login.html">Shop - Login</a></li>
                              <li><a class="dropdown-item" href="shop-checkout.html">Shop - Checkout</a></li>
                            </ul> -->
                          </li>
                          <li class="dropdown-submenu">
                            <a class="dropdown-item" href="<?php echo base_url('Informasi/InfoKeg') ?>">Info Kegiatan</a>
                            <!-- <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="blog-full-width.html">Blog Full Width</a></li>
                              <li><a class="dropdown-item" href="blog-large-image.html">Blog Large Image</a></li>
                              <li><a class="dropdown-item" href="blog-medium-image.html">Blog Medium Image</a></li>
                              <li><a class="dropdown-item" href="blog-timeline.html">Blog Timeline</a></li>
                              <li><a class="dropdown-item" href="blog-post.html">Single Post</a></li>
                            </ul> -->
                          </li>
                        </ul>
                      </li>
                      <li class="dropdown">
                        <a class="<?php if($this->uri->segment('1')=="Galery"){ echo "active";}?>" href="<?php echo base_url("Galery") ?>">
                          Galeri
                        </a>
                      </li>
                      <!-- <li class="dropdown">
                        <a class="dropdown-item dropdown-toggle">
                          Galery 
                        </a>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href="<?php echo base_url("Galery") ?>">Visi & Misi</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Sejarah Sekolah</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Sarana & Prasarana</a>
                          </li>
                        </ul>
                      </li> -->
                      <li class="">
                        <a class="<?php if($this->uri->segment('1')=="Agenda"){ echo "active";}?>" href="<?php echo base_url("Agenda") ?>">
                          Agenda
                        </a>
                      </li>
                      <li class="dropdown">
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