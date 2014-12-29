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
<link href="<?php echo asset('css/style.css');?>" media="screen" rel="stylesheet" type="text/css">
<!-- css => responsive sheet -->
<link href="<?php echo asset('css/responsive.css');?>" media="screen" rel="stylesheet" type="text/css">
<link href="<?php echo asset('css/dist/blue.css');?>" rel="stylesheet">

<!-- JQuery => javascript libs -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<!--[if lt IE 9]><!-->
<!-- css for ie -->
<link href="<?php echo asset('css/ie.css');?>" media="screen" rel="stylesheet" type="text/css">
<!--<![endif]-->

</head>

<body id="top" class="page">

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

      @if (Request::is('/'))
        <!-- Homepage slider  -->
        @include('partials.header')
      @endif

              <!-- Page Header -->
        <section class="pageHeader section mainSection scrollAnchor darkSection" id="pageHeader">

          <div class="topMenu navBar">
            <div class="container">
              <div class="row">

                <ul class="topSocial socialNav col-md-6 col-sm-12">
                  <li class="facebook"><a href="#"><i class="animated fa fa-facebook"></i></a></li>
                  <li class="twitter"><a href="#"><i class="animated fa fa-twitter"></i></a></li>
                  <li class="lang">
                    <form  method="POST" class="langForm">
                      <select name="language" id="language">
                        <option disabled="disabled" value="NoSeclect">Language</option>
                        <option value="En">English</option>
                        <option value="Fr">French</option>
                      </select>
                    </form><!-- end of lang form -->
                  </li><!-- end of lang -->
                </ul><!-- end of top social -->

              </div><!-- end of row -->
            </div><!-- end of container -->
          </div><!-- end of top menu -->

          <!-- Header -->
          <header class="header headerStyle1 style-1" id="header">
            <div class="sticky scrollHeaderWrapper">
              <div class="container">
                <div class="row">

                  <div class="logoWrapper">
                    <h1 class="logo">
                      <a class="clearfix" href="/" title="Riiingme"><img src="images/logos/logo2-blue.png" /></a>
                    </h1><!-- end of logo -->
                  </div><!-- end of logoWrapper -->

                  @include('partials.navigation')

                </div><!-- end of row -->
              </div><!-- end of container -->
            </div><!-- end of sticky -->
          </header><!-- end of header -->

        </section><!-- end of Page Header -->

      <!-- Contenu -->
         @yield('content')
      <!-- Fin contenu -->

      <!-- Footer -->
      @include('partials.footer')

    </div><!-- end of all wrapper -->

    <!-- JavaScript Files ================================================== -->
    <script src="<?php echo asset('js/compiler.js');?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/scripts.js');?>" type="text/javascript"></script>

    <!-- BootStrap JavaScript ================================================== -->
    <script src="<?php echo asset('js/bootstrap.js');?>" type="text/javascript"></script>

</body>
</html>
