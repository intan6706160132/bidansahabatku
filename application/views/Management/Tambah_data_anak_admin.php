<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Tambah Data Anak</h2>
            </div>
        </div>
    </div>
</section>
<div class="container" style="margin-top: 20px">
    <div class="row">
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
        <form method=post name="sentMessage" id="contactForm" action="<?php echo base_url('Management_controller/tambah_data_anak');?>" novalidate>
            <div class="col-sm-12" style="border-bottom: 1px">
                <div class="input-field" hidden>
                    <input type="text" name="ID_ORANG_TUA" class="form-control"
                           id="ID_ORANG_TUA" required
                           data-validation-required-message="Isikan ID" value="<?php echo $data_ortu['ID_ORANG_TUA']?>"/>
                    <p class="help-block"></p>
                </div>
                <div class="input-field" hidden>
                    <input type="text" name="ID_ANAK" class="form-control"
                           id="ID_ANAK" required
                           data-validation-required-message="Isikan ID" value="<?php echo $id_anak?>"/>
                    <p class="help-block"></p>
                </div>
                <div class="input-field">
                    <input type="text" name="NO_MEDREG" class="form-control"
                           id="NO_MEDREG" required
                           data-validation-required-message="Isikan No Medreg" />
                    <label for="name" class=""> No Medreg </label>
                    <p class="help-block"></p>
                </div>
                <div class="input-field">
                    <input type="text" name="NAMA_ANAK" class="form-control"
                           id="NAMA_ANAK" required
                           data-validation-required-message="Isikan nama anak" />
                    <label for="name" class=""> Nama Anak </label>
                    <p class="help-block"></p>
                </div>
                <div class="input-field">
                    <input type="text" name="TEMPAT_LAHIR_ANAK" class="form-control"
                           id="TEMPAT_LAHIR_ANAK" required
                           data-validation-required-message="Isikan tempat lahir anak" />
                    <label for="name" class=""> Tempat Lahir </label>
                    <p class="help-block"></p>
                </div>
                <div>
                    <label> Tanggal Lahir</label>
                </div>
                <div class="input-field">
                    <input type="date" name="TGL_LAHIR" class="form-control"
                           id="TGL_LAHIR" required
                           data-validation-required-message="Isikan tanggal lahir anak" />
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="JK" class="form-control" id="JK" required
                            data-validation-required-message="Isikan jenis kelamin anak">
                        <option value="">Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <p class="help-block"></p>
                </div>
                <div class="input-field">
                    <input type="text" name="BBL" class="form-control"
                           id="BBL" required
                           data-validation-required-message="Isikan berat badan anak" />
                    <label for="name" class=""> Berat Badan Lahir (gram) </label>
                    <p class="help-block"></p>
                </div>
                <div class="input-field">
                    <input type="text" name="TBL" class="form-control"
                           id="TBL" required
                           data-validation-required-message="Isikan tinggi badan anak" />
                    <label for="name" class=""> Tinggi Badan Lahir (cm) </label>
                    <p class="help-block"></p>
                </div>
                <div class="input-field">
                    <input type="text" name="LK" class="form-control"
                           id="LK" required
                           data-validation-required-message="Isikan lingkar kepala anak" />
                    <label for="name" class=""> Lingkar Kepala Lahir (cm) </label>
                    <p class="help-block"></p>
                </div>
                <div class="input-field">
                    <input type="text" name="ANAK_KE" class="form-control"
                           id="ANAK_KE" required
                           data-validation-required-message="" />
                    <label for="name" class=""> Anak Ke </label>
                    <p class="help-block"></p>
                </div>
                <div class="form-group">
                    <label>Proses Persalinan</label>
                    <select name="PERSALINAN" class="form-control" id="PERSALINAN" required
                            data-validation-required-message="Isikan proses persalinan">
                        <option value="">Proses Persalinan</option>
                        <option value="Spontan">Spontan</option>
                        <option value="Operasi">Operasi</option>
                    </select>
                    <p class="help-block"></p>
                </div>
                <div class="form-group">
                    <label>Riwayat Menyusui</label>
                    <select name="RIWAYAT_MENYUSUI" class="form-control" id="RIWAYAT_MENYUSUI" required
                            data-validation-required-message="Isikan riwayat menyusui">
                        <option value="">Riwayat Menyusui</option>
                        <option value="Asi Ekslusif">Asi Eksklusif</option>
                        <option value="Susu Formula">Susu Formula</option>
                        <option value="Asi + Sufor">Asi + Sufor</option>
                    </select>
                    <p class="help-block"></p>
                </div>
                <div class="input-field">
                    <input type="text" name="RIWAYAT_MAKAN_MINUM" class="form-control"
                           id="RIWAYAT_MAKAN_MINUM" required
                           data-validation-required-message="Isikan riwayat makan dan minum anak" />
                    <label for="name" class=""> Riwayat Makan dan Minum </label>
                    <p class="help-block"></p>
                </div>
            </div>
            <div id="success"> </div> <!-- For success/fail messages -->
            <div class="row center-block">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary waves-effect waves-dark floatright">Tambahkan</button>
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
        <!--        </div>-->
    </div>
</div>