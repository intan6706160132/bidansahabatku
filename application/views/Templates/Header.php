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
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!-- javascript -->

<script src="<?php echo base_url('assets/');?>js/jquery.js"></script>
<script src="<?php echo base_url('assets/');?>js/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url('assets/');?>materialize/js/materialize.min.js"></script>
<script src="<?php echo base_url('assets/');?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/');?>js/jquery.fancybox.pack.js"></script>
<script src="<?php echo base_url('assets/');?>js/jquery.fancybox-media.js"></script>  
<script src="<?php echo base_url('assets/');?>js/jquery.flexslider.js"></script>
<script src="<?php echo base_url('assets/');?>js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="<?php echo base_url('assets/');?>js/modernizr.custom.js"></script>
<script src="<?php echo base_url('assets/');?>js/jquery.isotope.min.js"></script>
<script src="<?php echo base_url('assets/');?>js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url('assets/');?>js/animate.js"></script> 
<script src="<?php echo base_url('assets/');?>js/custom.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/FixedHeader/3.1.3/js/dataTables.FixedHeader.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/ckeditor/ckeditor.js');?>"></script>
<script type="text/javascript">
    $(document).ready( function () {
		$('.addImunisasi').click(function(){
            var id_anak1 = $(this).data("id_anak");
            var jenis_imu1 = $(this).data("imunisasi");
            $.post(
                '<?php echo base_url('Layanan_controller/get_imunisasi');?>',
                {
                    id_anak: id_anak1,
                    jenis_imu: jenis_imu1
                },
                function(data){
                    var res = JSON.parse(data);
                    $('#tgl_imu').val(res.tgl_imu);
                }
            ).fail(function(err, status){
                alert('Gagal');
                alert(err + " - " + status);
            });
            $('#jenis_imu').val($(this).data("imunisasi"));
            $('#namaImu').text("Tanggal Pemberian Imunisasi " + $(this).data("imunisasi"));
        });
    } );
</script>

    <!-- end of javascript-->

