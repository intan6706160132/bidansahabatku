<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Edit Data Pelayanan</h2>
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
                <form method=post name="sentMessage" id="contactForm" action="<?php echo base_url('Layanan_controller/update_data_pelayanan');?>" novalidate>
                    <div class="col-sm-12">
	                    <div class="form-group">
							<label>Tanggal Kunjugan</label>
							<input class="form-control" type="date" name="tglkunjung" value="<?php echo $data_pela['TGL_KUNJUNGAN']?>"/>
						</div>
						<div class="form-group">
							<label>Keadaan Umum </label>
							<input class="form-control" type="text" name="kead" placeholder="Masukkan Keterangan" value="<?php echo $data_pela['KEADAAN_UMUM']?>"/>
						</div>
						<div class="form-group">
							<label>Suhu </label>
							<input class="form-control" type="text" name="suh" placeholder="Masukkan Suhu" value="<?php echo $data_pela['SUHU']?>"/>
						</div>
						<div class="form-group">
							<label>Respirasi</label>
		                    <select name="res" class="form-control" id="res">
		                        <option value="Y">Normal</option>
		                        <option value="T">Tidak Normal</option>
		                    </select>
<!-- 							<input class="form-control" type="text" name="res" placeholder="Masukkan Respirasi"/> -->
						</div>
						<div class="form-group">
							<label>Jantung</label>
		                    <select name="jan" class="form-control" id="jan">
		                        <option value="Y">Normal</option>
		                        <option value="T">Tidak Normal</option>
		                    </select>
<!-- 							<input class="form-control" type="text" name="jan" placeholder="Masukkan Jantung"/> -->
						</div>
						<div class="form-group">
							<label>BB </label>
							<input class="form-control" type="text" name="bb" placeholder="Masukkan BB" value="<?php echo $data_pela['BB']?>"/>
						</div>
						<div class="form-group">
							<label>TB </label>
							<input class="form-control" type="text" name="tb" placeholder="Masukkan TB" value="<?php echo $data_pela['TB']?>"/>
						</div>
						<div class="form-group">
							<label>LK </label>
							<input class="form-control" type="text" name="lk" placeholder="Masukkan LK" value="<?php echo $data_pela['LK']?>"/>
						</div>
						<div class="form-group">
							<label>KPSP </label>
							<input class="form-control" type="text" name="kpsp" placeholder="Masukkan KPSP" value="<?php echo $data_pela['KPSP']?>"/>
						</div>
						<div class="form-group">
							<label>Tindankan </label>
							<input class="form-control" type="text" name="tin" placeholder="Masukkan Tindakan" value="<?php echo $data_pela['TINDAKAN']?>"/>
						</div>
						<input type="hidden" value="<?php echo $_SESSION['id_pengguna']?>" name="idbid" />
						<input type="hidden" value="<?php echo $data_pela['NO_MEDREG']?>" name="nomed" />
                    </div>
                       
                <div id="success"> </div> <!-- For success/fail messages -->
                <div class="row center-block">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary waves-effect waves-dark floatright">Ubah</button>
                    </div>
                    <div class="col-md-6">
                        <a href="<?php echo base_url('Layanan_controller/show_data_layanan_bayi')?>">
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