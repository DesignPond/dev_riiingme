<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js IE lt-ie9 lt-ie8 lt-ie7"></html><![endif]-->
<!--[if IE 7]><html class="no-js IE lt-ie9 lt-ie8"></html><![endif]-->
<!--[if IE 8]><html class="no-js IE lt-ie9"></html><![endif]-->
<!--[if gt IE 8]><html class="no-js IE gt-ie8"></html><![endif]-->
<!--[if !IE]><!--><html class="no-js"><!--<![endif]-->
<head>

<!-- title -->
<title>Riiingme</title>

<!-- meta tags -->
<meta charset="utf-8">
<meta content="width=device-width,initial-scale=1,maximum-scale=1" name="viewport">
<meta content="Designpond" name="author">
<meta content="Application Riiingme" name="description">

<!-- fav icon -->
<link href="<?php echo asset('images/favicon.png');?>" rel="shortcut icon">

<!-- css => style sheet -->
<link href="<?php echo asset('style.css');?>" media="screen" rel="stylesheet" type="text/css">
<!-- css => responsive sheet -->
<link href="<?php echo asset('css/responsive.css');?>" media="screen" rel="stylesheet" type="text/css">

  <link href="<?php echo asset('css/dist/red.css');?>" rel="stylesheet">
<!--
  <link href="<?php echo asset('css/dist/blue.css');?>" rel="stylesheet">
  <link href="<?php echo asset('css/dist/brown.css');?>" rel="stylesheet">
  <link href="<?php echo asset('css/dist/cyan.css');?>" rel="stylesheet">
  <link href="<?php echo asset('css/dist/green.css');?>" rel="stylesheet">
  <link href="<?php echo asset('css/dist/lightgreen.css');?>" rel="stylesheet">
  <link href="<?php echo asset('css/dist/pink.css');?>" rel="stylesheet">
  <link href="<?php echo asset('css/dist/violet.css');?>" rel="stylesheet">
  <link href="<?php echo asset('css/dist/yellow.css');?>" rel="stylesheet">
  -->

<!-- JQuery => javascript libs -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<!--[if lt IE 9]><!-->
<!-- css for ie -->
<link href="<?php echo asset('css/ie.css');?>" media="screen" rel="stylesheet" type="text/css">
<!--<![endif]-->

