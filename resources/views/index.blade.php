<!DOCTYPE html>
<html lang="en">

<!-- dustech/  13 Nov 2019 12:52:03 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="irstheme">

    <title> GMTenergy </title>
@push('styles')

    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/flaticon.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/odometer-theme-default.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/jquery.fancybox.css') }}" rel="stylesheet">




    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->

        <!-- end preloader -->



        <!-- Start header -->
        <header id="header" class="site-header header-style-1">
            <nav class="navigation navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index-2.html"><img src="{{ URL::asset('images/GMT-logo_g.png') }}" alt></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navigation-holder">
                        <button class="close-navbar"><i class="ti-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="menu-item-has-children">
                                <a href="#">Home</a>
                            </li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/services">Services</a></li>
                            <li><a href="/track">Track Record</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->


                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->


        <!-- start of hero -->
        <section class="hero-slider hero-style-1">
            <div class="swiper-container">
            <div class="slide-inner slide-bg-image">
                        <video autoplay muted loop id="myVideo" style="width:100%">
                            <source src="{{ URL::asset('images/istockphoto-1995861344-640_adpp_is.mp4') }}" type="video/mp4">
                        </video>
                        </div>
                 <!-- end swiper-slide -->

<!-- end swiper-slide -->
                </div>
                <!-- end swiper-wrapper -->

                <!-- swipper controls -->

            </div>
        </section>
        <!-- end of hero slider -->


        <!-- start about-us-section -->
        <section class="about-us-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title">
                            <span>About us</span>
                            <h2>WHO WE ARE.</h2>
                        </div>
                        <div class="details">
                            <p>Established 2007, GMT Energy Resources Limited is a fully integrated, Offshore Engineering, Procurement and Installation company, with offices in Lagos and Port-Harcourt. In 2019, we expanded internationally, opening our first overseas office in Georgetown, Guyana. Our extensive major projects footprint in Nigeria, combined with the deep technical expertise of our people, technology capability and world-class assets, within the Nigerian Deepwater offshore sector, enables us to deliver comprehensive and connected subsea engineering services. </p>


                        </div>
                    </div>

                </div>
            </div> <!-- end container -->
        </section>
        <!-- end about-us-section -->


        <!-- start service-section -->
        <section class="service-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6">
                        <div class="section-title-s2">
                            <span>Our Industry Solutions</span>
                            <h2>SIMPLE AND EFFICIENT</h2>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="service-grids clearfix">
                            <div class="grid" style="color: transparent;">
                                <i>
                                <img src="{{ URL::asset('images/GMTsimple.gif') }}" alt>
                                </i>

                            </div>
                            <div class="grid" style="color: transparent;">
                                <i>
                                <img src="{{ URL::asset('images/GMTsimple.gif') }}" alt>
                                </i>

                            </div>
                            <div class="grid" style="color: transparent;">
                                <img src="{{ URL::asset('images/GMTsimple.gif') }}" alt>


                            </div>

                        </div>
                        <div class="view-all">
                            <p>Please check out our <a href="#">All Services</a></p>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end service-section -->


        <!-- start why-choose-section -->
        <section class="why-choose-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
                        <div class="section-title-s3">
                            <span>Our Features</span>
                            <h2>Our Subsidiary Companies</h2>
                            <p>Through our dynamic group structure, we will streamline offshore energy delivery upstream, extend our capability efficiently downstream to become a major gas player and lead the way in providing more competitive power solutions. Together, this exceptional platform will allow GMT to make a real difference for clients across the energy value chain, both in Nigeria and around the world.</p>

                        </div>
                        <div class="col col-xs-12">


                    </div>
                    </div>
                </div>
                <div class="row">
                @include('mid')

                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end why-choose-section -->


        <!-- start testimonials-section -->

        <!-- end testimonials-section -->


        <!-- start featured-project-section -->
        <section class="featured-project-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
                        <div class="section-title-s5">
                            <h2>Our Core Business</h2>
                            <p>Our technical and services capability ensures that clients needs are met in a coordinated and committed manner locally, fostering closer relationships with the operators that we work with and a sustained focus on best practice.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-area">
                <div class="project-grids clearfix">
                    <div class="grid">
                        <div class="overlay">
                            <h3>ENGINEERING, PROCUREMENT, CONSTRUCTION & INSTALLATION (EPCI)</h3>
                            <p>Engineering: FEED including Detailed Engineering<br><br>Procurement: Pipes, Steel and Project Materials<br><br>Fabrication: Piping, Structures, Skids, PLEM, PLET, ILT,Jumpers, SPM<br><br>Offshore Installation, Commissioning and Decommissioning.</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="overlay">
                            <h3>MARINE LOGISTICS</h3>
                            <p>Multi-Purpose Support Vessels – MPSV<br><br>Subsea Construction Vessels<br><br>Offshore Accommodation Vessels<br><br>Pipelay Installation Vessels<br><br>As Class AA Marine vessel supplier in Nigeria, we are automatically pre-qualified to proceed to the technical stage of any contracting process and given first consideration by Operators and stakeholders in all tenders for all types of vessels</b></p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="overlay">
                            <h3>OPERATIONS, INSTALLATION, MAINTENANCE& REPAIR SERVICES</h3>
                            <p>Routine Maintenance Inspections<br><br>Turn Around Maintenance<br><br>Life Extensionn Asset Integrity<br><br>Brownfield servicesn Pipeline Maintenance Services<br><br>Subsea Wellhead Maintenance</p>

                        </div>
                    </div>
                    <div class="grid">
                        <div class="overlay">
                            <h3>SUBSEA INSTALLATION & INTERVENTION SERVICES</h3>
                            <p>Subsea Construction & Intervention<br><br>Subsea Installation & Engineering<br><br>Drilling Service Support<br><br>Offshore Project Manpower Provision<br><br>Project Management & Logistics support Fabrication<br><br>ROV Systems & Personnel ROV Tooling<br><br>Diving Services</p>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- end featured-project-section -->


        <!-- start partners-section -->

        <!-- end partners-section -->


        <!-- start fun-fact-section -->
        <section class="fun-fact-section">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="fun-fact-grids clearfix">
                            <div class="grid">
                                <div class="info">
                                    <i class="fi flaticon-worker"></i>
                                    <h3><span class="odometer" data-count="1200">00</span></h3>
                                    <p>Employed</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="info">
                                    <i class="fi flaticon-engineer"></i>
                                    <h3><span class="odometer" data-count="1500">00</span></h3>
                                    <p>Project Completed</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="info">
                                    <i class="fi flaticon-trophy"></i>
                                    <h3><span class="odometer" data-count="25">00</span>+</h3>
                                    <p>Award Won</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="info">
                                    <i class="fi flaticon-like-1"></i>
                                    <h3><span class="odometer" data-count="100">00</span>%</h3>
                                    <p>Satisfied customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end fun-fact-section -->


        <!-- start team-section -->
        <section class="team-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
                        <div class="section-title-s5">

                            <h2>OUR MAJOR CLIENTS</h2>
                            <p>We succeed when our clients succeed. GMT is proud to have consistently grown its business and market reputation as a trusted and reliable support to the global and local operators we work with.

We continually work to forge closer links with operators to reduce cost and project delivery timelines.<br><br> We value health, safety, and the environment, compliance with local and international laws as well as being a trusted partner to governments and communities.</p>
@include('test')
</div>
                    </div>
                </div>

            </div> <!-- end container -->
        </section>
        <!-- end team-section -->



        <!-- end blog-section -->


        <!-- start cta-section -->

        <!-- end cta-section -->


        <!-- start site-footer -->
        @include('footer')
        <!-- end site-footer -->


    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

    <!-- Plugins for this template -->
    <script src="{{ URL::asset('js/jquery-plugin-collection.js') }}"></script>

    <!-- Custom script for this template -->
    <script src="{{ URL::asset('js/script.js') }}"></script>
</body>

<!-- dustech/  13 Nov 2019 12:54:40 GMT -->
</html>
