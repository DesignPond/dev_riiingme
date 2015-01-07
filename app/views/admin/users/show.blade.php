@extends('layouts.admin')
@section('content')

    <div class="row">

        <div class="riiinglinkIcon">
            <img src="{{ asset('images/riiinglink.svg') }}" alt="" />
        </div><!-- end of facts wrapper -->

        <div class="col-md-6">

            <section class="panel panel-default">
                <header class="panel-heading bg-danger lt no-border">
                    <div class="clearfix">
                        <a class="pull-left thumb avatar b-3x m-r" href="#">
                            <img class="img-circle" src="{{ asset('users/'.$host_riiinglink->user_photo.'') }}">
                        </a>
                        <div class="clear">
                            <div class="h3 m-t-xs m-b-xs text-white">
                                {{ $host_riiinglink->user_name }}
                                <i class="fa fa-circle text-white pull-right text-xs m-t-sm"></i>
                            </div>
                            <small class="text-muted">Art director</small>
                        </div>
                    </div>
                </header>
                <div class="list-group no-radius alt">
                    <a href="#" class="list-group-item updateRiiinglink">
                        <span class="badge bg-success">25</span>
                        <i class="fa fa-comment icon-muted"></i>
                        update
                    </a>
                    <a href="#" class="list-group-item finishRiiinglink">
                        <span class="badge bg-info">16</span>
                        <i class="fa fa-envelope icon-muted"></i>
                        finish
                    </a>
                </div>
            </section>

        </div><!-- end of facts wrapper -->

        <div class="col-md-6">
            <section class="panel panel-default">
                <header class="panel-heading bg-blue lt no-border">
                    <div class="clearfix">
                        <a class="pull-left thumb avatar b-3x m-r" href="#">
                            <img class="img-circle" src="{{ asset('users/'.$invited_riiinglink->user_photo.'') }}">
                        </a>
                        <div class="clear">
                            <div class="h3 m-t-xs m-b-xs text-white">
                                {{ $invited_riiinglink->user_name }}
                                <i class="fa fa-circle text-white pull-right text-xs m-t-sm"></i>
                            </div>
                            <small class="text-muted">Art director</small>
                        </div>
                    </div>
                </header>
                <div class="list-group no-radius alt">

                    <a href="#" class="list-group-item">
                        <i class="fa fa-comment icon-muted"></i>update
                    </a>

                </div>
            </section>

        </div><!-- end of col -->
    </div><!-- end of row -->
<br/>

    <div class="row">

        <div class="col-md-6">
            <div class="riiinglink">
                <div class="partage-host partage-riiinglink">

                    <form id="formRiiinglink">
                    <input type="hidden" name="riiinglink_id" value="{{ $host_riiinglink->id }}">

                        @if(!empty($host_labels))
                            @foreach($host_labels as $host_index => $host_group)

                            <section class="panel panel-default">
                                <header class="panel-heading">
                                    <div class="groupe-icon-info groupe-icon-{{ $host_index }}">{{ $groupes[$host_index] }}</div>
                                </header>
                                <div class="panel-body riiinglink">

                                    <div class="partage-icon <?php echo (count($host_metas[$host_index]) == 0 ? 'hideGroup' : '' ); ?>">

                                        <div class="<?php echo ($host_index > 1 ? 'riiinglinkList' : ''); ?> partage-group">

                                            @foreach($host_group as $host)
                                                @if(in_array($host->id, $host_metas[$host_index]))

                                                    <div class="display-rlink Rlink <?php echo (in_array($host->id, $host_metas[$host_index]) ? ' used ' : '' ); ?>">
                                                        <article class="media">
                                                            <span class="pull-left thumb-sm">
                                                                <i class="fa fa-link fa-1x"></i>
                                                            </span>
                                                            <div class="media-body">
                                                                <div class="pull-right media-xs text-center text-muted">
                                                                    <strong class="h5">{{ $host->type->titre }}</strong><br>
                                                                </div>
                                                                <p class="h5 text-info">{{ $host->label }}</p>
                                                                <input checked name="metas[]" value="{{ $host->id }}" type="checkbox">
                                                            </div>
                                                        </article>
                                                        <div class="line pull-in <?php echo ($host->type_id == 15 ? 'hide' : ''); ?>"></div>
                                                    </div>

                                                @else
                                                    <div class="display-rlink Rlink <?php echo ($host->type_id == 15 ? 'hideLabel' : ''); ?>">
                                                        <article class="media">
                                                            <span class="pull-left thumb-sm"><i class="fa fa-minus-circle fa-1x"></i></span>
                                                            <div class="media-body">
                                                                <div class="pull-right media-xs text-center text-danger">
                                                                    <strong class="h5">{{ $host->type->titre }}</strong><br>
                                                                </div>
                                                                <p class="h5">{{ $host->label }}</p>
                                                                <input name="metas[]" value="{{ $host->id }}" type="checkbox">
                                                            </div>
                                                        </article>
                                                        <div class="line pull-in"></div>
                                                    </div>
                                                @endif
                                            @endforeach

                                        </div>

                                    </div>

                                </div>
                            </section>

                            @endforeach
                        @endif
                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="riiinglink">

                @if(!empty($invited_labels))
                    @foreach($invited_labels as $invited_index => $invited_group)

                        <section class="panel panel-default">
                            <header class="panel-heading">
                                <div class="groupe-icon-info groupe-icon-{{ $invited_index }}">{{ $groupes[$invited_index] }}</div>
                            </header>
                            <div class="panel-body">
                                <div class="partage-icon">
                                    <div class="partage-group list-group bg-white">
                                        @foreach($invited_group as $invited)
                                            <div class="list-group-item used <?php echo ($invited->type_id == 15 ? 'hideLabel' : ''); ?>">
                                                <span class="badge bg-success">{{ $types[$invited->type_id] }}</span><strong>{{ $invited->label }}</strong>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </section>

                    @endforeach
                @endif
            </div>
        </div>

    </div>


@stop
