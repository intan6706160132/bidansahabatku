

<head>

    <title>DATA BIDAN</title>

</head>

<section id="inner-headline">

    <div class="container">

        <div class="row">

            <div class="col-lg-16">

                <h2 class="pageTitle">Tambah Data bidan</h2>

            </div>

        </div>

    </div>

</section>

<script type="text/javascript">
    //$(document).ready( function () {
    //    var table = $('#table_id').DataTable({
    //        responsive: true
    //    });
    //    new $.fn.dataTable.FixedHeader(table);
    //});
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );

</script>

<div class="container" style="margin-top: 20px">

     <div class="row">

        <div class="col-md-12">

            <a href="<?php echo base_url('Management_controller/show_form_bidan')?>" class="btn btn-primary waves-effect waves-dark">Tambah Data</a>

        </div>

    </div> 



    <div class="row">

        <div class="col-md-12">

            <div style="overflow-x: auto;">

                <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">

                    <thead>

                        <tr>

                            <th style="text-align: center; width:40px;">No.</th>

                            <th style="text-align: center;">Nama Bidan</th>

                            <th style="text-align: center;">Alamat Bidan</th>

                            <th style="text-align: center;">No. Telepon Bidan</th>

                            <th style="text-align: center; width:125px;"><p>Aksi

                                </p></th>

                        </tr>

                    </thead>

                    <tbody>

                    <?php

                        if (isset($data_bidan)){

                        $no=1;

                        foreach ($data_bidan as $res){

                    ?>

                    <tr>

                        <td><?php echo $no++; ?></td>

                        <td><?php echo $res['NAMA_BIDAN']; ?></td>

                        <td><?php echo $res['ALAMAT_BIDAN']; ?></td>

                        <td><?php echo $res['NO_TELP_BIDAN']; ?></td>

                        <td style="text-align: center;">

                            <a href="<?php echo base_url('Management_controller/show_detail_bidan/'.$res['ID_BIDAN'])?>" class="btn-table" title="Detail"><span class="fa fa-folder-open" aria-hidden="true"></span>

                                <a href="<?php echo base_url('Management_controller/show_edit_bidan/'.$res['ID_BIDAN'])?>" class="btn-table" title="Edit"><span class="fa fa-edit" aria-hidden="true"></span>

                                    <a href="<?php echo base_url('Management_controller/hapus_data_bidan/'.$res['ID_BIDAN'])?>" class="btn-table" title="Detail"><span class="fa fa-trash-o" aria-hidden="true"></span>

                        </td>

                    </tr>

                        <?php

                        }

                    }

                    ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    <a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a>

</div>



<!-- javascript

    ================================================== -->

<!-- Placed at the end of the document so the pages load faster -->

</body>

