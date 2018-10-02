<?php $this->load->view("user/side/head"); ?>
<?php $this->load->view("user/side/navbar"); ?>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col">
				<ul class="breadcrumb">
					<li><a style="color: #10ac84" href="<?php echo base_url('./') ?>">Home</a></li>
					<li class="active">Extrakulikuler</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h1>Extrakulilkuler Siswa Sekolah</h1>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-12">
					<div class="tabs tabs-vertical tabs-left">
						<ul class="nav nav-tabs">
							<li class="nav-item active">
								<a class="nav-link" href="#popular11" data-toggle="tab">Popular</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#recent11" data-toggle="tab">Recent</a>
							</li>
						</ul>
						<div class="tab-content">
							<div id="popular11" class="tab-pane active">
								<p>Popular</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
							</div>
							<div id="recent11" class="tab-pane">
								<p>Recent</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $this->load->view("user/side/footer"); ?>
<?php $this->load->view("user/side/js"); ?>
