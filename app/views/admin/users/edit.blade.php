@extends('layouts.admin')
@section('content')



    <div class="row">
        <div class="col-md-12">
            <section class="panel panel-default">
                <header class="panel-heading bg-danger lt no-border">
                    <div class="clearfix">
                        <a href="#" class="pull-left thumb avatar b-3x m-r">
                            <img src="{{ asset('users/'.$user_photo) }}" class="img-circle">
                        </a>
                        <div class="clear">
                            <div class="h3 m-t-xs m-b-xs text-white">{{ $user_name }}</div>
                            <small class="text-muted">Vos informations</small>
                        </div>
                    </div>
                    <?php
                    $infos = $user_labels[1];
                    $prive = $user_labels[2];
                    $prof  = $user_labels[3];
                    ?>
                </header>
            </section>
        </div>
    </div>

    <div class="row">




            <?php
            //echo '<pre>';
            //print_r($infos);
            //echo '</pre>';
            ?>



        @if(!empty($groupes_types))
            @foreach($groupes_types as $groupe)

            <div class="col-xs-12 col-md-4 col-lg-4 riiinglink">

                <section class="panel panel-default">
                    <header class="panel-heading">
                        <div class="groupe-icon-info groupe-icon-{{ $groupe->id }}">{{ $groupe->titre }}</div>
                    </header>
                    <div class="panel-body">

                        <div class="list-group no-radius alt">

                            <?php $items = $user_labels[$groupe->id]; ?>

                            @foreach($groupe->groupe_type as $type)

                                <article class="media">
                                    <span class="pull-left thumb-sm"><i class="fa fa-bookmark fa-1x"></i></span>
                                    <div class="media-body">
                                        <div class="pull-right media-xs text-center">
                                            <strong class="h5">{{ $type->titre }}</strong><br>
                                        </div>
                                        <p class="h5 text-info">{{ $items[$type->id]->label or '' }}</p>
                                    </div>
                                </article>

                                <div class="line pull-in"></div>

                            @endforeach
                        </div>

                    </div>
                </section>
            </div><!-- end of col-->

            @endforeach
        @endif

    </div><!-- end of row -->

@stop
