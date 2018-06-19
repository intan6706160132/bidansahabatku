<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Tambah Data</h2>
            </div>
        </div>
    </div>
</section>
<body>
<div class="container" style="margin-top: 20px">
    <div class="row">
        <form method=post name="sentMessage" id="contactForm" action="<?php echo base_url('Management_controller/tambah_data_reg');?>" novalidate>
            <div class="col-sm-12">
                <div class="input-field">
                    <input type="text" name="NO_MEDREG" class="form-control"
                           id="NO_MEDREG" required
                           data-validation-required-message="Isikan no register medik" />
                    <label for="name" class=""> No Register Medik </label>
                    <p class="help-block"></p>
                </div>
                <div class="form-group">
                    <label>Nama Pengkaji</label>
                    <select name="ID_BIDAN" class="form-control" id="ID_BIDAN" required
                            data-validation-required-message="Pilih bidan">
                        <option value="">Pilih Bidan</option>
                        <?php
                            foreach ($data_bidan as $bidan){?>
                                <option value="<?php $bidan['ID_BIDAN']?>"><?php echo $bidan['NAMA_BIDAN']?></option>

                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Anak</label>
                    <select name="ID_ANAK" class="form-control" id="ID_ANAK" required
                            data-validation-required-message="Pilih anak">
<!--                        <option value="">Pilih Anak</option>-->
                        <?php
                        if(isset($data_anak)) {
                            foreach ($data_anak as $anak) {
                                ?>
                                <option value="<?php $anak['ID_ANAK'] ?>"><?php echo $anak['NAMA_ANAK'] ?></option>
                            <?php }
                        }?>
                    </select>
                </div>
                <div>
                    <label> Tanggal Registrasi</label>
                </div>
                <?php
                    $day = date("Y-m-d");
                    date_default_timezone_set('Asia/Jakarta');
                    $time = date("h:i");
                ?>
                <div class="input-field">
                    <input type="date" name="TANGGAL_KAJIAN" value="<?php echo $day; ?>" class="form-control"
                           id="TANGGAL_KAJIAN" required
                           data-validation-required-message="Isikan tanggal registrasi kajian" />
                </div>
                <div class="input-field">
                    <input type="time" name="JAM" value="<?php echo $time; ?>" class="form-control"
                           id="JAM" required
                           data-validation-required-message="Isikan jam" />
                </div>
            </div>
            <div id="success"> </div> <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary waves-effect waves-dark pull-right">Tambahkan</button><br />
        </form>
        <!--        </div>-->
    </div>
</div>