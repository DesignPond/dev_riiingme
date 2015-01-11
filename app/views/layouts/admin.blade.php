<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8" />
    <title>Notebook | Web Application</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link href="<?php echo asset('images/favicon.png');?>" rel="shortcut icon">

    <link rel="stylesheet" href="<?php echo asset('administration/css/bootstrap.css');?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo asset('administration/css/animate.css');?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo asset('administration/css/font-awesome.min.css');?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo asset('administration/css/font.css" type="text/css');?>" />
    <link rel="stylesheet" href="<?php echo asset('administration/js/calendar/bootstrap_calendar.css');?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo asset('administration/css/app.css');?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo asset('administration/css/user.css');?>" type="text/css" />
    <!--[if lt IE 9]>
      <script src="<?php echo asset('administration/js/ie/html5shiv.js');?>"></script>
      <script src="<?php echo asset('administration/js/ie/respond.min.js');?>"></script>
      <script src="<?php echo asset('administration/js/ie/excanvas.js');?>"></script>
    <![endif]-->
</head>
<body class="">

<section class="vbox">

    <!-- Navigation -->
    @include('admin.partials.header')

    <section>
        <section class="hbox stretch">
            <!-- .aside -->
            <aside class="bg-dark lter aside-md hidden-print hidden-xs" id="nav">
                <section class="vbox">
                    <section class="w-f scrollable">
                        <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
                            @include('admin.partials.navigation')
                        </div>
                    </section>
                    <footer class="footer lt hidden-xs b-t b-dark">
                        <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon">
                            <i class="fa fa-angle-left text"></i>
                            <i class="fa fa-angle-right text-active"></i>
                        </a>
                    </footer>
                </section>
            </aside>
            <!-- /.aside -->
            <section id="content">
                <section class="vbox">
                    <section class="scrollable padder">

                        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                            <li class="active">Riiinglink</li>
                        </ul>

                        <div class="m-b-md">
                            <h3 class="m-b-none">Riiinglink</h3>
                            <small>Welcome back, Cindy Leschaud</small>
                        </div>

                        <!-- Contenu -->
                        @yield('content')
                        <!-- Fin contenu -->

                    </section>
                </section>

                <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen, open" data-target="#nav,html"></a>
            </section>
            <aside class="bg-light lter b-l aside-md hide" id="notes">
                <div class="wrapper">Notification</div>
            </aside>

        </section>
    </section>
</section>


<script src="<?php echo asset('administration/js/jquery.min.js');?>"></script>
<!-- Bootstrap -->
<script src="<?php echo asset('administration/js/bootstrap.js');?>"></script>
<!-- App -->
<script src="<?php echo asset('administration/js/app.js');?>"></script>
<script src="<?php echo asset('administration/js/slimscroll/jquery.slimscroll.min.js');?>"></script>
<script src="<?php echo asset('administration/js/charts/easypiechart/jquery.easy-pie-chart.js');?>"></script>
<script src="<?php echo asset('administration/js/charts/sparkline/jquery.sparkline.min.js');?>"></script>
<script src="<?php echo asset('administration/js/charts/flot/jquery.flot.min.js');?>"></script>
<script src="<?php echo asset('administration/js/charts/flot/jquery.flot.tooltip.min.js');?>"></script>
<script src="<?php echo asset('administration/js/charts/flot/jquery.flot.resize.js');?>"></script>
<script src="<?php echo asset('administration/js/charts/flot/jquery.flot.grow.js');?>"></script>
<script src="<?php echo asset('administration/js/charts/flot/demo.js');?>"></script>

<script src="<?php echo asset('administration/js/calendar/bootstrap_calendar.js');?>"></script>
<script src="<?php echo asset('administration/js/calendar/demo.js');?>"></script>

<script src="<?php echo asset('administration/js/sortable/jquery.sortable.js');?>"></script>
<script src="<?php echo asset('administration/js/app.plugin.js');?>"></script>
<script src="<?php echo asset('administration/js/riiinglink.js');?>"></script>

</body>
</html>