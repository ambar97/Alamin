<?php $this->load->view("admin/side/head"); ?>
<?php $this->load->view("admin/side/loader"); ?>
<?php $this->load->view("admin/side/header"); ?>
<?php $this->load->view("admin/side/sidebar"); ?>

<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Quotes</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url("admin/Dashboard") ?>">Home</a></li>
                    <li class="breadcrumb-item active">Quotes</li>
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
          <div class="col-sm-6">
            <form class="" action="<?php echo base_url('admin/Quote/insert'); ?>" method="post">
              <div class="card">
                <div class="card-body">
                  <div class="form-group">
                    <label>Tambah Quote</label>
                    <select class="form-control" name="pilih_karyawan" required>
                      <option value="">-Pilih Karyawan-</option>
                      <?php foreach ($nipa->result() as $n) { ?>
                      <option value="<?php echo $n->NIPA_karyawan; ?>">-<?php echo $n->nama_karyawan; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <!-- <input type="text" name="isi_quote" placeholder="isi quote..." required> -->
                    <textarea type="textarea" rows="4" class="form-control" placeholder="isi quote..." name="isi_quote" required=""></textarea>
                  </div>
                  <button style="float: right;" class="btn btn-primary" type="submit" name="button">Save</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <table id="example" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Karyawan</th>
                            <!-- <th>Isi Berita</th> -->
                            <th>Isi quote</th>
                            <!-- <th>Views</th> -->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($quote->result() as $ber) { ?>
                        <tr>
                            <td><?php echo $no++?></td>
                            <td><?php echo $ber->nama_karyawan; ?></td>
                            <!-- <td><?php echo $ber->isi_informasi; ?></td> -->
                            <!-- <td><?php echo $ber->nama_karyawan; ?></td> -->
                            <td><?php echo substr($ber->isi,0,28); ?>..</td>
                            <td>
                                <!-- <button type="button">Lihat</button> -->
                                <button class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete" type="button" onclick="deleted('<?php echo $ber->id_quotes; ?>')"><i class="mdi mdi-close" aria-hidden="true"></i></button>
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

<?php $this->load->view("admin/side/footer"); ?>
<?php $this->load->view("admin/side/js"); ?>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
 $('#example').DataTable();
} );
</script>

<script type="text/javascript">
function deleted(param){
  var proc = window.confirm('Are you sure delete this data?');
  if(proc){
     document.location='<?php echo base_url(); ?>admin/Quote/delete/'+param;
   }
 }
</script>
<?php if ($this->session->flashdata()) { ?>
    <?php echo $this->session->flashdata('Pesan'); ?>                  
    <?php } ?>