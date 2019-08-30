@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            
            {{-- my own content --}}
            <html lang="en">
<head>
<title>Home | Roshani</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">

<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">

<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/aos.css">

<link rel="stylesheet" href="css/ionicons.min.css">

<link rel="stylesheet" href="css/bootstrap-datepicker.css">
<link rel="stylesheet" href="css/jquery.timepicker.css">


<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="KW_progressContainer">
  <div class="KW_progressBar">

  </div>
</div>
<div class="page">
<nav id="colorlib-main-nav" role="navigation">
  <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
  <div class="js-fullheight colorlib-table">
    <div class="img" style="background-image: url(images/author-2.jpg);"></div>
    <div class="colorlib-table-cell js-fullheight">
      <div class="row no-gutters">

      </div>
    </div>
  </div>
</nav>

<div id="colorlib-page">
  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="colorlib-navbar-brand">
            {{-- <a class="colorlib-logo" href="index.html"><span class="logo-img" style="background-image: url(images/person_1.jpg);"> </span>Mohammad Yasin Roshani</a> --}}
          </div>
          <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
        </div>
      </div>
    </div>
  </header>

  <section class="home-slider owl-carousel js-fullheight">
    <div class="slider-item js-fullheight">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text align-items-center text-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p><a href="#" class="scroll">Hello! I'm</a></p>
            <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Mohammad Yasin Roshani</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="slider-item js-fullheight">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text align-items-center text-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p><a href="#" class="scroll">I'm from Afghanistan</a></p>
            <h1 class="mb-3" data-scrollax="properties: {translateY: '30%', opacity: 1.6}">A Web Designer</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END slider -->

  <section class="ftco-section about-section">
    <div class="container">
      <div class="row d-flex" data-scrollax-parent="true">
        <div class="col-md-4 author-img" style="background-image: url(images/author-1.jpg);" data-scrollax=" properties: { translateY: '-70%'}"></div>
        <div class="col-md-2"></div>
        <div class="col-md-6 wrap ftco-animate">
          <div class="about-desc">
            <h1 class="bold-text">About</h1>
            <div class="p-5">
              <h2 class="mb-5">Hi! I'm Mohammad Yasin Roshani</h2>
              <p>Web Developer (with technical expertise in developing websites, adept in web design projects; maintains existing websites and upgrades newly-acquired regularly with new applications as needed.).</p>
              <p><a href="#">Checkout my resume</a></p>
              <ul class="ftco-footer-social list-unstyled mt-4">
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
              <h5>Contact me here!</h5>
              <p>Email: <a href="yasinroshani@yahoo.com">yasinroshani@yahoo.com</a></p>
              <p>Phone: <a href="#">+93(0) 781 781 844</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span>What i do</span>
          <h2>My services</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services p-3 py-4 d-block text-center">
            <div class="icon mb-3"><span class="icon-layers"></span></div>
            <div class="media-body">
              <h3 class="heading">UI/UX Design</h3>
              <h3 class="heading">Responsive Design</h3>
              <h3 class="heading">Cool Design</h3>
            </div>
          </div>      
        </div>
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services p-3 py-4 d-block text-center">
            <div class="icon mb-3"><span class="icon-gears"></span></div>
            <div class="media-body">
              <h3 class="heading">Product Strategy</h3>
              <h3 class="heading">Design Sprints</h3>
              <h3 class="heading">UX Strategy</h3>
            </div>
          </div>      
        </div>
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services p-3 py-4 d-block text-center">
            <div class="icon mb-3"><span class="icon-code"></span></div>
            <div class="media-body">
              <h3 class="heading">HTML/CSS</h3>
              <h3 class="heading">Prototyping</h3>
              <h3 class="heading">User Testing</h3>
            </div>
          </div>    
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span>Portfolio</span>
          <h2>Checkout a few of my works</h2>
        </div>
      </div>
      <div class="row no-gutters">
      <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
        <a href="portfolio-single.html" class="image d-flex justify-content-center align-items-center" style="background-image: url('images/work-1.jpg'); " data-scrollax=" properties: { translateY: '-30%'}">
          <div class="icon d-flex text-center justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <div class="text">
          <h4 class="subheading">Responsive Web Design Projects</h4>
          <h2 class="heading"><a href="portfolio-single.html">Build A Tribute Page</a></h2>
          <p>He was no engineer. Not much of a programmer. He was something the world had not quite seen before: the technology business superstar. And perhaps, in our digital, corporate, and OEM world, it's just such stars that are today's inventors. It was Steve Jobs (1955 – 2011) that showed us how.</p>
          <p><a href="#">View Project</a></p>
        </div>
      </div>
      <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
        <a href="portfolio-single.html" class="image order-2 d-flex justify-content-center align-items-center" style="background-image: url('images/work-2.jpg'); " data-scrollax=" properties: { translateY: '-30%'}">
          <div class="icon d-flex text-center justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <div class="text order-1">
          <h4 class="subheading">Responsive Web Design Projects</h4>
          <h2 class="heading"><a href="portfoli-singleo.html">Build A Survey Form</a></h2>
          <p>A Survey is defined as a research method used for collecting data from a pre-defined group of respondents to gain information and insights on various topics of interest..</p>
          <p><a href="#">View Project</a></p>
        </div>
      </div>
      <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
        <a href="portfolio-single.html" class="image d-flex justify-content-center align-items-center" style="background-image: url('images/work-3.jpg'); " data-scrollax=" properties: { translateY: '-30%'}">
          <div class="icon d-flex text-center justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <div class="text">
          <h4 class="subheading">Responsive Web Design Projects</h4>
          <h2 class="heading"><a href="portfolio-single.html">A Product Landing Page</a></h2>
          <p>A product page or a webpage is designed to provide information for the user, usually information about a product and/or service.</p>
          <p><a href="#">View Project</a></p>
        </div>
      </div>
      <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
        <a href="portfolio-single.html" class="image order-2 d-flex justify-content-center align-items-center" style="background-image: url('images/work-4.jpg'); " data-scrollax=" properties: { translateY: '-30%'}">
          <div class="icon d-flex text-center justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <div class="text order-1">
          <h4 class="subheading">Responsive Web Design Projects</h4>
          <h2 class="heading"><a href="portfoli-singleo.html">Technical Documentation</a></h2>
          <p>In engineering, technical documentation refers to any type of documentation that describes handling, functionality and architecture of a technical product or a product under development or use</p>
          <p><a href="#">View Project</a></p>
        </div>
      </div>
      <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
        <a href="portfolio-single.html" class="image d-flex justify-content-center align-items-center" style="background-image: url('images/work-5.jpg'); " data-scrollax=" properties: { translateY: '-30%'}">
          <div class="icon d-flex text-center justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <div class="text">
          <h4 class="subheading">Responsive Web Design Projects</h4>
          <h2 class="heading"><a href="portfoli-singleo.html">Personal Portfolio Webpage</a></h2>
          <p>A personal portfolio is an evidentiary document designed to provide qualitative and quantitative information.</p>
          <p><a href="#">View Project</a></p>
        </div>
      </div>

    </div>
    </div>
  </section>

  <section class="ftco-section ftco-counter" id="section-counter">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span>Portfolio</span>
          <h2>I love to share my achievements</h2>
        </div>
      </div>
      <div class="row d-flex justify-content-start">
        <div class="col-md-5 col-sm-5 counter-wrap ftco-animate">
          <div class="block-18">
            <div class="text">
              <span class="ftco-label">Clients</span>
              <strong class="number" data-number="182">0</strong>
            </div>
          </div>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-md-5 col-sm-5 counter-wrap ftco-animate">
          <div class="block-18">
            <div class="text">
              <span class="ftco-label">Project done</span>
              <strong class="number" data-number="290">0</strong>
            </div>
          </div>
        </div>
      </div>
      <div class="row d-flex justify-content-end">
        <div class="col-md-5 counter-wrap ftco-animate">
          <div class="block-18">
            <div class="text">
              <span class="ftco-label">Cups of coffee</span>
              <strong class="number" data-number="410">0</strong>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-5 text-center">
          <div class="ftco-footer-widget mb-5">
            <ul class="ftco-footer-social list-unstyled">
              <li class="ftco-animate"><a href="https//www.twitter.com/yasinroshani"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="https//www.facebook.com/yasinroshani"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="https//www.instagram.com/yasinroshani"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
          <div class="ftco-footer-widget">
            <h2 class="mb-3">Contact Us</h2>
            <p class="h3 email"><a href="#">yasinroshani@yahoo.com</a></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a>by Mohammad Yasin Roshani</a>
 </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  </div>

</div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>
            {{-- my own content --}}

        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection