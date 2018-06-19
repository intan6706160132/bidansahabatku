<section id="inner-headline">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <h2 class="pageTitle">Management Data Ibu</h2>

            </div>

        </div>

    </div>

</section>

<body>
<style>
	
</style>
<script type="text/javascript">
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
    //$(document).ready( function () {
    //    var table = $('#table_id').DataTable({
    //        responsive: true
    //    });
    //    new $.fn.dataTable.FixedHeader(table);
    //});

    document.title = "Data Orang Tua";

</script>

</body>

<div class="container" style="margin-top: 20px">

    <div class="row">

        <div class="col-md-12">

            <a href="<?php echo base_url('Management_controller/show_tambah_data_ortu')?>" class="btn btn-primary waves-effect waves-dark">Tambah Data</a>

<!--            <button type="button" class="btn btn-primary waves-effect waves-dark" data-toggle="modal" data-target="#insDataOrtu">-->

<!--                Tambah Data-->

<!--            </button>-->

        </div>

    </div>

    <div class="row">

        <div class="col-md-12">

            <div style="overflow-x: auto;">

            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">

                <thead>

                <tr>

                    <th style="text-align: center; width:40px;">No.</th>

                    <th style="text-align: center;">Nama Ibu</th>

                    <th style="text-align: center;">Anak</th>

                    <th style="text-align: center; width:75px;">Register</th>

                    <th style="text-align: center; width:100px;">Aksi</th>

                </tr>

                </thead>

                <tbody>

                <?php

                if (isset($data_ortu)){

                $i=1;

                foreach ($data_ortu as $ortu){

                ?>

                <tr>

                    <td><?php echo $i;?></td>

                    <td><?php echo ucwords($ortu['NAMA_IBU']);?>

                    <td>

                        <?php

                            for($i = 0; $i < count($ortu['DATA_ANAK']); $i++){

                                if($i == (count($ortu['DATA_ANAK']) - 1 )){

                                    echo $ortu['DATA_ANAK'][$i]['NAMA_ANAK'];   

                                }

                                else{

                                    echo $ortu['DATA_ANAK'][$i]['NAMA_ANAK']." / ";   

                                }

                            }

                        ?>

                    </td>

                    <td style="text-align: center;">

                        <a href="<?php echo base_url('Management_controller/show_tambah_data_anak/'.$ortu['ID_ORANG_TUA'])?>" class="btn-table" title="Register Anak"><span class="fa fa-plus-square-o" aria-hidden="true"></span>

                    </td>

                    <td style="text-align: center;">

                        <a href="<?php echo base_url('Management_controller/show_detail_ortu/'.$ortu['ID_ORANG_TUA'])?>" class="btn-table" title="Detail"><span class="fa fa-folder-open" aria-hidden="true"></span>

                            <a href="<?php echo base_url('Management_controller/show_edit_ortu/'.$ortu['ID_ORANG_TUA'])?>" class="btn-table" title="Edit"><span class="fa fa-edit" aria-hidden="true"></span>

                                <a href="<?php echo base_url('Management_controller/hapus_data_ortu/'.$ortu['ID_ORANG_TUA'])?>" class="btn-table" title="Edit"><span class="fa fa-trash-o" aria-hidden="true"></span>

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

</div>

</html>