@extends('front.layout')

@section('content')

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Our Courses</h2>
                            <p>Home<span>/</span>Courses<span>/</span>Category<span>/</span>{{ $cat->name }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>popular courses</p>
                        <h2>Special Courses</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($courses as $c)
                <div class="col-sm-6 col-lg-4 mb-5">
                    <div class="single_special_cource" >
                        <img class="img-thumbnail img-fluid" style="width:400px; height:200px;" src="{{ asset('uploads/courses/'. $c->img) }}" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="{{ route('front.cat' , $c->cat->id) }}" class="btn_4">{{$c->cat->name}}</a>
                            <h4>${{$c->price}}</h4>
                            <a href="{{ route('front.show' , [$c->cat->id , $c->id]) }}"><h3>{{$c->name}}</h3></a>
                            <p> {{ substr($c->small_desc , 0 ,  70)}}</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img class="img-thumbnail img-fluid" style="width:50px;height:50px;" src="{{ asset('uploads/trainers/'. $c->trainer->img) }}" alt="">
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
                <div class="d-flex justify-content-center w-100 mb-5">
                    {!! $courses->render() !!}
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

@endsection
