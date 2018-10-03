<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile" style="background: url(<?php echo base_url() ?>master/adm/assets/images/background/user-info.jpg) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="<?php echo base_url() ?>master/adm/assets/images/users/profile.png" alt="user" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">cnjonathan</a>
                        <div class="dropdown-menu animated flipInY"> <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a> <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a> <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                            <div class="dropdown-divider"></div> <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a> </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">Main</li>
                        <li class="<?php if($this->uri->segment('2')=="Dashboard"){ echo "active";}?>"> <a class="has-arrow waves-effect waves-dark" href="<?php echo base_url("admin/Dashboard") ?>" ><i class="mdi mdi-view-dashboard"></i><span >Dashboard </span></a>
                        </li>
                        <li class="<?php if($this->uri->segment('2')=="Prestasi"){ echo "active";}?>"> <a class="has-arrow waves-effect waves-dark" href="<?php echo base_url("admin/Prestasi") ?>" aria-expanded="false"><i class="mdi mdi-trophy"></i><span class="hide-menu">Prestasi</span></a>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo base_url("admin/Galery") ?>" aria-expanded="false"><i class="mdi mdi-file-image"></i><span class="hide-menu">Galery</span></a>

                        </li>
                        <li class="<?php if($this->uri->segment('2')=="Berita"){ echo "active";}?>"> <a class="has-arrow waves-effect waves-dark" href="<?php echo base_url("admin/Berita") ?>" aria-expanded="false"><i class="mdi mdi-newspaper"></i><span class="hide-menu">Berita</span></a>
                        </li>
                        <li class="<?php if($this->uri->segment('2')=="Karyawan"){ echo "active";}?>"> <a class="has-arrow waves-effect waves-dark" href="<?php echo base_url("admin/Karyawan") ?>" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Karyawan</span></a>
                        </li>
                        <li class="<?php if($this->uri->segment('2')=="Kalendar"){ echo "active";}?>"> <a class="has-arrow waves-effect waves-dark" href="<?php echo base_url("admin/Kalendar") ?>" aria-expanded="false"><i class="mdi mdi-calendar-range"></i><span class="hide-menu">Kalendar Akademik</span></a>
                        </li>
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">Profile</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Sarpras</span></a>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Struktur &amp; Personalia</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="table-basic.html">Kepala Sekolah</a></li>
                                <li><a href="table-layout.html">Tata Usaha</a></li>
                                <li><a href="table-data-table.html">Kesiswaan</a></li>
                                <li><a href="table-footable.html">Kurukulum</a></li>
                                <li><a href="table-jsgrid.html">Sapras &amp; Humas</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Ekstrakurikuler</span></a>
                        </li>

                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">Lain-Lain</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">Quotes</span></a>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Sample Pages</span></a>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Kritik &amp; Saran</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item--><a href="#" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <!-- item--><a href="#" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item--><a href="#" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div>
            <!-- End Bottom points-->
        </aside>
