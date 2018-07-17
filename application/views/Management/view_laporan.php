<section id="inner-headline">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <h2 class="pageTitle">Laporan Pelayanan Anak</h2>

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

            <div style="overflow-x: auto;">

            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">

                <thead>

                <tr>

                    <th style="text-align: center; width:40px;">No.</th>

                    <th style="text-align: center;">Nama Ibu / Ayah</th>

                    <th style="text-align: center;">Alamat</th>                   

                    <th style="text-align: center;">Nama Anak</th>

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

                    <td><?php echo ucwords($ortu['NAMA_IBU']." <b>|</b> ". $ortu['NAMA_AYAH']);?>

                        
                    </td>
                    <td>
                        <?php echo $ortu['ALAMAT_IBU']." / ". $ortu['ALAMAT_AYAH'];?>
                    </td>

                    <td>
                        <?php

                        for($i = 0; $i < count($ortu['DATA_ANAK']); $i++){

                            if($i == (count($ortu['DATA_ANAK']) - 1 )){

                                ?>
                                <a href="<?php echo base_url('Management_controller/show_laporan_anak/'.$ortu['DATA_ANAK'][$i]['ID_ANAK'])?>" style="cursor: pointer;">

                                <?php echo $ortu['DATA_ANAK'][$i]['NAMA_ANAK'] ."(".$ortu['DATA_ANAK'][$i]['ANAK_KE'] .")" ;

                            }

                            else{
                                ?>
                                <a href="<?php echo base_url('Management_controller/show_laporan_anak/'.$ortu['DATA_ANAK'][$i]['ID_ANAK'])?>" style="cursor: pointer;">

                                <?php echo $ortu['DATA_ANAK'][$i]['NAMA_ANAK'] ."(".$ortu['DATA_ANAK'][$i]['ANAK_KE'] .")  / ";

                            }

                        }

                        ?>
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