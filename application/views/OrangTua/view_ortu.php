<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Data Orang Tua</h2>
            </div>
        </div>
    </div>
</section>
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-6 menuItem">
            <ul class="menu">
                <li>
                    Identitas Ibu
                </li><li>
                    <div class="detail">Nama Ibu<span class="price"><?php echo ucwords($detail_ortu->NAMA_IBU)?></span></div>
                </li><li>
                    <div class="detail">Tanggal Lahir Ibu<span class="price"><?php echo $detail_ortu->TGL_LAHIR_IBU?></span></div>
                </li><li>
                    <div class="detail">Pekerjaan Ibu<span class="price"><?php echo ucwords($detail_ortu->PEKERJAAN_IBU)?></span></div>
                </li><li>
                    <div class="detail">Agama Ibu<span class="price"><?php echo ucwords($detail_ortu->AGAMA_IBU)?></span></div>
                </li><li>
                    <div class="detail">Pendidikan Terakhir Ibu<span class="price"><?php echo ucwords($detail_ortu->PENDIDIKAN_AKHIR_IBU)?></span></div>
                </li><li>
                    <div class="detail">No. Telepon/HP Ibu<span class="price"><?php echo $detail_ortu->NO_TELP_IBU?></span></div>
                </li>
            </ul>
        </div>
        <div class="col-md-6 menuItem">
            <ul class="menu">
                <li>
                    Identitas Ayah
                </li><li>
                    <div class="detail">Nama Ayah<span class="price"><?php echo ucwords($detail_ortu->NAMA_AYAH)?></span></div>
                </li><li>
                    <div class="detail">Tanggal Lahir Ayah<span class="price"><?php echo $detail_ortu->TGL_LAHIR_AYAH?></span></div>
                </li><li>
                    <div class="detail">Pekerjaan Ayah<span class="price"><?php echo ucwords($detail_ortu->PEKERJAAN_AYAH)?></span></div>
                </li><li>
                    <div class="detail">Agama Ayah<span class="price"><?php echo ucwords($detail_ortu->AGAMA_AYAH)?></span></div>
                </li><li>
                    <div class="detail">Pendidikan Terakhir Ayah<span class="price"><?php echo ucwords($detail_ortu->PENDIDIKAN_AKHIR_AYAH)?></span></div>
                </li><li>
                    <div class="detail">No. Telepon/HP Ayah<span class="price"><?php echo $detail_ortu->NO_TELP_AYAH?></span></div>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <a href="<?php echo base_url('Ortu_controller/show_edit_ortu_view/'.$_SESSION['id_pengguna'])?>"
           class="btn btn-primary waves-effect waves-dark" style="float: right;
           margin-right: 550px;">Ubah</a></li>
    </div>
</div>