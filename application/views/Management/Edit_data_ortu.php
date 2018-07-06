<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Tambah Data</h2>
            </div>
        </div>
    </div>
</section>
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8">
            <div class="row">
                <script type="text/javascript">
            $(document).ready(function(){
                $('form[id="contactForm"]').validate({
                    rules: {
                        ID_ORANG_TUA: 'required',
                        NAMA_IBU: 'required',
                        NAMA_AYAH: 'required',
                        TGL_LAHIR_IBU: 'required',
                        TGL_LAHIR_AYAH: 'required',
                        PEKERJAAN_IBU: 'required',
                        PEKERJAAN_AYAH: 'required',
                        AGAMA_IBU: 'required',
                        AGAMA_AYAH: 'required',
                        PENDIDIKAN_AKHIR_IBU: 'required',
                        PENDIDIKAN_AKHIR_AYAH: 'required',
                        ALAMAT_IBU: 'required',
                        ALAMAT_AYAH: 'required',
                        NO_TELP_IBU: {
                            required: true,
                            number: true
                        },
                        NO_TELP_AYAH: {
                            required: true,
                            number: true
                        }
                    },
                    messages: {
                        ID_ORANG_TUA: 'Id Orang tua tidak boleh kosong',
                        NAMA_IBU: 'Nama Ibu tidak boleh kosong',
                        NAMA_AYAH: 'Nama Ayah tidak boleh kosong',
                        TGL_LAHIR_IBU: 'Tgl Lahir tidak boleh kosong',
                        TGL_LAHIR_AYAH: 'Tgl Lahir tidak boleh kosong',
                        PEKERJAAN_IBU: 'Pekerjaan Ibu tidak boleh kosong',
                        PEKERJAAN_AYAH: 'Pekerjaan Ayah tidak boleh kosong',
                        AGAMA_IBU: 'Agama Ibu tidak boleh kosong',
                        AGAMA_AYAH: 'Agama Ayah tidak boleh kosong',
                        PENDIDIKAN_AKHIR_IBU: 'Pendidikan Akhir Ibu tidak boleh kosong',
                        PENDIDIKAN_AKHIR_AYAH: 'Pendidikan Akhir Ayah tidak boleh kosong',
                        ALAMAT_IBU: 'Alamat Ibu tidak boleh kosong',
                        ALAMAT_AYAH: 'Alamat Ayah tidak boleh kosong',
                        NO_TELP_IBU: 'No. Telp Ibu tidak boleh kosong',
                        NO_TELP_AYAH: 'No. Telp Ayah tidak boleh kosong'
                    },
                    submitHandler: function(form){
                        form.submit();
                    },
                    errorPlacement: function(error, element){
                        error.css({'margin-left' : 120, 'font-size': 10});
                        error.appendTo(element.parent());
                        // alert(element.parent().children('label').attr("name"));
                        //element.parent().children('label').text(error.text());
                    }
                });
            });
        </script>
                <form method=post name="sentMessage" id="contactForm" action="<?php echo base_url('Management_controller/update_data_ortu');?>" novalidate>
                    <div class="col-sm-12">
                        <div class="input-field">
                            <input type="text" name="ID_ORANG_TUA" class="form-control"
                                   id="ID_ORANG_TUA" required
                                   data-validation-required-message="Isikan ID" value="<?php echo $data_ortu['ID_ORANG_TUA']?>"/>
                            <label> ID </label>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-field">
                            <input type="text" name="NAMA_IBU" class="form-control"
                                   id="NAMA_IBU" required
                                   data-validation-required-message="Isikan nama ibu" value="<?php echo $data_ortu['NAMA_IBU']?>"/>
                            <label> Nama Ibu </label>
                            <p class="help-block"></p>
                        </div>
                        <div>
                            <label> Tanggal Lahir Ibu</label>
                        </div>
                        <div class="input-field">
                            <input type="date" name="TGL_LAHIR_IBU" class="form-control"
                                   id="TGL_LAHIR_IBU" required
                                   data-validation-required-message="Isikan tanggal lahir ibu" value="<?php echo $data_ortu['TGL_LAHIR_IBU']?>"/>
                        </div>
                        <div class="input-field">
                            <input type="text" name="PEKERJAAN_IBU" class="form-control"
                                   id="PEKERJAAN_IBU" required
                                   data-validation-required-message="Isikan pekerjaan ibu" value="<?php echo $data_ortu['PEKERJAAN_IBU']?>"/>
                            <label> Pekerjaan Ibu </label>
                            <p class="help-block"></p>
                        </div>
                        <div class="form-group">
                            <label>Agama Ibu</label>
                            <select name="AGAMA_IBU" class="form-control" id="AGAMA_IBU" required
                                    data-validation-required-message="Isikan pekerjaan ibu">
                                <?php
                                $agama = array(
                                    'Islam' => 'Islam',
                                    'Kristen' => 'Kristen',
                                    'Katolik' => 'Katolik',
                                    'Hindu' => 'Hindu',
                                    'Buddha' => 'Buddha',
                                    'Lainnya' => 'Lainnya',
                                );
                                foreach ($agama as $a) {
                                    if($a == $data_ortu['AGAMA_IBU']){
                                        echo "<option value=\"".$a."\" selected>".$a."</option>";
                                    }else{
                                        echo "<option value=\"".$a."\">".$a."</option>";
                                    }
                                }
                                ?>
                            </select>
                            <p class="help-block"></p>
                        </div>
                        <div class="form-group">
                            <label>Pendidikan Akhir Ibu</label>
                            <select name="PENDIDIKAN_AKHIR_IBU" class="form-control" id="PENDIDIKAN_AKHIR_IBU" required
                                    data-validation-required-message="Isikan pendidikan akhir ibu">
                                <?php
                                $pend_akhir = array(
                                    'SD Sederajat' => 'SD Sederajat',
                                    'SMP Sederajat' => 'SMP Sederajat',
                                    'SMA/SMK/Sederajat' => 'SMA/SMK/Sederajat',
                                    'D3' => 'D3',
                                    'S1' => 'S1',
                                    'S2' => 'S2',
                                    'S3' => 'S3',
                                    'Lainnya' => 'Lainnya'
                                );
                                foreach ($pend_akhir as $pa) {
                                    if($pa == $data_ortu['PENDIDIKAN_AKHIR_IBU']){
                                        echo "<option value=\"".$pa."\" selected>".$pa."</option>";
                                    }else{
                                        echo "<option value=\"".$pa."\">".$pa."</option>";
                                    }
                                }
                                ?>
                                <option value="">Pendidikan Akhir Ibu</option>
                                <option value="SD Sederajat">SD Sederajat</option>
                                <option value="SMP Sederajat">SMP Sederajat</option>
                                <option value="SMA/SMK/Sederajat">SMA/SMK/Sederajat</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                                <option value="Lainnya">Lainnya..</option>
                            </select>
                            <p class="help-block"></p>
                        </div>
                        <div class="input-field">
                             <textarea rows="4" cols="50" required name="ALAMAT_IBU" class="form-control materialize-textarea" id="ALAMAT_IBU"
                                       data-validation-required-message="Isikan alamat ibu"
                                       maxlength="500" style="resize:none"><?php echo $data_ortu['ALAMAT_IBU']?></textarea>
                            <label>   Alamat Ibu </label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="NO_TELP_IBU" class="form-control"
                                   id="NO_TELP_IBU" value="<?php echo $data_ortu['NO_TELP_IBU']?>" required
                                   data-validation-required-message="Isikan no. telepon ibu" />
                            <label> No. Telepon Ibu </label>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-field">
                            <input type="text" name="NAMA_AYAH" class="form-control"
                                   id="NAMA_AYAH" required
                                   data-validation-required-message="Isikan nama ayah" value="<?php echo $data_ortu['NAMA_AYAH']?>"/>
                            <label > Nama Ayah </label>
                            <p class="help-block"></p>
                        </div>
                        <div>
                            <label> Tanggal Lahir Ayah</label>
                        </div>
                        <div class="input-field">
                            <input type="date" name="TGL_LAHIR_AYAH" class="form-control"
                                   id="TGL_LAHIR_AYAH" required
                                   data-validation-required-message="Isikan tanggal lahir ayah" value="<?php echo $data_ortu['TGL_LAHIR_AYAH']?>" />
                            <p class="help-block"></p>
                        </div>
                        <div class="input-field">
                            <input type="text" name="PEKERJAAN_AYAH" class="form-control"
                                   id="PEKERJAAN_AYAH" required
                                   data-validation-required-message="Isikan pekerjaan ayah" value="<?php echo $data_ortu['PEKERJAAN_AYAH']?>"/>
                            <label> Pekerjaan Ayah </label>
                            <p class="help-block"></p>
                        </div>
                        <div class="form-group">
                            <label>Agama Ayah</label>
                            <select name="AGAMA_AYAH" class="form-control" id="AGAMA_AYAH" required
                                    data-validation-required-message="Isikan pekerjaan ayah">
                                <?php
                                $agama = array(
                                    'Islam' => 'Islam',
                                    'Kristen' => 'Kristen',
                                    'Katolik' => 'Katolik',
                                    'Hindu' => 'Hindu',
                                    'Buddha' => 'Buddha',
                                    'Lainnya' => 'Lainnya',
                                );
                                foreach ($agama as $a) {
                                    if($a == $data_ortu['AGAMA_AYAH']){
                                        echo "<option value=\"".$a."\" selected>".$a."</option>";
                                    }else{
                                        echo "<option value=\"".$a."\">".$a."</option>";
                                    }
                                }
                                ?>
                            </select>
                            <p class="help-block"></p>
                        </div>
                        <div class="form-group">
                            <label>Pendidikan Akhir Ayah</label>
                            <select name="PENDIDIKAN_AKHIR_AYAH" class="form-control" id="PENDIDIKAN_AKHIR_AYAH" required
                                    data-validation-required-message="Isikan pendidikan akhir ayah">
                                <?php
                                $pend_akhir = array(
                                    'SD Sederajat' => 'SD Sederajat',
                                    'SMP Sederajat' => 'SMP Sederajat',
                                    'SMA/SMK/Sederajat' => 'SMA/SMK/Sederajat',
                                    'D3' => 'D3',
                                    'S1' => 'S1',
                                    'S2' => 'S2',
                                    'S3' => 'S3',
                                    'Lainnya' => 'Lainnya'
                                );
                                foreach ($pend_akhir as $pa) {
                                    if($pa == $data_ortu['PENDIDIKAN_AKHIR_AYAH']){
                                        echo "<option value=\"".$pa."\" selected>".$pa."</option>";
                                    }else{
                                        echo "<option value=\"".$pa."\">".$pa."</option>";
                                    }
                                }
                                ?>
                            </select>
                            <p class="help-block"></p>
                        </div>
                        <div class="input-field">
                             <textarea rows="4" cols="50" required name="ALAMAT_AYAH" class="form-control materialize-textarea" id="ALAMAT_AYAH"
                                       idation-required-message="Isikan alamat ayah"
                                       maxlength="999" style="resize:none"><?php echo $data_ortu['ALAMAT_AYAH']?></textarea>
                            <label for="name" class="">   Alamat Ayah </label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="NO_TELP_AYAH" class="form-control"
                                   id="NO_TELP_AYAH" required
                                   data-validation-required-message="Isikan no. telepon ayah" value="<?php echo $data_ortu['NO_TELP_AYAH']?>"/>
                            <label for="name" class=""> No. Telepon Ayah </label>
                            <p class="help-block"></p>
                        </div>
                    </div>

                <div id="success"> </div> <!-- For success/fail messages -->
                <div class="row center-block">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary waves-effect waves-dark floatright">Ubah</button>
                    </div>
                    <div class="col-md-6">
                        <a href="<?php echo base_url('Management_controller/show_data_ortu')?>">
                            <button type="button" class="btn btn-primary waves-effect waves-dark floatleft">
                                Kembali
                            </button>
                        </a>
                    </div>
                </div>
            </form>
            </div>
        </div>
        <!--        </div>-->
    </div>
</div>