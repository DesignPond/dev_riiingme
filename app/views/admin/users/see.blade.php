@extends('layouts.admin')
@section('content')


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
