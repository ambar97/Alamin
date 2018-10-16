 <?php $this->load->view("user/side/head"); ?>
 <?php $this->load->view("user/side/navbar"); ?>
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col">
				<ul class="breadcrumb">
					<li><a style="color: #10ac84" href="#">Home</a></li>
					<li class="active">Galeri</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h1>Galeri</h1>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-9">
					<div class="row image-gallery sort-destination lightbox" data-sort-id="portfolio">
						<?php foreach ($galery->result() as $glr) { ?>
						<div class="col-sm-9 col-lg-4 isotope-item website mb-4 mb-lg-0">
							<div class="image-gallery-item">
								<a href="<?php echo base_url().$glr->gambar_galeri ?>" data-toggle="modal" data-target="#exampleModal<?php echo($glr->id_galeri)?>">
									<span class="thumb-info">
										<span class="thumb-info-wrapper" >
											<img  src="<?php echo base_url().$glr->gambar_galeri ?>" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner"><?php echo $glr->judul_galeri; ?></span>
												<span class="thumb-info-type"><?php echo  $glr->deskripsi_galeri;?></span>
											</span>
											<span class="thumb-info-action">
												<span class="thumb-info-action-icon"><i class="fas fa-link"></i></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
						
						<!-- Modal -->
						<div class="modal fade" id="exampleModal<?php echo($glr->id_galeri)?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
								    <div class="modal-content">
									      <div class="modal-header">
									        <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Detail Foto/Video</h5>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div class="modal-body">
										       <div>
										       	<center>
										       		<img style="width: 50%" src="<?php echo base_url().$glr->gambar_galeri ?>">
										       	</center>
										       	<hr>
										       </div>
										       <div class="container">
										       		<div class="col-md-12">
										       			<p><?php echo  $glr->deskripsi_galeri;?></p>
										       		</div>
										       </div>
									      </div>
								    </div>
							  </div>
						</div>
						<?php } ?>
					</div>
				</div>
				<div class="col-lg-3">
					<h2 style="font-weight: bold;">Definisi Galeri</h2>
					<hr>
					<p>Galeri ini berisikan foto dan video segala kegiatan yang berada di SDABA 02 Jember.</p>
					</ul>
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
				</div>
			</div>
		</div>
	</div>
</section>

<?php $this->load->view("user/side/footer"); ?>
<?php $this->load->view("user/side/js"); ?>
