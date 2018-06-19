<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bidan Sahabatku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <!-- css -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>materialize/css/materialize.min.css" media="screen,projection" />
    <link href="<?php echo base_url('assets/');?>css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/');?>css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/');?>css/flexslider.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/');?>css/style.css" rel="stylesheet" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!-- javascript -->
    <script src="<?php echo base_url('assets/');?>js/jquery.js"></script>
    <script src="<?php echo base_url('assets/');?>js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url('assets/');?>materialize/js/materialize.min.js"></script>
    <script src="<?php echo base_url('assets/');?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/');?>js/jquery.fancybox.pack.js"></script>
    <script src="<?php echo base_url('assets/');?>js/jquery.fancybox-media.js"></script>
    <script src="<?php echo base_url('assets/');?>js/jquery.flexslider.js"></script>
    <script src="<?php echo base_url('assets/');?>js/animate.js"></script>
    <!-- Vendor Scripts -->
    <script src="<?php echo base_url('assets/');?>js/modernizr.custom.js"></script>
    <script src="<?php echo base_url('assets/');?>js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url('assets/');?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url('assets/');?>js/animate.js"></script>
    <script src="<?php echo base_url('assets/');?>js/custom.js"></script>
    <!-- end of javascript-->

</head>
<body>
<div id="wrapper" class="home-page">
    <header class="topbar">
        <div class="container">
            <div class="row">
                <!-- social icon-->
                <div class="col-sm-3">
                    <ul class="social-network">
                        <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <ul class="info">
                            <li><i class="icon-info-blocks material-icons">question_answer</i><span>info@active.com</span></li>
                            <li><i class="icon-info-blocks material-icons">perm_phone_msg</i><span>+(012) 345 6789</span></li>
                        </ul>
                        <div class="clr"></div>
                    </div>
                </div>
                <!-- info -->

            </div>
        </div>
    </header>

    <!-- start header -->
    <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><i class="icon-info-blocks material-icons">account_balance</i>Kids<strong>school</strong></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a class="waves-effect waves-dark" href="<?php echo base_url('User_controller')?>">Beranda</a></li>
                        <?php
                        if(isset($_SESSION['status']) && (($_SESSION['status'] == "admin") || ($_SESSION['status'] == "bidan"))){
                            if($_SESSION['status'] == "admin"){
                                ?>
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Management<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="waves-effect waves-dark" href="<?php echo base_url('Management_controller/show_data_ortu')?>">Data Ibu</a></li>
                                        <li><a class="waves-effect waves-dark" href="<?php echo base_url('Management_controller/show_data_bidan')?>">Data Bidan</a></li>
                                        <li><a class="waves-effect waves-dark" href="<?php echo base_url('Management_controller/show_data_bidan')?>">Data User</a></li>
                                    </ul>
                                </li>
                                <li><a class="waves-effect waves-dark" href="portfolio.html">Layanan Bayi</a></li>
                                <?php
                            }else if($_SESSION['status'] == "bidan"){
                                ?>
                                <li><a class="waves-effect waves-dark" href="<?php echo base_url('Management_controller/show_data_ortu')?>">Data Ibu</a></li>
                                <li><a class="waves-effect waves-dark" href="portfolio.html">Layanan Bayi</a></li>
                                <?php
                            }}
                        if(isset($_SESSION['status']) && ($_SESSION['status'] == "admin")){
                            ?>

                            <li><a class="waves-effect waves-dark" href="pricing.html">Laporan</a></li>
                        <?php }?>

                        <li><a class="waves-effect waves-dark" href="pricing.html">About Us</a></li>
                        <li><a class="waves-effect waves-dark" href="contact.html">Contact</a></li>
                        <?php
                        if(isset($_SESSION['username'])){
                            echo "<li><a class=\"waves-effect waves-dark\" href=\"". base_url('User_controller/logout_user')."\">LOGOUT</a></li>";
                        }else{
                            echo "<li><a class=\"waves-effect waves-dark\" href=\"". base_url('User_controller/login_user')."\">LOGIN</a></li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <section id="banner">

        <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
                <li>
                    <img src="<?php echo base_url('assets/');?>img/slides/2.jpg" alt="" />
                    <div class="flex-caption">
                        <h3>Best Learning</h3>
                        <p>The Primary School Integrated model education</p>

                    </div>
                </li>
                <li>
                    <img src="<?php echo base_url('assets/');?>img/slides/1.jpg" alt="" />
                    <div class="flex-caption">
                        <h3>Early Childhood</h3>
                        <p>We envision a world in which every child</p>

                    </div>
                </li>
            </ul>
        </div>
        <!-- end slider -->
    </section>
    <section class="feature">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aligncenter"><h2 class="aligncenter">Our Programs</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, <br/>doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</div>
                    <br/>
                </div>
            </div>

            <div class="row service-v1 margin-bottom-40">
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="card small">
                        <div class="card-image">
                            <img class="img-responsive" src="<?php echo base_url('assets/');?>img/service1.jpg" alt="">
                            <span class="card-title">Science Programs</span>
                        </div>
                        <div class="card-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="card small">
                        <div class="card-image">
                            <img class="img-responsive" src="<?php echo base_url('assets/');?>img/service2.jpg" alt="">
                            <span class="card-title">Computers Programs</span>
                        </div>
                        <div class="card-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="card small">
                        <div class="card-image">
                            <img class="img-responsive" src="<?php echo base_url('assets/');?>img/service3.jpg" alt="">
                            <span class="card-title">Sports Programs</span>
                        </div>
                        <div class="card-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">

            <section class="services">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aligncenter"><h2 class="aligncenter">Curriculum</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, <br/>doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</div>
                        <br/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 info-blocks">
                        <i class="icon-info-blocks material-icons">track_changes</i>
                        <div class="info-blocks-in">
                            <h3>Nuvo</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                        </div>
                    </div>
                    <div class="col-sm-4 info-blocks">
                        <i class="icon-info-blocks material-icons">settings_input_svideo</i>
                        <div class="info-blocks-in">
                            <h3>Play Group</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                        </div>
                    </div>
                    <div class="col-sm-4 info-blocks">
                        <i class="icon-info-blocks material-icons">queue_music</i>
                        <div class="info-blocks-in">
                            <h3>Nursery</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 info-blocks">
                        <i class="icon-info-blocks material-icons">my_location</i>
                        <div class="info-blocks-in">
                            <h3>PP1</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                        </div>
                    </div>
                    <div class="col-sm-4 info-blocks">
                        <i class="icon-info-blocks material-icons">shuffle</i>
                        <div class="info-blocks-in">
                            <h3>PP2</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                        </div>
                    </div>
                    <div class="col-sm-4 info-blocks">
                        <i class="icon-info-blocks material-icons">tab_unselected</i>
                        <div class="info-blocks-in">
                            <h3>PP3</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>







    <section class="section-padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>About Us</h2>
                        <p>Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada Pellentesque <br>ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about-text">
                        <strong>Our Mission</strong>
                        <p>Grids is a responsive Multipurpose Template. Lorem ipsum. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                        <strong>Our Vision</strong>
                        <p>We envision a world in which every child with regardless of background, dolor sit amet, consectetur adipiscing elit.</p>
                        <strong>Awards & Recognition</strong>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                        <a href="#" class="btn btn-primary waves-effect waves-dark">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="about-image">
                        <img src="<?php echo base_url('assets/');?>img/about.jpg" alt="About Images">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="widget">
                        <h5 class="widgetheading">Our Contact</h5>
                        <address>
                            <strong>Bootstrap company Inc</strong><br>
                            JC Main Road, Near Silnile tower<br>
                            Pin-21542 NewYork US.</address>
                        <p>
                            <i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
                            <i class="icon-envelope-alt"></i> email@domainname.com
                        </p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="widget">
                        <h5 class="widgetheading">Quick Links</h5>
                        <ul class="link-list">
                            <li><a class="waves-effect waves-dark" href="#">Latest Events</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Terms and conditions</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Privacy policy</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Career</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="widget">
                        <h5 class="widgetheading">Latest posts</h5>
                        <ul class="link-list">
                            <li><a class="waves-effect waves-dark" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Natus error sit voluptatem accusantium doloremque</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="widget">
                        <h5 class="widgetheading">Recent News</h5>
                        <ul class="link-list">
                            <li><a class="waves-effect waves-dark" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Natus error sit voluptatem accusantium doloremque</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright">
                            <p>
                                <span>&copy; Bootstrap Template 2018 All right reserved. Template By </span><a href="https://webthemez.com/" target="_blank">WebThemez</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="social-network">
                            <li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                            <li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a>

</body>
</html>