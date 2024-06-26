<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from webthemez.com/demo/hi-tech-real-estate-free-bootstrap-website-template/index.html by HTTrack Website Copier/3.x [XR&CO 2014], Fri, 02 Feb 2024 12:55:50 GMT -->

<head>
    <meta charset="utf-8">
    <title>ATANYS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="http://webthemez.com/" />
    <!-- css -->
    <link href="assetss/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assetss/css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="assetss/css/jcarousel.html" rel="stylesheet" />
    <link href="assetss/css/flexslider.css" rel="stylesheet" />
    <link href="js/owl-carousel/owl.carousel.html" rel="stylesheet">
    <link href="assetss/css/style.css" rel="stylesheet" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>
    <div id="wrapper">
        <!-- start header -->
        <header>
            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="assetss/img/logo.png" alt="logo" /></a>
                    </div>
                    <div class="navbar-collapse collapse ">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.html">Accuiel</a></li>
                            <li><a href="about.html"> À propos de nous </a></li>
                            <li><a href="services.html"> Nos Services</a></li>
                            {{--  <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="pricing.html">Pricing</a></li>  --}}
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->
        <section id="featured">

            <!-- Slider -->
            <div id="main-slider" class="flexslider">

                <div class="flex-caption">

                </div>
                <ul class="slides">
                    @foreach ($datas as $data)
                        <li>
                            <img src= "/storage/imageville/{{ $data->imageville }}" alt="Uploaded Image" width="300"
                                height="500">>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!-- end slider -->

        </section>
        <section class="search-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="quick-search">

                            <form role="form">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="country">villes</label>
                                        <select class="form-control">
                                            <option>USA</option>
                                        </select>
                                    </div>
                                    {{--  <div class="form-group">
                                        <label for="bedroom">Bedroom</label>
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>  --}}
                                </div>
                                <!-- break -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="location">Localité</label>
                                        <select class="form-control">
                                            <option>NewYork</option>
                                        </select>
                                    </div>
                                    {{--  <div class="form-group">
                                        <label for="bathroom">Bathroom</label>
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>  --}}
                                </div>
                                <!-- break -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="status">Chanbres</label>
                                        <select class="form-control">
                                            <option>For Sale</option>
                                        </select>
                                    </div>
                                    {{--  <div class="form-group">
                                        <label for="minprice">Min Price</label>
                                        <select class="form-control">
                                            <option>$2,400</option>
                                            <option>$6,300</option>
                                            <option>$9,100</option>
                                            <option>$10,100</option>
                                        </select>
                                    </div>  --}}
                                </div>
                                <!-- break -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="type">Prix</label>
                                        <select class="form-control">
                                            <option>Villa</option>
                                        </select>
                                    </div>
                                    {{--  <div class="form-group">
                                        <label for="maxprice">Max Price</label>
                                        <select class="form-control">
                                            <option>$2,400</option>
                                            <option>$6,300</option>
                                            <option>$9,100</option>
                                            <option>$10,100</option>
                                        </select>
                                    </div>  --}}
                                </div>
                                <div class="col-md-12" style="text-align: center;">
                                    <input name="submit" value="Recherche" class="btn btn-success btn-lg btn-block"
                                        type="submit">
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="hero-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="aligncenter">
                            <h1 class="aligncenter">Bienvenue à l&apos; Agence Atanys</h1>
                            <p>Nous sommes spécialisés dans la location de maisons, la location de voitures et la vente
                                de terrains. Chez nous, vous trouverez une équipe dévouée prête à vous accompagner dans
                                la réalisation de vos projets immobiliers et automobiles. Que vous cherchiez à louer une
                                maison confortable, à louer une voiture pour vos déplacements, ou à acquérir un terrain
                                pour votre projet de construction, nous sommes là pour vous offrir les meilleures
                                solutions.

                                Notre engagement envers nos clients se traduit par un service personnalisé,
                                professionnel et attentionné à chaque étape de votre parcours avec nous. Nous comprenons
                                l&apos;importance de chaque décision que vous prenez, c&apos; est pourquoi nous mettons
                                tout en œuvre pour vous offrir une expérience sans faille et des résultats
                                exceptionnels.

                                Chez l&apos; Agence Atanys, nous croyons en la transparence, l&apos; intégrité et
                                l&apos; excellence. Nous nous efforçons constamment d&apos; ller au-delà des attentes de
                                nos clients et de leur fournir des solutions immobilières et automobiles qui répondent à
                                leurs besoins et dépassent leurs aspirations.

                                Que vous soyez un locataire à la recherche du foyer idéal, un voyageur en quête de
                                liberté de mouvement, ou un investisseur cherchant à concrétiser un projet immobilier,
                                nous sommes là pour vous aider à réaliser vos rêves.

                                Faites confiance à l&apos; Agence Atanys pour une expérience immobilière et automobile
                                incomparable. Nous sommes impatients de vous accueillir et de vous accompagner dans
                                votre parcours vers la réussite.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="content">

            <div class="container">
                <div class="title pt-0" style="padding: 0px;">
                    <h4 class="mt-0 mb-3" style="text-align: center";> Listes Des chanbres </h3>
                </div>
                @foreach ($logements as $logement)
                    @if ($logement->active)
                        <div class="col-md-6 col-lg-3 ">

                            <div class="card card-tour" style="overflow: hidden;">
                                <a title="View tour" href="{{ route('vis', ['id' => $logement->id]) }}">
                                    <div class="card-image card-img-tour">

                                        <div class="ms-2">
                                            <img src= "/storage/imagelogement/{{ $logement->photo }}"
                                                alt="Uploaded Image" style="width: 300px; height: 200px;">
                                        </div>
                                        <div class="list-icon-content">
                                            <div class="list-icon">
                                                {{--  <img src="icons/web/vr.svg" alt="Smiley face" height="30"
                                                width="30" class="img-vr">  --}}
                                                {{--  <img src="icons/web/play.svg" alt="Smiley face" height="30"
                                                width="30" class="img-play">  --}}
                                                <p style="text-align: center";> Quartier {{ $logement->quartier_nom }}
                                                    Dans
                                                    la ville {{ $logement->ville_nom }} chambre
                                                    {{ $logement->type_logement_nom }} </p>
                                                <p style="text-align: center";>360°</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h2 class="h6">
                                        <a
                                            href="tour/vwkg5UWXsfWPPpiDnnvGrKG7sHpebtrT/Um56fEvVDQufYT07exnay2rXJAaqIkJk.html">Virtual
                                            tour of the museum</a>
                                    </h2>
                                    <span>Virtual tour of the Archaeological Museum of Burgas, Bulgaria</span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

    </div>


    </section>
    <div class="testimonial-area">
        <div class="testimonial-solid">
            <div class="container">
                <div class="testi-icon-area">
                    <div class="quote">
                        <i class="fa fa-microphone"></i>
                    </div>
                </div>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="">
                            <a href="#"></a>
                        </li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" class="">
                            <a href="#"></a>
                        </li>
                        <li data-target="#carousel-example-generic" data-slide-to="2" class="active">
                            <a href="#"></a>
                        </li>
                        <li data-target="#carousel-example-generic" data-slide-to="3" class="">
                            <a href="#"></a>
                        </li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item">
                            <p>Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa
                                qui officia deserunt mollitia animi.</p>
                            <p>
                                <b>- Mark John -</b>
                            </p>
                        </div>
                        <div class="item">
                            <p>Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa
                                qui officia deserunt mollitia animi.</p>
                            <p>
                                <b>- Jaison Warner -</b>
                            </p>
                        </div>
                        <div class="item active">
                            <p>Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa
                                qui officia deserunt mollitia animi.</p>
                            <p>
                                <b>- Tony Antonio -</b>
                            </p>
                        </div>
                        <div class="item">
                            <p>Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa
                                qui officia deserunt mollitia animi.</p>
                            <p>
                                <b>- Leena Doe -</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="widget">
                        <h5 class="widgetheading">Our Contact</h5>
                        <address>
                            <strong>Hi-Tech Inc</strong><br>
                            JC Main Road, Near Silnile tower<br>
                            Pin-21542 NewYork US.
                        </address>
                        <p>
                            <i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
                            <i class="icon-envelope-alt"></i> email@domainname.com
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget">
                        <h5 class="widgetheading">Quick Links</h5>
                        <ul class="link-list">
                            <li><a href="#">Latest Events</a></li>
                            <li><a href="#">Terms and conditions</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget">
                        <h5 class="widgetheading">Latest posts</h5>
                        <ul class="link-list">
                            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                            <li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
                            <li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget">
                        <h5 class="widgetheading">Recent News</h5>
                        <ul class="link-list">
                            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                            <li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
                            <li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
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
                                <span>&copy; Hi-Tech 2016 All right reserved. By </span><a href="http://webthemez.com/"
                                    target="_blank">WebThemez</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="social-network">
                            <li><a href="#" data-placement="top" title="Facebook"><i
                                        class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#" data-placement="top" title="Twitter"><i
                                        class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#" data-placement="top" title="Linkedin"><i
                                        class="fa fa-linkedin"></i></a>
                            </li>
                            <li><a href="#" data-placement="top" title="Pinterest"><i
                                        class="fa fa-pinterest"></i></a></li>
                            <li><a href="#" data-placement="top" title="Google plus"><i
                                        class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assetss/js/jquery.js"></script>
    <script src="assetss/js/jquery.easing.1.3.js"></script>
    <script src="assetss/js/bootstrap.min.js"></script>
    <script src="assetss/js/jquery.fancybox.pack.js"></script>
    <script src="assetss/js/jquery.fancybox-media.js"></script>
    <script src="assetss/js/portfolio/jquery.quicksand.js"></script>
    <script src="assetss/js/portfolio/setting.js"></script>
    <script src="assetss/js/jquery.flexslider.js"></script>
    <script src="assetss/js/animate.js"></script>
    <script src="assetss/js/custom.js"></script>
    <script src="assetss/js/owl-carousel/owl.carousel-2.html"></script>
</body>

<!-- Mirrored from webthemez.com/demo/hi-tech-real-estate-free-bootstrap-website-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Feb 2024 12:56:03 GMT -->

</html>
