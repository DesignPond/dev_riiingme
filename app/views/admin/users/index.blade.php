@extends('layouts.admin')
@section('content')


<?php
    echo '<pre>';

//$infos = array_slice($grouped, 0, 1, true);
//$links = array_slice($grouped, 1, 2, true);

    //print_r($user);
    echo '</pre>';
?>


<div class="row">
    <div class="col-md-3">
        <section class="panel panel-default">
            <header class="panel-heading bg-danger lt no-border">
                <div class="clearfix">
                    <a href="#" class="pull-left thumb avatar b-3x m-r">
                        <img src="{{ asset('users/'.$infos['user_photo']) }}" class="img-circle">
                    </a>
                    <div class="clear">
                        <div class="h3 m-t-xs m-b-xs text-white">
                            {{ $infos['user_name'] }}
                            <i class="fa fa-circle text-white pull-right text-xs m-t-sm"></i>
                        </div>
                        <small class="text-muted">Art director</small>
                    </div>
                </div>
            </header>
            <div class="list-group no-radius alt">
                <a class="list-group-item" href="#">
                    <span class="badge bg-success">25</span>
                    <i class="fa fa-comment icon-muted"></i>
                    Messages
                </a>
                <a class="list-group-item" href="#">
                    <span class="badge bg-info">16</span>
                    <i class="fa fa-envelope icon-muted"></i>
                    Inbox
                </a>
                <a class="list-group-item" href="#">
                    <span class="badge bg-light">5</span>
                    <i class="fa fa-eye icon-muted"></i>
                    Profile visits
                </a>
            </div>
        </section>
        <section class="panel panel-info">
            <div class="panel-body">
                <a href="#" class="thumb pull-right m-l">
                    <img src="images/avatar.jpg" class="img-circle">
                </a>
                <div class="clear">
                    <a href="#" class="text-info">@Mike Mcalidek <i class="icon-twitter"></i></a>
                    <small class="block text-muted">2,415 followers / 225 tweets</small>
                    <a href="#" class="btn btn-xs btn-success m-t-xs">Follow</a>
                </div>
            </div>
        </section>

    </div><!-- end of col-->
    <div class="col-md-9">

            @if(!empty($thumbs))

                <?php $group_thumbs = $thumbs->chunk(4); ?>


                @foreach($group_thumbs as $group)
                    <div class="row">
                    @foreach($group as $thumb)
                        <div class="col-md-3">
                            <section class="panel panel-info">
                                <div class="panel-body">
                                    <a class="thumb pull-right m-l" href="#">
                                        <img class="img-circle" src="{{ asset('users/'.$thumb['invited_photo']) }}">
                                    </a>
                                    <div class="clear">
                                        <a class="text-info" href="{{ url('user/'.$thumb->id) }}">{{ $thumb['invited_name'] }}</a>
                                        <small class="block text-muted">2,415 followers</small>
                                        <a class="btn btn-xs btn-info m-t-xs" href="{{ url('user/'.$thumb->id) }}">Voir</a>
                                    </div>
                                </div>
                            </section>
                        </div><!-- end of col -->
                    @endforeach
                    </div><!-- end of row -->
                @endforeach

            @endif

    </div><!-- end of col -->
 </div><!-- end of row -->

@stop
