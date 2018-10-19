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
