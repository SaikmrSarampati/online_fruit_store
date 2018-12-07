<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Inmar Intern</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
  <style>
        .zoom{
            transition: transform .2s;
        }
        .zoom:hover{
            -webkit-transform: scale(1.2);
        }
    </style>

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header" class="header-scrolled" background="black">
    <div class="container-fluid">
      <div id="logo" class="pull-left"><img src="download.png" alt="" align="left" height="50px" ></div>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <!--<li><a href="#services">Services</a></li>-->
          <li><a href="#portfolio">Shop</a></li>

         <li class="dropdown"><button class="dropdown-toggle btn btn-danger btn-lg" type="button" style="border-radius: 24px;padding:3px; data-toggle="dropdown" href="#"><?php echo "Hi ".$_SESSION['uname']; ?></button>
        <ul class="dropdown-menu">
          <li><a href="#">My Wallet</a></li>
          <li><a href="#">My orders</a></li>
        </ul>
      </li>
          
           

          <li></li><a href="login/logout.php" ><button type="button" class="btn btn-danger btn-lg" style="border-radius: 24px;padding:3px;">logout</button></a></li>
          
    <!-- done with buttons of register and login-->
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->



  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide" data-ride="carousel" data-interval="2000">

        <ol class="carousel-indicators">
        </ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <img src="img/intro-carousel/apple.jpg" alt="" width="1350px" height="655px">
          </div>

          <div class="carousel-item">
            <img src="img/intro-carousel/snacks.jpg" alt="" width="1350px" height="655px">
          </div>

          <div class="carousel-item">
            <img src="img/intro-carousel/rich.jpg" alt="" width="1350px" height="655px">
          </div>

          <div class="carousel-item ">
            <img src="img/intro-carousel/scoop.jpg" alt="" width="1350px" height="655px">
          </div>

          <div class="carousel-item">
            <img src="img/intro-carousel/mosambi.jpg" alt="Chania" width="1350px" height="655px">
          </div>
    
          <div class="carousel-item">
            <img src="img/intro-carousel/orange.jpg" alt="Flower" width="1350px" height="655px">
          </div>


          <div class="carousel-item">
            <img src="img/intro-carousel/appleslices.jpg" alt="Flower" width="1350px" height="655px">
            <div class="carousel-container">
              <div class="carousel-content">
                
                <div class="zoom">
                  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <a href="#portfolio" class="btn-get-started scrollto">Get Started</a>
                </div>
              </div>
          </div>
      </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

<h1 style="color:white;font-family:sans-serif; text-align:center; "> <i><font color="orange" size="30" background="blue" border="20px"><?php echo "Welcome ".$_SESSION['uname']; ?></font></i></h1>

  <main id="main">

