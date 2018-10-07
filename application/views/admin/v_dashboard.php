<html lang="en">
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
                       <h3 class="text-themecolor">Dashboard</h3>
                       <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="<?php echo base_url("admin/Dashboard") ?>">Home</a></li>
                           <li class="breadcrumb-item active">Dashboard</li>
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
           <div class="col-lg-12">
               <div class="row">
                   <div class="col-lg-4 col-md-4">
                       <div class="card card-inverse card-primary">
                           <div class="card-body">
                               <div class="d-flex">
                                   <div class="m-r-20 align-self-center">
                                       <h1 class="text-white"><i class="ti-pie-chart"></i></h1></div>
                                   <div>
                                       <h3 class="card-title">Bandwidth usage</h3>
                                       <h6 class="card-subtitle">March  2017</h6> </div>
                               </div>
                               <div class="row">
                                   <div class="col-4 align-self-center">
                                       <h2 class="font-light text-white">50 GB</h2>
                                   </div>
                                   <div class="col-8 p-t-10 p-b-20 align-self-center">
                                       <div class="usage chartist-chart" style="height:65px"></div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-4 col-md-4">
                       <div class="card card-inverse card-success">
                           <div class="card-body">
                               <div class="d-flex">
                                   <div class="m-r-20 align-self-center">
                                       <h1 class="text-white"><i class="icon-cloud-download"></i></h1></div>
                                   <div>
                                       <h3 class="card-title">Download count</h3>
                                       <h6 class="card-subtitle">March  2017</h6> </div>
                               </div>
                               <div class="row">
                                   <div class="col-4 align-self-center">
                                       <h2 class="font-light text-white">35487</h2>
                                   </div>
                                   <div class="col-8 p-t-10 p-b-20 text-right">
                                       <div class="spark-count" style="height:65px"></div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-4 col-md-4">
                       <div class="card">
                           <img class="" src="<?php echo base_url() ?>master/adm/assets/images/background/weatherbg.jpg" alt="Card image cap">
                           <div class="card-img-overlay" style="height:110px;">
                               <h3 class="card-title text-white m-b-0 dl">New Delhi</h3>
                               <small class="card-text text-white font-light">Sunday 15 march</small>
                           </div>
                           <div class="card-body weather-small">
                               <div class="row">
                                   <div class="col-8 b-r align-self-center">
                                       <div class="d-flex">
                                           <div class="display-6 text-info"><i class="wi wi-day-rain-wind"></i></div>
                                           <div class="m-l-20">
                                               <h1 class="font-light text-info m-b-0">32<sup>0</sup></h1>
                                               <small>Sunny Rainy day</small>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-4 text-center">
                                       <h1 class="font-light m-b-0">25<sup>0</sup></h1>
                                       <small>Tonight</small>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
               <div class="row">
                   <!-- Column -->
                   <div class="col-lg-12 col-xlg-12 col-md-12">
                                       <h4 class="m-b-20">Visi, Misi & Tujuan</h4>
                       <div class="card">
                           <!-- Nav tabs -->

                           <ul class="nav nav-tabs profile-tab" role="tablist">
                               <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Visi</a> </li>
                               <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Misi</a> </li>
                               <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Tujuan</a> </li>
                           </ul>
                           <!-- Tab panes -->
                           <div class="tab-content">
                               <div class="tab-pane active" id="home" role="tabpanel">
                                   <div class="card-body">
                                       <div class="profiletimeline">
                                           <div class="sl-item">
                                               <div class="sl-left"> <img src="<?php echo base_url() ?>master/adm/assets/images/users/4.jpg" alt="user" class="img-circle"> </div>
                                               <div class="sl-right">
                                                   <div><a href="" class="link">Visi Sekolah Sdaba02</a><!--  <span class="sl-date">5 minutes ago</span> -->
                                                       <?php foreach ($vmt->result() as $key) { ?>
                                                       <blockquote class="m-t-10">
                                                           <?php echo $key->visi; ?>
                                                       </blockquote>
                                                       
                                                   <?php }?>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <!--second tab-->
                               <div class="tab-pane" id="profile" role="tabpanel">
                                   <div class="card-body">
                                           <div class="profiletimeline">
                                           <div class="sl-item">
                                               <div class="sl-left"> <img src="<?php echo base_url() ?>master/adm/assets/images/users/4.jpg" alt="user" class="img-circle"> </div>
                                               <div class="sl-right">
                                                   <div><a href="" class="link">Misi Sekolah Sdaba02</a><!--  <span class="sl-date">5 minutes ago</span> -->
                                                       <?php foreach ($vmt->result() as $key) { ?>
                                                       <blockquote class="m-t-10">
                                                           <?php echo $key->misi; ?>
                                                       </blockquote>
                                                   <?php } ?>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="tab-pane" id="settings" role="tabpanel">
                                   <div class="card-body">
                                       <div class="profiletimeline">
                                           <div class="sl-item">
                                               <div class="sl-left"> <img src="<?php echo base_url() ?>master/adm/assets/images/users/4.jpg" alt="user" class="img-circle"> </div>
                                               <div class="sl-right">
                                                   <div><a href="" class="link">Tujuan Sekolah Sdaba02</a><!--  <span class="sl-date">5 minutes ago</span> -->
                                                       <?php foreach ($vmt->result() as $key) { ?>
                                                       <blockquote class="m-t-10">
                                                           <?php echo $key-> tujuan; ?>
                                                       </blockquote>
                                                   <?php } ?>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <!-- <div class="col-lg-10" ></div> -->
                           <div><a  style="float: right; margin:30px; margin-top: -30px;"   href="" class="btn btn-success" data-toggle="modal" data-target="#edit_visimisi"> Edit</a></div>  
                           <div id="edit_visimisi" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" method="post">
                                                           <div class="modal-dialog modal-lg">
                                                               <div class="modal-content">
                                                                   <div class="modal-header">
                                                                       <h4 class="modal-title" id="myModalLabel">Edit Visi, Misi dan Tujuan(+)</h4>
                                                                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                   </div>
                                                                   <div class="modal-body">
                                                                       <form class="form-horizontal form-material" method="post" action="<?php echo base_url('admin/Dashboard/e_visi') ?>">
                                                                           <div class="form-group">
                                                                               <div class="col-md-12 m-b-20">
                                                                                   <p>Visi</p>
                                                                                   <?php foreach ($vmt->result() as $key) { ?>
                                                                                   <textarea name="visi" class="form-control" id="exampleTextarea" rows="4" placeholder="Visi"><?php echo $key->visi; ?></textarea>
                                                                                 <?php } ?>
                                                                               </div>
                                                                               <div class="col-md-12 m-b-20">
                                                                                   <p>Misi</p>
                                                                                   <?php foreach ($vmt->result() as $key) { ?>
                                                                                   <textarea name="misi" class="form-control" id="exampleTextarea" rows="4" placeholder="Misi"><?php echo $key->misi; ?></textarea>
                                                                                 <?php } ?>
                                                                               </div>
                                                                               <div class="col-md-12 m-b-20">
                                                                                   <p>Tujuan</p>
                                                                                   <?php foreach ($vmt->result() as $key) { ?>
                                                                                   <textarea name="tujuan" class="form-control" id="exampleTextarea" rows="4" placeholder="Tujuan"><?php echo $key->tujuan; ?></textarea>
                                                                                 <?php } ?>
                                                                               </div>

                                                                              <div class="col-md-12 m-b-20">
                                                                                   <!-- <p>Tujuan</p> -->
                                                                                   <?php foreach ($vmt->result() as $key) { ?>
                                                                                   <textarea style="color: #fff; margin-bottom: -20px; margin-top: -20px; font-size: 2px;" name="id" class="form-control" id="exampleTextarea" rows="4" placeholder="Tujuan"><?php echo $key->id_visi_misi; ?></textarea>
                                                                                 <?php } ?>
                                                                               </div>
                                                                           </div>
                                                                           <div style="float: right;">
                                                                               <button type="submit" class="btn btn-info waves-effect" value="OK">Save</button>
                                                                               <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                                           </div>
                                                                       </form>
                                                                   </div>
                                                               </div>
                                                               <!-- /.modal-content -->
                                                           </div>
                                                               <!-- /.modal-dialog -->
                                                       </div>  
                       </div>
                   </div>

                   <!-- Sejarah Sekolah -->

                   <div class="col-lg-6 col-xlg-3 col-md-5">
                      <h4 class="m-b-20">Sejarah Sekolah</h4>
                       <div class="card blog-widget">
                           <div class="card-body">
