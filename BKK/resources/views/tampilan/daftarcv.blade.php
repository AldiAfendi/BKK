<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BKK PENELUSURAN ALUMNI</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Themesdesign" />

    <link rel="shortcut icon" href="images/black.png">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />

    <link rel="stylesheet" type="text/css" href="css/fontawesome.css" />

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="css/selectize.css" />

    <link rel="stylesheet" type="text/css" href="css/nice-select.css" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&amp;display=swap" rel="stylesheet">


    
    <link rel="stylesheet" href="assep/css/animate.min.css">
    <link rel="stylesheet" href="assep/css/bootstrap.min.css">
    <link rel="stylesheet" href="assep/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assep/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assep/css/magnific-popup.css">
    <link rel="stylesheet" href="assep/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assep/css/swiper.min.css">
    <link rel="stylesheet" href="assep/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="assep/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assep/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assep/css/vegas.min.css">
    <link rel="stylesheet" href="assep/css/nouislider.min.css">
    <link rel="stylesheet" href="assep/css/nouislider.pips.css">
    <link rel="stylesheet" href="assep/css/ziston-icon.css">
    <link rel="stylesheet" href="assep/css/ziston-new-icons.css">
    <!-- Template styles -->
    <link rel="stylesheet" href="assep/css/style.css">
    <link rel="stylesheet" href="assep/css/responsive.css">

    <style>
        [class=foto-profile]{
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }
        [class=foto-profile] +img{
            cursor: pointer;
        }
        
    </style>
</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <!-- Navigation Bar-->
    <header class="main-nav__header-one">
        <nav class="header-navigation three stricky">
            <div class="container-box clearfix">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="main-nav__left main-nav__left_one float-left">
                    <div class="logo_one">
                        <a href="index.html" class="main-nav__logo">
                            <img src="assep/images/resources/logo-black.png" alt="Awesome image" class="logo-light" height="75">
                        </a>
                    </div>
                    <a href="#" class="side-menu__toggler">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>

                <div class="main-nav__main-navigation three float-left">
                    <ul class=" main-nav__navigation-box">
                        <li>
                            <a href="{{ url('index') }}">HOME</a>
                           <!-- /.sub-menu -->
                        </li>
                       
                        <li>
                            <a href="{{ url('listing') }}">LOWONGAN</a>
                            <!-- /.sub-menu -->
                        </li>
                        <li>
                            <a href="{{ url('blog') }}">ALUMNI</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="main-nav__right main-nav__right_one three float-right">

                    <div class="header_btn_1">
                        <a href="login.html"><span class="icon-add"></span>Login</a>
                    </div>
                   
                    <div class="icon-search-box">
                        <a href="#" class="main-nav__search search-popup__toggler">
                            <i class="icon-magnifying-glass"></i>
                        </a>
                    </div>


                </div>

            </div>
        </nav>
    </header>
    <!-- Navbar End -->
    
    <!-- Start home -->
      <section class="page-header" style="background-image: url(assep/images/backgrounds/page-header-contact.jpg);">
            <div class="container">
                <h2>DAFTARKAN DIRIMU SEKARANG JUGA</h2>
            </div>
        </section>
    <!-- end home -->

    <!-- CREATE RESUME START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-dark">Informasi Pribadi:</h5>
                </div>
 
                <div class="col-12 mt-3">
                    <div class="custom-form p-4 border rounded">
                      <center><label >
                           <img src="https://via.placeholder.com/400X400//88929f/5a6270C/O https://placeholder.com/" class="img-fluid avatar avatar-medium d-block mx-auto rounded-pill" alt=""> <input type="file" name="profile" class="foto-profile">
                        </label></center>
                        <form>
                            <div class="row mt-4">
                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Nama Lengkap<span class="text-danger">*</span> :</label>
                                        <input id="first-name" type="text" name="name" class="form-control resume" placeholder="Nama Depan :">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Telepon<span class="text-danger">*</span> :</label>
                                        <input id="middle-name" type="text" class="form-control resume" placeholder="nama tengah :">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Email<span class="text-danger">*</span> :</label>
                                        <input id="surname-name" type="text" class="form-control resume" placeholder="nama belakang :">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Lahir<span class="text-danger">*</span> :</label>
                                        <input id="date-of-birth" type="text" class="form-control resume" placeholder="tgl/bln/thn">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Jenis Kelamin<span class="text-danger">*</span> :</label>
                                        <div class="form-button">
                                            <select class="nice-select rounded">
                                                <option data-display="jeniskelamin">......</option>
                                                <option value="1">Laki-Laki</option>
                                                <option value="2">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group app-label">
                                        <label class="text-muted">Status</label>
                                        <div class="form-button">
                                            <select class="nice-select rounded">
                                                <option data-display="Status">Status</option>
                                                <option value="1">Belum Menikah</option>
                                                <option value="2">Sudah Menikah</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label>Alamat Lengkap :</label>
                                        <textarea id="address" rows="4" class="form-control resume" placeholder=""></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <h5 class="text-dark">Informasi Lainnya :</h5>
                </div>

                <div class="col-12 mt-3">
                    <div class="custom-form p-4 border rounded">
                        <form>
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label>Riwayat Pendidikan :</label>
                                        <textarea id="address" rows="4" class="form-control resume" placeholder=""></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label>Prestasi :</label>
                                        <textarea id="address" rows="4" class="form-control resume" placeholder=""></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label>Kemampuan :</label>
                                        <textarea id="address" rows="4" class="form-control resume" placeholder=""></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label>Pengalaman :</label>
                                        <textarea id="address" rows="4" class="form-control resume" placeholder=""></textarea>
                                        <input type="file" name="contoh" class="">
                                        <h6 class="text-danger"><br>*Jika ada karya</h6>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="">Sertifikat :</label><br>
                                    <input type="file" id="" name="sertifikat" class="submitBnt btn btn-info" value="">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 mt-4">
                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Submit Resume">
                    </div>
                </div>
            </div>

        
        </div>
    </section>
    <!-- CREATE RESUME END -->


    <!-- footer start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a href="javascript:void(0)"><img src="images/Gawe.Id.png" height="70" alt="" ></a><b>Gawe.Id</b>
                    <p class="mt-4">Jelajahi Dunia Kerja Dengan Mudah Bersama Kami Gawe.Id</p>
                    <ul class="social-icon social list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-google"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title">Perusahaan</p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Registrasi Perusahaan</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Informasi Perusahaan</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Lowongan Kerja</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title">Pekerja</p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Registrasi Pekerja</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Create Resume</a></li>
                        <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Tips</a></li>
                    </ul>
                </div>
            
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title f-17">Tentang Kami</p>
                    <ul class="list-unstyled text-foot mt-4 mb-0">
                        <li>Senin - Jum'at : 08:00 to 16:00</li>
                        <li class="mt-2">Sabtu : 10:00 to 15:00</li>
                        <li class="mt-2">Minggu : Libur (Holiday)</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <hr>
    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="">
                        <p class="mb-0">© 2021.2022 Gawe.Id  <i class="mdi mdi-heart text-danger"></i> by Ultramen.</p>
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </footer><!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" class="back-to-top rounded text-center" id="back-to-top"> 
        <i class="mdi mdi-chevron-up d-block"> </i> 
    </a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/plugins.js"></script>

    <!-- selectize js -->
    <script src="js/selectize.min.js"></script>

    <script src="js/jquery.nice-select.min.js"></script>

    <script src="js/app.js"></script>

</body>
</html>