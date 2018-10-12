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
            <form class="form-material m-t-40">
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="text" class="form-control" placeholder="1 Januari 2018">
                </div>
                <div class="form-group">
                    <label>Kegiatan</label>
                    <input type="text" class="form-control" placeholder="Kegiatan Sekolah">
                </div>
            </form>
            <button type="submit">Save</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view("admin/side/footer"); ?>
<?php $this->load->view("admin/side/js"); ?>
