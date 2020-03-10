<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Bell Bootstrap 4 Theme</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">
  
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?> ">
  <?php wp_head()?>

  <!-- =======================================================
    Theme Name: Bell
    Theme URL: https://bootstrapmade.com/bell-free-bootstrap-4-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- Page Content
    ================================================== -->
  <!-- Hero -->

  <section class="hero">
    <div class="container text-center">

      <div class="col-md-12">
        <h1>
            Wifi App MIG
        </h1>

        <p class="tagline">
          Check the latest data from our access points.
        </p>
        <a class="btn btn-info" href="{{ url('adminarea') }}">Admin Area</a>
      </div>
      
    </div>

  </section>
  <!-- /Hero -->
  
  <div class="gtranslate"><?php echo do_shortcode('[gtranslate]'); ?></div>

  <!-- Header -->
  <header id="header">
    <div class="container">

      <!--<div id="logo" class="pull-left">-->
      <!--  <a href="index.html"><img src="{{ url('public/assets/img/logo-nav.png') }}" alt="" title="" /></img></a>-->
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Bell</a></h1>-->
      <!--</div>-->

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="#about">About Us</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact Us</a></li>
          <li><a href="{{ url('adminarea') }}">Admin Area</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->

      <nav class="nav social-nav pull-right d-none d-lg-inline">
        <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
      </nav>
      
    </div>
  </header>
  <!-- #header -->

  <!-- About -->

  <section class="about" id="about">
    <div class="container text-center">
      <h2>
          About MIG Wifi
        </h2>

      <p>
        What is MIG Wifi? Get your access point with the best and newest technology. Choose between our offers and get your perfect plan. You will also be able to control all data about connections to your network.
      </p>

      <div class="row stats-row">
        <div class="stats-col text-center col-md-3 col-sm-6">
          <div class="circle">
            <span class="stats-no" data-toggle="counter-up">232</span> Satisfied Customers
          </div>
        </div>

        <div class="stats-col text-center col-md-3 col-sm-6">
          <div class="circle">
            <span class="stats-no" data-toggle="counter-up">79</span> Access Points
          </div>
        </div>

        <div class="stats-col text-center col-md-3 col-sm-6">
          <div class="circle">
            <span class="stats-no" data-toggle="counter-up">1,463</span> Hours Of Support
          </div>
        </div>

        <div class="stats-col text-center col-md-3 col-sm-6">
          <div class="circle">
            <span class="stats-no" data-toggle="counter-up">15</span> Hard Workers
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /About -->
  <!-- Parallax -->

  <div class="block bg-primary block-pd-lg block-bg-overlay text-center" data-settings='{"stellar-background-ratio": 0.6}' data-toggle="parallax-bg">
    <h2>
        Our Product
      </h2>

    <p>
      Get the best access point for a very affordable price. Once you try it, you won't want to use any other.
    </p>
    <img alt="Bell - A perfect theme" class="gadgets-img hidden-md-down" src="{{ url('public/assets/img/router.png') }}">
  </div>
  <!-- /Parallax -->
  <!-- Features -->

  <section class="features" id="features">
    <div class="container">
      <h2 class="text-center">
          Features
        </h2>

      <div class="row">
        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center">
            <div>
              <div class="feature-icon">
                <span class="fas fa-wifi"></span>
              </div>
            </div>

            <div>
              <h3>
                  Best Connection
                </h3>

              <p>
                If you need a fast wifi network, we are your best option.
              </p>
            </div>
          </div>
        </div>

        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center">
            <div>
              <div class="feature-icon">
                <span class="fa fa-envelope"></span>
              </div>
            </div>

            <div>
              <h3>
                  Support 24/7
                </h3>

              <p>
                Whenever you have an issue, you can contact us.
              </p>
            </div>
          </div>
        </div>

        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center">
            <div>
              <div class="feature-icon">
                <span class="fa fa-bell"></span>
              </div>
            </div>

            <div>
              <h3>
                  Updated Notifications
                </h3>

              <p>
                Customize your notifications with the data you are interested in.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center">
            <div>
              <div class="feature-icon">
                <span class="fa fa-database"></span>
              </div>
            </div>

            <div>
              <h3>
                  All Connection Data
                </h3>

              <p>
                We have graphics where you can see every data about your access point.
              </p>
            </div>
          </div>
        </div>

        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center">
            <div>
              <div class="feature-icon">
                <span class="fas fa-euro-sign"></span>
              </div>
            </div>

            <div>
              <h3>
                  Affordable
                </h3>

              <p>
                You can compare with other companies, but you won't find such a good service for such an affordable prize.
              </p>
            </div>
          </div>
        </div>

        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center">
            <div>
              <div class="feature-icon">
                <span class="fa fa-dashboard"></span>
              </div>
            </div>

            <div>
              <h3>
                  Great Efficiency
                </h3>

              <p>
                Our access points work really good, but in case there is any issue, you have a three year assurance.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Features -->
  <!-- Call to Action -->

  <section class="cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-sm-12 text-lg-left text-center">
          <h2>
              Test Period
            </h2>

          <p>
            In case you want to try our services, you can get a free trial month. You won't regreat.
          </p>
        </div>

        <div class="col-lg-3 col-sm-12 text-lg-right text-center">
          <a class="btn btn-info" href="#" style="border:1.5px solid white">Get Free Trial</a>
        </div>
      </div>
    </div>
  </section>
  <!-- /Call to Action -->
  
  <!-- Team -->

  <section class="team" id="team">
    <div class="container">
      <h2 class="text-center">
          Meet our team
        </h2>

      <div class="row">
        <div class="col-sm-3 col-xs-6">
          <div class="card card-block">
            <a href="#"><img alt="" class="team-img" src="{{ url('public/assets/img/team-1.jpg') }}">
              <div class="card-title-wrap">
                <span class="card-title">Mike Ramsay</span> <span class="card-text">CEO</span>
              </div>

              <div class="team-over">
                <h4 class="hidden-md-down">
                  Connect with me
                </h4>

                <nav class="social-nav">
                  <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
            </nav>

            <p>
              Always trying to improve in my job. Giving all out of myself.
            </p>
          </div>
          </a>
        </div>
      </div>

      <div class="col-sm-3 col-xs-6">
        <div class="card card-block">
          <a href="#"><img alt="" class="team-img" src="{{ url('public/assets/img/team-2.jpg') }}">
              <div class="card-title-wrap">
                <span class="card-title">Leslie Jackson</span> <span class="card-text">CSO</span>
              </div>

              <div class="team-over">
                <h4 class="hidden-md-down">
                  Connect with me
                </h4>

                <nav class="social-nav">
                  <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
          </nav>

          <p>
            Helping customers offering the perfect product for them.
          </p>
        </div>
        </a>
      </div>
    </div>

    <div class="col-sm-3 col-xs-6">
      <div class="card card-block">
        <a href="#"><img alt="" class="team-img" src="{{ url('public/assets/img/team-3.jpg') }}">
              <div class="card-title-wrap">
                <span class="card-title">David Lynn</span> <span class="card-text">CHRO</span>
              </div>

              <div class="team-over">
                <h4 class="hidden-md-down">
                  Connect with me
                </h4>

                <nav class="social-nav">
                  <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
        </nav>

        <p>
          Always in contact with my coworkers.
        </p>
      </div>
      </a>
    </div>
    </div>

    <div class="col-sm-3 col-xs-6">
      <div class="card card-block">
        <a href="#"><img alt="" class="team-img" src="{{ url('public/assets/img/team-4.jpg') }}">
              <div class="card-title-wrap">
                <span class="card-title">Marie Chatham</span> <span class="card-text">CMO</span>
              </div>

              <div class="team-over">
                <h4 class="hidden-md-down">
                  Connect with me
                </h4>

                <nav class="social-nav">
                  <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
        </nav>

        <p>
          Getting our company to another level.
        </p>
      </div>
      </a>
    </div>
    </div>
    </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="section-title">Contact Us</h2>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-3 col-md-4">
          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>Primavera Street, 26<br>18008 Granada</p>
            </div>

            <div>
              <i class="fa fa-envelope"></i>
              <p>mig@gmail.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+1 5589 55488 55s</p>
            </div>

          </div>
        </div>

        <div class="col-lg-5 col-md-8">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12718.548749507849!2d-3.5912753!3d37.1613256!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5cc395f96e47c0d9!2sIES%20Zaid%C3%ADn%20Vergeles!5e0!3m2!1ses!2ses!4v1583484090506!5m2!1ses!2ses" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

  <footer class="site-footer">
    <div class="bottom">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-xs-12 text-lg-left text-center">
            <p class="copyright-text">
              © MIG Wifi
            </p>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bell
              -->
             Designed by MIG
            </div>
          </div>

          <div class="col-lg-6 col-xs-12 text-lg-right text-center">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Home</a>
              </li>

              <li class="list-inline-item">
                <a href="#about">About Us</a>
              </li>

              <li class="list-inline-item">
                <a href="#features">Features</a>
              </li>

              <li class="list-inline-item">
                <a href="#team">Team</a>
              </li>

              <li class="list-inline-item">
                <a href="#contact">Contact</a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </footer>
  <?php wp_footer()?>
  <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>

</body>
</html>