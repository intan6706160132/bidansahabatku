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
                                }else{
                                    echo "
                                    <div class=\"col-md-5\">". $index_name ."</div>
                                    <div class=\"col-md-1\"> : </div>";
                                }

                                if(strpos($row, "TGL")  !== false){
                                    $date = new DateTime($data_anak['TGL_LAHIR_IBU']);
                                    $now = new DateTime();
                                    $interval = $now->diff($date);
                                    $interval->y;
                                    echo "
                                        <div class=\"col-md-6\"> ". $interval->y." tahun </div>
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
            </div>  
        </div>

    </div>

</div>

</html>