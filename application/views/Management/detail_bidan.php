<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Detail Bidan</h2>
            </div>
        </div>
    </div>
</section>
<body>
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-3 menuItem"></div>
        <div class="col-md-6 menuItem">
            <ul class="menu">
                <li>
                    <div class="detail">ID Bidan<span class="price"><?php echo $detail_bidan->ID_BIDAN?></span></div>
                </li>
                <li>
                    <div class="detail">Nama Bidan<span class="price"><?php echo $detail_bidan->NAMA_BIDAN?></span></div>
                </li>
                <li>
                    <div class="detail">Tempat, Tanggal Lahir<span class="price"><?php echo $detail_bidan->TEMPAT_LHR_BIDAN?>, <?php echo $detail_bidan->TGL_LHR_BIDAN?></span></div>
                </li>
                <li>
                    <div class="detail">Alamat Bidan<span class="price"><?php echo $detail_bidan->ALAMAT_BIDAN?></span></div>
                </li>
                <li>
                    <div class="detail">No. Telepon Bidan<span class="price"><?php echo $detail_bidan->NO_TELP_BIDAN?></span></div>
                </li>
                <li>
                    <div class="detail">Pendidikan Terakhir<span class="price"><?php echo $detail_bidan->PENDIDIKAN_TERAKHIR?></span></div>
                </li>
                <li>
                    <div class="detail">Nama Perguruan Tinggi Asal<span class="price"><?php echo $detail_bidan->NAMA_PT?></span></div>
                </li>
            </ul>
            <a href="<?php echo base_url('Management_controller/show_data_bidan')?>"
           class="btn btn-primary waves-effect waves-dark" style="display: block;margin: auto;">Kembali</a></li>
        </div>
    
    <div class="row">
    </div>
</div>