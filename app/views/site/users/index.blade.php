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
                            <img class="riiinglinkIcon" src="{{ asset('users/user_1.jpg') }}" alt="" />
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
                            <img src="{{ asset('users/user_2.jpg') }}" alt="" />
                        </div>
                        <h4 class="factTitle">Coralie Leschaud</h4>
                    </div><!-- end of fact -->
                </div><!-- end of facts wrapper -->
            </div><!-- end of row -->

            <?php
            //print_r($riiinglink2->labels);
            ?>

            <div class="row factsContents">
                <div class="col-md-12">
                    <a href="#" class="generalLink updateRiiinglink">update</a>
                    <a href="#" class="generalLink finishRiiinglink">finish</a>
                </div><!-- end of facts wrapper -->
            </div><!-- end of row -->

            <div class="row factsContents">
                <div class="col-md-12">
                    <div class="riinglink">
                        <div class="partage-host">

                            @if(!empty($grouped))
                                @foreach($grouped as $index => $group)

                                    <div class="partage-icon">
                                        <div class="groupe-icons">
                                            <div class="groupe-icon-info groupe-icon-{{ $index }}"></div>
                                        </div>

                                        <ul id="riiinglinkList" class="partage-group">
                                            @foreach($group as $label)
                                                <li <?php echo (in_array($label->id, $metas) ? 'class="used"' : '' ); ?>><span>{{ $label->type->titre }}</span><strong>{{ $label->label }}</strong></li>
                                            @endforeach
                                        </ul>
                                    </div>

                                @endforeach
                            @endif
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
                                                <li class="used"><span>{{ $types[$label2->type_id] }}</span><strong>{{ $label2->label }}</strong></li>
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
