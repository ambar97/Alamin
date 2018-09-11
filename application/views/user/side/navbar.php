<header>
      <div class="container ">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
        </div>
        <!-- end toggle link -->
        <div class="row nomargin"  >
          <div class="span12" >
            <div class="headnav" style="color: #2c3e50">
              <ul>
                <!-- <li><a href="#mySignup" data-toggle="modal"><i class="icon-user"></i> Sign up</a></li> -->
                <li><a href="#mySignin" data-toggle="modal"><i class="icon-user"></i>Sign in</a></li>
              </ul>
            </div>
            <!-- Sign in Modal -->
            <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySigninModalLabel" style="color: #000000">Sign In Form</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputText">Username</label>
                    <div class="controls">
                      <input type="text" id="inputText" placeholder="Username">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSigninPassword">Password</label>
                    <div class="controls">
                      <input type="password" id="inputSigninPassword" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Sign in</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Forgot password? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signin modal -->
            <!-- Reset Modal -->
            <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputResetEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputResetEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Reset password</button>
                    </div>
                    <p class="aligncenter margintop20">
                      We will send instructions on how to reset your password to your inbox
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end reset modal -->
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>master/img/bem.png" alt="" class="logo" /></a>
              <!-- <h1>Bem KM-POLIJE 2018 Kabinet Harmoni Kolaborasi</h1> -->
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="<?php if($this->uri->segment('1')=="" || $this->uri->segment('1')=="Home" ){ echo "active";}?>">
                      <a href="<?php echo base_url() ?>">Home</a>
                    </li>
                    <!-- <li class="dropdown active">
                      <a href="#" style="color: #000000">Home <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="index-alt2.html">BEM KM-POLIJE</a></li>
                        <li><a href="index-alt3.html">Unit Kegiatan Mahasiswa</a></li>
                        <li><a href="index-alt3.html">Himpunan Mahasiswa Jurusan</a></li>
                      </ul>
                    </li> -->
                    <li class="dropdown">
                      <a href="#">KM<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="">Himpunan Mahasiswa Jurusan</a></li>
                        <li><a href="">Unit Kegiatan Mahasiswa</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Kegiatan <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li class="dropdown"><a href="#">BEM</a>
                          <!-- <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="index.html">Internal POLIJE</a></li>
                            <li><a href="index-alt2.html">BEM SI</a></li>
                            <li><a href="#">FKMPI</a></li>
                          </ul> -->
                        </li>
                        <li class="dropdown"><a href="#">HMJ<i class="icon-angle-right"></i></a>
                          <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="">Bahasa,Komunikasi dan Pariwisata</a></li>
                            <li><a href="">Kesehatan</a></li>
                            <li><a href="">Manajemen Agribisnis</a></li>
                            <li><a href="">Peternakan</a></li>
                            <li><a href="">Produksi Pertanian</a></li>
                            <li><a href="">Teknik</a></li>
                            <li><a href="">Teknik Peternakan</a></li>
                            <li><a href="">Teknologi Informasi</a></li>
                          </ul>
                        </li>
                        <li class="dropdown"><a href="#">UKM<i class="icon-angle-right"></i></a>
                          <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="">Barabas</a></li>
                            <li><a href="">Bekisar</a></li>
                            <li><a href="">English Club</a></li>
                            <li><a href="">Explant</a></li>
                            <li><a href="">Kopma</a></li>
                            <li><a href="">KSR</a></li>
                            <li><a href="">Labaik</a></li>
                            <li><a href="">Lumut</a></li>
                            <li><a href="">Menwa</a></li>
                            <li><a href="">Olah Raga</a></li>
                            <li><a href="">PMK</a></li>
                            <li><a href="">Pramuka</a></li>
                            <li><a href="">PSM</a></li>
                            <li><a href="">Robotika</a></li>
                            <li><a href="">SKIM</a></li>
                            <li><a href="">Teater Kotak</a></li>
                          </ul>
                        </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Info<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="">Info Lomba</a></li>
                        <li><a href="">Info Beasiswa</a></li>
                      </ul>
                    </li>
                  <li class="dropdown">
                      <a href="#">Forum Nasional<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="">FKMPI</a></li>
                        <li><a href="">BEM SI</a></li>
                      </ul>
                    </li>
                        <li class="<?php if($this->uri->segment('1')=="Kalendar_kegiatan"){ echo "active";}?>">
                          <a href="<?php echo base_url('Kalendar_kegiatan')?>">Kalender Kegiatan</a>
                        </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <li><strong>Hubungi Kami</strong></li>
              <li>Apabila ada content yang kurang baik di website ini</li>
              <li><i class="icon-phone"></i>082137480425</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->