<<<<<<< HEAD
                            <?php foreach ($sejarah->result() as $sejarah) { ?>
                               <div class="blog-image"><img src="<?php echo base_url().$sejarah -> gambar_sejarah ?>" alt="img" class="img-responsive" /></div>
                               <h3><?php echo $sejarah->judul_sejarah; ?></h3>
                               <p class="m-t-20 m-b-20">
                                   <?php echo $sejarah->isi_sejarah; ?>
                               </p>
                             
=======
                            <?php foreach ($sjrh ->result() as $ss ) { ?>

                               <div class="blog-image"><img src="<?php echo base_url().$ss -> gambar_sejarah ?>" alt="img" class="img-responsive" /></div>
                               <h3><?php echo $ss -> judul_sejarah; ?></h3>
                               <p class="m-t-20 m-b-20">
                                   <?php echo $ss -> isi_sejarah; ?>
                               </p>
                            <?php } ?>

>>>>>>> ff00a6ce78ada504d1f536cbea579168e32817f4
                               <div class="d-flex">
                                   <div class="col-lg-12">
                                       <a style="float: right; margin-bottom: 30px; " href="" class="btn btn-success" data-toggle="modal" data-target="#edit_sejarah"> Edit</a>
                                       <div id="edit_sejarah" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                           <div class="modal-dialog modal-lg">
                                               <div class="modal-content">
                                                   <div class="modal-header">
                                                       <h4 class="modal-title" id="myModalLabel">Edit Sejarah Sekolah(+)</h4>
                                                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                   </div>
                                                   <div class="modal-body">
<<<<<<< HEAD
                                                       <form class="form-horizontal form-material" method="post" action="<?php echo base_url("admin/Dashboard/e_sejarah")?>" enctype="multipart/form-data">
                                                           <div class="form-group">
                                                               <div class="col-md-12 m-b-20">
                                                                <h6>Judul</h6>
                                                                   <textarea  name="tujuan" class="form-control" id="exampleTextarea" rows="4" placeholder="Tujuan"><?php echo $sejarah->judul_sejarah; ?></textarea>
                                                               </div>
                                                               <div class="col-md-12 m-b-20">
                                                                <h6>Isi Sejarah</h6>
                                                                   <textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Isi Sejarah"> <?php echo $sejarah->isi_sejarah; ?></textarea>
                                                               </div>
                                                               <div class="col-md-12 m-b-20">
                                                                   <input  type="file" id="input-file-now" />
=======
                                                       <form class="form-horizontal form-material">
                                                        
                                                           <div class="form-group">
                                                               <div class="col-md-12 m-b-20">
                                                                   <input type="text" class="form-control" id="exampleInputname1" placeholder="Judul" name="judul_sejarah" required="">
                                                               </div>
                                                               <div class="col-md-12 m-b-20">
                                                                   <textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Isi Sejarah" name="isi_sejarah" required=""></textarea>
                                                               </div>
                                                               <div class="col-md-12 m-b-20">
                                                                   <input type="file" id="input-file-now" class="dropify" name="gambar_sejarah" required="" />
>>>>>>> ff00a6ce78ada504d1f536cbea579168e32817f4
                                                               </div>
                                                           </div>
                                                       </form>
                                                   </div>
                                                   <div class="modal-footer">
                                                       <button type="button" class="btn btn-info waves-effect" data-dismiss="modal" type="submit" value="upload">Save</button>
                                                       <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                   </div>
                                               </div>
                                               <!-- /.modal-content -->
                                           </div>
                                               <!-- /.modal-dialog -->
                                       </div>
                                   </div>

                               </div>
                               <?php } ?>
                           </div>
                       </div>
                   </div>
                   <!-- Slider -->
                   <div class="col-lg-6 col-xlg-2 m-b-30">
                                       <h4 class="m-b-20">Slider</h4>
                        <div class="card blog-widget">
                           <div class="card-body">
                                       <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                           <div class="carousel-inner" role="listbox">
                                               <div class="carousel-item active">
                                                   <div class="blog-image"> <img class="d-block img-fluid" src="<?php echo base_url() ?>master/adm/assets/images/big/img1.jpg" alt="First slide"></div>
                                               </div>
                                               <div class="carousel-item">
                                                   <div class="blog-image"><img class="d-block img-fluid" src="<?php echo base_url() ?>master/adm/assets/images/big/img2.jpg" alt="Second slide"></div>
                                               </div>
                                               <div class="carousel-item">
                                                   <div class="blog-image"><img class="d-block img-fluid" src="<?php echo base_url() ?>master/adm/assets/images/big/img3.jpg" alt="Third slide"></div>
                                               </div>
                                           </div>
                                           <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                           <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                       </div>
                                       <div class="d-flex">
                                   <div class="col-lg-12">  <a style="float: right; margin-bottom: 30px; " href="" class="btn btn-success"> Edit Slider</a></div>

                               </div>
                                   </div>
                               </div>
                           </div>
               </div>
