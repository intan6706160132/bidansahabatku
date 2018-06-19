
<section id="content">
	<div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8"> <!-- 8 kolom pada resolusi medium dan small -->

                <div class="row">
                    <div class="col-md-0"></div>
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div>
                                    <h2 style="margin-left: 30px;"><?php echo $baca['JUDUL_ARTIKEL']; ?>
                                    </h2>
                                </div>
                                <div style="margin-left: 30px">
                                    <span class="fa fa-user"> Bidan Sahabatku</span>
                                </div>
                                <div style="margin-left: 30px">
                                    <span class="fa fa-calendar"> <?php echo $baca['DIBUAT']; ?></span>
                                </div>
                                <div style="margin-left: 30px;margin-top: 20px;">
                                    <span><img src="<?php echo base_url('uploads/').$baca['foto_artikel'];?>" alt="" style="  max-width: 100%; max-height: 50%"/>
                                    </span>
                                </div>

                                <div class="panel-body" style="margin-left: 17px; margin-right: 100px font-size: 14px">
                                       <p style="text-align: justify;"><?php echo $baca['ISI_ARTIKEL']; ?></p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
                <div class="col-md-4 col-sm-4"> <!-- 8 kolom pada resolusi medium dan small -->
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2 class="panel-title">
                          <strong>Tulisan Baru</strong>
                        </h2>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">

                          <li class="list-group-item"><?php echo anchor('',$baca['JUDUL_ARTIKEL']); ?></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
