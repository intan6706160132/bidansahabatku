    
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Detail User <?php
            if($data_user['STATUS_USER'] == "bidan" || $data_user['STATUS_USER'] == "admin"){
                echo $data_user['NAMA_BIDAN'];
            }else{
                echo $data_user['NAMA_IBU']." / ".$data_user['NAMA_AYAH'];
            }
        ?></h2>
            </div>
        </div>
    </div>
</section>
<title>Detail User 
    <?php
        if($data_user['STATUS_USER'] == "bidan" || $data_user['STATUS_USER'] == "admin"){
            echo $data_user['NAMA_BIDAN'];
        }else{
            echo $data_user['NAMA_IBU']." / ".$data_user['NAMA_AYAH'];
        }
    ?></title>
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 menuItem">
            <ul class="menu">
                <li>
                    Data User
                </li>
                <li>
                    <div class="detail">ID User<span class="price"><?php echo $data_user['ID_USER']?></span></div>
                </li>
                <li>
                    <div class="detail">Username<span class="price"><?php echo $data_user['USERNAME']?></span></div>
                </li>
                <li>
                    <div class="detail">Password<span class="price"><?php echo $data_user['PASSWORD']?></span></div>
                </li>
                <li>
                    <div class="detail">Status User<span class="price">
                        <?php if($data_user['STATUS_USER'] == "ortu")echo "Orang tua";
                              else if($data_user['STATUS_USER'] == "admin") echo "admin";
                              else if($data_user['STATUS_USER'] == "bidan") echo "bidan";?></span>
                    </div>
                </li>
                <li>
                    <a href="<?php echo base_url('User_controller/edit_user/'.$data_user['ID_USER'])?>"
                    class="btn btn-primary" style="float: right; width: auto;">Edit Data User</a>
                </li>
                <li>
                    <?php if($data_user['STATUS_USER'] == "bidan" || $data_user['STATUS_USER'] == "admin"){
                        echo "Data Bidan";
                        ?>
                </li>
                <li>
                    <div class="detail">Nama Bidan<span class="price"><?php echo $data_user['NAMA_BIDAN'];?></span></div>
                </li>
                <li>
                    <div class="detail">Tempat, Tanggal Lahir<span class="price"><?php echo $data_user['TEMPAT_LHR_BIDAN']?>, <?php echo $data_user['TGL_LHR_BIDAN']?></span></div>
                </li>
                <li>
                    <div class="detail">Alamat Bidan<span class="price"><?php echo $data_user['ALAMAT_BIDAN']?></span></div>
                </li>
                <li>
                    <div class="detail">No. Telepon Bidan<span class="price"><?php echo $data_user['NO_TELP_BIDAN']?></span></div>
                </li>
                <li>
                    <div class="detail">Pendidikan Terakhir<span class="price"><?php echo $data_user['PENDIDIKAN_TERAKHIR']?></span></div>
                </li>
                <li>
                    <div class="detail">Nama Perguruan Tinggi Asal<span class="price"><?php echo $data_user['NAMA_PT']?></span></div>
                </li>
                <li style="">
                    <a href="<?php echo base_url('Management_controller/show_edit_bidan/'.$data_user['ID_PENGGUNA'])?>"
                    class="btn btn-primary" style="float: right; width: auto;">Edit Data Bidan</a>
                </li>
                <?php }
                else{ 
                    echo "Data Orang Tua";?>
                </li>
                <li>
                    <div class="detail">Nama Ibu<span class="price"><?php echo $data_user['NAMA_IBU'];?></span></div>
                </li>
                <li>
                    <div class="detail">Tanggal Lahir Ibu<span class="price"><?php echo $data_user['TGL_LAHIR_IBU']?></span></div>
                </li>
                <li>
                    <div class="detail">Alamat Ibu<span class="price"><?php echo $data_user['ALAMAT_IBU']?></span></div>
                </li>
                <li>
                    <div class="detail">Nama Ayah<span class="price"><?php echo $data_user['NAMA_AYAH'];?></span></div>
                </li>
                <li>
                    <div class="detail">Tanggal Lahir Ayah<span class="price"><?php echo $data_user['TGL_LAHIR_AYAH']?></span></div>
                </li>
                <li>
                    <div class="detail">Alamat Ayah<span class="price"><?php echo $data_user['ALAMAT_AYAH']?></span></div>
                </li>
                <li style="">
                    <a href="<?php echo base_url('Management_controller/show_edit_ortu/'.$data_user['ID_PENGGUNA'])?>"
                    class="btn btn-primary" style="float: right; width: auto;">Edit Data Orang Tua</a>
                </li>
                <?php }?>
            </ul>
            <a href="<?php echo base_url('User_controller/Show_data_user/')?>"
           class="col-md-offset-5 btn btn-primary waves-effect waves-dark">Kembali</a></li>
        </div>
    </div>
    <div class="row">
    </div>
</div>





<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a>
</body>
