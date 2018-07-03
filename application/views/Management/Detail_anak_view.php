<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Detail Identitas <?php echo ucwords($detail_anak->NAMA_ANAK)?></h2>
            </div>
        </div>
    </div>
</section>
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
                    <div class="detail">Tanggal Pengkajian<span class="price"><?php echo $data_kajian->TANGGAL_KAJIAN;?></span></div>
                </li><li>
                    <div class="detail">JAM<span class="price"><?php echo $data_kajian->JAM;?></span></div>
                </li><li>
                    <div class="detail">Nama Anak<span class="price"><?php echo ucwords($detail_anak->NAMA_ANAK);?></span></div>
                </li><li>
                    <div class="detail">Tempat dan Tanggal Lahir Anak<span class="price"><?php echo ucwords($detail_anak->TEMPAT_LAHIR_ANAK);?>, <?php echo $detail_anak->TGL_LAHIR;?></span></div>
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
	                    		</tr>";
            }else{
                $row.= "<tr>
                        	<td>".$key."</td>
                        	<td>".$data_imunisasi[$key]."</td>
							</tr>";
            }
        }
        ?>
        <span  class="color" style="text-align: center">
            <h2>Data Imunisasi</h2>
        </span>
        <table class="table table-bordered" id="table-id" cellspacing="0">
            <thead>
            <tr>
                <th>Jenis</th>
                <th>Tanggal</th>
            </tr>
            </thead>
            <tbody>
            <?php echo $row; ?>
            </tbody>
        </table>
    </div>

    <span  class="color" style="text-align: center">
            <h2>Data Pelayanan</h2>
        </span>
    <div class="col-md-12">
        <div style="overflow-x: auto;">
        <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th style="text-align: center;">No.</th>
                <th style="text-align: center;">No. MedReg</th>
                <th style="text-align: center;">Tanggal</th>
                <th style="text-align: center;">Keadaan Umum</th>
                <th style="text-align: center;">Suhu</th>
                <th style="text-align: center;">Respirasi</th>
                <th style="text-align: center;">Jantung</th>
                <th style="text-align: center;">BB</th>
                <th style="text-align: center;">TB</th>
                <th style="text-align: center;">LK</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if(isset($data_pelayanan)){
                $i = 1;
                $tmpBB = 0;
                $tmpTB = 0; 
                $tmpLK = 0;
                foreach ($data_pelayanan as $row) {
                    ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $i;?></td>
                        <td style="text-align: center;"><?php echo $row['NO_MEDREG'];?></td>
                        <td style="text-align: center;"><?php echo $row['TGL_KUNJUNGAN'];?></td>
                        <td style="text-align: center;"><?php echo $row['KEADAAN_UMUM'];?></td>
                        <td style="text-align: center;"><?php echo $row['SUHU'];?></td>
                        <td style="text-align: center;"><?php echo $row['RESPIRASI'];?></td>
                        <td style="text-align: center;"><?php echo $row['JANTUNG'];?></td>
                        <td style="text-align: center;background:<?php if($i != 1) {if($tempBB > $row['BB']) echo "#c91616"; elseif ($tempBB < $row['BB']) echo "#44e53b"; else echo "yellow"; } ?>"><?php echo $row['BB'];?></td>
                        <td style="text-align: center;background:<?php if($i != 1) {if($tempTB > $row['TB']) echo "#c91616"; elseif ($tempTB < $row['TB']) echo "#44e53b"; else echo "yellow"; } ?>"><?php echo $row['TB'];?></td>
                        <td style="text-align: center;background:<?php if($i != 1) {if($tempLK > $row['LK']) echo "#c91616"; elseif ($tempLK < $row['LK']) echo "#44e53b"; else echo "yellow"; } ?>"><?php echo $row['LK'];?></td>
                    </tr>

                    <?php 		
                        $i++;
                        $tempBB = $row['BB'];
                        $tempTB = $row['TB'];
                        $tempLK = $row['LK'];
                }
            }
            ?>
            </tbody>
        </table>
        </div>
    </div>


    <div class="row">
        <a href="<?php echo base_url('Management_controller/show_detail_ortu/'.$detail_anak->ID_ORANG_TUA)?>"
           class="btn btn-primary waves-effect waves-dark" style="float: right;
           margin-right: 530px;">Kembali</a>
    </div>

</div>