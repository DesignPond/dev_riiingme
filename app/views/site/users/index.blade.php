@extends('layouts.master')
@section('content')


            <?php
                echo '<pre>';

            //$infos = array_slice($grouped, 0, 1, true);
            //$links = array_slice($grouped, 1, 2, true);

                print_r($thumbs->toArray());
                echo '</pre>';
            ?>


<!-- Features -->
<section class="features section mainSection scrollAnchor lightSection" id="features">
    <div class="sectionWrapper">
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <div class="department">
                        <h5 class="departHeader">Sales Department</h5><!-- end of depart header -->
                        <div class="departBody">
                            <p><span class="title">Email Accounts :</span>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis.<br>
                                Email Account : <a href="mailto:Sales@7host.com">Sales@7host.com</a>
                            </p>
                        </div><!-- end of depart body -->
                    </div>
                </div><!-- end of section title -->
                <div class="col-md-8">

                    @if(!empty($thumbs))
                        @foreach($thumbs as $thumb)
                            <div class="userPicto userPicto-invited">
                                <div class="thumb rotate">
                                    <img class="riiinglinkIcon" src="{{ asset('users/'.$thumb['invited_photo'].'') }}" alt="" />
                                </div>
                                <h4 class="factTitle">{{ $thumb['invited_name'] }}</h4>
                            </div><!-- end of pictos -->
                        @endforeach
                    @endif
                </div><!-- end of section title -->
            </div><!-- end of row -->

            </div><!-- end of row -->
        </div><!-- end of container -->
    </div><!-- end of section wrapper -->
</section><!-- end features section -->

@stop
