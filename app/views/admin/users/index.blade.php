@extends('layouts.admin')
@section('content')


<div class="row">
    <div class="col-lg-8">
        <div class="row">
            <div class="col-sm-6">
                <section class="panel panel-default">
                    <header class="panel-heading bg-danger lt no-border">
                        <div class="clearfix">
                            <a class="pull-left thumb avatar b-3x m-r" href="#">
                                <img src="{{ asset('users/'.$infos['user_photo']) }}" class="img-circle">
                            </a>
                            <div class="clear">
                                <div class="h3 m-t-xs m-b-xs text-white">
                                    {{ $infos['user_name'] }}
                                    <i class="fa fa-circle text-white pull-right text-xs m-t-sm"></i>
                                </div>
                                <small class="text-muted">Bienvenue</small>
                            </div>
                        </div>
                    </header>
                    <div class="list-group no-radius alt">
                        <a href="#" class="list-group-item">
                            <span class="badge bg-success">25</span>
                            <i class="fa fa-comment icon-muted"></i>
                            Messages
                        </a>
                        <a href="#" class="list-group-item">
                            <span class="badge bg-info">16</span>
                            <i class="fa fa-envelope icon-muted"></i>
                            Inbox
                        </a>
                        <a href="#" class="list-group-item">
                            <span class="badge bg-light">5</span>
                            <i class="fa fa-eye icon-muted"></i>
                            Profile visits
                        </a>
                    </div>
                </section>
                <section class="panel panel-info">
                    <div class="panel-body">
                        <a class="thumb pull-right m-l" href="#">
                            <img class="img-circle" src="images/avatar.jpg">
                        </a>
                        <div class="clear">
                            <a class="text-info" href="#">@Mike Mcalidek <i class="icon-twitter"></i></a>
                            <small class="block text-muted">2,415 followers / 225 tweets</small>
                            <a class="btn btn-xs btn-success m-t-xs" href="#">Follow</a>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-sm-6">
                <section class="panel panel-default">
                    <header class="panel-heading">
                        <span class="label bg-dark">15</span> Inbox
                    </header>
                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 275px;">
                        <section data-height="275px" class="panel-body slim-scroll" style="overflow: hidden; width: auto; height: 230px;">
                            <article class="media">
                                <span class="pull-left thumb-sm"><i class="fa fa-file-o fa-3x icon-muted"></i></span>
                                <div class="media-body">
                                    <div class="pull-right media-xs text-center text-muted">
                                        <strong class="h4">12:18</strong><br>
                                        <small class="label bg-light">pm</small>
                                    </div>
                                    <a class="h4" href="#">Bootstrap 3 released</a>
                                    <small class="block"><a class="" href="#">John Smith</a> <span class="label label-success">Circle</span></small>
                                    <small class="block m-t-sm">Sleek, intuitive, and powerful mobile-first front-end framework for faster and easier web development.</small>
                                </div>
                            </article>
                            <div class="line pull-in"></div>
                            <article class="media">
                                <span class="pull-left thumb-sm"><i class="fa fa-file-o fa-3x icon-muted"></i></span>
                                <div class="media-body">
                                    <div class="pull-right media-xs text-center text-muted">
                                        <strong class="h4">17</strong><br>
                                        <small class="label bg-light">feb</small>
                                    </div>
                                    <a class="h4" href="#">Bootstrap documents</a>
                                    <small class="block"><a class="" href="#">John Smith</a> <span class="label label-info">Friends</span></small>
                                    <small class="block m-t-sm">There are a few easy ways to quickly get started with Bootstrap, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.</small>
                                </div>
                            </article>
                            <div class="line pull-in"></div>
                            <article class="media">
                                <div class="media-body">
                                    <div class="pull-right media-xs text-center text-muted">
                                        <strong class="h4">09</strong><br>
                                        <small class="label bg-light">jan</small>
                                    </div>
                                    <a class="h4 text-success" href="#">Mobile first html/css framework</a>
                                    <small class="block m-t-sm">Bootstrap, Ratchet</small>
                                </div>
                            </article>
                        </section>
                        <div class="slimScrollBar" style="background: none repeat scroll 0% 0% rgb(0, 0, 0); width: 7px; position: absolute; top: 1px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 201.141px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: none repeat scroll 0% 0% rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                </section>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <section class="panel panel-default">
            <div class="panel-body">
                <div class="clearfix text-center m-t">
                    <div class="inline">
                        <div data-animate="1000" data-line-cap="butt" data-size="130" data-scale-color="false" data-track-color="#f5f5f5" data-bar-color="#4cc0c1" data-line-width="5" data-percent="75" class="easypiechart easyPieChart" style="width: 130px; height: 130px; line-height: 130px;">
                            <div class="thumb-lg">
                                <img class="img-circle" src="{{ asset('users/'.$infos['user_photo']) }}">
                            </div>
                            <canvas height="130" width="130"></canvas></div>
                        <div class="h4 m-t m-b-xs">{{ $infos['user_name'] }}</div>
                        <small class="text-muted m-b">Web developpeur</small>
                    </div>
                </div>
            </div>
            <footer class="panel-footer bg-info text-center">
                <div class="row pull-out">
                    <div class="col-xs-4">
                        <div class="padder-v">
                            <span class="m-b-xs h3 block text-white">245</span>
                            <small class="text-muted">Followers</small>
                        </div>
                    </div>
                    <div class="col-xs-4 dk">
                        <div class="padder-v">
                            <span class="m-b-xs h3 block text-white">55</span>
                            <small class="text-muted">Following</small>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="padder-v">
                            <span class="m-b-xs h3 block text-white">2,035</span>
                            <small class="text-muted">Tweets</small>
                        </div>
                    </div>
                </div>
            </footer>
        </section>
    </div>
</div>


@stop