</head>
<body>
<div id="wrapper"> 
	<header class="topbar">
		<div class="container">
			<div class="row">
				<!-- social icon-->
				<div class="col-sm-3">
				   <ul class="social-network">
					<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-pinterest"></i></a></li>
					<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-google-plus"></i></a></li>
				</ul>
				</div>
				<div class="col-sm-9">
					<div class="row">
						<ul class="info"> 
							<li><i class="icon-info-blocks material-icons">question_answer</i><span>info@active.com</span></li>
							<li><i class="icon-info-blocks material-icons">perm_phone_msg</i><span>+(012) 345 6789</span></li>
						</ul>
						<div class="clr"></div>
					</div>
				</div>
				<!-- info -->

			</div>
		</div>
	</header>
	<style type="text/css">
		.logo{
			margin-top: -10px;
			width: 13%;
			height: auto;
		}
        @media only screen and (max-width: 600px) {
                .logo{
                width:30%;
            }
            .navbar-brand{
                width:50%;
            }
        }
		@media only screen and (min-width: 600px) {
                .logo{
                width:30%;
            }
            .navbar-brand{
                width:50%;
            }
        }
	</style>

	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url();?>"><img class="logo" src="<?php echo base_url('assets/img/Logo Bidan Sahabatku-4 - 1.jpg')?>"></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a class="waves-effect waves-dark" href="<?php echo base_url('User_controller')?>">Beranda</a></li>
                    <?php
                        if(isset($_SESSION['status']) && (($_SESSION['status'] == "admin") || ($_SESSION['status'] == "bidan"))){
                            if($_SESSION['status'] == "admin"){
                    ?>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Management<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a class="waves-effect waves-dark" href="<?php echo base_url('Management_controller/show_data_ortu')?>">Data Orang Tua</a></li>
                                <li><a class="waves-effect waves-dark" href="<?php echo base_url('Management_controller/show_data_bidan')?>">Data Bidan</a></li>
                                <li><a class="waves-effect waves-dark" href="<?php echo base_url('User_controller/show_data_user')?>">Data User</a></li>
                                <li><a class="waves-effect waves-dark" href="<?php echo base_url('Management_controller/lihat_artikel')?>">Data Artikel</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Layanan<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a class="waves-effect waves-dark" href="<?php $title = "pelayanan"; echo base_url('Layanan_controller/show_layanan_bayi/'.$title)?>">Pelayanan Bayi</a></li>
                                <li><a class="waves-effect waves-dark" href="<?php $title = "imunisasi"; echo base_url('Layanan_controller/show_layanan_bayi/'.$title)?>">Imunisasi Bayi</a></li>
                            </ul>
                        </li>
                        <li><a class="waves-effect waves-dark" href="<?php echo base_url('Management_controller/show_laporan')?>">Cetak Laporan</a></li>
                    <?php 
                            }else if($_SESSION['status'] == "bidan"){
                    ?>
                        <li><a class="waves-effect waves-dark" href="<?php echo base_url('Management_controller/show_data_ortu')?>">Data Ibu</a></li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Layanan<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a class="waves-effect waves-dark" href="<?php $title = "pelayanan"; echo base_url('Layanan_controller/show_layanan_bayi/'.$title)?>">Pelayanan Bayi</a></li>
                                <li><a class="waves-effect waves-dark" href="<?php $title = "imunisasi"; echo base_url('Layanan_controller/show_layanan_bayi/'.$title)?>">Imunisasi Bayi</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Akun<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a class="waves-effect waves-dark" href="<?php echo
                                    base_url('Bidan_controller/show_bidan_view/'.$_SESSION['id_pengguna'])?>">Data Bidan</a></li>
                                <li><a class="waves-effect waves-dark" href="<?php echo
                                    base_url('Bidan_controller/show_editakun_bidan_view/'.$_SESSION['id_pengguna'])?>">Akun</a></li>
                            </ul>
                        </li>
                    <?php
                        }}?>
                        <?php
                            if(isset($_SESSION['status']) && ($_SESSION['status'] == "ortu")){ ?>
                                <li><a class="waves-effect waves-dark" href="<?php $title = "pelayanan"; echo base_url('Layanan_controller/show_layanan_bayi/'.$title)?>">Data Anak</a></li>
<!--
                                <li class="dropdown">
		                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Data Bayi<b class="caret"></b></a>
		                            <ul class="dropdown-menu">
		                                <li><a class="waves-effect waves-dark" href="<?php $title = "pelayanan"; echo base_url('Layanan_controller/show_layanan_bayi/'.$title)?>">Pelayanan Bayi</a></li>
		                                <li><a class="waves-effect waves-dark" href="<?php $title = "imunisasi"; echo base_url('Layanan_controller/show_layanan_bayi/'.$title)?>">Imunisasi Bayi</a></li>
		                            </ul>
		                        </li>
-->
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Akun<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="waves-effect waves-dark" href="<?php echo base_url('Ortu_controller/show_ortu_view/'.$_SESSION['id_pengguna'])?>">Data Orang Tua</a></li>
                                        <li><a class="waves-effect waves-dark" href="<?php echo base_url('Ortu_controller/show_editakun_ortu_view/'.$_SESSION['id_pengguna'])?>">Akun</a></li>
                                    </ul>
                                </li>
                            <?php }
                        ?>

                    <?php 
                        if(isset($_SESSION['username'])){
                            echo "<li><a class=\"waves-effect waves-dark\" href=\"". base_url('User_controller/logout_user')."\">LOGOUT</a></li>";
                        }else{
                            echo "<li><a class=\"waves-effect waves-dark\" href=\"". base_url('User_controller/show_login_view')."\">LOGIN</a></li>";
                        }
                    ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>
</div>
<style type="text/css">
    .dataTables_filter {
        width: 50%;
        float: right;
        text-align: right;
    }
    .dataTables_paginate {
        width: 50%;
        float: right;
        text-align: right;
    }
</style>
	<!-- end header -->
