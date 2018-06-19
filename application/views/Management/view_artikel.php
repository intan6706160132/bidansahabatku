<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Management Artikel</h2>
            </div>
        </div>
    </div>
</section>
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
            <a href="<?php echo base_url('Management_controller/show_form_artikel')?>" class="btn btn-primary waves-effect waves-dark">Tambah Data</a>
<!--            <button type="button" class="btn btn-primary waves-effect waves-dark" data-toggle="modal" data-target="#insDataIbu">-->
<!--                Tambah Data-->
<!--            </button>-->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th style="text-align: center; width:40px;">No.</th>
                    <th style="text-align: center;">Judul Artikel</th>
                    <th style="text-align: center; width:125px;">Aksi
                        </p></th>
                </tr>
                </thead>
                <tbody>
                <?php
                if (isset($berita)){
                $i=1;
                foreach ($berita as $b){
                ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $b['JUDUL_ARTIKEL'];?></td>
                    <td style="text-align: center;">
                            <a href="<?php echo base_url('Management_controller/show_edit_artikel/'.$b['ID_ARTIKEL'])?>" class="btn-table" title="Edit"><span class="fa fa-edit" aria-hidden="true"></span>
                                <a href="<?php echo base_url('Management_controller/hapus_artikel/'.$b['ID_ARTIKEL'])?>" class="btn-table" title="Delete"><span class="fa fa-trash-o" aria-hidden="true"></span>
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
<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a>
