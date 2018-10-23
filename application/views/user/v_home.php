 <?php $this->load->view("user/side/head"); ?>
 <?php $this->load->view("user/side/navbar"); ?>
<div class="body"></div>
<div role="main" class="main">
        <div class="slider-container rev_slider_wrapper">
          <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.7" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 500, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500]}">
            <ul>
              <li data-transition="fade">
                <?php foreach ($slider1->result() as $s1) { ?>
                    <img src="<?php echo base_url() ?>gallery/Slider/<?php echo $s1->gambar_galeri; ?>"
                <?php } ?>
                  alt=""
                  data-bgposition="center center"
                  data-bgfit="cover"
                  data-bgrepeat="no-repeat"
                  class="rev-slidebg">

                <div class="tp-caption"
                  data-x="137"
                  data-y="188"
                  data-start="1000"
                  data-transform_in="x:[-300%];opacity:0;s:500;"><img src="<?php echo base_url() ?>master/client/img/slides/slide-title-border.png" alt=""></div>

                <div class="tp-caption top-label"
                  data-x="180"
                  data-y="180"
                  data-start="500"
                  data-transform_in="y:[-300%];opacity:0;s:500;">SELAMAT DATANG DI WEBSITE</div>

                <div class="tp-caption"
                  data-x="515"
                  data-y="188"
                  data-start="1000"
                  data-transform_in="x:[300%];opacity:0;s:500;"><img src="<?php echo base_url() ?>master/client/img/slides/slide-title-border.png" alt=""></div>

                <div class="tp-caption main-label"
                  data-x="70"
                  data-y="210"
                  data-start="1500"
                  data-whitespace="nowrap"
                  data-transform_in="y:[100%];s:500;"
                  data-transform_out="opacity:0;s:500;"
                  data-mask_in="x:0px;y:0px;">SD AL-BAITUL AMIEN 2</div>

                <div class="tp-caption bottom-label"
                  data-x="['185','185','185','95']"
                  data-y="280"
                  data-start="2000"
                  data-fontsize="['20','20','20','30']"
                  data-transform_in="y:[100%];opacity:0;s:500;"></div>

                <!-- <div class="tp-caption"
                  data-x="['910','910','910','930']"
                  data-y="248"
                  data-start="2500"
                  data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1300;"><img src="<?php echo base_url() ?>master/client/img/slides/slide-concept-2-1.png" alt=""></div>

                <div class="tp-caption"
                  data-x="['960','960','960','980']"
                  data-y="200"
                  data-start="3500"
                  data-transform_in="y:[300%];opacity:0;s:300;"><img src="<?php echo base_url() ?>master/client/img/slides/slide-concept-2-2.png" alt=""></div>

                <div class="tp-caption"
                  data-x="['930','930','930','950']"
                  data-y="170"
                  data-start="3650"
                  data-transform_in="y:[300%];opacity:0;s:300;"><img src="<?php echo base_url() ?>master/client/img/slides/slide-concept-2-3.png" alt=""></div>

                <div class="tp-caption"
                  data-x="['880','880','880','900']"
                  data-y="130"
                  data-start="3750"
                  data-transform_in="y:[300%];opacity:0;s:300;"><img src="<?php echo base_url() ?>master/client/img/slides/slide-concept-2-4.png" alt=""></div>

                <div class="tp-caption"
                  data-x="['610','610','610','630']"
                  data-y="80"
                  data-start="3950"
                  data-transform_in="y:[300%];opacity:0;s:300;"><img src="<?php echo base_url() ?>master/client/img/slides/slide-concept-2-5.png" alt=""></div> -->

                <div class="tp-caption blackboard-text"
                  data-x="['665','665','665','685']"
                  data-y="300"
                  data-start="2500"
                  data-fontsize="['37','37','37','47']"
                  data-transform_in="y:[300%];opacity:0;s:300;"
                  style="color: #fff">Berakhlak Mulia</div>

                <div class="tp-caption blackboard-text"
                  data-x="['690','690','690','710']"
                  data-y="350"
                  data-start="2650"
                  data-fontsize="['47','47','47','57']"
                  data-transform_in="y:[300%];opacity:0;s:300;"
                  style="color: #fff">Dan</div>

                <div class="tp-caption blackboard-text"
                  data-x="['720','720','720','745']"
                  data-y="400"
                  data-start="2750"
                  data-fontsize="['32','32','32','42']"
                  data-transform_in="y:[300%];opacity:0;s:300;"
                  style="color: #fff">Berprestasi Optimal :)</div>
              </li>
              <li data-transition="fade">
                <?php foreach ($slider2->result() as $s2) {?>
                  <img src="<?php echo base_url() ?>gallery/Slider/<?php echo $s2->gambar_galeri; ?>"
                    alt=""
                    data-bgposition="center center"
                    data-bgfit="cover"
                    data-bgrepeat="no-repeat"
                    class="rev-slidebg" data-no-retina>
                <?php } ?>

              <!--   <div class="tp-caption top-label"
                  data-x="['155','155','155','110']"
                  data-y="['100','100','100','150']"
                  data-start="500"
                  data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;">
                  <img src="<?php echo base_url() ?>master/client/img/slides/slide-concept.png" alt=""></div>

                <div class="tp-caption blackboard-text"
                  data-x="['285','285','285','225']"
                  data-y="['180','180','180','230']"
                  data-start="1000"
                  data-fontsize="['30','30','30','40']"
                  data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;"
                  style="color: #fff">easy to</div>

                <div class="tp-caption blackboard-text"
                  data-x="['285','285','285','225']"
                  data-y="['220','220','220','270']"
                  data-start="1200"
                  data-fontsize="['40','40','40','50']"
                  data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;"
                  style="color: #fff">customize!</div> -->

                <div class="tp-caption main-label"
                  data-x="['385','385','385','330']"
                  data-y="['290','290','290','320']"
                  data-start="1200"
                  data-whitespace="nowrap"
                  data-fontsize="['62','62','62','82']"
                  data-transform_in="y:[100%];s:500;"
                  data-transform_out="opacity:0;s:500;"
                  data-mask_in="x:0px;y:0px;">SD AL-BAITUL AMIEN 2 </div>

                <div class="tp-caption bottom-label"
                  data-x="['385','385','385','295']"
                  data-y="['360','360','360','400']"
                  data-start="1800"
                  data-fontsize="['20','20','20','30']"
                  data-lineheight="['20','20','20','30']"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:600;e:Power4.easeInOut;"
                  data-transform_out="opacity:0;s:500;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-splitin="chars"
                  data-splitout="none"
                  data-responsive_offset="on"
                  data-elementdelay="0.05">Sekolah Dasar Islam Berbasis Sistem Fullday School</div>

              </li>
            </ul>
          </div>
        </div>
        <div class="home-intro" id="home-intro">
          <div class="container">

            <div class="row align-items-center">
              <div class="col-lg-8">
                <p>
                  Kenali sejarah sedikit tentang <em>SD Al Baitul Amien 02</em>
                  <span>Silahkan ketahui dan kunjungi segera</span>
                </p>
              </div>
              <div class="col-lg-4">
                <div class="get-started text-left text-lg-right">
                  <a href="<?php echo base_url('Profile/SejarahSek') ?>" class="btn btn-lg btn-primary">Mulai !</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- #Alur Pendaftaran -->
        <div class="container">
          <div class="row text-center">
            <div class="col">
              <h1 class="mb-2 word-rotator-title">
               SD Al-Baitul Amien adalah
                <strong class="inverted">
                  <span class="word-rotator" data-plugin-options="{'delay': 2000, 'animDelay': 300}">
                    <span class="word-rotator-items">
                      <span>Berakhlak</span>
                      <span>Mulia</span>
                      <span>Berprestasi</span>
                      <span>Optimal</span>
                    </span>
                  </span>
                </strong>
              </h1>
              <p class="lead">
                Di bawah ini adalah gambar mengenai all of about SD Al-Baitul Amien 2 Jember
              </p>
            </div>
          </div>
        </div>
        <!-- #Alur Pendaftaran  -->
        <div class="home-concept mt-5">
          <div class="container">
            <div class="row text-center">
              <span class="sun"></span>
              <span class="cloud"></span>
              <div class="col-lg-8 ml-lg-auto">
                <div class="process-image">
                  <?php foreach ($kepsek->result() as $k) { ?>
                    <img src="<?php echo base_url(); ?><?php echo $k->gambar_karyawan; ?>" alt="" />
                  <?php } ?>
                  <a href="<?php echo base_url('Profile/KepSek') ?>"><strong>Kepala Sekolah</strong></a>
                  <br>
                  <!-- <strong>Motto :</strong> -->
                </div>
                <p style="font-size: 24px; margin-top: -40px;" >"Bangga Belajar di SD Al-Baitul Amien 02 Jember"</p>
              </div>
              <!-- <div class="col-lg-2">
                <div class="process-image">
                  <img src="<?php echo base_url() ?>master/client/img/home-concept-item-2.png" alt="" />
                  <strong>Planning</strong>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="process-image">
                  <img src="<?php echo base_url() ?>master/client/img/home-concept-item-3.png" alt="" />
                  <strong>Build</strong>
                </div>
              </div> -->
              <div class="col-lg-4 ml-lg-auto">
                <div class="project-image">
                  <div id="fcSlideshow" class="fc-slideshow">
                    <ul class="fc-slides">
                      <?php foreach ($galeri->result() as $g) { ?>
                        <li><a href="<?php echo base_url('Galery'); ?>"><img style="width:330px" class="img-responsive" src="<?php echo base_url(); ?><?php echo $g->gambar_galeri; ?>" alt="Gallery" /></a></li>
                      <?php } ?>
                    </ul>
                  </div>
                  <strong class="our-work">Dokumentasi Lainnya</strong>
                </div>
              </div>
            </div>
          </div>
        </div>

    <div class="container">
        <div class="row">
          <div class="col">
            <hr class="tall mt-4">
          </div>
        </div>
        <!-- Berita Terbaru  -->
          <div class="row">
            <div class="col-lg-9">
              <h2>Berita <strong>Terbaru</strong></h2>
              <div class="row">
                <div class="col-lg-9">
                  <div class="blog-posts single-post">
                    <article class="post post-large blog-single-post">
                      <div class="post-image">
                        <div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
                          <div>
                            <div class="img-thumbnail d-block">
                              <?php foreach ($berita->result() as $b) { ?>
                                <img class="img-fluid" src="<?php echo base_url() ?><?php echo $b->gambar_informasi; ?>" alt="Gambar Berita">
                              <?php } ?>
                            </div>
                          </div>
                        </div>
                        <div class="post-content">
                        <h2><?php foreach ($berita->result() as $b) { ?>
                          <?php echo $b->judul_informasi; ?>
                        <?php } ?></h2>
                        <p><?php foreach ($berita->result() as $b) {
                          echo $b->isi_informasi;
                        } ?></p>
                      </div>
                      </div>
                      
                    </article>
                  </div>
                </div>
              </div>
            </div>

          <!-- berita -->
            <div class="tabs col-lg-3">
              <h2><strong>Berita</strong></h2>
              <hr>
              <ul class="nav nav-tabs">
                <li class="nav-item active"><a class="nav-link" href="#recentPosts" data-toggle="tab">Recent</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="recentPosts">
                  <?php foreach ($recent_berita->result() as $re) { ?>
                  <ul class="simple-post-list">
                    <li>
                      <div class="post-image">
                        <div class="img-thumbnail d-block">
                          <a href="<?php echo base_url('Informasi'); ?>">
                            <img style="width:80px;" src="<?php echo base_url($re->gambar_informasi);?>" alt="Gambar Berita">
                          </a>
                        </div>
                      </div>
                      <div class="post-info">
                        <a title="<?php echo $re-> judul_informasi; ?>" href="<?php echo base_url('Informasi/Berita_Detail/'); ?>"><?php echo substr($re-> judul_informasi,0,28); ?>...</a>
                        <div class="post-meta">
                          <?php echo $re-> date; ?>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <?php } ?>
                </div>
              </div>
              <br>
              <!-- Polling -->
              <div>
                <h2><strong>Polling</strong></h2>
                <hr>
                <form method="post" action="" enctype="multipart/form-data">
                <p>Bagaimana tanggapan anda mengenai desain website kami?</p>

                <input type=checkbox name=c1 name="sb"> Sangat baik<br>
                <input type=checkbox name=c2 name="b"> Baik<br>
                <input type=checkbox name=c3 name="cb"> Cukup baik<br>
                <input type=checkbox name=c3 name="cb"> Kurang baik<br><br>
                <a href="#" class="btn btn-lg btn-primary"> Vote</a>
                <a href="#" class="btn btn-lg btn-primary">View result</a><br>
                </form>
              </div>
              <br>
              <div>
                <h2><strong>Kritik & Saran</strong></h2>
                <hr>
                <form action="<?php echo base_url('ContactUs/kirim_kritiksaran_home'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                      <div class="col-lg-12">
                        <input type="text" class="form-control" id="inputDefault" placeholder="Nama" name="username">
                      </div>
                      <br>
                      <br>
                      <div class="col-lg-12">
                        <input type="text" class="form-control" id="inputDefault" placeholder="Email" name="email">
                      </div>
                      <br>
                      <br>
                      <div class="col-lg-12">
                        <textarea class="form-control" rows="4" id="textareaDefault" placeholder="Kritik & Saran" name="isi"></textarea><br>
                        <button type="submit" class="btn btn-lg btn-primary">Kirim</button>
                      </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
          <hr class="tall">
          <div class="row text-center pt-4">
            <div class="col">
              <h2 class="mb-2 word-rotator-title">
               Pengumuman seputar info kegiatan
                <strong>
                  <span class="word-rotator" data-plugin-options="{'delay': 3500, 'animDelay': 400}">
                    <span class="word-rotator-items">
                      <span>Sekolah</span>
                      <span>Dasar</span>
                      <span>Islam</span>
                      <span>Al-Baitul Amien 2</span>
                    </span>
                  </span>
                </strong>
                  Jember
              </h2>
              <h4 class="heading-primary lead tall">Berikut ini adalah pengumuman macam-macam info kegiatan di SD Al Baitul Amien 2 Jember</h4>
            </div>
          </div>
    </div>

        <section class="section section-custom-map">
          <section class="section section-default section-footer">
            <div class="container">
              <div class="row">

                <div class="col-lg-6">
                  <h2><strong>Quotes</strong> of the day</h2>
                  <div class="row">
                    <div class="owl-carousel owl-theme mb-0" data-plugin-options="{'items': 1}">
                      <?php foreach ($quote->result() as $q) { ?>
                      <div>
                        <div class="col">
                          <div class="testimonial testimonial-primary">
                            <blockquote>
                              <p>
                                <?php echo $q->isi; ?>
                                </p>
                            </blockquote>
                            <div class="testimonial-arrow-down"></div>
                            <div class="testimonial-author">
                              <div class="testimonial-author-thumbnail img-thumbnail">
                                <img src="<?php echo base_url($q->gambar_karyawan); ?>" alt="">
                              </div>
                              <p><strong><?php echo $q->nama_karyawan; ?></strong><span><?php echo $q->nama_jabatan; ?></span></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </section>
</div>

<?php $this->load->view("user/side/footer"); ?>
<?php $this->load->view("user/side/js"); ?>
