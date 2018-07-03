<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Detail Identitas Dan <?php if($title =="pelayanan") echo "Pelayanan"; else if($title =="imunisasi") echo "Imunisasi" ?> Bayi <?php echo ucwords($detail_anak->NAMA_ANAK)?></h2>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready( function () {
        
        $('#table').DataTable({
        });

    });
    
</script>
<style type="text/css">
	.table{

	}
	.modal{
		max-height: 100%;
		width: 100%;
		background-color: rgba(0, 0, 0, 0);
		box-shadow: none;
		overflow-y: auto;
	}
</style>
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-6 menuItem" style="margin-left: 280px
        @media only screen and (max-width: 600px) {
                margin-left: 0px;
        }">
            <ul class="menu">
                <li>
                    Identitas Anak
                </li><li>
                    <div class="detail">Tanggal Pengkajian<span class="price"><?php echo $data_kajian->TANGGAL_KAJIAN?></span></div>
                </li><li>
                    <div class="detail">JAM<span class="price"><?php echo $data_kajian->JAM?></span></div>
                </li><li>
                    <div class="detail">Nama Anak<span class="price"><?php echo ucwords($detail_anak->NAMA_ANAK)?></span></div>
                </li><li>
                    <div class="detail">Tempat dan Tanggal Lahir Anak<span class="price"><?php echo ucwords($detail_anak->TEMPAT_LAHIR_ANAK)?>, <?php echo $detail_anak->TGL_LAHIR?></span></div>
                </li><li>
                    <div class="detail">Jenis Kelamin<span class="price"><?php echo ucwords($detail_anak->JK)?></span></div>
                </li><li>
                    <div class="detail">Berat Badan Lahir<span class="price"><?php echo $detail_anak->BBL?></span></div>
                </li><li>
                    <div class="detail">Tinggi Badan Lahir<span class="price"><?php echo $detail_anak->TBL?></span></div>
                </li><li>
                    <div class="detail">Lingkar Kepala<span class="price"><?php echo $detail_anak->LK?></span></div>
                </li><li>
                    <div class="detail">Proses Persalinan<span class="price"><?php echo ucwords($detail_anak->PERSALINAN)?></span></div>
                </li><li>
                    <div class="detail">Riwayat Menyusui<span class="price"><?php echo ucwords($detail_anak->RIWAYAT_MENYUSUI)?></span></div>
                </li><li>
                    <div class="detail">Riwayat Makan dan Minum<span class="price"><?php echo ucwords($detail_anak->RIWAYAT_MAKAN_MINUM)?></span></div>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
	    <?php if($title == "pelayanan") { ?>
	    <div class="col-md-12">
        	<div style="overflow-x: auto;">
	    	<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
	            <thead>
		            <tr>
		                <th style="text-align: center;">No.</th>
		                <th style="text-align: center;">Tanggal</th>
		                <th style="text-align: center;">Keadaan Umum</th>
		                <th style="text-align: center;">Suhu</th>
		                <th style="text-align: center;">Respirasi</th>
		                <th style="text-align: center;">Jantung</th>
		                <th style="text-align: center;">BB</th>
		                <th style="text-align: center;">TB</th>
		                <th style="text-align: center;">LK</th>
		                <th style="text-align: center;">KPSP</th>
		                <th style="text-align: center;">TINDAKAN</th>
		                <?php 
			                if($_SESSION['status'] == "ortu")
			                	echo "";
			                else 
			                	echo"<th style='text-align: center;'>AKSI</th>";
		                ?>
<!-- 		                <th style="text-align: center;">AKSI</th> -->
		            </tr>
	            </thead>
	            <tbody>
	                <?php
	                	if(isset($data_pelayanan)){
							$i = 1;
							$temp = 0;
							$temp2 = 0;
							$temp3 = 0;
							foreach ($data_pelayanan as $row) {			
					?>
		                    	<tr>
			                        <td style="text-align: center;"><?php echo $i;?></td>
			                        <td style="text-align: center;"><?php echo $row['TGL_KUNJUNGAN'];?></td>
			                        <td style="text-align: center;"><?php echo $row['KEADAAN_UMUM'];?></td>
			                        <td style="text-align: center;"><?php echo $row['SUHU'];?></td>
			                        <td style="text-align: center;"><?php if($row['RESPIRASI'] == 'Y') echo "Normal"; elseif($row['RESPIRASI'] == 'T') echo "Tidak Normal"; else echo "-";?></td>
			                        <td style="text-align: center;"><?php if($row['JANTUNG'] == 'Y') echo "Normal"; elseif($row['JANTUNG'] == 'T') echo "Tidak Normal"; else echo "-";?></td>
			                        <td style="text-align: center;<?php if($temp > $row['BB'] && $i != 1) echo " color: red"; elseif($temp < $row['BB']  && $i != 1) echo " color: green"; else echo " color: yellow"; ?>"><?php echo $row['BB']." kg"; $temp = $row['BB'];?></td>
			                        <td style="text-align: center;<?php if($temp2 > $row['BB'] && $i != 1) echo " color: red"; elseif($temp2 < $row['BB']  && $i != 1) echo " color: green"; else echo " color: yellow"; ?>"><?php echo $row['TB']." cm";  $temp2 = $row['TB'];?></td>
			                        <td style="text-align: center;<?php if($temp3 > $row['BB'] && $i != 1) echo " color: red"; elseif($temp3 < $row['BB']  && $i != 1) echo " color: green"; else echo " color: yellow"; ?>"><?php echo $row['LK']." cm";  $temp3 = $row['LK'];?></td>
			                        <td style="text-align: center;"><?php echo $row['KPSP'];?></td>
			                        <td style="text-align: center;"><?php echo $row['TINDAKAN'];?></td>
			                        <?php 
						                if($_SESSION['status'] == "ortu")
						                	echo "";
						                else{
						            ?>
			                        <td style="text-align: center;">
<!-- 				                        <a href="<?php //echo base_url('Layanan_controller/show_edit_pelayanan_bayi/'.$row['ID_PELAYANAN'])?>" class="btn-table" title="Edit"><span class="fa fa-edit" aria-hidden="true"></span> -->
				                        <a href="<?php echo base_url('Layanan_controller/delete_pelayanan_bayi/'.$id_anak.'/'.$row['ID_PELAYANAN'])?>" class="btn-table" title="Hapus"><span class="fa fa-trash-o" aria-hidden="true"></span>
					                </td>
					                <?php } ?>
					                
		                    	</tr>
	                  
					<?php 		$i++;
							}
	                    }
	                ?>
<!-- 	                <tr><td colspan="10" style="text-align: center;"><a data-toggle="modal" data-target="#exampleModalLong" class="btn btn-primary waves-effect waves-dark">Tambah Data</a></td></tr> -->
	            </tbody>
			</table>
			</div>
		</div>
		<?php }else if($title == "imunisasi"){ ?>
		<div class="col-md-12">
	        <?php
	        	$imunisasi = array(
                    "HB_0",
                    "BCG",
                    "POLIO_1",
                    "POLIO_2",
                    "POLIO_3",
                    "POLIO_4",
                    "PENTABIO_1",
                    "PENTABIO_2",
                    "PENTABIO_3",
                    "PENTABIO_4",
                    "MR"
	            );
	            $tgl_imunisasi = "";
	            $aksi = "";
	            $row ="";
	            foreach ($imunisasi as $key) {
	                if($data_imunisasi[$key] == NULL){
	                    $row.= "<tr>
	                    			<td>".$key."</td>
	                    			<td> - </td>
	                    			<td><a class=\"addImunisasi\" href=\"#inputImunisasi\" data-toggle=\"modal\" data-target=\"#inputImunisasi\" data-id_anak=\"".$id_anak."\" data-imunisasi=\"".$key."\"><span class=\"fa fa-plus\"></span></a></td>
	                    		</tr>";
	                }else{
                        $row.= "<tr>
                        	<td>".$key."</td>
                        	<td>".$data_imunisasi[$key]."</td>
                        	<td><a class=\"addImunisasi\" href=\"#inputImunisasi\" data-toggle=\"modal\" data-target=\"#inputImunisasi\" data-id_anak=\"".$id_anak."\" data-imunisasi=\"".$key."\"><span class=\"fa fa-edit\"></span></a>
                            <a href=\"".base_url('Layanan_controller/delete_imunisasi/'.$id_anak."/".$key."/".$title)."\" onclick=\"return confirm('Hapus data imunisasi ".$key." ?')\" ><span class=\"fa fa-trash-o\"></span></a></td>
							</tr>";
	                }
	            }
	        ?>
	        <div style="overflow-x: auto;">
			<table class="table table-bordered" id="table-id" cellspacing="0">
				<thead>
				  <tr>
				    <th>Jenis</th>
				    <th>Tanggal</th>
				    <th>Aksi</th>
				  </tr>
				</thead>
				<tbody>
				    <?php echo $row; ?>
				</tbody>
			</table>
			</div>
        </div> 
		<?php } ?>
    </div>
    <div class="row">
        <a href="<?php echo base_url('Layanan_controller/show_layanan_bayi/'.$title)?>"
           class="btn btn-primary waves-effect waves-dark" style="float: right;
           margin-right: 530px;">Kembali</a></li>
    </div>
</div>
<div class="modal fade" id="inputImunisasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Data Imunisasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url('Layanan_controller/insert_imunisasi');?>">
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label><p>Nama Anak</p></label>
              </div>
              <div class="col-md-6">
	            <input type="text" name="nama" value="<?php echo ucwords($detail_anak->NAMA_ANAK)?>" readonly>
                <input type="hidden" name="id_anak" value="<?php echo $id_anak;?>">
                <input type="hidden" name="title" value="<?php echo $title;?>">
<!--                 <input type="hidden" name="detail" value="detail"> -->
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label><p>Jenis Imu</p></label>
              </div>
              <div class="col-md-6">
                <input type="text" name="jenis_imu" id="jenis_imu" readonly>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <label for="recipient-name" class="col-form-label"><p id="namaImu">.</p></label>
                </div>
                <div class="col-md-6">
                    <input type="date" class="form-control" id="tgl_imu" name="tgl_imu" />
                </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-4"><input class="btn btn-primary" type="submit" name="submit" value="Tambahkan" />
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>