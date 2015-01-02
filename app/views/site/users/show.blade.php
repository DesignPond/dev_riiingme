@extends('layouts.master')
@section('content')

<!-- Facts -->
<section class="facts section mainSection scrollAnchor graySection" id="facts">
    <div class="sectionWrapper">
        <div class="container">

            <div class="row">
                <div class="col-md-5 text-center partage-user">
                    <div class="userPicto userPicto-host">
                        <div class="thumb rotate">
                            <img class="riiinglinkIcon" src="{{ asset('users/'.$host_riiinglink->user_photo.'') }}" alt="" />
                        </div>
                        <h4 class="factTitle">{{ $host_riiinglink->user_name }}</h4>
                        <p>
                            <a href="#" class="btn btn-warning updateRiiinglink">update</a>
                            <a href="#" class="btn btn-success finishRiiinglink">finish</a>
                        </p>
                    </div><!-- end of fact -->
                </div><!-- end of facts wrapper -->
                <div class="col-md-2 text-center riiinglinkIcon">
                    <img src="{{ asset('images/riiinglink.svg') }}" alt="" />
                </div><!-- end of facts wrapper -->
                <div class="col-md-5 text-center partage-user">
                    <div class="userPicto userPicto-invited">
                        <div class="thumb rotate">
                            <img src="{{ asset('users/'.$invited_riiinglink->user_photo.'') }}" alt="" />
                        </div>
                        <h4 class="factTitle">{{ $invited_riiinglink->user_name }}</h4>
                    </div><!-- end of fact -->
                </div><!-- end of facts wrapper -->
            </div><!-- end of row -->

            <?php
                echo '<pre>';

            //$infos = array_slice($grouped, 0, 1, true);
            //$links = array_slice($grouped, 1, 2, true);

               // print_r($host_metas);
                echo '</pre>';
            ?>

            <div class="row factsContents">
                <div class="col-md-12 riiinglink">

                    <div class="partage-host partage-riiinglink">
                        <form id="formRiiinglink">

                            <input type="hidden" name="riiinglink_id" value="{{ $host_riiinglink->id }}">

                            @if(!empty($host_labels))
                                @foreach($host_labels as $host_index => $host_group)

                                    <div class="partage-icon <?php echo (count($host_metas[$host_index]) == 0 ? 'hideGroup' : '' ); ?>">
                                        <div class="groupe-icons <?php echo ($host_index > 1 ? 'groupe-icons-edit' : ''); ?>">
                                            <div class="groupe-icon-info groupe-icon-{{ $host_index }}"></div>
                                        </div>

                                        <ul class="<?php echo ($host_index > 1 ? 'riiinglinkList' : ''); ?> partage-group">
                                            @foreach($host_group as $host)
                                                <li class="Rlink <?php echo (in_array($host->id, $host_metas[$host_index]) ? ' used ' : '' ); ?><?php echo ($host->type_id == 15 ? 'hideLabel' : ''); ?>">
                                                    <span>{{ $host->type->titre }}</span><strong>{{ $host->label }}</strong>
                                                    <input <?php echo (in_array($host->id, $host_metas[$host_index]) ? 'checked' : '' ); ?> name="metas[]" value="{{ $host->id }}" type="checkbox">
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                @endforeach
                            @endif

                        </form>
                    </div>

                    <div class="partage-invited partage-riiinglink">
                        @if(!empty($invited_labels))
                            @foreach($invited_labels as $invited_index => $invited_group)

                                <div class="partage-icon">
                                    <div class="groupe-icons">
                                        <div class="groupe-icon-info groupe-icon-{{ $invited_index }}"></div>
                                    </div>
                                    <ul class="partage-group">
                                        @foreach($invited_group as $invited)
                                            <li class="used">
                                                <span>{{ $types[$invited->type_id] }}</span><strong>
                                                    {{ $invited->label }}
                                                </strong>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                            @endforeach
                        @endif
                    </div>

                </div><!-- end of fact img -->

            </div><!-- end of row -->

        </div><!-- end of container -->
    </div><!-- end of section wrapper -->
</section><!-- end of facts section -->
<!-- Features -->
<section class="features section mainSection scrollAnchor lightSection" id="features">
    <div class="sectionWrapper">
        <div class="container">

            <div class="row">
                <div class="col-md-12 sectionTitle">


                    <h2 class="sectionHeader">
                        Don’t Hesitate, Seven Host Provide Awesome &amp; Perfect Features For You
                        <span class="generalBorder"></span>
                    </h2><!-- end of sectionHeader -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.</p>
                </div><!-- end of section title -->
            </div><!-- end of row -->

            </div><!-- end of row -->
        </div><!-- end of container -->
    </div><!-- end of section wrapper -->
</section><!-- end features section -->

@stop
