<?php $this->load->view("user/side/head"); ?>
<?php $this->load->view("user/side/navbar"); ?>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col">
				<ul class="breadcrumb">
					<li><a style="color: #10ac84" href="#">Home</a></li>
					<li class="active">Agenda</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h1>Agenda kalendar akademik</h1>
			</div>
		</div>
	</div>
</section>
<section>
		<div class="container"><hr><br>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>No.</th>
				<th>Tanggal</th>
                <th>Kegiatan</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; foreach ($agenda->result() as $agen) { ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $agen->tanggal_agenda; ?></td>
                <td><span class="peity-line" data-width="120" data-peity='{ "fill": ["#009efb"], "stroke":["#009efb"]}' data-height="40"><?php echo $agen->nama_kegiatan; ?></span> </td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
</section>

<?php $this->load->view("user/side/footer"); ?>
<?php $this->load->view("user/side/js"); ?>
