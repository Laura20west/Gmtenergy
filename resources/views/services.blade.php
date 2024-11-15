<!DOCTYPE html>
<html lang="en">

<!-- dustech/services-s2.html  13 Nov 2019 12:55:46 GMT -->
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
        <div class="preloader">
            <div class="loader">
                <div class="gear two">
                    <svg viewbox="0 0 100 100" fill="#131e4a">
                        <path d="M97.6,55.7V44.3l-13.6-2.9c-0.8-3.3-2.1-6.4-3.9-9.3l7.6-11.7l-8-8L67.9,20c-2.9-1.7-6-3.1-9.3-3.9L55.7,2.4H44.3l-2.9,13.6      c-3.3,0.8-6.4,2.1-9.3,3.9l-11.7-7.6l-8,8L20,32.1c-1.7,2.9-3.1,6-3.9,9.3L2.4,44.3v11.4l13.6,2.9c0.8,3.3,2.1,6.4,3.9,9.3      l-7.6,11.7l8,8L32.1,80c2.9,1.7,6,3.1,9.3,3.9l2.9,13.6h11.4l2.9-13.6c3.3-0.8,6.4-2.1,9.3-3.9l11.7,7.6l8-8L80,67.9      c1.7-2.9,3.1-6,3.9-9.3L97.6,55.7z M50,65.6c-8.7,0-15.6-7-15.6-15.6s7-15.6,15.6-15.6s15.6,7,15.6,15.6S58.7,65.6,50,65.6z"></path>
                    </svg>
                </div>
                <div class="gear three">
                    <svg viewbox="0 0 100 100" fill="#fd5f17">
                        <path d="M97.6,55.7V44.3l-13.6-2.9c-0.8-3.3-2.1-6.4-3.9-9.3l7.6-11.7l-8-8L67.9,20c-2.9-1.7-6-3.1-9.3-3.9L55.7,2.4H44.3l-2.9,13.6      c-3.3,0.8-6.4,2.1-9.3,3.9l-11.7-7.6l-8,8L20,32.1c-1.7,2.9-3.1,6-3.9,9.3L2.4,44.3v11.4l13.6,2.9c0.8,3.3,2.1,6.4,3.9,9.3      l-7.6,11.7l8,8L32.1,80c2.9,1.7,6,3.1,9.3,3.9l2.9,13.6h11.4l2.9-13.6c3.3-0.8,6.4-2.1,9.3-3.9l11.7,7.6l8-8L80,67.9      c1.7-2.9,3.1-6,3.9-9.3L97.6,55.7z M50,65.6c-8.7,0-15.6-7-15.6-15.6s7-15.6,15.6-15.6s15.6,7,15.6,15.6S58.7,65.6,50,65.6z"></path>
                    </svg>
                </div>
            </div>
        </div>
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
                                <a href="/">Home</a>

                            </li>
                            <li><a href="/about">About</a></li>

                            <li class="menu-item-has-children">
                                <a href="#">Services</a>
                            </li>


                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->

                    <div class="search-contact">
                        <div class="header-search-area">
                            <div class="header-search-form">
                                <form class="form">
                                    <div>
                                        <input type="text" class="form-control" placeholder="Search here">
                                    </div>
                                    <button type="submit" class="btn"><i class="ti-search"></i></button>
                                </form>
                            </div>
                            <div>
                                <button class="btn open-btn"><i class="ti-search"></i></button>
                            </div>
                        </div>
                        <div class="contact">
                            <a href="#" class="theme-btn">Contact us</a>
                        </div>
                    </div>
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->


        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Services</h2>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->
        <section class="about-us-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title">
                            <h2>SERVICES</h2>
                        </div>
                        <div class="details">
                            <p>Achieving your offshore energy project objectives will require the right oilfield services people, with the right levels of experience, in the right jobs, delivering at the right levels of performance. These levels of performance demand a strong professional approach to all aspects of offshore Engineering, Procurement, Construction and Installation services (EPCI) and marine logistics solutions.
<br><br>Our extensive major projects footprint in Nigeria, combined with the deep technical expertise of our people, technology capability and world-class assets, within the Nigerian Deepwater offshore sector, enables us to deliver comprehensive and connected subsea engineering services. </p>
                        </div>
                    </div>

                </div>
            </div> <!-- end container -->
        </section>
        <section class="featured-project-section section-padding">
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
        <!-- start service-section-s2 -->
        @include('feature')
        <!-- end service-section-s2 -->


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

<!-- dustech/services-s2.html  13 Nov 2019 12:55:47 GMT -->
</html>
