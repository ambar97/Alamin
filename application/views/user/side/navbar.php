<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 55, 'stickySetTop': '-55px', 'stickyChangeLogo': true}">
        <div class="header-body">
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
                  <nav class="header-nav-top">
                    <ul class="nav nav-pills">
                      <li class="nav-item d-none d-sm-block">
                        <a class="nav-link" href="about-us.html"><i class="fas fa-angle-right"></i> About Us</a>
                      </li>
                      <li class="nav-item d-none d-sm-block">
                        <a class="nav-link" href="contact-us.html"><i class="fas fa-angle-right"></i> Contact Us</a>
                      </li>
                      <li class="nav-item">
                        <span class="ws-nowrap"><i class="fas fa-phone"></i> (123) 456-789</span>
                      </li>
                    </ul>
                  </nav>
                  <div class="header-search d-none d-md-block">
                    <form id="searchForm" action="https://preview.oklerthemes.com/porto/6.2.1/page-search-results.html" method="get">
                      <div class="input-group">
                        <input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
                        <span class="input-group-append">
                          <button class="btn btn-light" type="submit"><i class="fas fa-search"></i></button>
                        </span>
                      </div>
                    </form>
                  </div>
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
                          <li class="dropdown dropdown-mega">
                            <a class="dropdown-item dropdown-toggle" href="#">
                              Elements
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
                          </li>
                          <li class="dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#">
                              Features
                            </a>
                          
                            <ul class="dropdown-menu">
                              <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Headers</a>
                                <ul class="dropdown-menu">
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
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Navigations</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="index-classic.html">Default</a></li>
                                  <li><a class="dropdown-item" href="index-navigation-stripe.html">Stripe</a></li>
                                  <li><a class="dropdown-item" href="index-navigation-top-line.html">Top Line</a></li>
                                  <li><a class="dropdown-item" href="index-navigation-dark-dropdown.html">Dark Dropdown</a></li>
                                  <li><a class="dropdown-item" href="index-navigation-colors.html">Colors</a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Footers</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="index-classic.html#footer">Default</a></li>
                                  <li><a class="dropdown-item" href="index-footer-advanced.html#footer">Advanced</a></li>
                                  <li><a class="dropdown-item" href="index-footer-simple.html#footer">Simple</a></li>
                                  <li><a class="dropdown-item" href="index-footer-light.html#footer">Light</a></li>
                                  <li><a class="dropdown-item" href="index-footer-light-narrow.html#footer">Light Narrow</a></li>
                                  <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="#">Colors</a>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="index-footer-color-primary.html#footer">Primary Color</a></li>
                                      <li><a class="dropdown-item" href="index-footer-color-secondary.html#footer">Secondary Color</a></li>
                                      <li><a class="dropdown-item" href="index-footer-color-tertiary.html#footer">Tertiary Color</a></li>
                                      <li><a class="dropdown-item" href="index-footer-color-quaternary.html#footer">Quaternary Color</a></li>
                                    </ul>
                                  </li>
                                  <li><a class="dropdown-item" href="index-footer-latest-work.html#footer">Latest Work</a></li>
                                  <li><a class="dropdown-item" href="index-footer-contact-form.html#footer">Contact Form</a></li>
                                  <li><a class="dropdown-item" href="index-footer-reveal.html#footer-reveal-anchor">Reveal</a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Page Headers</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="index-page-header-default.html">Default</a></li>
                                  <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="#">Colors</a>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="index-page-header-color-primary.html">Primary Color</a></li>
                                      <li><a class="dropdown-item" href="index-page-header-color-secondary.html">Secondary Color</a></li>
                                      <li><a class="dropdown-item" href="index-page-header-color-tertiary.html">Tertiary Color</a></li>
                                      <li><a class="dropdown-item" href="index-page-header-color-quaternary.html">Quaternary Color</a></li>
                                    </ul>
                                  </li>
                                  <li><a class="dropdown-item" href="index-page-header-light.html">Light</a></li>
                                  <li><a class="dropdown-item" href="index-page-header-light-reverse.html">Light - Reverse</a></li>
                                  <li><a class="dropdown-item" href="index-page-header-custom-background.html">Custom Background</a></li>
                                  <li><a class="dropdown-item" href="index-page-header-parallax.html">Parallax</a></li>
                                  <li><a class="dropdown-item" href="index-page-header-center.html">Center</a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Admin Extension <span class="tip tip-dark">hot</span> <em class="not-included">(Not Included)</em></a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="feature-admin-forms-basic.html">Forms Basic</a></li>
                                  <li><a class="dropdown-item" href="feature-admin-forms-advanced.html">Forms Advanced</a></li>
                                  <li><a class="dropdown-item" href="feature-admin-forms-wizard.html">Forms Wizard</a></li>
                                  <li><a class="dropdown-item" href="feature-admin-forms-code-editor.html">Code Editor</a></li>
                                  <li><a class="dropdown-item" href="feature-admin-tables-advanced.html">Tables Advanced</a></li>
                                  <li><a class="dropdown-item" href="feature-admin-tables-responsive.html">Tables Responsive</a></li>
                                  <li><a class="dropdown-item" href="feature-admin-tables-editable.html">Tables Editable</a></li>
                                  <li><a class="dropdown-item" href="feature-admin-tables-ajax.html">Tables Ajax</a></li>
                                  <li><a class="dropdown-item" href="feature-admin-charts.html">Charts</a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Sliders</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="index-classic.html">Revolution Slider</a></li>
                                  <li><a class="dropdown-item" href="index-slider-nivo.html">Nivo Slider</a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Layout Options</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="feature-layout-boxed.html">Boxed</a></li>
                                  <li><a class="dropdown-item" href="feature-layout-dark.html">Dark</a></li>
                                  <li><a class="dropdown-item" href="feature-layout-rtl.html">RTL</a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Extra</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="feature-typography.html">Typography</a></li>
                                  <li><a class="dropdown-item" href="feature-grid-system.html">Grid System</a></li>
                                  <li><a class="dropdown-item" href="feature-page-loading.html">Page Loading</a></li>
                                  <li><a class="dropdown-item" href="feature-lazy-load.html">Lazy Load</a></li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                          <li class="dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#">
                              Pages
                            </a>
                            <ul class="dropdown-menu">
                              <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">About Us</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="about-us.html">About Us</a></li>
                                  <li><a class="dropdown-item" href="about-us-basic.html">About Us - Basic</a></li>
                                  <li><a class="dropdown-item" href="about-me.html">About Me</a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Shop</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="shop-full-width.html">Shop - Full Width</a></li>
                                  <li><a class="dropdown-item" href="shop-sidebar.html">Shop - Sidebar</a></li>
                                  <li><a class="dropdown-item" href="shop-product-full-width.html">Shop - Product Full Width</a></li>
                                  <li><a class="dropdown-item" href="shop-product-sidebar.html">Shop - Product Sidebar</a></li>
                                  <li><a class="dropdown-item" href="shop-cart.html">Shop - Cart</a></li>
                                  <li><a class="dropdown-item" href="shop-login.html">Shop - Login</a></li>
                                  <li><a class="dropdown-item" href="shop-checkout.html">Shop - Checkout</a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Blog</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="blog-full-width.html">Blog Full Width</a></li>
                                  <li><a class="dropdown-item" href="blog-large-image.html">Blog Large Image</a></li>
                                  <li><a class="dropdown-item" href="blog-medium-image.html">Blog Medium Image</a></li>
                                  <li><a class="dropdown-item" href="blog-timeline.html">Blog Timeline</a></li>
                                  <li><a class="dropdown-item" href="blog-post.html">Single Post</a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Layouts</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="page-full-width.html">Full Width</a></li>
                                  <li><a class="dropdown-item" href="page-left-sidebar.html">Left Sidebar</a></li>
                                  <li><a class="dropdown-item" href="page-right-sidebar.html">Right Sidebar</a></li>
                                  <li><a class="dropdown-item" href="page-left-and-right-sidebars.html">Left and Right Sidebars</a></li>
                                  <li><a class="dropdown-item" href="page-sticky-sidebar.html">Sticky Sidebar</a></li>
                                  <li><a class="dropdown-item" href="page-secondary-navbar.html">Secondary Navbar</a></li>
                                </ul>
                              </li>
                              <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Extra</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="page-404.html">404 Error</a></li>
                                  <li><a class="dropdown-item" href="page-coming-soon.html">Coming Soon</a></li>
                                  <li><a class="dropdown-item" href="page-maintenance-mode.html">Maintenance Mode</a></li>
                                  <li><a class="dropdown-item" href="sitemap.html">Sitemap</a></li>
                                </ul>
                              </li>
                              <li><a class="dropdown-item" href="page-custom-header.html">Custom Header</a></li>
                              <li><a class="dropdown-item" href="page-team.html">Team</a></li>
                              <li><a class="dropdown-item" href="page-services.html">Services</a></li>
                              <li><a class="dropdown-item" href="page-careers.html">Careers</a></li>
                              <li><a class="dropdown-item" href="page-our-office.html">Our Office</a></li>
                              <li><a class="dropdown-item" href="page-faq.html">FAQ</a></li>
                              <li><a class="dropdown-item" href="page-login.html">Login / Register</a></li>
                            </ul>
                          </li>
                          <li class="dropdown">
                            <a class="" href="#">
                              Galery Kegiatan
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