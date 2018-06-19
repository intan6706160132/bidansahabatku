
 <script type="text/javascript" src="<?php echo base_url('assets/ckeditor/ckeditor.js');?>"></script>
<!-- <script src="<?php echo base_url('assets/ckeditor/ckeditor.js');?>"></script> -->

<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Tambah Artikel</h2>
            </div>
        </div>
    </div>
</section>
<body>
<div class="container" style="margin-top: 20px">
    <!-- <div class="row">
        <div class="col-md-12">
            <a href="#" class="btn btn-primary waves-effect waves-dark">Tambah Data</a>
        </div>
    </div> -->
    <div class="row">
        <div class="col-md-12">
            <?php echo form_open_multipart('Management_controller/tambah_artikel', array('name' => 'form2', 'method'=>'post'));?>
            <!-- <form method="post" name="form2" action="<?php echo base_url('Management_controller/tambah_artikel/')?>"> -->
			   <div class="input-field">
                    <input type="text" name="JUDUL_ARTIKEL" class="form-control"
                           id="judul_artikel" required
                           data-validation-required-message="Isikan Judul Artikel" />
                    <label for="name" class=""> Judul Artikel </label>
                    <p class="help-block"></p>
                </div>
                <div class="input-field">
                    <textarea id="editor1" name="ISI_ARTIKEL" class="form-control"
                           id="isi_artikel" required
                           data-validation-required-message="Masukkan isi/konten artikel disini..." placeholder="Masukkan isi/konten artikel disini..." cols="20" rows="20"></textarea>
                    <p class="help-block"></p>
                    <script>
                        CKEDITOR.replace('editor1');
                    </script>
                </div>
                <label for="name" class="">Foto Artikel</label>
                <div class="input-field">
                    <input type="file" name="foto_artikel" class="form-control"
                           id="foto_artikel" />
                    <p class="help-block"></p>
                </div> 
                <div id="success"> </div><br> <!-- For success/fail messages -->
                <button type="submit" class="btn btn-primary waves-effect waves-dark pull-right">Tambah</button><br>
            </form>
        </div>
    </div>

<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a>
</div>