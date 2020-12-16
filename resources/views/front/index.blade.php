@extends('front.layout')

@section('content')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>@if($bannar) {{ json_decode($bannar->content)->title }} @else Every child yearns to learn @endif</h5>
                            <h1>@if($bannar) {{ json_decode($bannar->content)->subtitle }} @else Making Your Childs
                                World Better @endif</h1>
                            <p> @if($bannar->content) {{ json_decode($bannar->content)->desc }} @else Replenish seasons may male hath fruit beast were seas saw you arrie said man beast whales
                                his void unto last session for bite. Set have great you'll male grass yielding yielding
                                man @endif</p>
                            {{-- <a href="#" class="btn_1">View Course </a>
                            <a href="#" class="btn_2">Get Started </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 align-self-center">
                    <div class="single_feature_text ">
                        <h2>  @if($awesome) {{ json_decode($awesome->content)->title }} @else Awesome <br> Feature @endif</h2>
                        <p>@if($awesome) {{ json_decode($awesome->content)->desc }} @else Set have great you male grass yielding an yielding first their you're
                            have called the abundantly fruit were man @endif</p>
                        {{-- <a href="#" class="btn_1">Read More</a> --}}
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-layers"></i></span>
                            <h4> @if($future) {{ json_decode($future->content)->title }} @else Better Future @endif</h4>
                            <p> @if($future) {{ json_decode($future->content)->desc }}  @else Set have great you male grasses yielding yielding first their to
                                called deep abundantly Set have great you male @endif</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                            <h4> @if($qualified) {{ json_decode($qualified->content)->title }} @else Qualified Trainers @endif</h4>
                            <p> @if($qualified) {{ json_decode($qualified->content)->desc }} @else Set have great you male grasses yielding yielding first their to called
                                deep abundantly Set have great you male @endif</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                            <h4> @if($job) {{ json_decode($job->content)->title }} @else Job Oppurtunity @endif</h4>
                            <p> @if($job) {{ json_decode($job->content)->desc }} @else Set have great you male grasses yielding yielding first their to called deep
                                abundantly Set have great you male @endif </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->


    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{ $courses_count }}</span>
                        <h4>All Courses</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{ $trainers_count }}</span>
                        <h4> All Trainers</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{ $students_count }}</span>
                        <h4>All Students</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- member_counter counter end -->

    <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>  @if($courses_content) {{ json_decode($courses_content->content)->title }} @else popular courses @endif</p>
                        <h2> @if($courses_content) {{ json_decode($courses_content->content)->subtitle }} @else Special Courses @endif</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($courses as $c)
                    <div class="col-sm-6 col-lg-4" id="courses">
                        <div class="single_special_cource" >
                            <img class="img-thumbnail img-fluid" style="width:400px; height:200px;" src="uploads/courses/{{ $c->img }}" class="special_img" alt="">
                            <div class="special_cource_text">
                                <a href="{{ route('front.cat' , $c->cat->id) }}" class="btn_4">{{$c->cat->name}}</a>
                                <h4>${{$c->price}}</h4>
                                <a href="{{ route('front.show' , [$c->cat->id , $c->id]) }}"><h3>{{$c->name}}</h3></a>
                                <p> {{ substr($c->small_desc , 0 ,  100)}}</p>
                                <div class="author_info">
                                    <div class="author_img">
                                        <img class="img-thumbnail img-fluid" style="width:50px;height:50px;" src="uploads/trainers/{{ $c->trainer->img }}" alt="">
                                        <div class="author_info_text">
                                            <p>Conduct by:</p>
                                            <h5>{{$c->trainer->name}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--::blog_part end::-->


    <!--::review_part start::-->
    <section class="testimonial_part padding_top pb-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p> @if($student) {{ json_decode($student->content)->title }} @else tesimonials @endif</p>
                        <h2>@if($student) {{ json_decode($student->content)->subtitle }} @else Happy Students @endif</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        @foreach ($testimonials as $t)
                            <div class="testimonial_slider">
                                <div class="row">
                                    <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                        <div class="testimonial_slider_text">
                                            <p> {{  $t->desc }} </p>
                                            <h4> {{ $t->name }} </h4>
                                            @if ($t->spec )
                                                <h5> {{ $t->spec }}</h5>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-xl-2 col-sm-4">
                                        <div class="testimonial_slider_img">
                                            <img style="width:400px; height:250px;" class="img-thumbnail rounded-circle" src="uploads/testimonial/{{ $t->img }}" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--::blog_part end::-->

@endsection
