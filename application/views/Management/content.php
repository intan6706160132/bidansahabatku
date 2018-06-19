<title>Artikel</title>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

<section id="inner-headline">

    <div class="container">

        <div class="row">

            <div class="col-lg-16">

                <h2 class="pageTitle" style="padding-bottom: 32px">Artikel Kesehatan</h2>

            </div>

        </div>

    </div>

</section>

<div class="container">

    <h2 class="panel-default"></h2>

    <hr>

</div>

<section id="banner">



    <!-- Slider -->

    <div id="main-slider" class="flexslider">

        <ul class="slides">

            <li>

                <img src="<?php echo base_url('assets/');?>img/slides/bidan.jpg" alt="" />

                <div class="flex-caption">

                    <h3>Bidan Sahabatku</h3>

                    <p></p>



                </div>

            </li>

            <li>

                <img src="<?php echo base_url('assets/');?>img/slides/bidan2.jpg" alt="" />

                <div class="flex-caption">

                    <h3>Bidan Sahabatku</h3>

                    <p>Sahabatku? ya bidan sahabatku!</p>



                </div>

            </li>

            <li>

                <img src="<?php echo base_url('assets/');?>img/slides/bidan3.jpg" alt="" />

                <div class="flex-caption">

<!--                    <h3>Klinik Bidan Sahabatku</h3>-->

<!--                    <p>We envision a world in which every child</p>-->

                </div>

            </li>

        </ul>

    </div>

    <!-- end slider -->

</section>

<section class="feature">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="aligncenter"><h2 class="aligncenter">Layanan Kami</h2></div>

                <br/>

            </div>

        </div>

        <div class="row service-v1 margin-bottom-40">

            <div class="col-md-4 md-margin-bottom-40">

                <div class="card small">

                    <div class="card-image">

                        <img class="img-responsive" src="<?php echo base_url('assets/');?>img/service1.jpg" alt="">

                        <span class="card-title">Berpengalaman</span>

                    </div>

                    <div class="card-content">

                        <p>

                            Bidan Sahabatku telah berpengalaman dalam mendampingi perempuan sepanjang siklus

                        </p>

                        <p>

                            hidupnya

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4 md-margin-bottom-40">

                <div class="card small">

                    <div class="card-image">

                        <img class="img-responsive" src="<?php echo base_url('assets/');?>img/service2.jpg" alt="">

                        <span class="card-title">Tenaga Ahli Professional</span>

                    </div>

                    <div class="card-content">

                        <p>

                            Bidan Sahabatku Memiliki Tenaga Ahli Yang Profesional Dibidangnya, dan Akan Selalu Menambah Kapasitas Diri di Bidangnya

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4 md-margin-bottom-40">

                <div class="card small">

                    <div class="card-image">

                        <img class="img-responsive" src="<?php echo base_url('assets/');?>img/service3.jpg" alt="">

                        <span class="card-title">Kepuasan Pelanggan</span>

                    </div>

                    <div class="card-content">

                        <p>

                            Kami Memiliki Komitmen Tinggi Bahwa Kepuasaan Pelanggan Merupakan Prioritas Utama Kami, Hal Ini Bisa Dilihat Dari Testimony Klient Kami

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<section id="content">

<div class="container">

    <div class="row">

        <div class="col-md-8 col-sm-8"> <!-- 8 kolom pada resolusi medium dan small -->

            <div class="panel panel-default">

                <?php 
			if(isset($data)){
		 foreach ($data->result() as $r) {

                         ?>

                <div class="panel-body">

                    <div class="row">

                        <div class="col-md-0"></div>

                        <div class="col-md-12">

                            <div class="panel panel-default">

                                <div class="panel-heading">

                                    <h3 class="panel-title"><span class="color" style="font-size: x-large;"><?php echo $r->JUDUL_ARTIKEL; ?></span>

                                    </h3>

                                </div>

                                <div class="panel-body">





                                    <span><img src="<?php echo base_url('uploads/').$r->foto_artikel?>" alt="" style="max-width: 100%; max-height: 50%"/>

                                    </span>

<!--                                    <span><img src="--><?php //echo base_url('assets/');?><!--img/slides/bidan2.jpg" alt="" style="width: 660px"/>-->

<!--                                    </span>-->

                                    <br>

                                    <br>

                                    <?php echo word_limiter($r->ISI_ARTIKEL,30); ?>

                                        <br><br>

                                    <span class="fa fa-pencil"> <?php echo $r->DIBUAT ?></span>

                                    <br>

                                    <div class="col-md-9"></div>

                                    <span><a style="width: auto" href="<?php echo base_url();?>Management_controller/readmore_artikel/<?php echo $r->ID_ARTIKEL; ?>" class="col-md-3 btn btn-default">Selengkapnya &raquo;</a></b></span>

                                </div>

                            </div>

                        </div>

                    </div>

                    

                </div>

                <?php  } }?>

            </div>

        </div>

        <div class="col-md-4 col-sm-4"> <!-- 8 kolom pada resolusi medium dan small -->

            <div class="panel panel-info">

                <div class="panel-heading">

                    <h2 class="panel-title">

                      <strong>Tulisan Baru</strong>

                    </h2>

                </div>

                <div class="panel-body">

                    <ul class="list-group">

                        <li class="list-group-item"><?php if(isset($r)) echo anchor('',$r->JUDUL_ARTIKEL); ?></li>

                    </ul>

                </div>

            </div>

        </div>



    </div>

			<div class="row">

        <div class="col">

            <!--Tampilkan pagination-->

            <?php echo $pagination; ?>

        </div>

    </div>

</div>

</section>