<!-- Denah Sekolah -->
               <hr>
               <div class="col-lg-12 col-xlg-12 col-md-12">
                   <h4 class="m-b-20">Denah Sekolah</h4>
                       <hr>
                       <div class="card blog-widget">
                           <div class="card-body">
                               <div class="blog-image"><img src="<?php echo base_url() ?>master/adm/assets/images/big/img1.jpg" alt="img" class="img-responsive" /></div>
                               <div class="d-flex">
                                   <div class="col-lg-12">  <a style="float: right; margin-bottom: 30px; " href="" class="btn btn-success"> Edit</a></div>

                               </div>
                           </div>
                       </div>
                   </div>
   </div>
</div>
<?php $this->load->view("admin/side/footer"); ?>
<?php $this->load->view("admin/side/js"); ?>

<!-- jQuery file upload -->
   <script src="<?php echo base_url() ?>master/adm/assets/plugins/dropify/dist/js/dropify.min.js"></script>
   <script>
   $(document).ready(function() {
       // Basic
       $('.dropify').dropify();

       // Translated
       $('.dropify-fr').dropify({
           messages: {
               default: 'Glissez-déposez un fichier ici ou cliquez',
               replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
               remove: 'Supprimer',
               error: 'Désolé, le fichier trop volumineux'
           }
       });

       // Used events
       var drEvent = $('#input-file-events').dropify();

       drEvent.on('dropify.beforeClear', function(event, element) {
           return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
       });

       drEvent.on('dropify.afterClear', function(event, element) {
           alert('File deleted');
       });

       drEvent.on('dropify.errors', function(event, element) {
           console.log('Has Errors');
       });

       var drDestroy = $('#input-file-to-destroy').dropify();
       drDestroy = drDestroy.data('dropify')
       $('#toggleDropify').on('click', function(e) {
           e.preventDefault();
           if (drDestroy.isDropified()) {
               drDestroy.destroy();
           } else {
               drDestroy.init();
           }
       })
   });
   </script>
    <?php if ($this->session->flashdata()) { ?>
                       <?php echo $this->session->flashdata('Pesan'); ?></div>
                   <?php } ?>
</html>
