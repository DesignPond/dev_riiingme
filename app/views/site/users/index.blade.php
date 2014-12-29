@extends('layouts.master')
@section('content')

<!-- Facts -->
<section class="facts section mainSection scrollAnchor graySection" id="facts">
    <div class="sectionWrapper">
        <div class="container">

            <div class="row">
                <div class="col-md-6 text-center partage-user">
                    <div class="fact singleFact factBox">
                        <div class="factIcon factIcon1"></div>
                        <h4 class="factTitle">
                            <a href="#">Cindy Leschaud</a>
                        </h4>
                    </div><!-- end of fact -->
                </div><!-- end of facts wrapper -->
                <div class="col-md-6 text-center">
                    <div class="fact singleFact factBox partage-user">
                        <div class="factIcon factIcon3"></div>
                        <h4 class="factTitle">
                            <a href="#">Coralie Leschaud</a>
                        </h4>
                    </div><!-- end of fact -->
                </div><!-- end of facts wrapper -->
            </div><!-- end of row -->

            <?php
            //print_r($riiinglink2->labels);
            ?>
            <div class="row factsContents">

                <div class="col-md-12">
                    <div class="riinglink">
                        <div class="partage-host">

                            @if(!empty($grouped))

                                @foreach($grouped as $group)
                                    <ul class="partage-group">
                                    @foreach($group as $label)
                                        <li <?php echo (in_array($label->id, $metas) ? 'class="used"' : '' ); ?>><span>{{ $label->type->titre }}</span><strong>{{ $label->label }}</strong></li>
                                    @endforeach
                                    </ul>
                                @endforeach

                            @endif
                        </div>
                    </div>
                    <div class="riinglink">
                        <div class="partage-invited">
                            @if(!empty($riiinglink2))

                                @foreach($riiinglink2 as $linkgroupe)
                                    <ul class="partage-group">
                                        @foreach($linkgroupe as $label2)
                                            <li class="used"><span>{{ $types[$label2->type_id] }}</span><strong>{{ $label2->label }}</strong></li>
                                        @endforeach
                                    </ul>
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
