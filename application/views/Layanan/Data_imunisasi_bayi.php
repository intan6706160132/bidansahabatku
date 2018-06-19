<head>
    <title>IMUNISASI BAYI</title>
</head>
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-16">
                <h2 class="pageTitle">Imunisasi BAYI <?php echo $data_anak['NAMA_ANAK']; ?></h2>
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
</div>
<div class="row" align="center">
        <a href="<?php echo base_url('Layanan_controller/show_layanan_bayi/imunisasi')?>"
           class="btn btn-primary waves-effect waves-dark">Kembali</a></li>
    </div>
<!-- testing -->
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
                <label><p>id_anak</p></label>
              </div>
              <div class="col-md-6">
                <input type="text" name="id_anak" value="<?php echo $id_anak;?>">
                <input type="hidden" name="title" value="<?php echo $title;?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label><p>Jenis Imu</p></label>
              </div>
              <div class="col-md-6">
                <input type="text" name="jenis_imu" id="jenis_imu">
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
<!-- testing -->