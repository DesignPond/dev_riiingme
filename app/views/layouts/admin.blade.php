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
                            <li class="active">Workset</li>
                        </ul>
                        <div class="m-b-md">
                            <h3 class="m-b-none">Workset</h3>
                            <small>Welcome back, Noteman</small>
                        </div>

                        <section class="panel panel-default">
                            <div class="row m-l-none m-r-none bg-light lter">
                                <div class="col-sm-6 col-md-3 padder-v b-r b-light">
                                    <span class="fa-stack fa-2x pull-left m-r-sm">
                                      <i class="fa fa-circle fa-stack-2x text-info"></i>
                                      <i class="fa fa-male fa-stack-1x text-white"></i>
                                    </span>
                                    <a class="clear" href="#">
                                        <span class="h3 block m-t-xs"><strong>52,000</strong></span>
                                        <small class="text-muted text-uc">New robots</small>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-md-3 padder-v b-r b-light lt">
                                    <span class="fa-stack fa-2x pull-left m-r-sm">
                                      <i class="fa fa-circle fa-stack-2x text-warning"></i>
                                      <i class="fa fa-bug fa-stack-1x text-white"></i>
                                      <span class="easypiechart pos-abt" data-percent="100" data-line-width="4" data-track-Color="#fff" data-scale-Color="false" data-size="50" data-line-cap='butt' data-animate="2000" data-target="#bugs" data-update="3000"></span>
                                    </span>
                                    <a class="clear" href="#">
                                        <span class="h3 block m-t-xs"><strong id="bugs">468</strong></span>
                                        <small class="text-muted text-uc">Bugs intruded</small>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-md-3 padder-v b-r b-light">
                                    <span class="fa-stack fa-2x pull-left m-r-sm">
                                      <i class="fa fa-circle fa-stack-2x text-danger"></i>
                                      <i class="fa fa-fire-extinguisher fa-stack-1x text-white"></i>
                                      <span class="easypiechart pos-abt" data-percent="100" data-line-width="4" data-track-Color="#f5f5f5" data-scale-Color="false" data-size="50" data-line-cap='butt' data-animate="3000" data-target="#firers" data-update="5000"></span>
                                    </span>
                                    <a class="clear" href="#">
                                        <span class="h3 block m-t-xs"><strong id="firers">359</strong></span>
                                        <small class="text-muted text-uc">Extinguishers ready</small>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-md-3 padder-v b-r b-light lt">
                                    <span class="fa-stack fa-2x pull-left m-r-sm">
                                      <i class="fa fa-circle fa-stack-2x icon-muted"></i>
                                      <i class="fa fa-clock-o fa-stack-1x text-white"></i>
                                    </span>
                                    <a class="clear" href="#">
                                        <span class="h3 block m-t-xs"><strong>31:50</strong></span>
                                        <small class="text-muted text-uc">Left to exit</small>
                                    </a>
                                </div>
                            </div>
                        </section>

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

</body>
</html>