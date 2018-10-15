<?php $this->load->view("admin/side/head"); ?>
<!-- <?php $this->load->view("admin/side/loader"); ?> -->
<?php $this->load->view("admin/side/header"); ?>
<?php $this->load->view("admin/side/sidebar"); ?>

<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="card">
              <?php foreach ($slider->result() as $s) { ?>
              <img class="card-img-top img-responsive" src="<?php echo base_url()?>gallery/Slider/<?php echo $s->gambar_galeri; ?>" alt="Gambar Slider 1">
            <?php } ?>
                <div class="card-body">
                    <h4 class="card-title">Slider 1</h4>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#responsive-modal">Edit</a>
                    <!-- sample modal content -->
                    <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title">Edit Slider 1</h4>
                                </div>
                                <div class="modal-body">
                                <form method="post" action="<?php echo base_url("admin/Dashboard/e_slider")?>" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="message-text" class="control-label">Upload image</label>
                                            <input type="file" name="gambar_slider" value="default" required>
                                            <input type="text" name="id_slider1" value="1" hidden>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger waves-effect waves-light">Save changes</button>
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.modal -->
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
              <?php foreach ($slider2->result() as $s2) { ?>
              <img class="card-img-top img-responsive" src="<?php echo base_url()?>gallery/Slider/<?php echo $s2->gambar_galeri; ?>" alt="Gambar Slider 2">
              <?php } ?>
                <div class="card-body">
                    <h4 class="card-title">Slider 2</h4>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#responsive-modal2">Edit</a>
                    <!-- sample modal content -->
                    <div id="responsive-modal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title">Edit Slider 2</h4>
                                </div>
                                <div class="modal-body">
                                <form method="post" action="<?php echo base_url("admin/Dashboard/e_slider2")?>" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="message-text" class="control-label">Upload image</label>
                                            <input type="file" name="gambar_slider" value="default" required>
                                            <input type="text" name="id_slider2" value="2" hidden>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger waves-effect waves-light">Save changes</button>
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.modal -->
                </div>
            </div>
        </div>
    </div>
  </div>

</div>



 <?php $this->load->view("admin/side/footer"); ?>
 <?php $this->load->view("admin/side/js"); ?>