</head>

  <body id="top" class="style-2">

    <!--[if lt IE 9]>
      <p class="browsehappy">You are using an<strong>outdated</strong>browser. Please<a href="http://browsehappy.com/">upgrade your browser</a>to improve your experience.</p>
    <![endif]-->

    <div class="loadingContainer">
      <div class="loading">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
      </div><!-- end of loading -->
    </div><!-- end of loading container -->

    <div class="allWrapper">

      <!-- Navigation  -->
      @include('partials.header')

      <!-- Header -->
      <header class="header headerStyle1 headerStyle2" id="header">
        <div class="sticky scrollHeaderWrapper">
          <div class="container">
            <div class="row">

              <div class="logoWrapper">
                <h1 class="logo">
                  <a class="clearfix" href="/" title="Riiingme"><img src="images/logos/logo2-red.png" /></a>
                </h1><!-- end of logo -->
              </div><!-- end of logoWrapper -->

              <!-- Navigation  -->
              @include('partials.navigation')

            </div><!-- end of row -->
          </div><!-- end of container -->
        </div><!-- end of sticky -->
      </header><!-- end of header -->

      <!-- Contenu -->
         @yield('content')
      <!-- Fin contenu -->

      <!-- Footer -->
      <footer class="footer" id="footer">

        <!-- Top Footer -->
        <div class="topFooter">
          <div class="container">
            <div class="row">

              <div class="col-md-4 footerWidget footerBox">
                <h5 class="footerWidgetHeader">Riiingme</h5><!-- end of footer widget header -->
                <p class="footerAboutContent footerText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis.</p>
                <div class="aboutLinks clearfix">
                  <ul class="footerLinksList">
                    <li><a href="about.html" title="About Us">A propos</a></li>
                    <li><a href="services.html" title="">Condition générales</a></li>
                    <li><a href="services.html" title="Our Services">Service</a></li>
                    <li><a href="contact.html" title="Contact Us">Contactez-nous</a></li>
                  </ul><!-- end of footer links list -->
                </div><!-- end of about links -->
              </div><!-- end of footer widget -->

              <div class="col-md-2 footerWidget footerBox">
                <h5 class="footerWidgetHeader">Aide &amp; Support</h5><!-- end of footer widget header -->
                <ul class="footerLinksList">
                  <li><a href="faq.html" title="FAQs">FAQs</a></li>
                  <li><a href="#" title="Live Support">Support</a></li>
                  <li><a href="#" title="Submit Ticket">Soumettre un Ticket</a></li>
                  <li><a href="#" title="Customer Panel">Votre profil</a></li>
                  <li><a href="#" title="Knowledge Base">Base de connaissances</a></li>
                </ul><!-- end of footer links list -->
              </div><!-- end of footer widget -->

              <div class="col-md-2 footerWidget footerBox">
                <h5 class="footerWidgetHeader">Mon profile</h5><!-- end of footer widget header -->
                <ul class="footerLinksList">
                  <li><a href="sing-in.html" title="Sign In">Se logguer</a></li>
                  <li><a href="#" title="Track My Ticket">Mes Tickets</a></li>
                  <li><a href="#" title="Help">Aide</a></li>
                </ul><!-- end of footer links list -->
              </div><!-- end of footer widget -->

              <div class="col-md-4 footerWidget footerBox">
                <h5 class="footerWidgetHeader">Contact</h5>
                <ul class="getInTouchList">
                  <li>
                    <span class="head">Address :</span>
                    <span class="text">Riiingme, 2000 Neuchâtel</span>
                  </li>
                  <li>
                    <span class="head">Support  :</span>
                    <span class="text">
                      Support  Telephone N°  :
                      <a href="tele:0201065370701" title="click to call us">032 123 45 56</a>
                    </span>
                    <span class="text">
                      Support  Email  :
                      <a href="mailto:help@Riiingme.ch">help@Riiingme.ch</a>
                    </span>
                  </li>
                </ul><!-- end of get In Touch List -->
              </div><!-- end of footer widget -->

            </div><!-- end of row -->
          </div><!-- end of container -->
        </div><!-- end of top footer -->

        <!-- Bottom Footer -->
        <div class="bottomFooter">
          <div class="container">
            <div class="row">

              <div class="col-md-6 copyrights">
                <p>Tous droits réservés &copy; Riiingme 2015</p>
                <ul class="terms clearfix">
                  <li><a href="#" title="Terms of Use">Conditions d'utilisation</a></li>
                  <li><a href="#" title="Privacy Policy">Politique de confidentialité</a></li>
                </ul><!-- end of terms -->
              </div><!-- end of copyrights -->

              <div class="col-md-6 footerSocial">
                <div class="footerSocialWrapper">

                  <ul class="bottomSocial socialNav">
                    <li class="facebook"><a href="#"><i class="animated fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="animated fa fa-twitter"></i></a></li>
                    <li class="rss"><a href="#"><i class="animated fa fa-rss"></i></a></li>
                  </ul><!-- end of bottom social -->

                  <ul class="paymentsNav">
                    <li class="visa">
                      <a href="#" title="visa"><img alt="visa card" src="images/visa.png" title="visa card"></a>
                    </li>
                    <li class="master">
                      <a href="#" title="master card"><img alt="master card" src="images/master-card.png" title="master card"></a>
                    </li>
                    <li class="paypal">
                      <a href="#" title="paypal"><img alt="paypal" src="images/paypal.png" title="paypal"></a>
                    </li>
                  </ul><!-- end of payments nav -->
                </div><!-- end of footer social wrapper -->
              </div><!-- end of footer social -->
            </div><!-- end of row -->
          </div><!-- end of container -->
        </div><!-- end of bottom footer -->

      </footer><!-- end of footer -->

    </div><!-- end of all wrapper -->

    <!-- JavaScript Files ================================================== -->
    <script src="<?php echo asset('js/compiler.js');?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/scripts.js');?>" type="text/javascript"></script>

    <!-- BootStrap JavaScript ================================================== -->
    <script src="<?php echo asset('js/bootstrap.js');?>" type="text/javascript"></script>

</body>
</html>
