@extends('site.layouts.master')
@section('content')
                <div class="home-slider">
                    <div id="main-slider" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach($sliders as $slider)
                            <li data-target="#main-slider" data-slide-to="{{$loop->index}}" class="@if($loop->index==0) active @endif"></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @foreach($sliders as $slider)
                            <div class="carousel-item @if($loop->index==0) active @endif">
                                <img class="d-block w-100" src="{{asset('storage/uploads/slider').'/'.$slider->image}}" alt="First slide">
                                <div class="carousel-caption  d-md-block">
                                    <h3>
                                        @if (Config::get('app.locale') == 'ar') {{$slider->_header}} @else {{$slider->_header_en}} @endif
                                    </h3>
                                    <p>
                                        @if (Config::get('app.locale') == 'ar') {{$slider->content}} @else {{$slider->content_en}} @endif
                                    </p>
                                    <a href="{{URL::to('/about')}}" class="custom-btn">
                                        <i class="fa fa-angle-left"></i>
                                        @if (Config::get('app.locale') == 'ar') معرفة المزيد @else Know More @endif
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div><!--End carousel-inner-->
                    </div><!--End main-slider-->
                </div><!-- End Home-Slider -->
                <section class="section-lg about">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="section-head">
                                        <h3 class="section-title">@if (Config::get('app.locale') == 'ar') عن الإعمار @else About Eamaar @endif</h3><!-- End Section-Title -->
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
                    <section class="services">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="section-head">
                                        <h3 class="section-title">@if (Config::get('app.locale') == 'ar') خدمات اعمار @else Clinic Services @endif</h3><!-- End Section-Title -->
                                        <p>
                                            @if (Config::get('app.locale') == 'ar') {{$data->get('services_ar')}} @else {{$data->get('services_en')}} @endif
                                        </p>
                                    </div><!-- End Section-Head -->
                                </div><!-- End col -->
                            </div><!-- End row -->
                            <div class="section-content">
                                <div class="row">
                                    <div class="col-lg-3 no-padding">
                                        <div class="services-tabs">
                                            <ul class="nav">
                                                @php $count = 1; @endphp
                                                @foreach($services as $service)
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#item-{{$count}}" aria-controls="item-{{$count}}" role="tab" data-toggle="tab">
                                                        <img src="{{asset('assets/site/images/services-icon.png')}}" alt="service image">
                                                        @if (Config::get('app.locale') == 'ar') {{$service->s_name_ar}} @else {{$service->s_name_en}} @endif
                                                    </a>
                                                </li>
                                                @php $count = $count+1; @endphp
                                                @endforeach
                                            </ul>
                                        </div><!-- End Services-Tabs -->
                                    </div><!-- End col -->
                                    <div class="col-lg-5 no-padding">
                                        <div class="tab-content">
                                            @php $count1 = 1; @endphp
                                            @foreach($services as $service)
                                            <div role="tabpanel" class="tab-pane @if($loop->index==0) active @endif fade @if($loop->index==0) show @endif" id="item-{{$count1}}">
                                                @php
                                                $service_c1=json_decode($service->content_ar);
                                                $service_c2=json_decode($service->content_en);
                                                @endphp
                                                @if (Config::get('app.locale') == 'ar')
                                                @foreach($service_c1 as $c1)
                                                <p>
                                                    {{$c1}}
                                                </p>
                                                @endforeach
                                                @else
                                                @foreach($service_c2 as $c2)
                                                <p>
                                                    {{$c2}}
                                                </p>
                                                @endforeach
                                                @endif
                                            </div><!--End tabpanel-->
                                            @php $count1 = $count1+1; @endphp
                                            @endforeach
                                        </div>
                                    </div><!-- End col -->
                                    <div class="col-lg-4 no-padding">
                                        <div class="section-img absolute-img">
                                            <img src="{{asset('assets/site/images/services-bg.png')}}" alt="service image">
                                        </div><!-- End Section-Img -->
                                    </div><!-- End col -->
                                </div><!-- End row -->
                            </div><!-- End Section-Content -->
                        </div><!-- End container -->
                    </section><!-- End Section -->
                    <section class="section-lg our-projects">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="section-head">
                                        <h3 class="section-title">@if (Config::get('app.locale') == 'ar') مشاريعنا @else Projects @endif</h3><!-- End Section-Title -->
                                        <p>
                                            @if (Config::get('app.locale') == 'ar') {{$data->get('projects_ar')}} @else {{$data->get('projects_en')}} @endif
                                        </p>
                                    </div><!-- End Section-Head -->
                                </div><!-- End col -->
                                <div class="col-md-7">
                                    <ul class="filter-list">
                                        <li class="filter active" data-filter="all">@if (Config::get('app.locale') == 'ar') كل المشاريع @else All Projects @endif</li>
                                        <li class="filter" data-filter=".designAndBuldings">@if (Config::get('app.locale') == 'ar') تصميم وبناء @else Design @endif</li>
                                        <li class="filter" data-filter=".interiorDesign">@if (Config::get('app.locale') == 'ar') تصميم داخلى @else Interior @endif</li>
                                        <li class="filter" data-filter=".reInstruction">@if (Config::get('app.locale') == 'ar') إعادة إعمار @else Reconstruction @endif</li>
                                        <li class="filter" data-filter=".finalTuche">@if (Config::get('app.locale') == 'ar') تشطيبات نهائية @else Final @endif</li>
                                        <li class="filter" data-filter=".managment">@if (Config::get('app.locale') == 'ar') إدارة وتحكم @else Management @endif</li>
                                   </ul>
                                </div><!--End col-md-7-->
                            </div><!-- End row -->
                            <div id="projects" class="projects-wrapper">
                                <div class="row no-gutters">
                                    @foreach($projects as $project)
                                    @if($loop->index<=7) 
                                    <div class="col-md-3 col-sm-6 mix {{$project->type}}">
                                        <div class="box-item">
                                            <div class="box-item-img">
                                                <img src="{{asset('storage/uploads/project').'/'.$project->p_image}}" alt="...">
                                            </div>
                                            <div class="box-item-content">
                                                <span class="categ-name">@if (Config::get('app.locale') == 'ar') {{$project->c_name_ar}} @else {{$project->c_name_en}} @endif</span>
                                                <p class="project-name">@if (Config::get('app.locale') == 'ar') {{$project->name_ar}} @else {{$project->name_en}} @endif</p>
                                                <a href="{{ route('site.project' , ['id' => $project->id]) }}" class="read-more">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                            </div><!--End Box-item-content-->
                                        </div><!--End box-item-->
                                    </div><!--End Col-3-->
                                    @endif
                                    @endforeach
                                </div><!--End Row-->
                            </div><!--End projects-wrapper-->
                        </div><!--End Container-->
                    </section><!--End Section-->
                    <section class="section-lg testimonial colored">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="section-head">
                                        <h3 class="section-title">@if (Config::get('app.locale') == 'ar') قصص النجــاح @else Success Stories @endif</h3><!-- End Section-Title -->
                                        <p>
                                            @if (Config::get('app.locale') == 'ar') {{$data->get('stories_ar')}} @else {{$data->get('stories_en')}} @endif
                                        </p>
                                    </div><!-- End Section-Head -->
                                </div><!-- End col -->
                            </div><!-- End row -->
                            <div class="section-content">
                                <div id="testimonial-1" class="owl-carousel">
                                    @foreach($stories as $story)
                                    <div class="item">
                                        <div class="item-content">
                                            <div class="item-img">
                                                <img src="{{asset('storage/uploads/stories').'/'.$story->image}}" alt="...">
                                            </div>
                                            <div class="comment">
                                                <p>
                                                    @if (Config::get('app.locale') == 'ar') {{$story->story}} @else {{$story->story_en}} @endif
                                                </p>
                                            </div><!-- End Comment -->
                                        </div><!--End Item-content-->
                                        <div class="owner-info">
                                            <h3 class="title">@if (Config::get('app.locale') == 'ar') {{$story->name}} @else {{$story->name_en}} @endif</h3>
                                            <span>@if (Config::get('app.locale') == 'ar') {{$story->title}} @else {{$story->title_en}} @endif</span>
                                        </div><!-- End Owner-Info -->
                                    </div><!-- End Item -->
                                    @endforeach
                                </div><!--End owl-carousel-->
                            </div><!-- End Section-Content -->
                        </div><!--End Container-->
                    </section><!--End Section-->
@endsection