<title>Data User</title>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-16">
                <h2 class="pageTitle">Data User</h2>
            </div>
        </div>
    </div>
</section>
<!-- <body> -->
<div class="container" style="margin-top: 20px">
    <!-- <div class="row">
        <div class="col-md-12">
            <a href="#" class="btn btn-primary waves-effect waves-dark">Tambah Data</a>
        </div>
    </div> -->
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
        <script type="text/javascript">
            $(document).ready(function(){
                $('form[id="form-input"]').validate({
                    rules: {
                        id_user: 'required',
                        username: 'required',
                        password: 'required',
                        password_re: {
                            required: true,
                            equalTo: "#usrpassword"
                        },
                        status: 'required',
                        id_pengguna: 'required',
                    },
                    messages: {
                        id_user: 'ID user tidak boleh kosong',
                        username: 'Username tidak boleh kosong',
                        password: 'Password tidak boleh kosong',
                        password_re: 'Password tidak cocok',
                        status: 'Status harus dipilih',
                        id_pengguna: 'Id Pengguna harus dipilih',
                    },
                    submitHandler: function(form){
                        form.submit();
                    },
                    errorPlacement: function(error, element){
                        error.css({'margin-left' : 200, 'font-size': 10});
                        error.appendTo(element.parent());
                        // alert(element.parent().children('label').attr("name"));
                        //element.parent().children('label').text(error.text());
                    }
                });
            });
        </script>
            <form method="post" action="<?php echo base_url('User_controller/edit_data_user');?>" id="form-input" class="form">
                <div class="form-group">
                    <div style="height: auto;
                                line-height: 25px;
                                text-align: center;
                                background-color: #ea3d69">
                        <h3 style=" display: inline-block;
                                    vertical-align: middle;
                                    line-height: normal;
                                    margin-top: 4px">Edit Data 
                                    <?php 
                                        if($data_user['STATUS_USER'] == "admin" || $data_user['STATUS_USER'] == "bidan"){
                                            if($data_user['STATUS_USER'] == "admin")
                                                echo " Admin <p style=\"color:#FFF\">".$data_user['NAMA_BIDAN']."</p>";
                                            else if($data_user['STATUS_USER'] == "bidan")
                                                echo " Bidan <p style=\"color:#FFF\">".$data_user['NAMA_BIDAN'] ."</p>";
                                        }else{
                                            echo " Orang Tua <br> <p style=\"color:#FFF\">".$data_user['NAMA_IBU']." / ".$data_user['NAMA_AYAH']."</p>";
                                        }
                                    ?>
                        </h3>
                    </div>
                </div>
                <div class="input-field">
                    <label for="id_user" class=""> ID User </label>
                    <input type="text" name="id_user" class="form-control" readonly="readonly" value="<?php echo $data_user['ID_USER'];?>" 
                           required data-validation-required-message="ID User tidak boleh kosong" />
                    <p class="help-block"></p>
                </div>
                <div class="input-field">
                    <input type="text" name="username" class="form-control" required
                           data-validation-required-message="Username Tidak boleh kosong" value="<?php echo $data_user['USERNAME'];?>" />
                    <label for="username" class=""> Username </label>
                </div>
                <div class="input-field">
                    <input type="password" id="usrpassword" name="password" class="form-control"
                    required data-validation-required-message="Password tidak boleh kosong" value="<?php echo $data_user['PASSWORD'];?>" />
                    <p class="help-block"></p>
                    <label for="password" class=""> Password </label>
                </div>
                <div class="input-field">
                    <input type="password" name="password_re" class="form-control"
                    required data-validation-required-message="Password ulang tidak boleh kosong" value="<?php echo $data_user['PASSWORD'];?>" 
                     id="confirm_password" />
                    <div class="help-block"></div>
                    <label for="password_re" class=""> Password Ulang </label>
                </div>
                <div class="form-group">
                    <label for="name" class=""> Status User </label>
                        <?php 
                            $status = array(
                                array("null","-- Status User --"),
                                array("bidan", "Bidan"),
                                array("admin","Admin"),
                                array("ortu","Orang Tua"));
                            foreach ($status as $row) {
                                if($row[0] == $data_user['STATUS_USER']){
                                    echo "<input class=\"form-control\" type=\"text\" name=\"statusw\" value=\"".$row[1]."\" readonly/>";
                                    echo "<input type=\"text\" name=\"status\" value=\"".$row[0]."\" style=\"display: none\"/>";
                                }
                            }
                        ?>
                        <!-- <option value="null">-- Status User --</option>
                        <option value="bidan">Bidan</option>
                        <option value="admin">Admin</option>
                        <option value="ortu">Orang Tua</option> -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="name" class=""> ID Pengguna </label>
                    <input class="form-control" type="text" name="id_pengguna" value="<?php echo $data_user['ID_PENGGUNA'];?>" readonly>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="submit" value="Edit"/>
                </div>
            </form>
        </div>
    </div>
</div>
<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a>
</body>
