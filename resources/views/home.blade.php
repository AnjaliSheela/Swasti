@extends('layouts.app')
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Swasthi - Online Tutorial</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:700,400">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/elegant-font/code/style.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/flexslider/flexslider.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media-queries.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    </head>

@section('content')

        <!-- Top menu -->
  <nav class="navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Swasthi - Online Tutorial</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="top-navbar-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="index.html"><span aria-hidden="true" class="icon_house"></span><br>Home</a>
            </li>

            <li>
              <a href="#"><span aria-hidden="true" class="icon_comment"></span><br>Blog</a>
            </li>
            <li>

            </li>
            <li>
              <a href="about.html"><span aria-hidden="true" class="icon_profile"></span><br>About</a>
            </li>
            <li>
              <a href="contact.html"><span aria-hidden="true" class="icon_mail"></span><br>Feedback</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

        <!-- Slider -->
        <div class="slider-container">
            <div class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="assets/img/slider/3.jpg">

                        </li>
                        <li>
                            <img src="assets/img/slider/2.jpg">

                        </li>
                        <li>
                            <img src="assets/img/slider/1.jpg">

                        </li>
                        <li>
                            <img src="assets/img/slider/4.jpg">

                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Presentation -->
        <div class="presentation-container">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 wow fadeInLeftBig">
                  <h1>This is <span class="colored-text">Swasti</span>, A Online Tutorial.</h1>
                  <p>
                    This site provides a better way of studing.
                  </p>
                </div>
              </div>
          </div>
        </div>

        <!-- Services -->
        <div class="services-container">
          <div class="container">
              <div class="row">
                <div class="col-sm-3">
                    <div class="service wow fadeInUp">
                        <div class="service-icon"><span aria-hidden="true" class="icon_gift"></span></div>
                        <h3>Csharp</h3>
                        <p>C sharp is one of many .NET programming languages. It is object-oriented and allows you to build reusable components for a wide variety of application types Microsoft introduced C# on June 26th, 2000 and it became a v1.0 product on Feb 13th 2002. </p>
                        <a class="big-link-1" href="services.html">Read more</a>
                    </div>
          </div>
          <div class="col-sm-3">
                    <div class="service wow fadeInDown">
                        <div class="service-icon"><span aria-hidden="true" class="icon_mobile"></span></div>
                        <h3>Mobile Wireless Communiaction</h3>
                        <p>There are a variety of wireless communication systems for transmitting voice, video, and data in local or wide areas. There are point-to-point wireless bridges, wireless local area networks, multidirectional wireless cellular systems, and satellite communication systems.</p>
                        <a class="big-link-1" href="services.html">Read more</a>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="service wow fadeInUp">
                        <div class="service-icon"><span aria-hidden="true" class="icon_pencil"></span></div>
                        <h3>Principles of management and Accountings</h3>
                        <p>Management includes the activities of setting the strategy of an organization and coordinating the efforts of its employees or volunteers to accomplish its objectives through the application of available resources, such as financial, natural, technological, and human resources.</p>
                        <a class="big-link-1" href="services.html">Read more</a>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="service wow fadeInDown">
                        <div class="service-icon"><span aria-hidden="true" class="icon_printer-alt"></span></div>
                        <h3>Operating System</h3>
                        <p>An Operating System (OS) is an interface between a computer user and computer hardware. An operating system is a software which performs all the basic tasks like file management, memory management, process management, handling input and output, and controlling peripheral devices such as disk drives and printers.</p>
                        <a class="big-link-1" href="services.html">Read more</a>
                    </div>
                  </div>
              </div>
          </div>
        </div>



        <!-- Trajectory-->
        <div class="testimonials-container">
          <div class="container">
            <div class="row">
                <div class="col-sm-12 testimonials-title wow fadeIn">
                    <h2>Trajectory</h2>
                </div>
              </div>
              <div class="row">
                  <div class="col-sm-10 testimonial-list wow fadeInLeft">
                    <div role="tabpanel">
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                          <div class="testimonial-image">
                            <img src="assets/img/testimonials/1.jpg" alt="" data-at2x="assets/img/testimonials/1.jpg">
                          </div>
                          <div class="testimonial-text">
                                    <p>
                                      "C# is a simple, modern, general-purpose, object-oriented programming language developed by Microsoft within its .NET initiative led by Anders Hejlsberg. This tutorial will teach you basic C# programming and will also take you through various advanced concepts related to C# programming language."<br>
                                      <a href="http://www.tutorialspoint.com/csharp" target="_blank">More About C#</a>
                                    </p>
                                  </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab2">
                          <div class="testimonial-image">
                            <img src="assets/img/testimonials/2.jpg" alt="" data-at2x="assets/img/testimonials/2.jpg">
                          </div>
                          <div class="testimonial-text">
                                    <p>
                                      "Red Hat has become associated to a large extent with its enterprise operating system Red Hat Enterprise Linux and with the acquisition of open-source enterprise middleware vendor JBoss. Red Hat also offers Red Hat Enterprise Virtualization (RHEV), an enterprise virtualization product. Red Hat provides storage, operating system platforms, middleware, applications, management products, and support, training, and consulting services."<br>
                                      <a href="ftp://ftp.itsinternet.net/pub/Linux_and_Unix_Books/Wiley%20-%20Redhat%20Linux%20Bible%20Fedora%20and%20Enterprise%20Edition%20%282003%29.pdf" target="_blank"> Redhat Linux Bible </a>
                                    </p>
                                  </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab3">
                          <div class="testimonial-image">
                            <img src="assets/img/testimonials/3.jpg" alt="" data-at2x="assets/img/testimonials/3.jpg">
                          </div>
                          <div class="testimonial-text">
                                    <p>
                                      "This topic discusses "mobile" wireless technologies that provide voice and data communication services to mobile users who use cell phones, PDAs, Internet terminals, and related computing devices. Refer to "Wireless Communications" for a list of related wireless topics."<br>
                                      <a href="https://sgar91.files.wordpress.com/2011/10/mobile_communications_schiller_2e.pdf" target="_blank">More about Mobile Communication</a>
                                    </p>
                                  </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab4">
                          <div class="testimonial-image">
                            <img src="assets/img/testimonials/4.jpg" alt="" data-at2x="assets/img/testimonials/4.jpg">
                          </div>
                          <div class="testimonial-text">
                                    <p>
                                      "Management accounting is a profession that involves partnering in management decision making, devising planning and performance management systems,and providing expertise in financial reporting and control to assist management in the formulation and implementation of an organization's strategy"<br>
                                      <a href="http://icanig.org/documents/management.pdf" target="_blank">More about management accounting</a>
                                    </p>
                                  </div>
                        </div>
                      </div>
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                          <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"></a>
                        </li>
                        <li role="presentation">
                          <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"></a>
                        </li>
                        <li role="presentation">
                          <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"></a>
                        </li>
                        <li role="presentation">
                          <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-2 testimonial-icon wow fadeInUp">
                    <div>
                      <span aria-hidden="true" class="icon_pushpin"></span>
                    </div>
                  </div>
              </div>
          </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 footer-box wow fadeInUp">
                        <h4>About Us</h4>
                        <div class="footer-box-text">
                          <p>

                          <p><a href="about.html">Read more...</a></p>
                        </div>
                    </div>
                    <div class="col-sm-3 footer-box wow fadeInDown">
                        <h4>Email Updates</h4>
                        <div class="footer-box-text footer-box-text-subscribe">
                          <p>Enter your email and you'll be one of the first to get new updates:</p>
                          <form role="form" action="assets/subscribe.php" method="post">
                          <div class="form-group">
                            <label class="sr-only" for="subscribe-email">Email address</label>
                              <input type="text" name="email" placeholder="Email..." class="subscribe-email form-control" id="subscribe-email">
                            </div>
                            <button type="submit" class="btn">Subscribe</button>
                        </form>
                        <p class="success-message"></p>
                        <p class="error-message"></p>
                        </div>
                    </div>
                    <div class="col-sm-3 footer-box wow fadeInUp">
                        <h4>Technical support</h4>
                        <div class="container">img1,img2</div>
                    </div>
                    <div class="col-sm-3 footer-box wow fadeInDown">
                        <h4>Contact Us</h4>
                        <div class="footer-box-text footer-box-text-contact">
                          <p><span aria-hidden="true" class="icon_pin"></span> Address: Amrita Viswa Vidyapeetham</p>

                          <p><span aria-hidden="true" class="icon_mail"></span> Email: <a href="#">contact@swasti.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 wow fadeIn">
                    <div class="footer-border"></div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-sm-7 footer-copyright wow fadeIn">
                        <p>&copy; Swasti - All rights reserved.</p>
                    </div>
                    <div class="col-sm-5 footer-social wow fadeIn">
                        <a href="#"><span class="social_facebook"></span></a>
                        <a href="#"><span class="social_dribbble"></span></a>
                        <a href="#"><span class="social_twitter"></span></a>
                        <a href="#"><span class="social_pinterest"></span></a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Javascript -->
     <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/flexslider/jquery.flexslider-min.js"></script>
        <script src="assets/js/jflickrfeed.min.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/scripts.js"></script>



@endsection
