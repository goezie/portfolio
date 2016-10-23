<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="portfolio Guus">
    <meta name="author" content="Guus Veen">

    <title>My Portfolio</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <link href="css/grayscale.min.css" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-beer" aria-hidden="true"></i> <span class="light">Veen</span> Development
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">projects</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Guus Veen</h1>
                        <p class="intro-text">web developer
                            <br>From idea to website</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About me</h2>
                <p>Welcome to my portfolio page! I'm Guus, a dutch webdeveloper living in Prague. If you need a simple (but pretty) website within a week, send me an email or a message on <a href="https://cz.linkedin.com/in/guus-veen-404b8094">Linkedin</a></p>
                <div id="skills">
                    <div class="col-sm-6 col-md-3 skill-icons">
                        <img src="../img/html5.png">
                        <h3>HTML</h3>
                    </div>
                    <div class="col-sm-6 col-md-3 skill-icons">
                        <img src="../img/css3icon.png">
                        <h3>CSS3</h3>   
                    </div>
                    <div class="col-sm-6 col-md-3 skill-icons">
                        <img src="../img/gimpicon.png">
                        <h3>Gimp</h3>
                    </div>
                    <div class="col-sm-6 col-md-3 skill-icons">
                        <img src="../img/javascript.png">
                        <h3>Javascript</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <h2>Projects</h2>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="../img/laptop.jpg" alt="...">
                      <div class="carousel-caption">
                        <h3>work project</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                      </div>
                    </div>
                    <div class="item">
                      <img src="../img/kitty.jpg" alt="...">
                      <div class="carousel-caption">
                        <h3>cat project</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                      </div>
                    </div>
                    <div class="item">
                      <img src="../img/boats.jpg" alt="...">
                      <div class="carousel-caption">
                        <h3>boat project</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                      </div>
                    </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact information</h2>
                <p>feel free to send me a message</p>
                <p><a href="mailto:guus_veen@hotmail.com">guus_veen(@)hotmail.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://cz.linkedin.com/in/guus-veen-404b8094" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">LinkedIn</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/goezie" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
   <!--  <div id="map"></div> -->

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p><a class="page-scroll" href="#page-top">back to top</a></p>
        </div>
        <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJgMfZ_0n8svNbnHEwfXU2RQ8b6oflH5c&sensor=false"></script> -->

    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJgMfZ_0n8svNbnHEwfXU2RQ8b6oflH5c&sensor=false"></script>
 -->
    <!-- Theme JavaScript -->
    <script src="js/grayscale.min.js"></script>

</body>

</html>
