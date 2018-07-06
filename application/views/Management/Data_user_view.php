<script type="text/javascript">
    $(document).ready( function () {
        $('#table_user').DataTable();
    } );

    var visible = false;
    $(document).ready(function (){
        $('#btn_tambah').click(function(){
            if(visible == false){
                $('#form-input').slideDown();
                visible = true;
            }else{
                $('#form-input').slideUp();
                visible = false;
            }
        });
    });

    $(document).ready( function () {
        $('#status').change(function(){
            var status_user = $(this).val();
            $.post(
                "<?php echo base_url('User_controller/get_id_pengguna')?>",
                {status : status_user},
                function(returnData){
                    var res = JSON.parse(returnData);
                    $('#id_pengguna').empty();
                    $('#id_pengguna').append('<option value="">-- ID Pengguna --</option>');
                    for(var i = 0; i < res.length; i++){
                        $('#id_pengguna').append($('<option>', 
                            {
                                value : res[i].ID_PENGGUNA,
                                text : res[i].ID_PENGGUNA + " / " + res[i].NAMA
                            }
                        ));
                    }
                }
            );
        });
    } );

</script>

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
        <div class="col-md-2">
            <button id="btn_tambah" class="btn btn-primary" style="width:auto; padding-right: 12px">Tambah Data User   </button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
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

            <form method="post" action="<?php echo base_url('User_controller/input_data_user');?>" id="form-input" class="form" style="display:none">
                <div class="form-group">
                    <div style="height: 50px;
                                line-height: 25px;
                                text-align: center;
                                background-color: #ea3d69">
                        <h2 style=" display: inline-block;
                                    vertical-align: middle;
                                    line-height: normal;
                                    margin-top: 4px">Tambah Data User</h2>
                    </div>
                </div>
                <div class="input-field">
                    <label for="id_user" class=""> ID User </label>
                    <input type="text" name="id_user" id="id_user" class="form-control" readonly="readonly" value="<?php echo $id_user;?>"
                           required data-validation-required-message="ID User tidak boleh kosong" />
                    <p class="help-block"></p>
                </div>
                <div class="input-field">
                    <input type="text" name="username" id="username" class="form-control" required
                           data-validation-required-message="Username Tidak boleh kosong" />
                    <label for="username" class=""> Username </label>
                </div>
                <div class="input-field">
                    <input type="password" id="usrpassword" name="password" class="form-control"
                    required data-validation-required-message="Password tidak boleh kosong" />
                    <p class="help-block"></p>
                    <label for="password" class=""> Password </label>
                </div>
                <div class="input-field">
                    <input type="password" name="password_re" id="repassword" class="form-control"
                    required data-validation-required-message="Password ulang tidak boleh kosong" id="confirm_password" />
                    <div class="help-block"></div>
                    <label for="password-re" class=""> Password Ulang </label>
                </div>
                <div class="form-group">
                    <label for="name" class=""> Status User </label>
                    <select id="status" name="status" class="form-control">
                        <option value="">-- Status User --</option>
                        <option value="bidan">Bidan</option>
                        <option value="admin">Admin</option>
                        <option value="ortu">Orang Tua</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name" class=""> ID Pengguna </label>
                    <select id="id_pengguna" name="id_pengguna" class="form-control">
                        <option value="">-- ID Pengguna --</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="submit" value="Tambahkan"/>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div style="overflow-x: auto;">
            <table id="table_user" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th style="text-align: center; width:40px;">No.</th>
                    <th style="text-align: center;">ID User</th>
                    <th style="text-align: center;">Nama Pengguna</th>
                    <th style="text-align: center;">Status</th>
                    <th style="text-align: center;">Username</th>
                    <th style="text-align: center; width:125px;">Aksi
                        </p></th>
                </tr>
                </thead>
                <tbody>
                <?php
                    if (isset($data_user)){
                    $no=1;
                    foreach ($data_user as $res){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $res['ID_USER']; ?></td>
                    <?php 
                        if($res['STATUS_USER'] == "admin" || $res['STATUS_USER'] == "bidan"){
                            echo "<td>".$res['NAMA_BIDAN']."</td>";
                        }else{
                            echo "<td>".$res['NAMA_IBU']."/".$res['NAMA_AYAH']."</td>";
                        }
                    ?>
                    
                    <td><?php echo $res['STATUS_USER']; ?></td>
                    <td><?php echo $res['USERNAME']; ?></td>
                    <td style="text-align: center;">
                        <a href="<?php echo base_url('User_controller/detail_user/'.$res['ID_USER'])?>" class="btn-table" title="Edit"><span class="fa fa-edit" aria-hidden="true"></span>
                        <a href="<?php echo base_url('User_controller/delete_user/'.$res['ID_USER'])?>" class="btn-table" title="Edit"><span class="fa fa-trash-o" aria-hidden="true"></span>
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
</div>

<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a>

<script type="text/javascript">
    $(document).ready( function () {
        $('#table_user').DataTable();
    } );
</script>
