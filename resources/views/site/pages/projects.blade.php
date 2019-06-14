@extends('site.layouts.master')
@section('content')
                <div class="page-head">
                    <div class="container">
                        <h2 class="page-head-title">
                            @if (Config::get('app.locale') == 'ar') مشاريعنا @else Projects @endif
                        </h2>
                        <ol class="breadcrumb">
                          <li><a href="{{URL::to('/')}}">@if (Config::get('app.locale') == 'ar') الرئيسية @else Home @endif</a></li>
                          <li class="active">@if (Config::get('app.locale') == 'ar') مشاريعنا @else Projects @endif</li>
                        </ol>
                    </div><!--End Container-->
                </div><!-- End Page-Head -->
                <div class="page-content">
                    <section class="section-lg our-projets-style2">
                        <div class="container">
                            <div class="row justify-content-md-center text-center">
                                <div class="col-md-8">
                                    <div class="section-head">
                                        <p>
                                            @if (Config::get('app.locale') == 'ar') {{$data->get('projects_ar')}} @else {{$data->get('projects_en')}} @endif
                                        </p>
                                    </div><!-- End Section-Head -->
                                </div><!-- End col -->
                            </div><!--End Row-->
                            <div class="row">
                                <div class="col-lg-2">
                                    <ul class="filter-list">
                                        <li class="filter active" data-filter="all">@if (Config::get('app.locale') == 'ar') كل المشاريع @else All Projects @endif</li>
                                        <li class="filter" data-filter=".designAndBuldings">@if (Config::get('app.locale') == 'ar') تصميم وبناء @else Design @endif</li>
                                        <li class="filter" data-filter=".interiorDesign">@if (Config::get('app.locale') == 'ar') تصميم داخلى @else Interior Design @endif</li>
                                        <li class="filter" data-filter=".reInstruction">@if (Config::get('app.locale') == 'ar') إعادة إعمار @else Reconstruction @endif</li>
                                        <li class="filter" data-filter=".finalTuche">@if (Config::get('app.locale') == 'ar') تشطيبات نهائية @else Final Touche @endif</li>
                                        <li class="filter" data-filter=".managment">@if (Config::get('app.locale') == 'ar') إدارة وتحكم @else Management @endif</li>
                                   </ul>
                                </div><!--End Col-md-2-->
                                <div class="col-lg-10">
                                    <div id="projects" class="projects-wrapper">
                                        <div class="row no-gutters">
                                            @foreach($projects as $project)
                                            <div class="col-lg-4 mix {{$project->type}}">
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
                                            </div><!--End Col-4-->
                                            @endforeach
                                        </div><!--End Row-->
                                    </div><!--End projects-wrapper-->
                                </div><!--End Col-md-10-->
                            </div><!--End Row-->
                        </div><!-- End container -->
                    </section><!-- End Section -->
@endsection