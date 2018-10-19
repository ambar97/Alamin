<?php $this->load->view("user/side/head"); ?>
<?php $this->load->view("user/side/navbar"); ?>
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col">
				<ul class="breadcrumb">
					<li><a style="color: #10ac84" href="">Home</a></li>
					<li class="active">Informasi</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h1>Informasi Berita</h1>
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
                    <img class="img-fluid" src="/Alamin/gallery/Galeri/6.png" alt="asd">
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
  </div>
</div>
</div>
<?php $this->load->view("user/side/footer"); ?>
<?php $this->load->view("user/side/js"); ?>
