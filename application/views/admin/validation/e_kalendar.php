<?php $this->load->view("admin/side/head"); ?>
<?php $this->load->view("admin/side/loader"); ?>
<?php $this->load->view("admin/side/header"); ?>
<?php $this->load->view("admin/side/sidebar"); ?>

<div class="page-Wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 col-8 align-self-center">
          <h3 class="text-themecolor m-b-0 m-t-0">Edit Kalendar</h3>
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="javascript:void(0)">Kalendar</a></li>
              <li class="breadcrumb-item active">Edit Kalendar</li>
          </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Kalendar</h4>
            <form class="form-material m-t-40" method="post" action="<?php echo base_url("admin/Kalendar/e_kalendar")?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Tanggal</label>
                    <?php foreach ($detail->result() as $d) { ?>
                      <input type="text" name="id_agenda" value="<?php echo $d->id_agenda; ?>" hidden>
                      <input type="text" class="form-control" value="<?php echo $d->tanggal_agenda; ?>" name="tanggal_akademik">
                    <?php } ?>
                </div>
                <div class="form-group">
                    <label>Kegiatan</label>
                    <?php foreach ($detail->result() as $d) { ?>
                      <input type="text" class="form-control" value="<?php echo $d->nama_kegiatan; ?>" name="kegiatan_akademik">
                    <?php } ?>
                </div>
                <div style="float: right;">
                  <a href="<?php echo base_url('admin/Kalendar') ?>"><button type="button" class="btn btn-default waves-effect" type="submit" name="button">Cancel</button></a>
                  <button  type="submit" class="btn btn-success" type="submit" name="button">Save</button>
                </div>
                  
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view("admin/side/footer"); ?>
<?php $this->load->view("admin/side/js"); ?>
