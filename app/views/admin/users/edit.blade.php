@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-md-6 riiinglink">
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
    </div><!-- end of row -->

@stop
