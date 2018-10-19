<?php $this->load->view("admin/side/head"); ?>
 <?php $this->load->view("admin/side/loader"); ?>
 <?php $this->load->view("admin/side/header"); ?>
 <?php $this->load->view("admin/side/sidebar"); ?>
 <div class="page-wrapper">
            <div class="container-fluid">

                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Berita</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url("admin/Dashboard") ?>">Home</a></li>
                            <li class="breadcrumb-item active"><a href="<?php echo base_url("admin/Berita") ?>"> Berita</a></li>
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
                <h4 class="text-white card-title">Edit Berita</h4>
            </div>
                <div class="card-body">
                    <div class="message-box contact-box">
                        <div class="message-widget contact-widget">
                            <!-- Message -->
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                      <form method="post" action="<?php echo base_url("admin/Berita/e_berita")?>" enctype="multipart/form-data">
                                        <div class="card-body">
                                              <div class="form-group">
                                                <label>Judul Berita</label>
                                                <?php foreach ($d_berita->result() as $d) { ?>
                                                  <input type="text" name="id_informasi" value="<?php echo $d->id_informasi; ?>" hidden>
                                                  <input type="text" class="form-control" name="judul_informasi" value="<?php echo $d->judul_informasi;?>" required>
                                                <?php } ?>
                                              </div>
                                              <div class="form-group">
                                                <label>Isi Berita</label>
                                                 <div class="card">
                                                    <div class="card-body">
                                                      <?php foreach ($d_berita->result() as $d) { ?>
                                                        <textarea class="summernote" name="isi_informasi" required>
                                                          <?php echo $d->isi_informasi; ?>
                                                        </textarea>
                                                      <?php } ?>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label>Gambar Berita</label><br>
                                                <img style="max-height: 300px;" src="<?php echo base_url().$d->gambar_informasi; ?>" ><hr>
                                                <input type="file" class="form-control" placeholder="Pilih Gambar" name="gambar_informasi" >
                                              </div>
                                              <div style="float: right;" class="row">
                                              <a href="<?php echo base_url('admin/Berita') ?>"><button  class="btn btn-default waves-effect" type="button" name="button">Cancel</button></a>
                                               <a href=""><button  class="btn btn-success" type="submit" name="button">save</button></a>
                                              </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
 <?php $this->load->view("admin/side/footer"); ?>
 <?php $this->load->view("admin/side/js"); ?>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url() ?>master/adm/js/custom.min.js"></script>
    <script src="<?php echo base_url() ?>master/adm/assets/plugins/summernote/dist/summernote.min.js"></script>
    <script>
    jQuery(document).ready(function() {

        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false // set focus to editable area after initializing summernote
        });

        $('.inline-editor').summernote({
            airMode: true
        });

    });

    window.edit = function() {
            $(".click2edit").summernote()
        },
        window.save = function() {
            $(".click2edit").summernote('destroy');
        }
    </script>

    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url() ?>master/adm/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <!-- asdasdasd -->
