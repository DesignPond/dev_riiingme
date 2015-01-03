@extends('layouts.admin')
@section('content')


<?php
    echo '<pre>';

//$infos = array_slice($grouped, 0, 1, true);
//$links = array_slice($grouped, 1, 2, true);

    //print_r($thumbs->toArray());
    echo '</pre>';
?>


<div class="row">
    <div class="col-md-4">

    </div><!-- end of col-->
    <div class="col-md-8">

            @if(!empty($thumbs))
                @foreach($thumbs as $thumb)

                    <section class="panel panel-info">
                        <div class="panel-body">
                            <a class="thumb pull-right m-l" href="#">
                                <img class="img-circle" src="{{ asset('users/'.$thumb['invited_photo'].'') }}">
                            </a>
                            <div class="clear">
                                <a class="text-info" href="{{ url('user/'.$thumb->id) }}">{{ $thumb['invited_name'] }}</a>
                                <small class="block text-muted">2,415 followers / 225 tweets</small>
                                <a class="btn btn-xs btn-success m-t-xs" href="{{ url('user/'.$thumb->id) }}">Follow</a>
                            </div>
                        </div>
                    </section>
                @endforeach
            @endif

    </div><!-- end of col -->
 </div><!-- end of row -->

@stop
