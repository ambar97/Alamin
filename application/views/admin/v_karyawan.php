<?php $this->load->view("admin/side/head"); ?>
 <?php $this->load->view("admin/side/loader"); ?>
 <?php $this->load->view("admin/side/header"); ?>
 <?php $this->load->view("admin/side/sidebar"); ?>
 
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Karyawan</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url("admin/Dashboard") ?>">Home</a></li>
                    <li class="breadcrumb-item active">Karyawan</li>
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

        <div class="card">
            <div class="card-body bg-info">
                <h4 class="text-white card-title">Tambah Karyawan </h4>
            </div>
            <div class="card-body">
                <div class="message-box contact-box">
                    <h2 class="add-ct-btn"><button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark" data-toggle="modal" data-target="#tambah_karyawan">+</button></h2>
                    <div id="tambah_karyawan" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                     <h4 class="modal-title" id="myModalLabel">Tambah data karyawan (+)</h4> 
                                    <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal form-material" method="post" action="<?php echo base_url("admin/Karyawan/t_karyawan")?>" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="col-md-12 m-b-20">
                                                <input type="text" class="form-control" placeholder="Nama" name="nama_k" required=""> </div>
                                            <div class="col-md-12 m-b-20">
                                                <h6>Tanggal Lahir</h6>
                                                <input type="date" class="form-control" placeholder="Tempat Lahir" name="tl_k" required=""> </div>
                                            <div class="col-md-12 m-b-20">
                                                <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_k" required=""> </div>
                                            <div class="col-md-12 m-b-20">
                                                <input type="text" class="form-control" placeholder="NIPA" name="nipa_k" required=""> </div>
                                            <div class="col-md-12 m-b-20">
                                                <div class="form-group">
                                                    <h6>Jabatan</h6>
                                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="jabatan_k">
                                                        <option disabled=""> Pilih Jabatan</option>
                                                        <?php foreach ($jabatan->result() as $jbt) { ?>
                                                        <option value="<?php echo $jbt->id_jabatan; ?>"><?php echo $jbt->nama_jabatan; ?></option>
                                                    <?php }?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12 m-b-20">
                                                <div class="form-group">

                                                    <h6>Bidang</h6>
                                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="bidang_k">
                                                        <option disabled="" >Pilih Bidang</option>
                                                        <?php foreach ($bidang->result() as $bid) { ?>
                                                        <option value="<?php echo $bid->id_bidang; ?>"><?php echo $bid->nama_bidang; ?></option>
                                                        <?php } ?>
                                                    
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12 m-b-20">
                                                <input type="text" class="form-control" placeholder="Alamat" name="alamat_k" required=""> 
                                            </div>
                                            <div class="col-md-12 m-b-20">
                                                <input type="file" name="gambar">
                                            </div>
                                        </div>
                                    <button type="submit" class="btn btn-primary" name="btnSimpan" value="OK">Simpan</button>
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                    </form>
                                </div>
                                
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <div class="message-widget contact-widget">
                        <!-- Message -->
                        <a>
                            <div class="user-img"> <img src="<?php echo base_url() ?>master/adm/assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                            <div class="mail-contnet">
                                <h5>Klik tombol Tambah (+) untuk Menambahkan Data Karyawan </h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Daftar Karyawan</h4>
                        <h6 class="card-subtitle"></h6>
                        <div class="table-responsive">
                            <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>TTL</th>
                                        <th>NIPA</th>
                                        <th>Jabatan</th>
                                        <th>Bidang</th>
                                        <th>Alamat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php 
                                    $no = 1;
                                    foreach ($karyaw->result() as $key) { ?>
                                    <tr>
                                        <td><?php echo $no++?></td>
                                        <td><?php echo $key->nama_karyawan; ?></td>
                                        <td><?php echo $key->tempat_lahir_karyawan; ?>,<?php echo $key->tanggal_lahir_karyawan; ?></td>
                                        <td><?php echo $key->NIPA_karyawan; ?></td>
                                        <td><?php echo $key->nama_jabatan; ?></td>
                                        <td><?php echo $key->nama_bidang; ?></td>
                                        <td><?php echo $key->alamat; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline vier-row-btn" data-toggle="tooltip" data-original-title="View"><i class="mdi mdi-eye" aria-hidden="true"></i></button>
                                            <a href="<?php echo base_url('admin/Karyawan/d_karyawan/'.$key->NIPA_karyawan) ?>">
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="mdi mdi-close" aria-hidden="true"></i></button></a>
                                            
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="7">
                                            <div class="text-right">
                                                <ul class="pagination"> </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 <?php $this->load->view("admin/side/footer"); ?>
 <?php $this->load->view("admin/side/js"); ?>
<?php if ($this->session->flashdata()) { ?>
                        <?php echo $this->session->flashdata('Pesan'); ?></div>                    
                    <?php } ?> 
    <!-- Footable -->
    <script src="<?php echo base_url() ?>master/adm/assets/plugins/footable/js/footable.all.min.js"></script>
    <script src="<?php echo base_url() ?>master/adm/assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <!--FooTable init-->
    <script src="<?php echo base_url() ?>master/adm/js/footable-init.js"></script>
    <script src="<?php echo base_url() ?>master/adm/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>