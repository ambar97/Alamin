<?php $this->load->view("user/side/head"); ?>
<?php $this->load->view("user/side/navbar"); ?>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col">
				<ul class="breadcrumb">
					<li><a style="color: #10ac84" href="<?php echo base_url('./') ?>">Home</a></li>
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
<section>
	<div class="container">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-9">
					<?php foreach ($berit->result() as $berita) { ?>
					<article class="post post-medium">
						<div class="row">
							<div class="col-lg-5">
								<div class="post-image">
									<div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
										<div>
											<div class="img-thumbnail d-block">
												<img class="img-fluid"  src="<?php echo base_url().$berita->gambar_informasi ?>" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="post-content">
									<h3><a href="<?php echo base_url() ?>Informasi/detail/<?php echo $berita->id_informasi ?>"><?php echo $berita -> judul_informasi ?></a></h3>
									<p><?php echo substr($berita -> isi_informasi,0,500);?>...</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="post-meta">
									<span><i class="fas fa-calendar-alt"></i> <?php echo date("d F Y", strtotime($berita -> date)) ?> </span>
									<span class="d-block d-md-inline-block float-md-right mt-3 mt-md-0"><a href="<?php echo base_url() ?>Informasi/detail/<?php echo $berita->id_informasi ?>" class="btn btn-xs btn-primary" > Read more...</a></span>
								</div>
							</div>
						</div>
					</article>
					<hr>
					<?php } ?>
				</div>
				<div class="tabs col-lg-3">
					<h2><strong>Berita Lainnya</strong></h2>
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
										<a title="<?php echo $re-> judul_informasi; ?>" href="<?php echo base_url() ?>Informasi/detail/<?php echo $berita->id_informasi ?>"><?php echo substr($re-> judul_informasi,0,20); ?>...</a>
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
	</div>
</section>

<?php foreach ($berit->result() as $b) { ?>
	<div class="modal fade bd-example-modal-lg" id="modal<?php echo $b->id_informasi;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Detail Berita</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					 <div class="container">
							<div class="col-md-12">
								<p><?php echo $b->isi_informasi;?></p>
							</div>
					 </div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<?php $this->load->view("user/side/footer"); ?>
<?php $this->load->view("user/side/js"); ?>
<script type="text/javascript">
	function updatejs(param){
      document.location='<?php echo base_url(); ?>Informasi/Berita_Detail/'+param;
  }
</script>
