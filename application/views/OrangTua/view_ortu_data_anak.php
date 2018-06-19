<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Data Anak</h2>
            </div>
        </div>
    </div>
</section>
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
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
    <div class="row">
        <a href="<?php echo base_url('Management_controller/show_data_ortu')?>"
           class="btn btn-primary waves-effect waves-dark" style="float: right;
           margin-right: 550px;">Kembali</a></li>
    </div>
</div>