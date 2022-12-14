<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tour Managment</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="bootstrap.css" rel='stylesheet' type='text/css' />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="stylee.css">
</head>

<body class="bgimg">
    <div class="header-top">
        <!--container-->
        <div class="container">
            <div class="top-nav">
                <div class="navbar-header">
                    <a href=""><img class="logo" src="images/TWlogo.jpg" style="height:40px;padding:2px 10px;"></a>
                </div>
                <div class="menu">
                    <ul id="nav">
                        <li><a href="index.php#section-1"
                                onclick="javascript:window.open('index.php#section-1','_self')"> Home</a></li>
                        <li><a href="index.php#section-2"
                                onclick="javascript:window.open('index.php#section-2','_self')"> About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Log In
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="user/userlogin.php">User Login</a>
                                <a class="dropdown-item" href="adminlogin.php">Admin Login</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!--/container-->
    </div>

    <!--banner-->
    <div id="section-1" class="section">
        <div id="top" class="callbacks_container">
            <ul class="rslides" id="slider4">
                <li>
                    <img src="images/o-TRAVEL-facebook.jpg" alt="">
                    <div class="caption">
                        <div class="header-info">
                            <h2><a href="#">Your Trusted Travel Packages and Services</a></h2>
                            <lable></lable>
                            <h1><a href="#">Go Travel & Tourism Ltd </a></h1>
                        </div>
                    </div>
        </div>
        <div class="clearfix"> </div>
    </div>

    <!--end of banner-->

    <!--about-->
    <div class="about section" id="section-2">
        <div class="about-head text-center">
            <h3>About Us</h3>
        </div>
        <div class="container">
            <div class="col-md-4 about-grids">
                <h4>Our Vision</h4>
                <p>Since inception, the growth has been phenomenal. In a short span of time, we have opened offices in
                    prime locations in Mumbai, Pune, Thane & Nagpur.Our mission is is to focus on values over volumes
                    and quality over quantity with absolutely honest and ethical interactions at each stage</p>
            </div>
            <div class="col-md-4 about-grids grid2">
                <h4>Our Mission</h4>
                <p>We organize a few exclusive tours to each destination annually and hence have the time and ability.We
                    are a group of passionate & committed individuals to make your holidays memorable.</p>
            </div>
            <div class="col-md-4 about-grids">
                <h4>Safety Information</h4>
                <p>We deliver absolute quality - the finest airlines, premium coaches, stays in the most exquisite
                    hotels.As we believe in transparency and honesty in our dealings, we guarantee that no hidden costs.
                </p>
            </div>
        </div>
    </div>

    <!--end of about-->

    <!--top-tours-->
    <div class="section" id="section-3">
        <div id="portfolio" class="portfolio">
            <div class="top-tours-head text-center">
                <h3>Gallery</h3>
            </div>
            <ul id="filters" class="clearfix wow bounceIn" data-wow-delay="0.4s">
                <li><span class="filter active" data-filter="app card icon logo fun">ALL</span></li>
                <li><span class="filter" data-filter="icon">Short Date Tour</span></li>
                <li><span class="filter" data-filter="fun">Long Date Tour</span></li>
            </ul>
            <div id="portfoliolist">
                <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
                        <a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                            <img src="images/image1.jfif" class="img-responsive img" alt="" /></a>
                    </div>
                </div>
                <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
                        <a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                            <img src="images/image2.jfif" class="img-responsive img" alt="" /></a>
                    </div>
                </div>
                <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
                        <a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                            <img src="images/image3.jfif" class="img-responsive img" alt="" /></a>

                    </div>
                </div>
                <div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
                        <a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                            <img src="images/image4.jfif" class="img-responsive img" alt="" /></a>

                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--end of top tour-->

    <!--footer-->
    <div class="fotter">
        <div class="container">
            <div class="fotter-grids">
                <div class="col-md-4 fotter-left">
                    <p style="text-align:justify"></p>
                </div>
                <div class="col-md-4 fotter-middle">
                    <h3></h3>
                    <div class="footer-list">
                        <h3></h3>
                        <div class="footer-list">
                        </div>
                    </div>
                    <div class="col-md-4 fotter-right" style="padding-left:10px">
                        <h3></h3><br />
                        <div class="footer-list">
                        </div>
                    </div>
                    <div class="social-icons">
                        <a href="#"><span class="facebook">Facebook</span></a>
                        <a href="#"><span class="twitter">Twitter</span></a>
                        <a href="#"><span class="googleplus">Google</span></a>
                        <a href="#"><span class="pinterest">Pinterest</span></a>
                        <a href="#"><span class="instagram">Instagram</span></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="copyright text-right">
        <p style="padding-right:100px"></p>
    </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>