<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Update Artikel</h2>
            </div>
        </div>
    </div>
</section>
<div class="container" style="margin-top: 20px">
    <!-- <div class="row">
        <div class="col-md-12">
            <a href="#" class="btn btn-primary waves-effect waves-dark">Tambah Data</a>
        </div>
    </div> -->
    <div class="row">
        <div class="col-md-12">
            <form name="sentMessage" id="contactForm" method="post" action="<?php echo base_url('Management_controller/ubah_artikel/');?>" novalidate>
                <div class="input-field" hidden>
                    <input type="text" name="ID_ARTIKEL" class="form-control"
                           id="id_artikel" required
                           data-validation-required-message="Isikan Judul Artikel" value="<?php echo $data_artikel['ID_ARTIKEL']?>" />
                    <label for="name" class=""> ID Artikel </label>
                    <p class="help-block"></p>
                </div>
                <div class="input-field">
                    <input type="text" name="JUDUL_ARTIKEL" class="form-control"
                           id="judul_artikel" required
                           data-validation-required-message="Isikan Judul Artikel" value="<?php echo $data_artikel['JUDUL_ARTIKEL']?>" />
                    <label for="name" class=""> Judul Artikel </label>
                    <p class="help-block"></p>
                </div>
                <div class="input-field">
                    <textarea  id="ckeditor" name="ISI_ARTIKEL" class="form-control"
                           id="isi_artikel" required
                           data-validation-required-message="Masukkan isi/konten artikel disini..." placeholder="Masukkan isi/konten artikel disini..." cols="20" rows="20"><?php echo $data_artikel['ISI_ARTIKEL']?></textarea>
                    <p class="help-block"></p>
                </div>
                <label for="name" class="">Foto Artikel</label>
                <div class="input-field">
                    <input type="file" name="foto_artikel" class="form-control"
                           id="foto_artikel" />
                    <p class="help-block"></p>
                </div>
                <div id="success"> </div><br/>
                <button type="submit" class="btn btn-primary waves-effect waves-dark pull-right">Update</button><br />
            </form>
        </div>
    </div>
</div>
<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a>
<script src="--><?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
<script type="text/javascript">
    CKEDITOR.replace('ckeditor');
</script>
<!--<script type="text/javascript">-->
<!--    $(document).ready( function () {-->
<!--        var table = $('#table_id').DataTable({-->
<!--            responsive: true-->
<!--        });-->
<!---->
<!--        new $.fn.dataTable.FixedHeader(table);-->
<!---->
<!--    });-->
<!--    </script>-->
<!--	 <script src="--><?php //echo base_url().'assets/ckeditor/ckeditor.js'?><!--"></script>-->
<!--    <script type="text/javascript">-->
<!--      $(function () {-->
<!--        CKEDITOR.replace('ckeditor');-->
<!--      });-->
<!--    </script>-->
<!--</body>-->
