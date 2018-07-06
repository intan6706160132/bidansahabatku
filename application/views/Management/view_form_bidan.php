<?php
$pd = array('D3','S1','S2','S3');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="http://webthemez.com" />
    <!-- css -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>materialize/css/materialize.min.css" media="screen,projection" />
    <link href="<?php echo base_url('assets/');?>css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/');?>css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/');?>css/flexslider.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/');?>css/style.css" rel="stylesheet" />

    <title>DATA BIDAN</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>

<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Tambah Data bidan</h2>
            </div>
        </div>
    </div>
</section>
<body>
<div class="container" style="margin-top: 20px">
 
    <div class="row">
        <div class="col-md-12">
            <script type="text/javascript">
            $(document).ready(function(){
                $('form[id="contactForm"]').validate({
                    rules: {
                        ID_BIDAN: 'required',
                        NAMA_BIDAN: 'required',
                        TEMPAT_LHR_BIDAN: 'required',
                        TGL_LHR_BIDAN: 'required',
                        ALAMAT_BIDAN: 'required',
                        NO_TELP_BIDAN: {
                            required: true,
                            number: true
                        },
                        PENDIDIKAN_TERAKHIR: 'required',
                        NAMA_PT: 'required'
                    },
                    messages: {
                        ID_BIDAN: 'Id bidan tidak boleh kosong',
                        NAMA_BIDAN: 'Nama bidan tidak boleh kosong',
                        TEMPAT_LHR_BIDAN: 'Tempat lahir tidak boleh kosong',
                        TGL_LHR_BIDAN: 'Tanggal lahir tidak boleh kosong',
                        ALAMAT_BIDAN: 'Alamat tidak boleh kosong',
                        NO_TELP_BIDAN: 'No. Telp tidak boleh kosong',
                        PENDIDIKAN_TERAKHIR: 'Pendidikan tidak boleh kosong',
                        NAMA_PT: 'Perguruan asal tidak boleh kosong'
                    },
                    submitHandler: function(form){
                        form.submit();
                    },
                    errorPlacement: function(error, element){
                        error.css({'margin-left' : 200, 'font-size': 10});
                        error.appendTo(element.parent());
                        // alert(element.parent().children('label').attr("name"));
                        //element.parent().children('label').text(error.text());
                    }
                });
            });
        </script>
            <form name="sentMessage" id="contactForm" method="post" action="<?php echo base_url('Management_controller/tambah_data_bidan');?>" novalidate>
                <div class="input-field">
                    <input type="text" name="ID_BIDAN" class="form-control"
                           id="ID_BIDAN" required
                           data-validation-required-message="Isikan ID Bidan" />
                    <label for="name" class=""> ID Bidan </label>
                    <p class="help-block"></p>
                </div>
                <div class="input-field">
                    <input type="text" name="NAMA_BIDAN" class="form-control"
                           id="NAMA_BIDAN" required
                           data-validation-required-message="Isikan Nama Bidan" />
                    <label for="name" class=""> Nama Bidan </label>
                    <p class="help-block"></p>
                </div>
                <div class="input-field">
                    <input type="text" name="TEMPAT_LHR_BIDAN" class="form-control"
                           id="TEMPAT_LHR_BIDAN" required
                           data-validation-required-message="Isikan Tempat Lahir Bidan"
                           />
                    <label for="name" class=""> Tempat Lahir Bidan </label>
                    <p class="help-block"></p>
                </div>
                <label> Tanggal Lahir Bidan </label>
                <div class="input-field">
                    <input type="date" name="TGL_LHR_BIDAN" class="form-control"
                           id="TGL_LHR_BIDAN" required
                           data-validation-required-message="Isikan Tempat Lahir Bidan"
                           />
                    <p class="help-block"></p>
                </div>
                <div class="input-field">
                    <input type="text" name="ALAMAT_BIDAN" class="form-control"
                           id="ALAMAT_BIDAN" required
                           data-validation-required-message="Isikan Alamat Bidan" />
                    <label for="name" class=""> Alamat Bidan </label>
                    <p class="help-block"></p>
                </div>
                <div class="input-field">
                    <input type="text" name="NO_TELP_BIDAN" class="form-control"
                           id="NO_TELP_BIDAN" required
                           data-validation-required-message="Isikan No Telepon Bidan"/>
                    <label for="name" class=""> No Telepon Bidan</label>
                    <p class="help-block"></p>
                </div>

                <div class="form-group">
                    <label>Pendidikan Terakhir</label>
                    <select name="PENDIDIKAN_TERAKHIR" class="form-control" id="PENDIDIKAN_TERAKHIR">
						<option value="D3">D3</option>
						<option value="S1">S1</option>
						<option value="S2">S2</option>
						<option value="S3">S3</option>
                                </select>
                    <p class="help-block"></p>
                                </div>
                <div class="input-field">
                    <input type="text" name="NAMA_PT" class="form-control"
                           id="NAMA_PT" required
                           data-validation-required-message="Isikan Nama Pendidikan Asal"
                            />
                    <label for="name" class="">Nama Perguruan Tinggi Asal</label>
                    <p class="help-block"></p>
                </div>
                <div id="success"> </div> <!-- For success/fail messages -->
                <button type="submit" class="btn btn-primary waves-effect waves-dark pull-right">Tambah</button>
                <br />
            </form>
        </div>
    </div>
</div>
<!-- <a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a> -->
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

</body>