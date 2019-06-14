@extends('site.layouts.master')
@section('content')
                <div class="page-head">
                    <div class="container">
                        <h2 class="page-head-title">
                            <li class="active">@if (Config::get('app.locale') == 'ar') عن إعمار @else About Us @endif</li>
                        </h2>
                        <ol class="breadcrumb">
                            <li><a href="{{URL::to('/')}}">@if (Config::get('app.locale') == 'ar') الرئيسية @else Home @endif</a></li>
                            <li class="active">@if (Config::get('app.locale') == 'ar') عن إعمار @else About Us @endif</li>
                        </ol>
                    </div><!--End Container-->
                </div><!-- End Page-Head -->
                <div class="page-content">
                    <section class="section-lg about">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="section-head">
                                        <h3 class="section-title"><li class="active">@if (Config::get('app.locale') == 'ar') عن إعمار @else About Us @endif</li></h3><!-- End Section-Title -->
                                    </div><!-- End Section-Head -->
                                    <div class="section-content">
                                        @php
                                        $about_c1=json_decode($data->get('about_content_ar'));
                                        $about_c2=json_decode($data->get('about_content_en'));
                                        @endphp
                                        @if (Config::get('app.locale') == 'ar')
                                        @foreach($about_c1 as $c1)
                                        <p>
                                            {{$c1}}
                                        </p>
                                        @endforeach
                                        @else
                                        @foreach($about_c2 as $c2)
                                        <p>
                                            {{$c2}}
                                        </p>
                                        @endforeach
                                        @endif
                                    </div><!-- End Section-Content -->
                                </div><!-- End col -->
                                <div class="col-lg-6">
                                    <div class="section-img">
                                        <a href="{{$data->get('video')}}" class="about-img about-video active" data-type="prettyPhoto[gallery]">
                                            <img src="{{asset('assets/site/images/about-img.jpg')}}">
                                        </a><!--End about-video-->
                                    </div><!-- End Section-Img -->
                                </div><!-- End col -->
                            </div><!-- End row -->
                        </div><!-- End container -->
                    </section><!-- End Section -->
                    <section class="section-lg colored why-us">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="section-head">
                                        <h3 class="section-title">@if (Config::get('app.locale') == 'ar') لماذا إعمار @else Why Eamaar @endif</h3><!-- End Section-Title -->
                                        <p>
                                            @if (Config::get('app.locale') == 'ar') {{$data->get('why_ar')}} @else {{$data->get('why_en')}} @endif
                                        </p>
                                    </div><!-- End Section-Head -->
                                </div><!-- End col -->
                                <div class="col-lg-9">
                                    <div class="row">
                                        @php
                                            $block1_ar=json_decode($data->get('block1_ar'));
                                            $block1_en=json_decode($data->get('block1_en'));
                                            $block2_ar=json_decode($data->get('block2_ar'));
                                            $block2_en=json_decode($data->get('block2_en'));
                                            $block3_ar=json_decode($data->get('block3_ar'));
                                            $block3_en=json_decode($data->get('block3_en'));
                                            $block4_ar=json_decode($data->get('block4_ar'));
                                            $block4_en=json_decode($data->get('block4_en'));
                                        @endphp
                                        
                                        @if (Config::get('app.locale') == 'ar')
                                        <div class="col-lg-6">
                                            <div class="icon-widget">
                                                <div class="icon-widget-img">
                                                    <img src="{{asset('assets/site/images/icons/white-thump-up.png')}}" alt="icon image">
                                                </div><!--End Icon-widget-img-->
                                                <div class="icon-widget-content">
                                                    @foreach($block1_ar as $b1_ar)
                                                        <p class="@if($loop->index==0) title title-sm @endif">
                                                            {{$b1_ar}}
                                                        </p><br>
                                                    @endforeach
                                                </div><!--End Icon-widget-content-->
                                            </div><!--End Icon-widget-->
                                        </div><!--End Col-md-6-->
                                        @else
                                        <div class="col-lg-6">
                                            <div class="icon-widget">
                                                <div class="icon-widget-img">
                                                    <img src="{{asset('assets/site/images/icons/white-thump-up.png')}}" alt="icon image">
                                                </div><!--End Icon-widget-img-->
                                                <div class="icon-widget-content">
                                                    @foreach($block1_en as $b1_en)
                                                        <p class="@if($loop->index==0) title title-sm @endif">
                                                            {{$b1_en}}
                                                        </p><br>
                                                    @endforeach
                                                </div><!--End Icon-widget-content-->
                                            </div><!--End Icon-widget-->
                                        </div><!--End Col-md-6-->
                                        @endif
                                        @if (Config::get('app.locale') == 'ar')
                                        <div class="col-lg-6">
                                            <div class="icon-widget">
                                                <div class="icon-widget-img">
                                                    <img src="{{asset('assets/site/images/icons/white-thump-up.png')}}" alt="icon image">
                                                </div><!--End Icon-widget-img-->
                                                <div class="icon-widget-content">
                                                    @foreach($block2_ar as $b2_ar)
                                                        <p class="@if($loop->index==0) title title-sm @endif">
                                                            {{$b2_ar}}
                                                        </p><br>
                                                    @endforeach
                                                </div><!--End Icon-widget-content-->
                                            </div><!--End Icon-widget-->
                                        </div><!--End Col-md-6-->
                                        @else
                                        <div class="col-lg-6">
                                            <div class="icon-widget">
                                                <div class="icon-widget-img">
                                                    <img src="{{asset('assets/site/images/icons/white-thump-up.png')}}" alt="icon image">
                                                </div><!--End Icon-widget-img-->
                                                <div class="icon-widget-content">
                                                    @foreach($block2_en as $b2_en)
                                                        <p class="@if($loop->index==0) title title-sm @endif">
                                                            {{$b2_en}}
                                                        </p><br>
                                                    @endforeach
                                                </div><!--End Icon-widget-content-->
                                            </div><!--End Icon-widget-->
                                        </div><!--End Col-md-6-->
                                        @endif
                                        @if (Config::get('app.locale') == 'ar')
                                        <div class="col-lg-6">
                                            <div class="icon-widget">
                                                <div class="icon-widget-img">
                                                    <img src="{{asset('assets/site/images/icons/white-thump-up.png')}}" alt="icon image">
                                                </div><!--End Icon-widget-img-->
                                                <div class="icon-widget-content">
                                                    @foreach($block3_ar as $b3_ar)
                                                        <p class="@if($loop->index==0) title title-sm @endif">
                                                            {{$b3_ar}}
                                                        </p><br>
                                                    @endforeach
                                                </div><!--End Icon-widget-content-->
                                            </div><!--End Icon-widget-->
                                        </div><!--End Col-md-6-->
                                        @else
                                        <div class="col-lg-6">
                                            <div class="icon-widget">
                                                <div class="icon-widget-img">
                                                    <img src="{{asset('assets/site/images/icons/white-thump-up.png')}}" alt="icon image">
                                                </div><!--End Icon-widget-img-->
                                                <div class="icon-widget-content">
                                                    @foreach($block3_en as $b3_en)
                                                        <p class="@if($loop->index==0) title title-sm @endif">
                                                            {{$b3_en}}
                                                        </p><br>
                                                    @endforeach
                                                </div><!--End Icon-widget-content-->
                                            </div><!--End Icon-widget-->
                                        </div><!--End Col-md-6-->
                                        @endif
                                        @if (Config::get('app.locale') == 'ar')
                                        <div class="col-lg-6">
                                            <div class="icon-widget">
                                                <div class="icon-widget-img">
                                                    <img src="{{asset('assets/site/images/icons/white-thump-up.png')}}" alt="icon image">
                                                </div><!--End Icon-widget-img-->
                                                <div class="icon-widget-content">
                                                    @foreach($block4_ar as $b4_ar)
                                                        <p class="@if($loop->index==0) title title-sm @endif">
                                                            {{$b4_ar}}
                                                        </p><br>
                                                    @endforeach
                                                </div><!--End Icon-widget-content-->
                                            </div><!--End Icon-widget-->
                                        </div><!--End Col-md-6-->
                                        @else
                                        <div class="col-lg-6">
                                            <div class="icon-widget">
                                                <div class="icon-widget-img">
                                                    <img src="{{asset('assets/site/images/icons/white-thump-up.png')}}" alt="icon image">
                                                </div><!--End Icon-widget-img-->
                                                <div class="icon-widget-content">
                                                    @foreach($block4_en as $b4_en)
                                                        <p class="@if($loop->index==0) title title-sm @endif">
                                                            {{$b4_en}}
                                                        </p><br>
                                                    @endforeach
                                                </div><!--End Icon-widget-content-->
                                            </div><!--End Icon-widget-->
                                        </div><!--End Col-md-6-->
                                        @endif
                                    </div><!--En Row-->
                                </div><!--End Col-md-9-->
                            </div><!-- End row -->
                        </div><!-- End container -->
                    </section><!-- End Section -->
                    <section class="section-lg testimonial-2">
                        <div class="container">
                            <div class="row justify-content-md-center text-center">
                                <div class="col-md-6">
                                    <div class="section-head">
                                        <h3 class="section-title">@if (Config::get('app.locale') == 'ar') قصص النجــاح @else Success Stories @endif</h3><!-- End Section-Title -->
                                        <p>
                                            @if (Config::get('app.locale') == 'ar') {{$data->get('stories_ar')}} @else {{$data->get('stories_en')}} @endif
                                        </p>
                                    </div><!-- End Section-Head -->
                                </div><!-- End col -->
                            </div><!--End Row-->
                            <div class="section-content">
                                <div class="row justify-content-md-center owl-carousel" id="testimonial-2">
                                    @foreach($stories as $story)
                                    <div class="col-md-10 m-auto">
                                        <div class="testmonial-item">
                                            <div class="testmonial-content">
                                                <p>
                                                    @if (Config::get('app.locale') == 'ar') {{$story->story}} @else {{$story->story_en}} @endif
                                                </p>
                                            </div><!--End testmonial-content-->
                                            <div class="testmonial-author">
                                                <img src="{{asset('storage/uploads/stories').'/'.$story->image}}" alt="...">
                                                <div class="author-info">
                                                    <h2 class="author-name">@if (Config::get('app.locale') == 'ar') {{$story->name}} @else {{$story->name_en}} @endif</h2>
                                                    <span class="author-job">@if (Config::get('app.locale') == 'ar') {{$story->title}} @else {{$story->title_en}} @endif</span>
                                                </div>
                                            </div><!--End testmonial-author-->
                                        </div><!--End Testmonial-item-->
                                    </div><!--End Col-md-10-->
                                    @endforeach
                                </div><!--End Row-->
                            </div><!--End Section-content-->
                        </div><!--End Container-->
                    </section><!--End Section-->
                    <section class="section-lg our-clients colored">
                        <div class="container">
                            <div class="row justify-content-md-center text-center">
                                <div class="col-md-6">
                                    <div class="section-head">
                                        <h3 class="section-title">@if (Config::get('app.locale') == 'ar') عملاؤنا @else Our Clients @endif</h3><!-- End Section-Title -->
                                        <p>
                                            @if (Config::get('app.locale') == 'ar') {{$data->get('clients_ar')}} @else {{$data->get('clients_en')}} @endif
                                        </p>
                                    </div><!-- End Section-Head -->
                                </div><!-- End col -->
                            </div><!--End Row-->
                            <div class="section-content">
                                <div class="owl-carousel" id="clients-carousel">
                                    @foreach($clients as $client)
                                    <div class="client-item">
                                        <div class="client-item-img">
                                            <img src="{{asset('storage/uploads/clients').'/'.$client->image}}" alt="...">
                                        </div>
                                    </div><!--End Client-item-->
                                    @endforeach
                                </div><!--End clients-carousel-->
                            </div><!--End Section-content-->
                        </div><!--End Container-->
                    </section><!--End Our-clients-section-->
@endsection