@extends('site.layouts.master')
@section('content')
                <div class="page-head">
                    <div class="container">
                        <h2 class="page-head-title">
                            @if (Config::get('app.locale') == 'ar') فريق العمل @else Our Team @endif
                        </h2>
                        <ol class="breadcrumb">
                            <li><a href="{{URL::to('/')}}">@if (Config::get('app.locale') == 'ar') الرئيسية @else Home @endif</a></li>
                            <li class="active">@if (Config::get('app.locale') == 'ar') فريق العمل @else Our Team @endif</li>
                        </ol>
                    </div><!--End Container-->
                </div><!-- End Page-Head -->
                <div class="page-content">
                    <section class="section-lg team">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="section-head">
                                        <h3 class="section-title">@if (Config::get('app.locale') == 'ar') فريق العمل @else Our Team @endif</h3><!-- End Section-Title -->
                                    </div><!-- End Section-Head -->
                                    <div class="section-content">
                                        @php
                                        $team_ar=json_decode($data->get('team_ar'));
                                        $team_en=json_decode($data->get('team_en'));
                                        @endphp
                                        @if (Config::get('app.locale') == 'ar')
                                        @foreach($team_ar as $t_ar)
                                        <p>
                                            {{$t_ar}}
                                        </p>
                                        @endforeach
                                        @else
                                        @foreach($team_en as $t_en)
                                        <p>
                                            {{$t_en}}
                                        </p>
                                        @endforeach
                                        @endif
                                    </div><!-- End Section-Content -->
                                </div><!-- End col -->
                                <div class="col-lg-6 no-padding">
                                    <div class="section-img absolute-img">
                                        <img src="{{asset('assets/site/images/team-img.jpg')}}">
                                    </div><!-- End Section-Img -->
                                </div><!-- End col -->
                            </div><!-- End row -->
                        </div><!-- End container -->
                    </section><!-- End Section -->
                    <section class="">
                        <div class="container padding-lg colored">
                            <div class="row">
                                @foreach($team as $t)
                                <div class="col-lg-6">
                                    <div class="team-widget">
                                        <div class="team-widget-head">
                                            <img src="{{asset('storage/uploads/team').'/'.$t->image}}" alt="...">
                                        </div><!-- End Team-Widget-Head -->
                                        <div class="team-widget-body">
                                            <div class="member-name">
                                                <h3 class="title title-sm">@if (Config::get('app.locale') == 'ar') {{$t->name_ar}} @else {{$t->name_en}} @endif</h3>
                                                <span>@if (Config::get('app.locale') == 'ar') {{$t->title_ar}} @else {{$t->title_en}} @endif</span>
                                            </div><!-- End Member-Name -->
                                            <div class="member-info">
                                                <p>
                                                    @if (Config::get('app.locale') == 'ar') {{$t->content_ar}} @else {{$t->content_en}} @endif
                                                </p>
                                                <ul class="social-list">
                                                    <li>
                                                        <a href="{{$t->facebook}}">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{$t->twitter}}">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{$t->google}}">
                                                            <i class="fa fa-google-plus"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{$t->linkedin}}">
                                                            <i class="fa fa-linkedin"></i>
                                                        </a>
                                                    </li>
                                                </ul><!-- End Social-List -->
                                            </div><!-- End Member-Info -->
                                        </div><!-- End Team-Widget-Body -->
                                    </div><!-- End Team-Widget -->
                                </div><!-- End col -->
                                @endforeach
                            </div><!-- End row -->
                        </div><!-- End container -->
                    </section><!-- End Section -->
@endsection