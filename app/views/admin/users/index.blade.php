@extends('layouts.admin')
@section('content')

    <section class="vbox">
        <section class="scrollable">
            <section class="hbox stretch">
                <aside class="aside-xl bg-light lter b-r">
                    <section class="vbox">
                        <section class="scrollable">
                            <div class="wrapper">
                                <div class="clearfix m-b">
                                    <a href="#" class="pull-left thumb m-r">
                                        <img src="{{ asset('users/'.$user_photo) }}" class="img-circle">
                                    </a>
                                    <div class="clear">
                                        <div class="h4 m-t-xs m-b-xs">{{ $user_name }}</div>
                                    </div>
                                </div>
                                <div class="panel wrapper panel-success">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <a href="#">
                                                <small class="text-muted">Inscrit le</small>
                                                <span class="m-b-xs h5 block">{{ $user->created_at->formatLocalized('%d %B %Y') }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group btn-group-justified m-b">
                                    <a class="btn btn-primary btn-rounded" data-loading-text="Connecting">
                                        <i class="fa fa-cloud-upload"></i> &nbsp;Changer de plan
                                    </a>
                                </div>
                                <div>
                                    <small class="text-uc text-xs text-muted">about me</small>
                                    <p>Artist</p>
                                    <small class="text-uc text-xs text-muted">info</small>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat.</p>

                                </div>
                            </div>
                        </section>
                    </section>
                </aside>
                <aside class="bg-white">
                    <section class="vbox">
                        <header class="header bg-light bg-gradient">
                            <ul class="nav nav-tabs nav-white">
                                <li class="active"><a href="#activity" data-toggle="tab">Derniers riiinglinks</a></li>
                                <li class=""><a href="#events" data-toggle="tab">Demandes de partage</a></li>
                                <li class=""><a href="#interaction" data-toggle="tab">Interaction</a></li>
                            </ul>
                        </header>
                        <section class="scrollable">
                            <div class="tab-content">
                                <div class="tab-pane active" id="activity">
                                    <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
                                            @foreach($thumbs as $thumb)
                                                <li class="list-group-item">
                                                    <a href="{{ url('user/'.$thumb->id) }}" class="thumb-sm pull-left m-r-sm">
                                                        <img src="{{ asset('users/'.$thumb['invited_photo']) }}" class="img-circle">
                                                    </a>
                                                    <a href="{{ url('user/'.$thumb->id) }}" class="clear">
                                                        <strong class="block">{{ $thumb['invited_name'] }}</strong>
                                                    </a>
                                                </li>
                                            @endforeach
                                    </ul>
                                </div>
                                <div class="tab-pane" id="events">
                                    <div class="text-center wrapper">
                                        <i class="fa fa-spinner fa fa-spin fa fa-large"></i>
                                    </div>
                                </div>
                                <div class="tab-pane" id="interaction">
                                    <div class="text-center wrapper">
                                        <i class="fa fa-spinner fa fa-spin fa fa-large"></i>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </section>
                </aside>
                <aside class="col-lg-4 b-l">
                    <section class="vbox">
                        <section class="scrollable">
                            <div class="wrapper">

                                <section class="panel panel-default">
                                    <h4 class="font-thin padder">Latest Tweets</h4>
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <p>Wellcome <a href="#" class="text-info">@Drew Wllon</a> and play this web application template, have fun1 </p>
                                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 minuts ago</small>
                                        </li>
                                        <li class="list-group-item">
                                            <p>Morbi nec <a href="#" class="text-info">@Jonathan George</a> nunc condimentum ipsum dolor sit amet, consectetur</p>
                                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 1 hour ago</small>
                                        </li>
                                        <li class="list-group-item">
                                            <p><a href="#" class="text-info">@Josh Long</a> Vestibulum ullamcorper sodales nisi nec adipiscing elit. </p>
                                            <small class="block text-muted"><i class="fa fa-clock-o"></i> 2 hours ago</small>
                                        </li>
                                    </ul>
                                </section>
                                <section class="panel clearfix bg-info lter">
                                    <div class="panel-body">
                                        <a href="#" class="thumb pull-left m-r">
                                            <img src="{{ url('administration/images/avatar.jpg') }}" class="img-circle">
                                        </a>
                                        <div class="clear">
                                            <a href="#" class="text-info">@Mike Mcalidek <i class="fa fa-twitter"></i></a>
                                            <small class="block text-muted">2,415 followers / 225 tweets</small>
                                            <a href="#" class="btn btn-xs btn-success m-t-xs">Follow</a>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </section>
                    </section>
                </aside>

            </section>
        </section>
    </section>


@stop
