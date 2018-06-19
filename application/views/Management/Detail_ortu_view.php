<section id="inner-headline">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <h2 class="pageTitle">Detil Data Orangtua</h2>

            </div>

        </div>

    </div>

</section>

<div class="container" style="margin-top: 20px">

    <div class="row">

        <div class="col-md-6 menuItem">

            <ul class="menu">

                <li>

                    Identitas Ibu

                </li><li>

                    <div class="detail">Nama Ibu<span class="price"><?php echo ucwords($detail_ortu->NAMA_IBU)?></span></div>

                </li><li>

                    <div class="detail">Tanggal Lahir Ibu<span class="price"><?php echo $detail_ortu->TGL_LAHIR_IBU?></span></div>

                </li><li>

                    <div class="detail">Pekerjaan Ibu<span class="price"><?php echo ucwords($detail_ortu->PEKERJAAN_IBU)?></span></div>

                </li><li>

                    <div class="detail">Agama Ibu<span class="price"><?php echo ucwords($detail_ortu->AGAMA_IBU)?></span></div>

                </li><li>

                    <div class="detail">Pendidikan Terakhir Ibu<span class="price"><?php echo ucwords($detail_ortu->PENDIDIKAN_AKHIR_IBU)?></span></div>

                </li><li>

                    <div class="detail">No. Telepon/HP Ibu<span class="price"><?php echo $detail_ortu->NO_TELP_IBU?></span></div>

                </li>

            </ul>

        </div>

        <div class="col-md-6 menuItem">

            <ul class="menu">

                <li>

                    Identitas Ayah

                </li><li>

                    <div class="detail">Nama Ayah<span class="price"><?php echo ucwords($detail_ortu->NAMA_AYAH)?></span></div>

                </li><li>

                    <div class="detail">Tanggal Lahir Ayah<span class="price"><?php echo $detail_ortu->TGL_LAHIR_AYAH?></span></div>

                </li><li>

                    <div class="detail">Pekerjaan Ayah<span class="price"><?php echo ucwords($detail_ortu->PEKERJAAN_AYAH)?></span></div>

                </li><li>

                    <div class="detail">Agama Ayah<span class="price"><?php echo ucwords($detail_ortu->AGAMA_AYAH)?></span></div>

                </li><li>

                    <div class="detail">Pendidikan Terakhir Ayah<span class="price"><?php echo ucwords($detail_ortu->PENDIDIKAN_AKHIR_AYAH)?></span></div>

                </li><li>

                    <div class="detail">No. Telepon/HP Ayah<span class="price"><?php echo $detail_ortu->NO_TELP_AYAH?></span></div>

                </li>

            </ul>

        </div>

    </div>

    <div class="row">

        <div class="col-md-12">

            <div style="overflow-x: auto;">

            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">

                <thead>

                <tr>

                    <th style="text-align: center; width:40px;">No.</th>

                    <th style="text-align: center;">Nama Anak</th>

                    <th style="text-align: center; width: 300px;">Tempat dan Tanggal Lahir</th>

                    <th style="text-align: center;">Jenis Kelamin</th>

                    <th style="text-align: center; width:125px;">BB Lahir (gram)</th>

                    <th style="text-align: center; width:125px;">TB Lahir (cm) </th>

                    <th style="text-align: center; width:125px;">Lingkar Kepala (cm)</th>

                    <th style="text-align: center; width:125px;">aksi</th>

                </tr>

                </thead>

                <tbody>

                <?php

                if (isset($data_anak)){

                    $i=1;

                    foreach ($data_anak as $anak){

                        ?>

                        <tr>

                            <td><?php echo $i;?></td>

                            <td> <a href="<?php echo base_url('Management_controller/show_detail_anak/'.$anak['ID_ANAK'])?>" style="cursor: pointer;"><?php echo ucwords($anak['NAMA_ANAK']);?></a></td>

                            <td><?php echo ucwords($anak['TEMPAT_LAHIR_ANAK']);?>, <?php echo $anak['TGL_LAHIR'];?></td>

                            <td><?php echo $anak['JK'];?></td>

                            <td><?php echo $anak['BBL'];?></td>

                            <td><?php echo $anak['TBL'];?></td>

                            <td><?php echo $anak['LK'];?></td>

                            <td style="text-align: center;">

                                <a href="<?php echo base_url('Management_controller/show_detail_anak/'.$anak['ID_ANAK'])?>" class="btn-table" title="Detail"><span class="fa fa-folder-open" aria-hidden="true"></span>

                                    <a href="<?php echo base_url('Management_controller/show_edit_anak/'.$anak['ID_ANAK'])?>" class="btn-table" title="Edit"><span class="fa fa-edit" aria-hidden="true"></span>

                            </td>

                        </tr>

                        <?php

                        $i++;

                    }

                }

                ?>

                </tbody>

            </table>

            </div>

        </div>

    </div>

    <div class="row">

        <a href="<?php echo base_url('Management_controller/show_data_ortu')?>"

           class="btn btn-primary waves-effect waves-dark" style="float: right;

           margin-right: 550px;">Kembali</a></li>

    </div>

</div>



<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a>



<script type="text/javascript">

    $(document).ready( function () {
	$('#table_id').DataTable();
    });

</script>

