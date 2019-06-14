@extends('site.layouts.master')
@section('content')
@foreach($services as $service)
                <div class="page-head">
                    <div class="container">
                        <h2 class="page-head-title">
                            @if (Config::get('app.locale') == 'ar') {{$service->s_name_ar}} @else {{$service->s_name_en}} @endif
                        </h2>
                        <ol class="breadcrumb">
                            <li><a href="{{URL::to('/')}}">@if (Config::get('app.locale') == 'ar') الرئيسية @else Home @endif</a></li>
                            <li>@if (Config::get('app.locale') == 'ar') خدماتنا @else Our Services @endif</li>
                            <li class="active">@if (Config::get('app.locale') == 'ar') {{$service->s_name_ar}} @else {{$service->s_name_en}} @endif</li>
                        </ol>
                    </div><!--End Container-->
                </div><!-- End Page-Head -->
                <div class="page-content">
                    <section class="section-lg single-service">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="service-box">
                                                <div class="service-box-img">
                                                    <img src="{{asset('storage/uploads/services').'/'.$service->image}}">
                                                    <div class="service-box-icon">
                                                        <img src="{{asset('assets/site/images/services-icon-colored.png')}}">
                                                    </div><!-- End Service-Box-Icon -->
                                                </div><!-- End Service-Box-Img -->
                                            </div><!-- End Services-Box -->
                                        </div><!-- End col -->
                                        <div class="col-lg-12">
                                            <div class="service-desc">
                                                <h3 class="section-title section-title-sm no-before">
                                                    @if (Config::get('app.locale') == 'ar') وصف الخدمة @else Service Description @endif
                                                </h3>
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
                                            </div><!-- End Service-Desc -->
                                        </div><!-- End col -->
                                        <div class="col-lg-6">
                                            <div class="service-feature">
                                                <h3 class="section-title section-title-sm no-before">
                                                    @if (Config::get('app.locale') == 'ar') لماذا تختار خدماتنا @else Why you choose our services @endif
                                                </h3>
                                                @php
                                                    $whyb1_ar=json_decode($service->whyb1_ar);
                                                    $whyb1_en=json_decode($service->whyb1_en);
                                                    $whyb2_ar=json_decode($service->whyb2_ar);
                                                    $whyb2_en=json_decode($service->whyb2_en);
                                                    $whyb3_ar=json_decode($service->whyb3_ar);
                                                    $whyb3_en=json_decode($service->whyb3_en);
                                                @endphp
                                                <ul class="feature-list">
                                                    @if (Config::get('app.locale') == 'ar')
                                                    <li>
                                                        @foreach($whyb1_ar as $b1_ar)
                                                        <p class="@if($loop->index==0) title title-sm @endif">
                                                            {{$b1_ar}}
                                                        </p>
                                                        @endforeach
                                                    </li>
                                                    @else
                                                    <li>
                                                        @foreach($whyb1_en as $b1_en)
                                                        <p class="@if($loop->index==0) title title-sm @endif">
                                                            {{$b1_en}}
                                                        </p>
                                                        @endforeach
                                                    </li>
                                                    @endif
                                                    @if (Config::get('app.locale') == 'ar')
                                                    <li>
                                                        @foreach($whyb2_ar as $b2_ar)
                                                        <p class="@if($loop->index==0) title title-sm @endif">
                                                            {{$b2_ar}}
                                                        </p>
                                                        @endforeach
                                                    </li>
                                                    @else
                                                    <li>
                                                        @foreach($whyb2_en as $b2_en)
                                                        <p class="@if($loop->index==0) title title-sm @endif">
                                                            {{$b2_en}}
                                                        </p>
                                                        @endforeach
                                                    </li>
                                                    @endif
                                                    @if (Config::get('app.locale') == 'ar')
                                                    <li>
                                                        @foreach($whyb3_ar as $b3_ar)
                                                        <p class="@if($loop->index==0) title title-sm @endif">
                                                            {{$b3_ar}}
                                                        </p>
                                                        @endforeach
                                                    </li>
                                                    @else
                                                    <li>
                                                        @foreach($whyb3_en as $b3_en)
                                                        <p class="@if($loop->index==0) title title-sm @endif">
                                                            {{$b3_en}}
                                                        </p>
                                                        @endforeach
                                                    </li>
                                                    @endif
                                                </ul><!-- End Feature-List -->
                                            </div><!-- End Service-Feature -->
                                        </div><!-- End col -->
                                        <div class="col-lg-6">
                                            <div class="service-execution">
                                                <h3 class="section-title section-title-sm no-before">
                                                    @if (Config::get('app.locale') == 'ar') كيفية تنفيذ الخدمة @else How to perform service @endif
                                                </h3>
                                                @php
                                                $how_ar=json_decode($service->how_ar);
                                                $how_en=json_decode($service->how_en);
                                                @endphp
                                                @if (Config::get('app.locale') == 'ar')
                                                @foreach($how_ar as $h_ar)
                                                <p>
                                                    {{$h_ar}}
                                                </p>
                                                @endforeach
                                                @else
                                                @foreach($how_en as $h_en)
                                                <p>
                                                    {{$h_en}}
                                                </p>
                                                @endforeach
                                                @endif
                                            </div><!-- End Service-Execution -->
                                        </div><!-- End col -->
                                        <div class="col-lg-12">
                                            <div class="service-projects">
                                                <h3 class="section-title section-title-sm no-before">
                                                    @if (Config::get('app.locale') == 'ar') مشاريعنا في هذه الخدمة @else Projects in this service @endif
                                                </h3>
                                                <div class="row our-projets-style2">
                                                    @foreach($projects as $project)
                                                    <div class="col-lg-4">
                                                        <div class="box-item">
                                                            <div class="box-item-img">
                                                                <img src="{{asset('storage/uploads/project').'/'.$project->p_image}}" alt="project image">
                                                            </div>
                                                            <div class="box-item-content">
                                                                <span class="categ-name">@if (Config::get('app.locale') == 'ar') {{$project->s_name_ar}} @else {{$project->s_name_en}} @endif</span>
                                                                <p class="project-name">@if (Config::get('app.locale') == 'ar') {{$project->name_ar}} @else {{$project->name_en}} @endif</p>
                                                                <a href="{{ route('site.project' , ['id' => $project->id]) }}" class="read-more">
                                                                    <i class="fa fa-plus"></i>
                                                                </a>
                                                            </div><!--End Box-item-content-->
                                                        </div><!--End box-item-->
                                                    </div><!--End Col-4-->
                                                    @endforeach
                                                </div><!-- End row -->
                                            </div><!-- End Services-Projects -->
                                        </div><!-- End col -->
                                        
                                    </div><!-- End row -->
                                </div><!-- End col -->
                                <div class="col-lg-3">
                                    <div id="accordion" role="tablist">
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingOne">
                                                <a class="collapsed" data-toggle="collapse" href="#all" aria-expanded="false" aria-controls="all">
                                                    @if (Config::get('app.locale') == 'ar') كل الخدمات @else All Services @endif
                                                </a>
                                            </div>
                                            <div id="all" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">
                                                    <ul class="">
                                                        @foreach($counts as $serv)
                                                        <li>
                                                            <a href="{{ route('site.service' , ['id' => $serv->id]) }}">@if (Config::get('app.locale') == 'ar') {{$serv->s_name_ar}} @else {{$serv->s_name_en}} @endif</a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>  
                                        @foreach($pro as $pr)  
                                        <div class="card">
                                            <div class="card-header" role="tab" id="{{$pr->head}}">
                                                <a class="collapsed" data-toggle="collapse" href="#{{$pr->_type}}" aria-expanded="false" aria-controls="{{$pr->_type}}">
                                                    @if (Config::get('app.locale') == 'ar') {{$pr->s_name_ar}} @else {{$pr->s_name_en}} @endif
                                                </a>
                                            </div>
                                            <div id="{{$pr->_type}}" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                                <div class="card-body">
                                                    <ul class="">
                                                        @foreach($pro as $p)
                                                        <li>
                                                            <a href="{{ route('site.project' , ['id' => $p->service_id]) }}">@if (Config::get('app.locale') == 'ar') {{$p->name_ar}} @else {{$p->name_en}} @endif</a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>    
                                        @endforeach
                                    </div>
                                </div><!-- End col -->
                            </div><!-- End row -->
                        </div><!-- End container -->
                    </section><!-- End Section -->
@endforeach
@endsection