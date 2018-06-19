<script>
    var password = document.getElementById("PASSWORD_BARU")
        , confirm_password = document.getElementById("PASSWORD_BARU2");

    function validatePassword(){
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Edit Akun Ortu</h2>
            </div>
        </div>
    </div>
</section>
<div class="container" style="margin-top: 20px">
    <div class="row">
        <!--        <div class="col-md-6">-->
        <form method=post name="sentMessage" id="contactForm" action="<?php echo base_url('User_controller/ubah_password');?>" novalidate>
            <div class="col-sm-3">

            </div>
            <div class="col-md-6 center-block">
                <div class="col-md-12">
                    <div class="input-field" hidden>
                        <input type="text" name="ID_USER" class="form-control"
                               id="ID_USER" required
                               data-validation-required-message="Isikan Password Baru" value="<?php echo $_SESSION['id_user']?>"/>
                        <label> ID_USER </label>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="input-field">
                        <input type="password" name="PASSWORD_BARU" class="form-control"
                               id="PASSWORD1" required
                               data-validation-required-message="Isikan Password Baru"/>
                        <label> Password Baru </label>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="input-field">
                        <input type="password" name="PASSWORD_BARU2" class="form-control"
                               id="PASSWORD2" required
                               data-validation-required-message="Isikan Konfirmasi Password Baru"/>
                        <label> Konfirmasi Password Baru </label>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="col-md-12 center-block">
                    <button type="submit" class="btn btn-primary waves-effect waves-dark center-block">Update</button>
                </div>
            </div>
            <div id="success"> </div> <!-- For success/fail messages -->
        </form>
        <!--        </div>-->
    </div>
</div>