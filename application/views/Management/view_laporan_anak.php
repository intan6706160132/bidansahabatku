<section id="inner-headline">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <h2 class="pageTitle">
                    <?php 
                        if(!isset($data_anak)){
                            echo "Tidak Ada Anak Yang Dipilih";
                        }else{
                            echo "Laporan Pelayanan ". $data_anak['NAMA_ANAK'];
                        };

                    ?>
                </h2>

            </div>

        </div>

    </div>

</section>

<body>
<style>
    
</style>

</body>

<div class="container" style="margin-top: 20px; overflow-x: hidden;">
    <script type="text/javascript">
        $(document).ready( function () {
            
            $('#table-id').DataTable({
                "bPaginate": false,
                "bLengthChange": false,
                "bFilter": true,
                "bInfo": false,
                "bAutoWidth": false,
                "searching": false
            });

        });
    </script>
    <div class="row">

        <div class="col-md-12">
            <div class="container">
                <div class="row" >
                    <div class="col-md-12 text-center"><h4><b>FORMAT PENGKAJIAN ASUHAN BAYI</b></h4></div>
                </div>
                <div class="row"> 
                    <div class="col-md-2">No. Register Medik</div> <div class="col-md-1"> : </div> <div class="col-md-9 col-md-offset-9"></div>
                    <div class="col-md-2">Nama Pengkaji</div> <div class="col-md-1"> : </div> <div class="col-md-9 col-md-offset-9"></div>
                    <div class="col-md-2">Hari / Tanggal</div> <div class="col-md-1"> : </div> <div class="col-md-9 col-md-offset-9"></div>
                    <div class="col-md-2">Jam</div> <div class="col-md-1"> : </div> <div class="col-md-9 col-md-offset-9"></div>
                </div>
                <div class="row" >
                    <div class="col-md-12"><h4><b>DATA SUBJEKTIF</b></h4></div>
                    <div class="col-md-12"><b>Identitas Orang Tua</b></div>
                    <div class="col-md-6">
                        <?php 
                            $index = array(
                                    'NAMA_IBU',
                                    'TGL_LAHIR_IBU',
                                    'PEKERJAAN_IBU',
                                    'AGAMA_IBU',
                                    'PENDIDIKAN_AKHIR_IBU',
                                    'ALAMAT_IBU',
                                    'NO_TELP_IBU');
                            foreach ($index as $row) {
                                $index_name = ucwords(strtolower($row));
                                $index_name = str_replace("_", " ", $index_name);
                                echo "
                                    <div class=\"col-md-5\">". $index_name ."</div>
                                    <div class=\"col-md-1\"> : </div>";

                                if(strpos($row, "TGL")  !== false){
                                    $date = new DateTime($data_anak['TGL_LAHIR_IBU']);
                                    $now = new DateTime();
                                    $interval = $now->diff($date);
                                    $interval->y;
                                    echo "
                                        <div class=\"col-md-6\"> ". $interval->y." tahun </div>
                                        ";
                                }else{
                                    echo "
                                        <div class=\"col-md-6\"> ".$data_anak[$row]." </div>
                                        ";    
                                }
                            }
                        ?>
                        
                    </div>
                    <div class="col-md-6">

                        <?php 
                            $index = array(
                                    'NAMA_AYAH',
                                    'TGL_LAHIR_AYAH',
                                    'PEKERJAAN_AYAH',
                                    'AGAMA_AYAH',
                                    'PENDIDIKAN_AKHIR_AYAH',
                                    'ALAMAT_AYAH',
                                    'NO_TELP_AYAH');
                            foreach ($index as $row) {
                                $index_name = ucwords(strtolower($row));
                                $index_name = str_replace("_", " ", $index_name);
                                echo "
                                    <div class=\"col-md-5\">". $index_name ."</div>
                                    <div class=\"col-md-1\"> : </div>";

                                if(strpos($row, "TGL")  !== false){
                                    $date = new DateTime($data_anak['TGL_LAHIR_AYAH']);
                                    $now = new DateTime();
                                    $interval = $now->diff($date);
                                    $interval->y;
                                    echo "
                                        <div class=\"col-md-6\"> ". $interval->y." tahun </div>
                                        ";
                                }else{
                                    echo "
                                        <div class=\"col-md-6\"> ".$data_anak[$row]." </div>
                                        ";    
                                }
                            }
                        ?>                   
                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-12"><b>Identitas Anak</b></div>
                    <div class="col-md-6">

                        <?php 
                            $index = array(
                                    'NAMA_ANAK',
                                    'TGL_LAHIR',
                                    'BB TB LK',
                                    'PERSALINAN',
                                    'RIWAYAT_MENYUSUI',
                                    'RIWAYAT_MAKAN_MINUM');
                            foreach ($index as $row) {
                                $index_name = ucwords(strtolower($row));
                                $index_name = str_replace("_", " ", $index_name);
                                if(strpos($row, "BB")  !== false){
                                    $angka = explode(" ", $row);
                                    echo "
                                    <div class=\"col-md-5\">"; 
                                    foreach($angka as $ukuran){echo $ukuran.' ';} 
                                    echo "</div>
                                    <div class=\"col-md-1\"> : </div>";
                                }else if(strpos($row, "BB")  !== false){
                                    echo "
                                    <div class=\"col-md-5\">Tanggal Lahir dan Usia</div>
                                    <div class=\"col-md-1\"> : </div>";
                                }else{
                                    echo "
                                    <div class=\"col-md-5\">". $index_name ."</div>
                                    <div class=\"col-md-1\"> : </div>";
                                }

                                if(strpos($row, "TGL")  !== false){
                                    $date = new DateTime($data_anak['TGL_LAHIR']);
                                    $now = new DateTime();
                                    $interval = $now->diff($date);
                                    echo "
                                        <div class=\"col-md-6\"> ".date("d-m-Y", strtotime($data_anak['TGL_LAHIR'])).' / '. $interval->m." bulan </div>
                                        ";
                                }else if(strpos($row, "BB")  !== false){
                                    echo "<div class=\"col-md-6\"> ".$data_anak["BBL"].' kg / '. $data_anak["TBL"]. ' cm / '. $data_anak["LK"].' cm</div>';
                                }
                                else{
                                    echo "
                                        <div class=\"col-md-6\"> ".$data_anak[$row]." </div>
                                        ";    
                                }
                            }
                        ?>                   
                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-12 text-center"><h4><b>Riwayat Imunisasi</b></h4></div>
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
                            $row1 = "";
                            $row2 = "";
                            foreach ($imunisasi as $key) {
                                $row1 .= "<td>".str_replace("_", " ", $key)."</td>";
                            }
                            foreach ($imunisasi as $key) {
                                if($data_pelayanan['data_imunisasi'][$key] == "0000-00-00"){
                                    $row2.= "<td> - </td>";
                                }else{
                                    $row2.= "<td>".date("d-m-Y", strtotime($data_pelayanan['data_imunisasi'][$key]))."</td>";
                                }
                            }
                        ?>
                        <div style="overflow-x: auto;">
                        <table class="table table-bordered" id="table-id" cellspacing="0">
                            <thead>
                              <tr>
                                <th>Jenis</th>
                                    <?php echo $row1; ?>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <th>Tanggal</th>
                                  <?php echo $row2; ?>
                              </tr>
                            </tbody>
                        </table>
                        </div>
                    </div> 
                </div>  
                <div class="row" >
                    <div class="col-md-12 text-center"><h4><b>DATA OBJEKTIF PASIEN PIJAT</b></h4></div>
                    <div class="col-md-12">
                        <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">No.</th>
                                    <th style="text-align: center;">Tanggal</th>
                                    <th style="text-align: center;">Keadaan Umum</th>
                                    <th style="text-align: center;">Suhu</th>
                                    <th style="text-align: center;">Respirasi</th>
                                    <th style="text-align: center;">Jantung</th>
                                    <th style="text-align: center;">BB</th>
                                    <th style="text-align: center;">TB</th>
                                    <th style="text-align: center;">LK</th>
                                    <th style="text-align: center;">KPSP</th>
                                    <th style="text-align: center;">TINDAKAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if(isset($data_pelayanan)){
                                        $i = 1;
                                        $temp = 0;
                                        $temp2 = 0;
                                        $temp3 = 0;
                                        foreach ($data_pelayanan['data_pelayanan'] as $row) {         
                                ?>
                                            <tr>
                                                <td style="text-align: center;"><?php echo $i;?></td>
                                                <td style="text-align: center;"><?php echo $row['TGL_KUNJUNGAN'];?></td>
                                                <td style="text-align: center;"><?php echo $row['KEADAAN_UMUM'];?></td>
                                                <td style="text-align: center;"><?php echo $row['SUHU'];?></td>
                                                <td style="text-align: center;"><?php if($row['RESPIRASI'] == 'Y') echo "Normal"; elseif($row['RESPIRASI'] == 'T') echo "Tidak Normal"; else echo "-";?></td>
                                                <td style="text-align: center;"><?php if($row['JANTUNG'] == 'Y') echo "Normal"; elseif($row['JANTUNG'] == 'T') echo "Tidak Normal"; else echo "-";?></td>
                                                <td style="text-align: center;<?php if($temp > $row['BB'] && $i != 1) echo " background: #c91616"; elseif($temp < $row['BB']  && $i != 1) echo " background: #44e53b"; else echo " background: yellow"; ?>"><?php echo $row['BB']." kg"; $temp = $row['BB'];?></td>
                                                <td style="text-align: center;<?php if($temp2 > $row['BB'] && $i != 1) echo " background: #c91616"; elseif($temp2 < $row['BB']  && $i != 1) echo " background: #44e53b"; else echo " background: yellow"; ?>"><?php echo $row['TB']." cm";  $temp2 = $row['TB'];?></td>
                                                <td style="text-align: center;<?php if($temp3 > $row['BB'] && $i != 1) echo " background: #c91616"; elseif($temp3 < $row['BB']  && $i != 1) echo " background: #44e53b"; else echo " background: yellow"; ?>"><?php echo $row['LK']." cm";  $temp3 = $row['LK'];?></td>
                                                <td style="text-align: center;"><?php echo $row['KPSP'];?></td>
                                                <td style="text-align: center;"><?php echo $row['TINDAKAN'];?></td>
                                                
                                            </tr>
                                  
                                <?php       $i++;
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>  
        </div>

    </div>

</div>

</html>