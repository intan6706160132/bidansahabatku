
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
        <!--        <div class="col-md-6">-->
        <form method=post name="sentMessage" id="contactForm" action="<?php echo base_url('Management_controller/tambah_data_ortu');?>" novalidate>
            <div class="col-sm-12">
                <div class="col-sm-12">
                    <div class="input-field">
                        <input type="text" name="ID_ORANG_TUA" class="form-control"
                               id="ID_ORANG_TUA" required
                               data-validation-required-message="Isikan ID" />
                        <label for="name" class=""> ID </label>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-field">
                        <input type="text" name="NAMA_IBU" class="form-control"
                               id="NAMA_IBU" required
                               data-validation-required-message="Isikan nama ibu" />
                        <label for="name" class=""> Nama Ibu </label>
                        <p class="help-block"></p>
                    </div>
                    <div>
                        <label> Tanggal Lahir Ibu</label>
                    </div>
                    <div class="input-field">
                        <input type="date" name="TGL_LAHIR_IBU" class="form-control"
                               id="TGL_LAHIR_IBU" required
                               data-validation-required-message="Isikan tanggal lahir ibu" />
                    </div>
                    <div class="input-field">
                        <input type="text" name="PEKERJAAN_IBU" class="form-control"
                               id="PEKERJAAN_IBU" required
                               data-validation-required-message="Isikan pekerjaan ibu" />
                        <label for="name" class=""> Pekerjaan Ibu </label>
                        <p class="help-block"></p>
                    </div>
                    <div class="form-group">
                        <label>Agama Ibu</label>
                        <select name="AGAMA_IBU" class="form-control" id="AGAMA_IBU" required
                                data-validation-required-message="Isikan pekerjaan ibu">
                            <option value="">Agama Ibu</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Lainnya">Lainnya..</option>
                        </select>
                        <p class="help-block"></p>
                    </div>
                    <div class="form-group">
                        <label>Pendidikan Akhir Ibu</label>
                        <select name="PENDIDIKAN_AKHIR_IBU" class="form-control" id="PENDIDIKAN_AKHIR_IBU" required
                                data-validation-required-message="Isikan pendidikan akhir ibu">
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
                                   idation-required-message="Isikan alamat ibu"
                                   maxlength="500" style="resize:none"></textarea>
                        <label for="name" class="">   Alamat Ibu </label>
                    </div>
                    <div class="input-field">
                        <input type="text" name="NO_TELP_IBU" class="form-control"
                               id="NO_TELP_IBU" required
                               data-validation-required-message="Isikan no. telepon ibu" />
                        <label for="name" class=""> No. Telepon Ibu </label>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-field">
                        <input type="text" name="NAMA_AYAH" class="form-control"
                               id="NAMA_AYAH" required
                               data-validation-required-message="Isikan nama ayah" />
                        <label for="name" class=""> Nama Ayah </label>
                        <p class="help-block"></p>
                    </div>
                    <div>
                        <label> Tanggal Lahir Ayah</label>
                    </div>
                    <div class="input-field">
                        <input type="date" name="TGL_LAHIR_AYAH" class="form-control"
                               id="TGL_LAHIR_AYAH" required
                               data-validation-required-message="Isikan tanggal lahir ayah" />
                        <p class="help-block"></p>
                    </div>
                    <div class="input-field">
                        <input type="text" name="PEKERJAAN_AYAH" class="form-control"
                               id="PEKERJAAN_AYAH" required
                               data-validation-required-message="Isikan pekerjaan ayah" />
                        <label for="name" class=""> Pekerjaan Ayah </label>
                        <p class="help-block"></p>
                    </div>
                    <div class="form-group">
                        <label>Agama Ayah</label>
                        <select name="AGAMA_AYAH" class="form-control" id="AGAMA_AYAH" required
                                data-validation-required-message="Isikan pekerjaan ayah">
                            <option value="">Agama Ayah</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Lainnya">Lainnya..</option>
                        </select>
                        <p class="help-block"></p>
                    </div>
                    <div class="form-group">
                        <label>Pendidikan Akhir Ayah</label>
                        <select name="PENDIDIKAN_AKHIR_AYAH" class="form-control" id="PENDIDIKAN_AKHIR_AYAH" required
                                data-validation-required-message="Isikan pendidikan akhir ayah">
                            <option value="">Pendidikan Akhir Ayah</option>
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
                         <textarea rows="4" cols="50" required name="ALAMAT_AYAH" class="form-control materialize-textarea" id="ALAMAT_AYAH"
                                   idation-required-message="Isikan alamat ayah"
                                   maxlength="999" style="resize:none"></textarea>
                        <label for="name" class="">   Alamat Ayah </label>
                    </div>
                    <div class="input-field">
                        <input type="text" name="NO_TELP_AYAH" class="form-control"
                               id="NO_TELP_AYAH" required
                               data-validation-required-message="Isikan no. telepon ayah" />
                        <label for="name" class=""> No. Telepon Ayah </label>
                        <p class="help-block"></p>
                    </div>
                </div>
            </div>
            <div id="success"> </div> <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary waves-effect waves-dark pull-right">Tambahkan</button><br />
        </form>
        <!--        </div>-->
    </div>
</div>