<!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title"><font color="red"> Shop by categories</font></h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Recommended</li>
              <li data-filter=".filter-fresh" >Fresh Fruits</li>
              <li data-filter=".filter-exotic">Exotic Fruits</li>
              <li data-filter=".filter-organic">Organic Fruits</li>
              <li data-filter=".filter-seasonal">Seasonal fruits</li>
              
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" style="position: relative; height: 1080px;">

           <div class="col-lg-4 col-md-6 portfolio-item filter-seasonal wow fadeInUp" data-wow-delay="0.2s" style="position: absolute; left: 360px; top: 720px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/mango.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/mango.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                
              </figure>

              <div class="portfolio-info">
                <strong>Mango @15$</strong>
                <br>
                <a href="payment\payment.html" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-shopping-cart"></span> <img src="img/portfolio/cart2.png" class="img-fluid" height="30px" width="30px"alt=""> Buy Now </a>
              </div>
            </div>
          </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-exotic wow fadeInUp" data-wow-delay="0.1s" style="position: absolute; left: 0px; top: 720px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/strawberry.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/strawberry.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                
              </figure>

              <div class="portfolio-info">
                <strong>Strawberry @3$</strong>
                <br>
                <a href="payment\payment.html" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-shopping-cart"></span> <img src="img/portfolio/cart2.png" class="img-fluid" height="30px" width="30px"alt=""> Buy Now </a>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-fresh wow fadeInUp" style="position: absolute; left: 0px; top: 0px; visibility: visible; animation-name: fadeInUp;">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/apple.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/apple.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                
              </figure>

              <div class="portfolio-info">
                <strong>Apple @5$</strong>
                <br>
                <a href="payment\payment.html" class="btn btn-info btn-lg">
              <img src="img/portfolio/cart2.png" class="img-fluid" height="30px" width="30px"alt=""> Buy Now </a>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-exotic wow fadeInUp" data-wow-delay="0.1s" style="position: absolute; left: 0px; top: 720px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/kiwi.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/kiwi.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                
              </figure>

              <div class="portfolio-info">
                <strong>Kiwi @9$</strong>
                <br>
                <a href="payment\payment.html" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-shopping-cart"></span> <img src="img/portfolio/cart2.png" class="img-fluid" height="30px" width="30px"alt=""> Buy Now </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-fresh wow fadeInUp" data-wow-delay="0.1s" style="position: absolute; left: 360px; top: 0px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/banana.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/banana.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                
              </figure>

              <div class="portfolio-info">
                <strong>Banana @0.5$</strong>
                <br>
              <a href="payment\payment.html" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-shopping-cart"></span> <img src="img/portfolio/cart2.png" class="img-fluid" height="30px" width="30px"alt=""> Buy Now </a>
              </div>
            </div>
          </div>

           <div class="col-lg-4 col-md-6 portfolio-item filter-fresh wow fadeInUp" data-wow-delay="0.1s" style="position: absolute; left: 0px; top: 720px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/orange.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/orange.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                
              </figure>

              <div class="portfolio-info">
                <strong>Orange @1$</strong>
                <br>
                <a href="payment\payment.html" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-shopping-cart"></span> <img src="img/portfolio/cart2.png" class="img-fluid" height="30px" width="30px"alt=""> Buy Now </a>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-fresh wow fadeInUp" data-wow-delay="0.2s" style="position: absolute; left: 0px; top: 360px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/pineapple.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/pineapple.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                
              </figure>

              <div class="portfolio-info">
                <strong>Pine Apple @20$</strong>
                <br>
               <a href="payment\payment.html" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-shopping-cart"></span> <img src="img/portfolio/cart2.png" class="img-fluid" height="30px" width="30px"alt=""> Buy Now </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-organic wow fadeInUp" style="position: absolute; left: 360px; top: 360px; visibility: visible; animation-name: fadeInUp;">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/guava.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/guava.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
              
              </figure>

              <div class="portfolio-info">
                <strong>Guava @2$</strong>
                <br>
               <a href="payment\payment.html" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-shopping-cart"></span> <img src="img/portfolio/cart2.png" class="img-fluid" height="30px" width="30px"alt=""> Buy Now </a>
                
              </div>
            </div>
          </div>

         
        
          <div class="col-lg-4 col-md-6 portfolio-item filter-seasonal wow fadeInUp" data-wow-delay="0.1s" style="position: absolute; left: 0px; top: 720px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/muskmelon.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/muskmelon.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
              
              </figure>

              <div class="portfolio-info">
                <strong>Muskmelon @17$</strong>
                <br>
                <a href="payment\payment.html" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-shopping-cart"></span> <img src="img/portfolio/cart2.png" class="img-fluid" height="30px" width="30px"alt=""> Buy Now </a>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-exotic wow fadeInUp" data-wow-delay="0.1s" style="position: absolute; left: 0px; top: 720px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/gapple.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/gapple.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
              
              </figure>

              <div class="portfolio-info">
                <strong>Green Apple @18$</strong>
                <br>
                <a href="payment\payment.html" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-shopping-cart"></span> <img src="img/portfolio/cart2.png" class="img-fluid" height="30px" width="30px"alt=""> Buy Now </a>
              </div>
            </div>

          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-seasonal wow fadeInUp" data-wow-delay="0.1s" style="position: absolute; left: 0px; top: 720px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/watermelon.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/watermelon.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
              
              </figure>

              <div class="portfolio-info">
                <strong>Watermelon @10$</strong>
                <br>
                <a href="payment\payment.html" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-shopping-cart"></span> <img src="img/portfolio/cart2.png" class="img-fluid" height="30px" width="30px"alt=""> Buy Now </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-exotic wow fadeInUp" data-wow-delay="0.1s" style="position: absolute; left: 0px; top: 720px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/amla.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/amla.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
              
              </figure>

              <div class="portfolio-info">
                <strong>Amla @0.9$</strong>
                <br>
                <a href="payment\payment.html" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-shopping-cart"></span> <img src="img/portfolio/cart2.png" class="img-fluid" height="30px" width="30px"alt=""> Buy Now </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-organic wow fadeInUp" data-wow-delay="0.1s" style="position: absolute; left: 0px; top: 720px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/grapes.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/grapes.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
              
              </figure>

              <div class="portfolio-info">
                <strong>Grapes @22$</strong>
                <br>
                <a href="payment\payment.html" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-shopping-cart"></span> <img src="img/portfolio/cart2.png" class="img-fluid" height="30px" width="30px"alt=""> Buy Now </a>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-seasonal wow fadeInUp" data-wow-delay="0.1s" style="position: absolute; left: 0px; top: 720px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/custard.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/custard.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
              
              </figure>

              <div class="portfolio-info">
                <strong>Custard @26$</strong>
                <br>
                <a href="payment\payment.html" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-shopping-cart"></span> <img src="img/portfolio/cart2.png" class="img-fluid" height="30px" width="30px"alt=""> Buy Now </a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!--#portfolio-->
    
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3><font color="red">About Us</font></h3>
          <p>Inmar is an online fruits delivery store which was founded in 1968.Its headquarters is located in Marina Bay,Singapore.It is the largest online store in southeast asia and ranked among the top 100 online grocery store in the world.</p>
        </header>

        <div class="row about-cols">
          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="https://www.dbs.com/default.page" target="_blank">Our Achievements</a></h2>
              <p>
                Inmar is named as World's Best online Grocery store. It is the first Asian online store to win two awards in the global category at the prestigious Euromoney Awards for Excellence 2018.

              </p>
            </div>
          </div>
          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="https://www.dbs.com/default.page" target="_blank">Our Mission</a></h2>
              <p>
                Fusion of business and IT.Achieve new digital threats and oppurtunities.To achieve digital business strategy(LOCI).
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="https://www.dbs.com/default.page" target="_blank">Our Vision</a></h2>
              <p>
                To adopt a digital business strategy,online innovation and strategic implications for future store development.Modernize the legacy systems.
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #about -->

    
    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3><font color="red">Our Clients</font></h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/client-1.png" alt="">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt="">
        </div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3><font color="red">Testimonials</font></h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section><!-- #testimonials -->

    
  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <div id="logo" class="pull-left"><h1><img src="download.png" alt="" align="left" height="50px"></h1></div><br><br><br>
            <p>Inmar develops technology and uses advanced data analytics to make commerce work smarter.Founded in 1980. Inmar is headquarted in Winston-Salem,North Carolina(one of Forbes Best Downtowns in America) with locations throughout the U.S., Mexico and canada.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="https://www.dbs.com/terms/default.page" target="_blank">Terms and conditions</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="https://www.dbs.com/asia-hub-2/images/DAH2PrivacyPolicyJune2017Clean.pdf" target="_blank">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
                Plot no.168/1, Road no. 13a,<br>
          Jubliee Hills, Ranga Reddy<br>
        District, Hyderabad, Telangana – 500033<br>
        <strong>Phone:</strong> +91-40-67522222<br>
              <strong>Email:</strong>  rajani.kesanupalli@inmar.com<br>
            </p>

            <div class="social-links">
              <a href="https://twitter.com/dbsbank" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/dbs" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
              <a href="https://plus.google.com/117915159548481522365" class="google-plus" target="_blank"><i class="fa fa-google-plus"></i></a>
              <a href="https://www.linkedin.com/company/dbs-bank" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>please register your email id to our company and get all the details quickly to your email.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong> Inmar Intern </strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <font color="red">Srihari</font>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
