        <section id="inner-headline">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12">

                        <h2 class="pageTitle">Login</h2>

                    </div>

                </div>

            </div>

        </section>

        <section id="content">

    		<div class="container content">		

            <!-- Service Blcoks -->

                <?php if(isset($error_msg)){ ?>

                    <div class="row"> 

                        <div class="col-md-3">

                        </div>

                        <div class="col-md-6">

                            <div class="alert alert-danger" style="width: 100%; text-align: center;"><?php echo $error_msg;?></div>

                        </div>

                    </div>

                <?php } ?>

        		<div class="row"> 

                    <div class="col-md-3">

                    </div>

        			<div class="col-md-6">



        				<form method="post" action="<?php echo base_url('User_controller/login_user')?>">

                          <div class="form-group">

                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">

                          </div>

                          <div class="form-group">

                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">

                          </div>

                          <div class="form-group" >

                            <button type="submit" class="btn btn-default center-block">Submit</button>

                          </div>

                        </form> 

        			</div>

                    <div class="col-md-3">

                    </div>

        		</div>

            </div>

        </section>