<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="webthemez">
    <title>Coffee Shop Free HTML Website Template | webthemez</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate-custom.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/modernizr.custom.js') }}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
    <![endif]-->

</head>

<body data-target="#navbar-main">
    <div id="navbar-main">
        <!-- Fixed navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">

                <div class="navbar-header">
                    <div class="pull-left logo">
                        <a class="" href="#home"><img src="{{ asset('assets/img/logo.png') }}" /></a>
                    </div>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="#home">Welcome</a></li>
                        <li> <a href="#offer">We Offer</a></li>
                        <li> <a href="#our"> Our Shop</a></li>
                        <li> <a href="#special"> Special</a></li>
                        <li> <a href="#chef"> Chef Team</a></li>
                        <li> <a href="#contact"> Contact</a></li>
                        <li> <a href="{{ url('login') }}"> Login</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>

    <!-- ==== HEADERWRAP ==== -->
    <div id="home">
        <div id="headerwrap" name="home">
            <header class="clearfix tb">
                <div class="tb-cell text-center">
                    <i class="fa fa-heart-o icon"></i>
                    <h1>Coffee - Makes you Love</h1>
                    <p>A Lot Can Happen Over Coffee, Its Awesome!!! </p>
                    <a href="#portfolio" class="smoothScroll btn btn-lg">Today's Special</a>
                </div>
            </header>
        </div>

    </div>
    <div class="div-pattern2"></div>
    <!-- /headerwrap -->



    <!-- ==== SERVICES ==== -->
    <div id="offer" name="services">
        <div class="container">
            <div class="row">
                <h2 class="centered">WHAT WE OFFER</h2>
                <hr>
                <div class="col-lg-8 col-lg-offset-2">
                    <p class="large">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam
                        veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
                <div class="col-lg-4 callout"> <i class="fa fa-cubes fa-3x"></i>
                    <h3>COFFEE</h3>
                    <p>Erat imperdiet dissentias ea usu, alia aliquid corrumpit ea qui. Eu vim oratio conclusionemque,
                        vel at errem nominavi delicatissimi.</p>
                </div>
                <div class="col-lg-4 callout"> <i class="fa fa-flask fa-3x"></i>
                    <h3>TEA</h3>
                    <p>Erat imperdiet dissentias ea usu, alia aliquid corrumpit ea qui. Eu vim oratio conclusionemque,
                        vel at errem nominavi delicatissimi.</p>
                </div>
                <div class="col-lg-4 callout"> <i class="fa fa-life-ring fa-3x"></i>
                    <h3>CAKES</h3>
                    <p>Erat imperdiet dissentias ea usu, alia aliquid corrumpit ea qui. Eu vim oratio conclusionemque,
                        vel at errem nominavi delicatissimi.</p>
                </div>
            </div>
            <!-- row -->
        </div>
    </div>
    <!-- container -->
    <section class="hero-section section">
        <div class="container">
            <div class="highlight tb">
                <div class="tb-cell">
                    <p>Erat imperdiet dissentias ea usu, alia aliquid corrumpit ea qui!</br>
                        erant bonorum albucius et per, ei sapientem accommodare est. Saepe dolorum constituam ei!!</p>
                </div>
                <div class="links tb-cell">
                    <div class="reservation-link">
                        <a href="#" class="btn reservation-btn">RESERVATION</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <div class="div-pattern"></div>
    <!-- ==== ABOUT ==== -->
    <div id="our" name="about">
        <div class="container">
            <div class="row white">
                <h2 class="centered">Our Shop</h2>
                <hr>
                <div class="col-md-6"> <img class="img-responsive" src="{{ asset('assets/img/about/about1.jpg') }}"
                        align=""> </div>
                <div class="col-md-6">
                    <h3>Who we are</h3>
                    <p>Lorem ipsum dolor sit amet, quo meis audire placerat eu, te eos porro veniam. An everti maiorum
                        detracto mea. Eu eos dicam voluptaria, erant bonorum albucius et per, ei sapientem accommodare
                        est. Saepe dolorum constituam ei vel. Te sit malorum ceteros repudiandae, ne tritani adipisci
                        vis.</p>
                    <h3>Why choose us?</h3>
                    <p>Lorem ipsum dolor sit amet, quo meis audire placerat eu, te eos porro veniam. An everti maiorum
                        detracto mea. Eu eos dicam voluptaria, erant bonorum albucius et per, ei sapientem accommodare
                        est. Saepe dolorum constituam ei vel.</p>
                </div>
            </div>
            <!-- row -->
        </div>
    </div>
    <!-- container -->
    <!-- ==== PORTFOLIO ==== -->
    <div id="special" name="portfolio">
        <div class="container">
            <div class="row">
                <h2 class="centered">What Special</h2>
                <hr>
                <div class="col-lg-8 col-lg-offset-2 centered">
                    <p class="large">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam
                        veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
            <!-- /row -->
            <div class="container">
                <div class="row">
                    @foreach ($produk as $p)
                        <!-- PORTFOLIO IMAGE 1 -->
                        <div class="col-md-4 ">
                            <div class="grid overlay">
                                <figure> <img class="img-responsive" src="{{ asset($p->foto) }}" alt="">
                                    <figcaption>
                                        <h5>{{ $p->nama_produk }}</h5>
                                        <h5>{{ $p->harga }}</h6>
                                    </figcaption>
                                    <!-- /figcaption -->
                                </figure>
                                <!-- /figure -->
                            </div>
                            <!-- /grid-overlay -->
                        </div>
                    @endforeach
                    {{-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Rose Cake</h4>
                                </div>
                                <div class="modal-body">
                                    <p><img class="img-responsive"
                                            src="{{ asset('assets/img/portfolio/folio01-preview.jpg') }}"
                                            alt=""></p>
                                    <p>Lorem ipsum dolor sit amet, quo meis audire placerat eu, te eos porro veniam. An
                                        everti maiorum detracto mea. </p>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal --> --}}

                </div>
                <!-- /row -->

            </div>
            <!-- /row -->
        </div>
    </div>
    <!-- /container -->

    <!-- ==== TEAM MEMBERS ==== -->
    <div id="chef" name="team">
        <div class="container">
            <div class="row centered">
                <h2 class="centered">Meet Our Chef</h2>
                <hr>
                <div class="col-lg-8 col-lg-offset-2 centered">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos
                        non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                    <br />
                </div>
                @foreach ($chef as $c)
                    <div class="col-lg-3 centered"> <img class="img img-circle" src="{{ asset($c->foto) }}"
                            height="120px" width="120px" alt="">
                        <h4><strong>{{ $c->nama_chef }}</strong></h4>
                        <p>{{ $c->deskripsi }}</p>
                        <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i
                                class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                @endforeach

            </div>
        </div>
        <!-- row -->
    </div>
    <!-- container -->

    <!-- ==== CONTACT ==== -->
    <div id="contact" name="contact">
        <div class="container">
            <div class="row">
                <h2 class="centered">Get In Touch</h2>
                <hr>

            </div>
            <div class="row">
                <div class="col-md-7">
                    <strong>Please give us your feedback!</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos
                        non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                    <form id="contact" method="post" class="form" role="form">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input class="form-control" id="name" name="name" placeholder="Name"
                                    type="text" required />
                            </div>
                            <div class="col-md-12 form-group">
                                <input class="form-control" id="email" name="email" placeholder="Email"
                                    type="email" required />
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
                                <button class="btn btn-lg pull-left" type="submit">Send Message</button>
                            </div>
                        </div>

                    </form>
                    <!-- form -->
                </div>
                <div class="col-md-5">


                    <i class="fa fa-map-marker fa-2x"></i>
                    <strong>Coffee Shop</strong>
                    <p>321 Awesome Street<br>
                        New York, NY 12345</p>

                    <br />
                    <i class="fa fa-envelope-o fa-2x"></i>
                    <p>info@companyname.com</p>

                    <br />
                    <i class="fa fa-phone fa-2x"></i>
                    <p> +1 235 123 1234</p>

                </div>
            </div>
            <!-- row -->

        </div>
    </div>
    <!-- container -->

    <div id="footerwrap">
        <div class="container">
            <div class="row">
                <div class="col-md-8"> <span class="copyright">&copy; 2019 Company Name. <a
                            href="https://webthemez.com/free-bootstrap-templates/" target="_blank"
                            title="Free Bootstrap Themes">Free Bootstrap Themes</a> by WebThemez.com</span> </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a> </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a> </li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a> </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/smoothscroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/custom-scripts.js') }}"></script>
</body>

</html>
