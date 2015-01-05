@extends('layouts.admin')
@section('content')


<?php
    //echo '<pre>';
    //print_r($user);
    //echo '</pre>';
?>


<div class="row">
    <div class="col-md-4 riiinglink">
        <section class="panel panel-default">
            <header class="panel-heading bg-info lt no-border">
                <div class="clearfix">
                    <a href="#" class="pull-left thumb avatar b-3x m-r">
                        <img src="{{ asset('users/'.$infos['user_photo']) }}" class="img-circle">
                    </a>
                    <div class="clear">
                        <div class="h3 m-t-xs m-b-xs text-white">
                            {{ $infos['user_name'] }}
                            <i class="fa fa-circle text-white pull-right text-xs m-t-sm"></i>
                        </div>
                        <small class="text-muted">Vos informations</small>
                    </div>
                </div>
            </header>

            @if(!empty($user_labels))
                <div class="list-group no-radius alt">
                    @foreach($user_labels as $labels)
                        @foreach($labels as $label)
                            <a class="list-group-item" href="#">
                                <span class="badge bg-danger">{{ $types[$label->type_id] }}</span>
                                <?php echo (isset($label->label ) ? $label->label  : '&nbsp;'); ?>
                            </a>
                        @endforeach
                    @endforeach
                </div>
            @else
               <p><a class="btn btn-xs btn-info" href="{{ url('user/'.$thumb->id) }}">Mettre à jour vos infos</a></p>
            @endif
        </section>


    </div><!-- end of col-->
    <div class="col-md-8">

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
