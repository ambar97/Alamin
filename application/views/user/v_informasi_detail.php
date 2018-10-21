<?php $this->load->view("user/side/head"); ?>
<?php $this->load->view("user/side/navbar"); ?>
<section class="page-header">
  <div class="container">
    <div class="row">
      <div class="col">
        <ul class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Informasi</li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h1>Detail Berita</h1>
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
                  <img class="img-fluid" src="<?php echo base_url(); ?>master/client/img/blog/blog-image-1.jpg" alt="">
                </div>
              </div>
          </div>
          <div class="post-content">
            <h2> judul </h2>
            <div class="post-meta">
              <span><i class="fas fa-calendar-alt"></i> tgl </span>
              <span><i class="fas fa-comments"></i> Viewers </span>
            </div>
            <p> isi </p>
          </div>
        </article>
      </div>
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
<?php $this->load->view("user/side/footer"); ?>
<?php $this->load->view("user/side/js"); ?>
