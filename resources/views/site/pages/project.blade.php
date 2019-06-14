@extends('site.layouts.master')
@section('content')
@foreach($projects as $project)
                <div class="page-head">
                    <div class="container">
                        <h2 class="page-head-title">
                            @if (Config::get('app.locale') == 'ar') {{$project->name_ar}} @else {{$project->name_en}} @endif
                        </h2>
                        <ol class="breadcrumb">
                          <li><a href="{{URL::to('/')}}">@if (Config::get('app.locale') == 'ar') الرئيسية @else Home @endif</a></li>
                          <li><a href="{{URL::to('/projects')}}">@if (Config::get('app.locale') == 'ar') مشاريعنا @else Projects @endif</a></li>
                          <li class="active">@if (Config::get('app.locale') == 'ar') {{$project->name_ar}} @else {{$project->name_en}} @endif</li>
                        </ol>
                    </div><!--End Container-->
                </div><!-- End Page-Head -->
                <div class="page-content">
                    <section class="section-md single-project">
                        <div class="container">
                            <div class="carousel-widget">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        @foreach($g_images as $g)
                                        <li data-target="#carouselExampleIndicators" data-slide-to="$loop->index" class="@if($loop->index==0) active @endif">
                                            <img src="{{asset($g->images)}}">
                                        </li>
                                        @endforeach
                                    </ol>
                                    <div class="carousel-inner">
                                        @foreach($g_images as $g)
                                        <div class="carousel-item @if($loop->index==0) active @endif">
                                            <img src="{{asset($g->images)}}">
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div><!-- End Carousel-Widget -->
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="project-desc">
                                        <h3 class="section-title section-title-sm no-before">
                                            @if (Config::get('app.locale') == 'ar') نبذة عن المشروع @else Project Description @endif
                                        </h3>
                                        @php
                                        $content_ar=json_decode($project->content_ar);
                                        $content_en=json_decode($project->content_en);
                                        @endphp
                                        @if (Config::get('app.locale') == 'ar')
                                        @foreach($content_ar as $c1)
                                        <p>
                                            {{$c1}}
                                        </p>
                                        @endforeach
                                        @else
                                        @foreach($content_en as $c2)
                                        <p>
                                            {{$c2}}
                                        </p>
                                        @endforeach
                                        @endif
                                    </div><!-- End Project-Desc -->
                                </div><!-- End col -->
                                <div class="col-lg-4 no-padding">
                                    <div class="project-detail">
                                        <div class="white-box">
                                            <h3 class="title">@if (Config::get('app.locale') == 'ar') تفاصيل المشروع @else Project Details @endif</h3>
                                            <ul class="detail-list">
                                                <li>
                                                    <span>@if (Config::get('app.locale') == 'ar') العميل : @else Client : @endif</span>
                                                    <span>@if (Config::get('app.locale') == 'ar') {{$project->client_name_ar}} @else {{$project->client_name_en}} @endif</span>
                                                </li>
                                                <li>
                                                    <span>@if (Config::get('app.locale') == 'ar') الموقع : @else Location : @endif</span>
                                                    <span>@if (Config::get('app.locale') == 'ar') {{$project->location_ar}} @else {{$project->location_en}} @endif</span>
                                                </li>
                                                <li>
                                                    <span>@if (Config::get('app.locale') == 'ar') المساحة : @else Area : @endif</span>
                                                    <span>@if (Config::get('app.locale') == 'ar') {{$project->area_ar}} @else {{$project->area_en}} @endif</span>
                                                </li>
                                                <li>
                                                    <span>@if (Config::get('app.locale') == 'ar') تاريخ البدء : @else Starting Date : @endif</span>
                                                    <span>{{$project->st_date}}</span>
                                                </li>
                                                <li>
                                                    <span>@if (Config::get('app.locale') == 'ar') تاريخ الانتهاء : @else Ending Date : @endif</span>
                                                    <span>{{$project->end_date}}</span>
                                                </li>
                                                <li>
                                                    <span>@if (Config::get('app.locale') == 'ar') الخدمة : @else Service : @endif</span>
                                                    <span>@if (Config::get('app.locale') == 'ar') {{$project->s_name_ar}} @else {{$project->s_name_en}} @endif</span>
                                                </li>
                                                <li>
                                                    <span>@if (Config::get('app.locale') == 'ar') التكلفة : @else Cost : @endif</span>
                                                    <span>@if (Config::get('app.locale') == 'ar') {{$project->cost_ar}} @else {{$project->cost_en}} @endif</span>
                                                </li>
                                            </ul><!-- End Detail-List -->
                                        </div><!-- End White-Box -->
                                        
                                    </div><!-- End Project-Detail -->
                                </div><!-- End col -->
                            </div><!-- End row -->
                            <div class="other-projects">
                                <h3 class="section-title section-title-sm no-before">
                                    @if (Config::get('app.locale') == 'ar') مشاريع اخرى @else Other Projects @endif
                                </h3>
                                <div class="row our-projets-style2">
                                    @foreach($counts as $c)
                                    @if($loop->index<=3) 
                                    <div class="col-lg-3">
                                        <div class="box-item">
                                            <div class="box-item-img">
                                                <img src="{{asset('storage/uploads/project').'/'.$c->p_image}}" alt="project image">
                                            </div>
                                            <div class="box-item-content">
                                                <span class="categ-name">@if (Config::get('app.locale') == 'ar') {{$c->s_name_ar}} @else {{$c->s_name_en}} @endif</span>
                                                <p class="project-name">@if (Config::get('app.locale') == 'ar') {{$c->name_ar}} @else {{$c->name_en}} @endif</p>
                                                <a href="{{ route('site.project' , ['id' => $c->id]) }}" class="read-more">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                            </div><!--End Box-item-content-->
                                        </div><!--End box-item-->
                                    </div><!--End Col-4-->
                                    @endif
                                    @endforeach
                                </div><!-- End row -->
                            </div><!-- End Other-Projects -->
                        </div><!-- End container -->
                    </section><!-- End Section -->
@endforeach
@endsection