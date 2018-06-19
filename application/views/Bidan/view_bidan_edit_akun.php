<script type="text/javascript">
    var visible = false;
    $(document).ready(function (){
        $('#btn_ubah').click(function(){
            if(visible == false){
                $('#form-uname').slideDown();
                visible = true;
            }else{
                $('#form-uname').slideUp();
                visible = false;
            }
        });
    });
</script>

<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Edit Akun Bidan</h2>
            </div>
        </div>
    </div>
</section>
<div class="container" style="margin-top: 20px">
    <div class="row">
        <!--        <div class="col-md-6">-->
        <div>
            <div class="col-sm-3">
            </div>
            <div class="col-md-6 center-block">
                <div class="col-md-12">
                    <div class="input-field">
                        <input type="text" name="ID_ORANG_TUA" class="form-control"
                               id="ID_ORANG_TUA" required
                               data-validation-required-message="Isikan ID" value="<?php echo $data_bidan['ID_BIDAN']?>" readonly="readonly"/>
                        <label> ID </label>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="input-field">
                        <input id="USERNAME" type="text" name="USERNAME1" class="form-control"
                               required
                               data-validation-required-message="Isikan ID" value="<?php echo $data_user['USERNAME']?>" readonly="readonly"/>
                        <label for="name" class=""> USERNAME </label>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <button type="button" id="btn_ubah" class="btn btn-primary waves-effect waves-dark floatright"  style="width: 150px; margin-top: 11px" href="<?php echo base_url('Ortu_controller/ubah_username/')?>">Ubah Username</button>
                </div>
                <div class="col-md-12">
                    <form method="post" action="<?php echo base_url('User_controller/ubah_username');?>" id="form-uname" class="form" style="display:none">
                        <div class="col-md-8">
                            <div class="input-field">
                                <input type="text" name="USERNAME_BARU" class="form-control"
                                       required data-validation-required-message="ID User tidak boleh kosong" />
                                <label for="name" class=""> Username Baru </label>
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary waves-effect waves-dark floatleft"
                                    style="width: 50px; margin-left: 8px; margin-top: 11px">Ubah</button>
                        </div>
                    </form>
                </div>
                <!--                    <div class="input-field">-->
                <!--                        <input id="NEW_USERNAME" type="text" name="USERNAME" class="form-control"-->
                <!--                               required-->
                <!--                               data-validation-required-message="Isikan Username Baru"/>-->
                <!--                        <label for="name" class=""> Username Baru</label>-->
                <!--                        <p class="help-block"></p>-->
                <!--                    </div>-->
                <!--                </div>-->
                <div class="col-md-8">
                    <div class="input-field">
                        <input type="password" name="PASSWORD" class="form-control"
                               id="PASSWORD" required
                               data-validation-required-message="Isikan ID" value="<?php echo $data_user['PASSWORD']?>" readonly/>
                        <label> PASSWORD </label>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <a href="<?php echo base_url('Bidan_controller/show_editpw_bidan_view/'.$_SESSION['id_pengguna'])?>">
                        <button type="button" class="btn btn-primary waves-effect waves-dark floatleft" style="width: 150px; margin-top: 11px">
                            Ubah Password
                        </button>
                    </a>
                </div>
            </div>
            <div id="success"> </div> <!-- For success/fail messages -->
        </div>
        <!--        </div>-->
    </div>
</div>