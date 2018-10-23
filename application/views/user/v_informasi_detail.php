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
    <?php foreach ($d_berita->result() as $det ) { ?>
    <div class="col-lg-9">
      <div class="blog-posts single-post">
        <article class="post post-large blog-single-post">
          <div class="post-image">
            <div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
              <div>
              </div>
          </div>
          <div class="post-content">
            <h2> <?php echo $det->judul_informasi; ?> </h2>
            <div class="img-thumbnail d-block">
                  <img class="img-fluid" src="<?php echo base_url().$det->gambar_informasi; ?>" alt="">
                </div>
            <div class="post-meta">
              <span><i class="fas fa-calendar-alt"></i> <?php echo $det->date; ?> </span>
              <span><i class="fas fa-comments"></i> <?php echo $det->viewers; ?> </span>
            </div>
            <p> <?php echo $det->isi_informasi; ?> </p>
          </div>
        </article>

      </div>
    </div>
    <?php } ?>
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
                        <a title="<?php echo $re-> judul_informasi; ?>" href="<?php echo base_url('Informasi/Berita_Detail/'); ?>"><?php echo substr($re-> judul_informasi,0,20); ?>...</a>
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
