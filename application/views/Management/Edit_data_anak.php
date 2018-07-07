<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Ubah Data <?php echo $data_anak['NAMA_ANAK']?></h2>
            </div>
        </div>
    </div>
</section>
<div class="container" style="margin-top: 20px">
    <div class="row">
        <!--        <div class="col-md-6">-->
            <script type="text/javascript">
            $(document).ready(function(){
                $('form[id="contactForm"]').validate({
                    rules: {
                        NO_MEDREG: 'required',
                        ID_ANAK: 'required',
                        NAMA_ANAK: 'required',
                        TEMPAT_LAHIR_ANAK: 'required',
                        TGL_LAHIR: 'required',
                        JK: 'required',
                        BBL: {required: true, number: true},
                        TBL: {required: true, number: true},
                        LK: {required: true, number: true},
                        ANAK_KE: {required: true, number: true},
                        PERSALINAN: 'required',
                        RIWAYAT_MENYUSUI: 'required',
                        RIWAYAT_MAKAN_MINUM: 'required'
                    },
                    messages: {
                        NO_MEDREG: 'No. MedReg tidak boleh kosong',
                        ID_ANAK: 'Id Anak tidak boleh kosong',
                        NAMA_ANAK: 'Nama tidak boleh kosong',
                        TEMPAT_LAHIR_ANAK: 'Tempat lahir tidak boleh kosong',
                        TGL_LAHIR: 'Tgl. lahir tidak boleh kosong',
                        JK: 'Jenis kelamin tidak boleh kosong',
                        BBL: 'Berat badan lahir tidak boleh kosong dan hanya angka',
                        TBL: 'Tinggi badan lahir tidak boleh kosong dan hanya angka',
                        LK: 'Lingkar kepala tidak boleh kosong dan hanya angka',
                        ANAK_KE: 'Urutan anak tidak boleh kosong dan hanya angka',
                        PERSALINAN: 'Proses persalianan harus dipilih',
                        RIWAYAT_MENYUSUI: 'Riwayat menyusui harus dipilih',
                        RIWAYAT_MAKAN_MINUM: 'Riwayat makan dan minum tidak boleh kosong'
                    },
                    submitHandler: function(form){
                        form.submit();
                    },
                    errorPlacement: function(error, element){
                        error.css({'margin-left' : 300, 'font-size': 10});
                        error.appendTo(element.parent());
                        // alert(element.parent().children('label').attr("name"));
                        //element.parent().children('label').text(error.text());
                    }
                });
            });
        </script>
        <form method=post name="sentMessage" id="contactForm" action="<?php echo base_url('Management_controller/update_data_anak');?>" novalidate>
            <div class="col-sm-12">
                <div class="input-field" hidden>
                    <input type="text" name="ID_ORANG_TUA" class="form-control"
                           id="ID_ORANG_TUA" required
                           data-validation-required-message="Isikan ID" value="<?php echo $data_anak['ID_ORANG_TUA']?>"/>
                    <label> ID </label>
                    <p class="help-block"></p>
                </div>
                <div>
                    <label> ID </label>
                </div>
                <div class="input-field">
                    <input type="text" name="ID_ANAK" class="form-control"
                           id="ID_ANAK" required
                           data-validation-required-message="Isikan ID" value="<?php echo $data_anak['ID_ANAK']?>" readonly/>
                    <p class="help-block"></p>
                </div>
                <div>
                    <label> Nama Anak </label>
                </div>
                <div class="input-field">
                    <input type="text" name="NAMA_ANAK" class="form-control"
                           id="NAMA_ANAK" required
                           data-validation-required-message="Isikan nama anak" value="<?php echo $data_anak['NAMA_ANAK']?>"/>
                    <p class="help-block"></p>
                </div>
                <div>
                    <label> Tempat Lahir </label>
                </div>
                <div class="input-field">
                    <input type="text" name="TEMPAT_LAHIR_ANAK" class="form-control"
                           id="TEMPAT_LAHIR_ANAK" required
                           data-validation-required-message="Isikan tempat lahir anak" value="<?php echo $data_anak['TEMPAT_LAHIR_ANAK']?>"/>
                    <p class="help-block"></p>
                </div>
                <div>
                    <label> Tanggal Lahir</label>
                </div>
                <div class="input-field">
                    <input type="date" name="TGL_LAHIR" class="form-control"
                           id="TGL_LAHIR" required
                           data-validation-required-message="Isikan tanggal lahir anak" value="<?php echo $data_anak['TGL_LAHIR']?>"/>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="JK" class="form-control" id="JK" required
                            data-validation-required-message="Isikan jenis kelamin anak">
                        <?php
                        $jk = array(
                            'Laki-laki' => 'Laki-laki',
                            'Perempuan' => 'Perempuan',
                        );
                        foreach ($jk as $j) {
                            if($j == $data_anak['JK']){
                                echo "<option value=\"".$j."\" selected>".$j."</option>";
                            }else{
                                echo "<option value=\"".$j."\">".$j."</option>";
                            }
                        }
                        ?>
                    </select>
                    <p class="help-block"></p>
                </div>
                <div>
                    <label> Berat Badan Lahir (gram)</label>
                </div>
                <div class="input-field">
                    <input type="text" name="BBL" class="form-control"
                           id="BBL" required
                           data-validation-required-message="Isikan berat badan anak" value="<?php echo $data_anak['BBL']?>"/>
                    <p class="help-block"></p>
                </div>
                <div>
                    <label> Tinggi Badan Lahir (cm)</label>
                </div>
                <div class="input-field">
                    <input type="text" name="TBL" class="form-control"
                           id="TBL" required
                           data-validation-required-message="Isikan tinggi badan anak" value="<?php echo $data_anak['TBL']?>"/>
                    <p class="help-block"></p>
                </div>
                <div>
                    <label> Lingkar Kepala (cm)</label>
                </div>
                <div class="input-field">
                    <input type="text" name="LK" class="form-control"
                           id="LK" required
                           data-validation-required-message="Isikan lingkar kepala anak" value="<?php echo $data_anak['LK']?>" />
                    <p class="help-block"></p>
                </div>
                <div class="form-group">
                    <label>Proses Persalinan</label>
                    <select name="PERSALINAN" class="form-control" id="PERSALINAN" required
                            data-validation-required-message="Isikan proses persalinan">
                        <?php
                        $jk = array(
                            'Spontan' => 'Spontan',
                            'Operasi' => 'Operasi',
                        );
                        foreach ($jk as $j) {
                            if($j == $data_anak['JK']){
                                echo "<option value=\"".$j."\" selected>".$j."</option>";
                            }else{
                                echo "<option value=\"".$j."\">".$j."</option>";
                            }
                        }
                        ?>
                    </select>
                    <p class="help-block"></p>
                </div>
                <div class="form-group">
                    <label>Riwayat Menyusui</label>
                    <select name="RIWAYAT_MENYUSUI" class="form-control" id="RIWAYAT_MENYUSUI" required
                            data-validation-required-message="Isikan riwayat menyusui">
                        <?php
                        $riwayat = array(
                            'Asi Ekslusif' => 'Asi Ekslusif',
                            'Susu Formula' => 'Susu Formula',
                            'Asi + Sufor' => 'Asi + Sufor',
                        );
                        foreach ($riwayat as $rm) {
                            if($rm == $data_anak['RIWAYAT_MENYUSUI']){
                                echo "<option value=\"".$rm."\" selected>".$rm."</option>";
                            }else{
                                echo "<option value=\"".$rm."\">".$rm."</option>";
                            }
                        }
                        ?>
                    </select>
                    <p class="help-block"></p>
                </div>
                <div>
                    <label> Riwayat Menyusui </label>
                </div>
                <div class="input-field">
                    <input type="text" name="RIWAYAT_MENYUSUI" class="form-control"
                           id="RIWAYAT_MENYUSUI" required
                           data-validation-required-message="Isikan riwayat menyusui" value="<?php echo $data_anak['RIWAYAT_MENYUSUI']?>" />

                    <p class="help-block"></p>
                </div>
                <div>
                    <label> Riwayat Makan dan Minum </label>
                </div>
                <div class="input-field">
                    <input type="text" name="RIWAYAT_MAKAN_MINUM" class="form-control"
                           id="RIWAYAT_MAKAN_MINUM" required
                           data-validation-required-message="Isikan riwayat makan dan minum anak" value="<?php echo $data_anak['RIWAYAT_MAKAN_MINUM']?>"/>
                    <p class="help-block"></p>
                </div>
            </div>
            <div id="success"> </div> <!-- For success/fail messages -->
            <div class="row center-block">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary waves-effect waves-dark floatright">Tambahkan</button>
                </div>
                <div class="col-md-6">
                    <a href="<?php echo base_url('Management_controller/show_detail_ortu/'.$data_anak['ID_ORANG_TUA'])?>">
                        <button type="button" class="btn btn-primary waves-effect waves-dark floatleft">
                            Kembali
                        </button>
                    </a>
                </div>
            </div>
        </form>
        <!--        </div>-->
    </div>
</div>