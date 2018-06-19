<head>
    <title>PELAYANAN BAYI</title>
</head>
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-16">
                <h2 class="pageTitle">PELAYANAN ANAK <?php echo $data_anak['NAMA_ANAK']; ?></h2>
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
	.modal{
		max-height: 100%;
		width: 100%;
		background-color: rgba(0, 0, 0, 0);
		box-shadow: none;
		overflow-y: auto;
	}
</style>
<div class="container" style="margin-top: 20px">
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
							foreach ($data_pelayanan as $row) {			
					?>
		                    	<tr>
			                        <td style="text-align: center;"><?php echo $i;?></td>
			                        <td style="text-align: center;"><?php echo $row['TGL_KUNJUNGAN'];?></td>
			                        <td style="text-align: center;"><?php echo $row['KEADAAN_UMUM'];?></td>
			                        <td style="text-align: center;"><?php echo $row['SUHU'];?></td>
			                        <td style="text-align: center;"><?php if($row['RESPIRASI'] == 'Y') echo "Normal"; elseif($row['RESPIRASI'] == 'T') echo "Tidak Normal"; else echo "-";?></td>
			                        <td style="text-align: center;"><?php if($row['JANTUNG'] == 'Y') echo "Normal"; elseif($row['JANTUNG'] == 'T') echo "Tidak Normal"; else echo "-";?></td>
			                        <td style="text-align: center;"><?php echo $row['BB']." kg";?></td>
			                        <td style="text-align: center;"><?php echo $row['TB']." cm";?></td>
			                        <td style="text-align: center;"><?php echo $row['LK']." cm";?></td>
			                        <td style="text-align: center;"><?php echo $row['KPSP'];?></td>
			                        <td style="text-align: center;"><?php echo $row['TINDAKAN'];?></td>
			                        <?php 
						                if($_SESSION['status'] == "ortu")
						                	echo "";
						                else{
						            ?>
			                        <td style="text-align: center;">
<!-- 				                        <a href="<?php //echo base_url('Layanan_controller/show_edit_pelayanan_bayi/'.$row['ID_PELAYANAN'])?>" class="btn-table" title="Edit"><span class="fa fa-edit" aria-hidden="true"></span> -->
				                        <a href="<?php echo base_url('Layanan_controller/delete_pelayanan_bayi/'.$id_anak.'/'.$row['ID_PELAYANAN'].'/'.$title)?>" class="btn-table" title="Hapus"><span class="fa fa-trash-o" aria-hidden="true"></span>
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
			<div align='center'>
			<?php 
                if($_SESSION['status'] == "ortu")
                	echo "";
                else 
                	echo"<a data-toggle='modal' data-target='#inputImunisasi' class='btn btn-primary waves-effect waves-dark' style='margin: 30px;'>Tambah Data</a>";
            ?>
            <a href="<?php echo base_url('Layanan_controller/show_layanan_bayi/pelayanan')?>"
           class="btn btn-primary waves-effect waves-dark" style="margin: 30px;">Kembali</a>
            </div>
<!-- 			<div align="center"><a data-toggle="modal" data-target="#exampleModalLong" class="btn btn-primary waves-effect waves-dark">Tambah Data</a></div> -->
	    </div>
    </div>
</div>
<!-- testing -->
<div class="modal fade" id="inputImunisasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Pelayan Bayi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url('Layanan_controller/input_pelayanan')?>">
          <div id="form1">
            <div class="form-group">
              <label>Tanggal Kunjugan</label>
              <input class="form-control" type="date" name="tglkunjung"/>
            </div>
            <div class="form-group">
              <label>Keadaan Umum </label>
              <input class="form-control" type="text" name="kead" placeholder="Masukkan Keterangan"/>
            </div>
            <div class="form-group">
              <label>Suhu </label>
              <input class="form-control" type="text" name="suh" placeholder="Masukkan Suhu"/>
            </div>
            <div class="form-group">
              <label>Respirasi</label>
                        <select name="res" class="form-control" id="res">
                            <option value="Y">Normal</option>
                            <option value="T">Tidak Normal</option>
                        </select>
<!--               <input class="form-control" type="text" name="res" placeholder="Masukkan Respirasi"/> -->
            </div>
            <div class="form-group">
              <label>Jantung</label>
                        <select name="jan" class="form-control" id="jan">
                            <option value="Y">Normal</option>
                            <option value="T">Tidak Normal</option>
                        </select>
<!--               <input class="form-control" type="text" name="jan" placeholder="Masukkan Jantung"/> -->
            </div>
            <div class="form-group">
              <label>BB </label>
              <input class="form-control" type="text" name="bb" placeholder="Masukkan BB"/>
            </div>
            <div class="form-group">
              <label>TB </label>
              <input class="form-control" type="text" name="tb" placeholder="Masukkan TB"/>
            </div>
            <div class="form-group">
              <label>LK </label>
              <input class="form-control" type="text" name="lk" placeholder="Masukkan LK"/>
            </div>
            <div class="form-group">
              <label>KPSP </label>
              <input class="form-control" type="text" name="kpsp" placeholder="Masukkan KPSP"/>
            </div>
            <div class="form-group">
              <label>Tindankan </label>
              <input class="form-control" type="text" name="tin" placeholder="Masukkan Tindakan"/>
            </div>
            <p><label></label><input type="submit" name="submit" class="btn btn-primary" value="Simpan"/></p>
            <input type="hidden" value="<?php echo $id_anak; ?>" name="idanak" />
            <input type="hidden" value="<?php echo $_SESSION['id_pengguna']; ?>" name="idbid" />
            <input type="hidden" value="<?php echo $data_pengkajian['NO_MEDREG']; ?>" name="nomed" />
            <input type="hidden" name="title" value="<?php echo $title;?>">
          </div> 
        </form>
      </div>
    </div>
  </div>
</div>
<!-- testing -->