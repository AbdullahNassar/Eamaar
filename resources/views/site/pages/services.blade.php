@extends('site.layouts.master')
@section('content')
                <div class="page-head">
                    <div class="container">
                        <h2 class="page-head-title">
                            @if (Config::get('app.locale') == 'ar') خدماتنا @else Our Services @endif
                        </h2>
                        <ol class="breadcrumb">
                            <li><a href="{{URL::to('/')}}">@if (Config::get('app.locale') == 'ar') الرئيسية @else Home @endif</a></li>
                            <li class="active">@if (Config::get('app.locale') == 'ar') خدماتنا @else Our Services @endif</li>
                        </ol>
                    </div><!--End Container-->
                </div><!-- End Page-Head -->
                <div class="page-content">
                    <section class="section-lg our-services">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="section-head">
                                        <h3 class="section-title no-before">@if (Config::get('app.locale') == 'ar') خدماتنا @else Our Services @endif</h3><!-- End Section-Title -->
                                        <p>
                                            @if (Config::get('app.locale') == 'ar') {{$data->get('services_ar')}} @else {{$data->get('services_en')}} @endif
                                        </p>
                                    </div><!-- End Section-Head -->
                                </div><!-- End col -->
                            </div><!-- End row -->
                            <div class="section-content">
                                <div class="row">
                                    @foreach($services as $service)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="service-box with-hover">
                                            <div class="service-box-img">
                                                <img src="{{asset('storage/uploads/services').'/'.$service->image}}">
                                                <span></span>
                                                <div class="service-box-icon">
                                                    <img src="{{asset('assets/site/images/services-icon-colored.png')}}">
                                                </div><!-- End Service-Box-Icon -->
                                            </div><!-- End Service-Box-Img -->
                                            <div class="service-box-content">
                                                <h3 class="title title-lg">@if (Config::get('app.locale') == 'ar') {{$service->s_name_ar}} @else {{$service->s_name_en}} @endif</h3>
                                                <a href="{{ route('site.service' , ['id' => $service->id]) }}" class="show-more">
                                                @if (Config::get('app.locale') == 'ar') المزيد + @else More + @endif
                                            </a>
                                            </div><!-- End Service-Box-Content -->
                                        </div><!-- End Services-Box -->
                                    </div><!-- End col-->
                                    @endforeach
                                </div><!-- End row -->
                            </div><!-- End Section-Content -->
                        </div><!-- End container -->
                    </section><!-- End Section -->

@endsection