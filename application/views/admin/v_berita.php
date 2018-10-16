<?php $this->load->view("admin/side/head"); ?>
 <?php $this->load->view("admin/side/loader"); ?>
 <?php $this->load->view("admin/side/header"); ?>
 <?php $this->load->view("admin/side/sidebar"); ?>

<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Berita</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url("admin/Dashboard") ?>">Home</a></li>
                            <li class="breadcrumb-item active">Berita</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <div class="d-flex m-t-10 justify-content-end">
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                <div class="chart-text m-r-10">
                                    <h6 class="m-b-0"><small>THIS MONTH</small></h6>
                                    <h4 class="m-t-0 text-info">$58,356</h4></div>
                                <div class="spark-chart">
                                    <div id="monthchart"></div>
                                </div>
                            </div>
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                <div class="chart-text m-r-10">
                                    <h6 class="m-b-0"><small>LAST MONTH</small></h6>
                                    <h4 class="m-t-0 text-primary">$48,356</h4></div>
                                <div class="spark-chart">
                                    <div id="lastmonthchart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- Berita -->
<div class="row">
    <div class="col-12">
        <div class="card">
                        <div class="card-body">
                          <button type="button"><a href="<?php echo base_url('admin/Berita/t_berita'); ?>">Tambah Berita</a></button>
                                <div class="table-responsive m-t-40">
                                    <table class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Berita</th>
                                                <!-- <th>Isi Berita</th> -->
                                                <th>Tanggal Upload</th>
                                                <!-- <th>Views</th> -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($berita->result() as $ber) { ?>
                                            <tr>
                                                <td><?php echo $no++?></td>
                                                <td><?php echo $ber->judul_informasi; ?></td>
                                                <!-- <td><?php echo $ber->isi_informasi; ?></td> -->
                                                <td><?php echo $ber->date; ?></td>
                                                <!-- <td><?php echo $ber->viewers; ?></td> -->
                                                <td>
                                                    <!-- <button type="button">Lihat</button> -->
                                                    <button type="button" onclick="updatejs('<?php echo $ber->id_informasi; ?>')">Edit</button>
                                                    <button type="button" onclick="deleted('<?php echo $ber->id_informasi; ?>')">Hapus</button>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
</div>
</div>


</div>
</div>
<!-- <?php $this->load->view("admin/side/footer"); ?> -->
 <?php $this->load->view("admin/side/js"); ?>
 <?php $this->load->view("admin/side/footer"); ?>
 <?php $this->load->view("admin/side/js"); ?>

 <script type="text/javascript">
  function deleted(param){
    var proc = window.confirm('Are you sure delete this data?');
    if(proc){
       document.location='<?php echo base_url(); ?>admin/Berita/delete_berita/'+param;
     }
   }
   function updatejs(param){
       document.location='<?php echo base_url(); ?>admin/Berita/d_berita/'+param;
   }
 </script>
