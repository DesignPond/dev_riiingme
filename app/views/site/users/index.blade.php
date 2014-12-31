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
                            <?php

                                $photo = $riiinglink->labels->filter(function($item) {
                                    return $item->type_id == 16;
                                })->first();

                                $host = (isset( $photo->label ) ?  $photo->label : 'avatar.jpg');
                            ?>
                            <img class="riiinglinkIcon" src="{{ asset('users/'.$host.'') }}" alt="" />
                        </div>
                        <h4 class="factTitle">Cindy Leschaud</h4>
                    </div><!-- end of fact -->
                </div><!-- end of facts wrapper -->
                <div class="col-md-2 text-center riiinglinkIcon">
                    <img src="{{ asset('images/riiinglink.svg') }}" alt="" />
                </div><!-- end of facts wrapper -->
                <div class="col-md-5 text-center partage-user">
                    <div class="userPicto userPicto-invited">
                        <div class="thumb rotate">
                            <?php

                                $photo2 = $invited->labels->filter(function($item) {
                                    return $item->type_id == 16;
                                })->first();

                                $invite = (isset( $photo2->label ) ?  $photo2->label : 'avatar.jpg');
                            ?>
                            <img src="{{ asset('users/'.$invite.'') }}" alt="" />

                        </div>
                        <h4 class="factTitle">Coralie Leschaud</h4>
                    </div><!-- end of fact -->
                </div><!-- end of facts wrapper -->
            </div><!-- end of row -->

            <?php
                echo '<pre>';
                //print_r($riiinglink2);
                echo '</pre>';
            ?>

            <div class="row factsContents">
                <div class="col-md-12">
                    <a href="#" class="btn btn-warning updateRiiinglink">update</a>
                    <a href="#" class="btn btn-success finishRiiinglink">finish</a>
                </div><!-- end of facts wrapper -->
            </div><!-- end of row -->
            <br/>
            <div class="row factsContents">
                <div class="col-md-12">
                    <div class="riinglink">
                        <div class="partage-host">
                            <form id="formRiiinglink">

                                <input type="hidden" name="riiinglink_id" value="{{ $riiinglink->id }}">

                                @if(!empty($grouped))
                                    @foreach($grouped as $index => $group)

                                        <div class="partage-icon">
                                            <div class="groupe-icons">
                                                <div class="groupe-icon-info groupe-icon-{{ $index }}"></div>
                                            </div>

                                            <ul id="riiinglinkList" class="partage-group">
                                                @foreach($group as $label)
                                                    <li class="Rlink <?php echo (in_array($label->id, $metas) ? ' used ' : '' ); ?>">
                                                        <span>{{ $label->type->titre }}</span><strong>{{ $label->label }}</strong>
                                                        <input <?php echo (in_array($label->id, $metas) ? 'checked' : '' ); ?> name="metas[]" value="{{ $label->id }}" type="checkbox">
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>

                                    @endforeach
                                @endif
                            </form>
                        </div>
                    </div>
                    <div class="riinglink">
                        <div class="partage-invited">
                            @if(!empty($riiinglink2))

                                @foreach($riiinglink2 as $index => $linkgroupe)

                                    <div class="partage-icon">
                                        <div class="groupe-icons">
                                            <div class="groupe-icon-info groupe-icon-{{ $index }}"></div>
                                        </div>

                                        <ul class="partage-group">
                                            @foreach($linkgroupe as $label2)
                                                <li class="used">
                                                    <span>{{ $types[$label2->type_id] }}</span><strong>{{ $label2->label }}</strong>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                @endforeach

                            @endif
                        </div>
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
