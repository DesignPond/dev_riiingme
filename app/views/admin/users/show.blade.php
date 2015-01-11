@extends('layouts.admin')
@section('content')

    <div class="row">

        <div class="riiinglinkIcon">
            <img src="{{ asset('images/riiinglink.svg') }}" alt="" />
        </div><!-- end of facts wrapper -->

        <div class="col-md-5">
            <section class="panel panel-default">
                <header class="panel-heading bg-danger lt no-border">
                    <div class="clearfix">
                        <a class="pull-left thumb avatar b-3x m-r" href="#">
                            <img class="img-circle" src="{{ asset('users/'.$host_riiinglink->user_photo.'') }}">
                        </a>
                        <div class="clear">
                            <div class="h3 m-t-xs m-b-xs text-white">
                                {{ $host_riiinglink->user_name }}<i class="fa fa-circle text-white pull-right text-xs m-t-sm"></i>
                            </div>
                            <small class="text-muted">Art director</small>
                        </div>
                    </div>
                </header>
                <div class="list-group no-radius alt">
                    <a href="#" class="list-group-item updateRiiinglink">update</a>
                    <a href="#" class="list-group-item finishRiiinglink">finish</a>
                </div>
            </section>
        </div><!-- end of facts wrapper -->
        <div class="col-md-1">
            <h2 class="text-center text-blue"><i class="fa fa-refresh"></i></h2>
        </div>
        <div class="col-md-5">
            <section class="panel panel-default">
                <header class="panel-heading bg-blue lt no-border">
                    <div class="clearfix">
                        <a class="pull-left thumb avatar b-3x m-r" href="#">
                            <img class="img-circle" src="{{ asset('users/'.$invited_riiinglink->user_photo.'') }}">
                        </a>
                        <div class="clear">
                            <div class="h3 m-t-xs m-b-xs text-white">
                                {{ $invited_riiinglink->user_name }}<i class="fa fa-circle text-white pull-right text-xs m-t-sm"></i>
                            </div>
                            <small class="text-muted">Infos partagés</small>
                        </div>
                    </div>
                </header>
                <div class="list-group no-radius alt">
                    <a href="#" class="list-group-item">
                        &nbsp;
                    </a>
                </div>
            </section>
        </div><!-- end of col -->
    </div><!-- end of row -->

    <div class="row">

        <div class="col-md-5">
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
                                            <?php $i = 1; ?>
                                            @foreach($host_group as $host)
                                                @if(in_array($host->id, $host_metas[$host_index]))
                                                    <div class="display-rlink Rlink <?php echo (in_array($host->id, $host_metas[$host_index]) ? ' used ' : '' ); ?> <?php echo ($host->type_id == 15 ? 'hideLabel' : ''); ?>">
                                                        <article class="media">
                                                            <span class="pull-left thumb-sm">
                                                                <i class="fa fa-link fa-1x"></i>
                                                            </span>
                                                            <div class="media-body">
                                                                <div class="pull-right media-xs text-center">
                                                                    <strong class="h5">{{ $host->type->titre }}</strong><br>
                                                                </div>
                                                                <p class="h5 text-info">{{ $host->label }}</p>
                                                                <input checked name="metas[]" value="{{ $host->id }}" type="checkbox">
                                                            </div>
                                                        </article>
                                                        <?php
                                                            $count = ($host_index > 1 ? count($host_group) : count($host_group) -1);
                                                            echo ($i < $count && $host->type_id != 15 ? '<div class="line pull-in"></div>' : '');
                                                            $i++;
                                                        ?>
                                                    </div>
                                                @else
                                                    <div class="display-rlink Rlink <?php echo ($host->type_id == 15 ? 'hideLabel' : ''); ?>">
                                                        <article class="media">
                                                            <span class="pull-left thumb-sm"><i class="fa fa-minus-circle fa-1x"></i></span>
                                                            <div class="media-body">
                                                                <div class="pull-right media-xs text-center">
                                                                    <strong class="h5">{{ $host->type->titre }}</strong><br>
                                                                </div>
                                                                <p class="h5">{{ $host->label }}</p>
                                                                <input name="metas[]" value="{{ $host->id }}" type="checkbox">
                                                            </div>
                                                        </article>

                                                        <?php
                                                            $count = ($host_index > 1 ? count($host_group) : count($host_group) -1);
                                                            echo ($i < $count && $host->type_id != 15 ? '<div class="line pull-in"></div>' : '');
                                                            $i++;
                                                        ?>
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
        <div class="col-md-1 text-center"></div>
        <div class="col-md-5">
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
                                        <?php $i = 1; ?>
                                        @foreach($invited_group as $invited)

                                            <div class="used <?php echo ($invited->type_id == 15 ? 'hideLabel' : ''); ?>">
                                                <article class="media">
                                                    <span class="pull-left thumb-sm"><i class="fa fa-link fa-1x"></i></span>
                                                    <div class="media-body">
                                                        <div class="pull-right media-xs text-center">
                                                            <strong class="h5">{{ $types[$invited->type_id] }}</strong><br>
                                                        </div>
                                                        <p class="h5 text-info">{{ $invited->label }}</p>
                                                    </div>
                                                </article>
                                                <?php
                                                    $count = ($invited_index > 1 ? count($invited_group) : count($invited_group) -1);
                                                    echo ($i < $count && $invited->type_id != 15 ? '<div class="line pull-in"></div>' : '');
                                                    $i++;
                                                ?>
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
