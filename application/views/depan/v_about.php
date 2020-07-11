<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About Us</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/icon.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
</head>

<body>
    <!--============================= HEADER =============================-->
    
    <div data-toggle="affix" style="border-bottom:solid 1px #f2f2f2;">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="50px;" src="<?php echo base_url().'theme/images/logo-dark.png'?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('');?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('about');?>">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('administrator');?>">Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('konsultan');?>">Consult</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('order');?>">Order</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('dokumentasi');?>">Dokumentasi Kami</a>
                                </li>
								<li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('download');?>">Download</a>
                                </li>
                          </ul>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </div>
      <section>
</section>
<!--//END HEADER -->
<!--//END ABOUT IMAGE -->
<!--============================= WELCOME TITLE =============================-->
<section class="welcome_about">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2>About Us</h2>
                <p>pernah merasa bosan dengan yang itu-itu aja, terasa umum dan biasa-biasa aja juga udah sangat mainstream?
				  pingin ngerancang sesuai kebutuhan, gaya, dan keinginanmu?
				  jadikan karyamu gayamu yang eksklusif hanya untukmu.
				   
                </p>
                <p>
				  Just For Us adalah aplikasi berbasis web yang dapat memudahkan customer dalam membuat rancangan karyanya.
                  Dengan Merancang melalui Just For Us, customer dapat melakukan konsultasi dengan konsultan handal yang telah bekerja sama dengan kami.
                  Tidak hanya melakukan rancangan, melalui Just For Us customer dapat merealisasikan rancangannya dengan bantuan vendor terbaik kami.
                  
                </p>
                </div>
                <div class="col-md-5">
                    <img src="<?php echo base_url().'theme/images/welcome-img.jpg'?>" class="img-fluid" alt="#">
                </div>
            </div>
        </div>
    </section>
    <!--//END WELCOME TITLE -->
    <!--============================= TESTIMONIAL =============================-->
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Testimoni Kami</h2>
                </div>
                <div class="col-md-12">
                    <div class="single-item">
                        <div class="quote">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <p class="quote_text">Just For Us benar-benar mengagumkan. Saya sangat senang bisa merancang dan merealisasikan desain saya di Just For Us.</p>
                            <div class="testi-img_block">
                                <img src="<?php echo base_url().'theme/images/student-1.jpg'?>" class="img-fluid" alt="#">
                                <p><span>Catur Silviana</span>Mahasiswi</p>
                            </div>
                        </div>
                        <div class="quote">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <p class="quote_text">Benar-benar menarik! desain saya mendapat banyak masukan dari konsultan terkenal. </p>
                            <div class="testi-img_block">
                                <img src="<?php echo base_url().'theme/images/student-2.jpg'?>" class="img-fluid" alt="#">
                                <p><span>Lilian York</span>Ibu Rumah Tangga</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END TESTIMONIAL -->
         <!--============================= FOOTER =============================-->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="foot-logo">
                            <p><?php echo date('Y');?> © copyright by <a>CSR 06050</a>. <br>All rights reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="sitemap">
                                <h3>Menu Utama</h3>
                                <ul>
                                    <li><a href="<?php echo site_url();?>">Home</a></li>
                                    <li><a href="<?php echo site_url('about');?>">About Us</a></li>
                                    <li><a href="<?php echo site_url('konsultan');?>">Consult</a></li>
                                    <li><a href="<?php echo site_url('order');?>">Order</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                          <div class="sitemap">
                              <h3>Dokumentasi Kami</h3>
                              <ul>
                                  <li><a href="<?php echo site_url('dokumentasi');?>">Dokumentasi</a></li>
                                  <li><a href="<?php echo site_url('download');?>">Download</a></li>
                              </ul>
                          </div>
                        </div>
                        <div class="col-md-3">
                            <div class="address">
                                <h3>Hubungi Kami</h3>
                                <p><span>Alamat: </span> Semarang, Jawa Tengah, INA.</p>
                                <p>Email : justforyou@gmail.com
                                    <br> Phone : +123 456 789 012</p>
                                    <ul class="footer-social-icons">
                                        <li><a href="#"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin fa-in" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter fa-tw" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!--//END FOOTER -->
                <!-- jQuery, Bootstrap JS. -->
                <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
                <!-- Plugins -->
                <script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
                <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
                <!-- Subscribe -->
                <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
                <!-- Script JS -->
                <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
            </body>

            </html>
