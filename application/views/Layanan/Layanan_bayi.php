<head>
    <title>PELAYANAN BAYI</title>
</head>
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-16">
                <h2 class="pageTitle">DATA BAYI</h2>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready( function () {
        var table = $('#table_id').DataTable({
            responsive: true
        });

        new $.fn.dataTable.FixedHeader(table);

    });
</script>
<div class="container table-responsive" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
<!--             <a href="#" class="btn btn-primary waves-effect waves-dark">Tambah Data</a> -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
	                <tr>
	                    <th style="text-align: center; width:40px;">No.</th>
	                    <th style="text-align: center;">Nama Bayi</th>
	                    <th style="text-align: center;">Tanggal Lahir</th>
	                    <?php 
					        if($_SESSION['status'] == "ortu"){ ?>
						        <th style="text-align: center; width:125px;">Pelayanan</th>
						        <th style="text-align: center; width:125px;">Imunisasi</th>
					    <?php } else { ?>
	                    <th style="text-align: center; width:125px;">Aksi</th>
	                    <?php } ?>
	                </tr>
                </thead>
                <tbody>
	                <?php
                    	if(isset($data_bayi)){
							$i = 1;
							foreach ($data_bayi as $row) {			
					?>
		                    	<tr>
			                        <td style="text-align: center;"><?php echo $i;?></td>
			                        <?php if($_SESSION['status'] == "ortu"){ ?>
			                        <td style="text-align: center;"><?php echo $row['NAMA_ANAK'];?></td>				                    			<?php } else { ?>
			                        <td> <a href="<?php echo base_url('Management_controller/show_detail_anak/'.$row['ID_ANAK'])?>" style="cursor: pointer;"><?php echo ucwords($row['NAMA_ANAK']);?></a></td>
				                    <?php } ?>
			                        <td style="text-align: center;"><?php echo $row['TGL_LAHIR'];?></td>
			                        <?php 
										if($_SESSION['status'] == "ortu"){ ?>
			                        <td style="text-align: center;">
				                        <a href="<?php echo base_url('Layanan_controller/show_detail_anak/'.$row['ID_ANAK'].'/'.$title = "pelayanan");?>" class="btn-table" title="Pelayanan"><span class="fa fa-folder-open" aria-hidden="true"></span></a></td>
				                        <td style="text-align: center;">
				                        <a href="<?php echo base_url('Layanan_controller/show_detail_anak/'.$row['ID_ANAK'].'/'.$title = "imunisasi");?>" class="btn-table" title="Pelayanan"><span class="fa fa-folder-open" aria-hidden="true"></span></a></td>
				                    <?php } else { ?>
				                    	<td style="text-align: center;">
				                        <a href="<?php echo base_url('Layanan_controller/show_data_layanan_bayi/'.$row['ID_ANAK'].'/'.$title);?>" class="btn-table" title="Pelayanan"><span class="fa fa-plus-square-o" aria-hidden="true"></span>
<!-- 				                        <a href="<?php echo base_url('Layanan_controller/show_detail_anak/'.$row['ID_ANAK'].'/'.$title)?>" class="btn-table" title="Detail"><span class="fa fa-folder-open" aria-hidden="true"></span> -->
					                        <?php } ?>
<!--

				                        <a href="#" class="btn-table" title="Detail"><span class="fa fa-trash-o" aria-hidden="true"></span>
-->
				                    </td>
		                    	</tr>
                      
					<?php 		$i++;
							}
	                    }
	                ?>
                </tbody>
            </table>
        </div>
    </div>

</div>