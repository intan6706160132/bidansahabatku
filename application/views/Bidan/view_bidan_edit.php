<?php
$pd = array('D3','S1','S2','S3');
?>
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Ubah Data bidan</h2>
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
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <form name="sentMessage" id="contactForm" method="post" action="<?php echo base_url('Bidan_controller/update_data_bidan');?>" novalidate>
                <div class="input-field">
                    <input type="text" name="ID_BIDAN" class="form-control"
                           id="id_bidan" required
                           data-validation-required-message="Isikan ID Bidan" value="<?php echo $data_bidan['ID_BIDAN']?>" readonly/>
                    <label for="name" class=""> ID Bidan </label>
                    <p class="help-block"></p>
                </div>
                <div class="input-field">
                    <input type="text" name="NAMA_BIDAN" class="form-control"
                           id="nama_bidan" required
                           data-validation-required-message="Isikan Nama Bidan" value="<?php echo $data_bidan['NAMA_BIDAN']?>" />
                    <label for="name" class=""> Nama Bidan </label>
                    <p class="help-block"></p>
                </div>
                <div class="input-field">
                    <input type="text" name="TEMPAT_LHR_BIDAN" class="form-control"
                           id="tempat_lhr_bidan" required
                           data-validation-required-message="Isikan Tempat Lahir Bidan"
                           value="<?php echo $data_bidan['TEMPAT_LHR_BIDAN']?>" />
                    <label for="name" class=""> Tempat Lahir Bidan </label>
                    <p class="help-block"></p>
                </div>
                <label> Tanggal Lahir Bidan </label>
                <div class="input-field">
                    <input type="date" name="TGL_LHR_BIDAN" class="form-control"
                           id="tgl_lhr_bidan" required
                           data-validation-required-message="Isikan Tempat Lahir Bidan"
                           value="<?php echo $data_bidan['TGL_LHR_BIDAN']?>"/>
                    <p class="help-block"></p>
                </div>
                <div class="input-field">
                    <input type="text" name="ALAMAT_BIDAN" class="form-control"
                           id="alamat_bidan" required
                           data-validation-required-message="Isikan Alamat Bidan" value="<?php echo $data_bidan['ALAMAT_BIDAN']?>"/>
                    <label for="name" class=""> Alamat Bidan </label>
                    <p class="help-block"></p>
                </div>
                <div class="input-field">
                    <input type="text" name="NO_TELP_BIDAN" class="form-control"
                           id="telp_bidan" required
                           data-validation-required-message="Isikan No Telepon Bidan" value="<?php echo $data_bidan['NO_TELP_BIDAN']?>"/>
                    <label for="name" class=""> No Telepon Bidan</label>
                    <p class="help-block"></p>
                </div>

                <div class="form-group">
                    <label>Pendidikan Terakhir</label>
                    <select name="PENDIDIKAN_TERAKHIR" class="form-control" id="PENDIDIKAN_TERAKHIR">
                        <?php
                        foreach ($pd as $p){
                            echo "<option value='$p'";
                            echo $data_bidan['PENDIDIKAN_TERAKHIR']==$p?'selected="selected"':'';
                            echo ">$p</option>";
                        }
                        ?>
                    </select>
                    <p class="help-block"></p>
                </div>
                <div class="input-field">
                    <input type="text" name="NAMA_PT" class="form-control"
                           id="NAMA_PT" required
                           data-validation-required-message="Isikan Nama Pendidikan Asal"
                           value="<?php echo $data_bidan['NAMA_PT']?>" />
                    <label for="name" class="">Nama Perguruan Tinggi Asal</label>
                    <p class="help-block"></p>
                </div>
                <div id="success">
                    <div class="row center-block">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary waves-effect waves-dark floatright">Simpan</button>
                        </div>
                        <div class="col-md-6">
                            <a href="<?php echo base_url('Bidan_controller/show_bidan_view/'.$_SESSION['id_pengguna'])?>">
                                <button type="button" class="btn btn-primary waves-effect waves-dark floatleft">
                                    Kembali
                                </button>
                            </a>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>