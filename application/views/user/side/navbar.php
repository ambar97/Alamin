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
                    <a class="nav-link" href="about-us.html"><i class="fas fa-angle-right"></i> Tentang kami</a>
                  </li>
                  <li class="nav-item d-none d-sm-block">
                    <a class="nav-link" href="contact-us.html"><i class="fas fa-angle-right"></i> Contact</a>
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
                      <li class="">
                        <a class="<?php if($this->uri->segment('1')==""){ echo "active";}?>" href="<?php echo base_url() ?>">
                          Home
                        </a>
                      </li>
                      <!-- <li class="dropdown dropdown-mega">
                        <a class="dropdown-item dropdown-toggle" href="<?php echo base_url('Profile') ?>">
                          Profil 
                        </a>
                        <ul class="dropdown-menu">
                          <li>
                            <div class="dropdown-mega-content">
                              <div class="row">
                                <div class="col-lg-3">
                                  <span class="dropdown-mega-sub-title">Elements 1</span>
                                  <ul class="dropdown-mega-sub-nav">
                                    <li><a class="dropdown-item" href="elements-accordions.html">Accordions</a></li>
                                    <li><a class="dropdown-item" href="elements-toggles.html">Toggles</a></li>
                                    <li><a class="dropdown-item" href="elements-tabs.html">Tabs</a></li>
                                    <li><a class="dropdown-item" href="elements-icons.html">Icons</a></li>
                                    <li><a class="dropdown-item" href="elements-icon-boxes.html">Icon Boxes</a></li>
                                    <li><a class="dropdown-item" href="elements-carousels.html">Carousels</a></li>
                                    <li><a class="dropdown-item" href="elements-modals.html">Modals</a></li>
                                    <li><a class="dropdown-item" href="elements-lightboxes.html">Lightboxes</a></li>
                                  </ul>
                                </div>
                                <div class="col-lg-3">
                                  <span class="dropdown-mega-sub-title">Elements 2</span>
                                  <ul class="dropdown-mega-sub-nav">
                                    <li><a class="dropdown-item" href="elements-buttons.html">Buttons</a></li>
                                    <li><a class="dropdown-item" href="elements-badges.html">Badges</a></li>
                                    <li><a class="dropdown-item" href="elements-lists.html">Lists</a></li>
                                    <li><a class="dropdown-item" href="elements-image-gallery.html">Image Gallery</a></li>
                                    <li><a class="dropdown-item" href="elements-image-frames.html">Image Frames</a></li>
                                    <li><a class="dropdown-item" href="elements-testimonials.html">Testimonials</a></li>
                                    <li><a class="dropdown-item" href="elements-blockquotes.html">Blockquotes</a></li>
                                    <li><a class="dropdown-item" href="elements-word-rotator.html">Word Rotator</a></li>
                                  </ul>
                                </div>
                                <div class="col-lg-3">
                                  <span class="dropdown-mega-sub-title">Elements 3</span>
                                  <ul class="dropdown-mega-sub-nav">
                                    <li><a class="dropdown-item" href="elements-call-to-action.html">Call to Action</a></li>
                                    <li><a class="dropdown-item" href="elements-pricing-tables.html">Pricing Tables</a></li>
                                    <li><a class="dropdown-item" href="elements-tables.html">Tables</a></li>
                                    <li><a class="dropdown-item" href="elements-progressbars.html">Progress Bars</a></li>
                                    <li><a class="dropdown-item" href="elements-counters.html">Counters</a></li>
                                    <li><a class="dropdown-item" href="elements-sections-parallax.html">Sections &amp; Parallax</a></li>
                                    <li><a class="dropdown-item" href="elements-tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
                                    <li><a class="dropdown-item" href="elements-sticky-elements.html">Sticky Elements</a></li>
                                  </ul>
                                </div>
                                <div class="col-lg-3">
                                  <span class="dropdown-mega-sub-title">Elements 4</span>
                                  <ul class="dropdown-mega-sub-nav">
                                    <li><a class="dropdown-item" href="elements-headings.html">Headings</a></li>
                                    <li><a class="dropdown-item" href="elements-dividers.html">Dividers</a></li>
                                    <li><a class="dropdown-item" href="elements-animations.html">Animations</a></li>
                                    <li><a class="dropdown-item" href="elements-medias.html">Medias</a></li>
                                    <li><a class="dropdown-item" href="elements-maps.html">Maps</a></li>
                                    <li><a class="dropdown-item" href="elements-arrows.html">Arrows</a></li>
                                    <li><a class="dropdown-item" href="elements-alerts.html">Alerts</a></li>
                                    <li><a class="dropdown-item" href="elements-posts.html">Posts</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </li> -->
                      <li class="dropdown">
                        <a class="dropdown-item dropdown-toggle" href="#">
                          Profil
                        </a>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href="#">Visi & Misi</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Sejarah Sekolah</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Sarana & Prasarana</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Kepala Sekolah</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Kesiswaan</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Struktur Bagan Sekloah</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Komite Sekolah</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Program Kerja</a>
                          </li>
                        </ul>
                      </li>
                      <li class="dropdown">
                        <a class="dropdown-item dropdown-toggle" href="#">
                          Prestasi
                        </a> 
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href="#">Sekolah</a>
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
                            <a class="dropdown-item" href="#">Siswa & Siswi</a>
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
                        <a class="dropdown-item dropdown-toggle" href="#">
                          Informasi
                        </a>
                        <ul class="dropdown-menu">
                          <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">Berita</a>
                            <!-- <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="about-us.html">About Us</a></li>
                              <li><a class="dropdown-item" href="about-us-basic.html">About Us - Basic</a></li>
                              <li><a class="dropdown-item" href="about-me.html">About Me</a></li>
                            </ul> -->
                          </li>
                          <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">Pengumuman</a>
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
                            <a class="dropdown-item" href="#">Info Kegiatan</a>
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
                          Contact 
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