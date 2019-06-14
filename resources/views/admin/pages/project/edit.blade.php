@extends('admin.layouts.master')
@section('title')
البرامج
@endsection
@section('content')
<div class="page-content">
    @foreach($projects as $project)
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">اضافة</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
                <form action="{{route('admin.project.addImages')}}" style="border-color:#eee; width: 970px; height: 300px; margin-bottom: 20px; " class="dropzone" id="my-dropzone" method="post">
                    {{ csrf_field() }}
                        <p style="text-align: center;">اضغط لاضافة صور للمشروع</p>
                        <input type="hidden" name="project_id" value="{{ $project->id }}">
                </form>
                <div style="border-color:#eee; width: 970px; margin-bottom: 100px; margin-top: 60px;">
                    <div class="col-md-12">
                        <p style="text-align: center; margin-bottom: 50px;"> صور المشروع</p>
                        @foreach($images as $image)
                        <div class="col-md-2" style="border-color:#000;">
                            <ul>
                                <li>
                                    <img style="width: 100px; margin-bottom: 20px;" src="{{asset($image->images)}}"/>
                                </li>
                                <li>
                                    <a class="custom-btn small green" href="{{ route('admin.project.deleteImg' , ['id' => $image->id]) }}"> حذف الصورة </a>
                                </li>
                            </ul>
                            
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-12" style="border-color:#eee; width: 970px; margin-bottom: 100px; margin-top: 100px;">
                </div>
                <form class="form" method="post" action="">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="row">

                            <div class="col-md-12">
                                <p style="text-align: center; margin-bottom: 20px;">اضغط لتحميل صورة</p>
                                <div class="form-group">
                                    <div class="choose-img">
                                        <input type="hidden" name="s_id" value="{{ $project->id }}">
                                        <input type="hidden" value="{{route('admin.upload.post')}}" id="url" >
                                        <input type="hidden" value="projects" id="storage" >
                                        <input type="hidden" name="image" value="{{$project->p_image}}" id="img" >
                                        <input type="file" name="image" id="image" required>
                                            @if($project->p_image)
                                            <img src="{{asset('storage/uploads/projects').'/'.$project->p_image}}"/>
                                            @else
                                            <p>اضغط لتحميل صورة</p>
                                            @endif
                                    </div><!-- End Choose-Img -->
                                    <div class="upload-action">
                                        <button class="upload-btn" type="button" id="upload-btn">
                                            تحميل الصورة
                                        </button>
                                        <div class="progress">
                                            <div id="progressBar" value="0" max="100" class="progress-bar" role="progressbar" style="width: 0%;">0%
                                            </div>
                                        </div>
                                        <h3 id="status"></h3>
                                        <p id="loaded_n_total"></p>
                                    </div><!--End upload-action-->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>الأسم</label>
                                    <input type="hidden" name="s_id" value="{{ $project->id }}">
                                    <input type="text" class="form-control" required name="name_ar" value="{{$project->name_ar}}">
                                </div><!--End Form-group-->
                            </div><!--End Col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Name</label>
                                    <input type="text" class="form-control" required name="name_en" value="{{$project->name_en}}">
                                </div><!-- End Form-Group -->
                            </div><!--End Col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    @php
                                    $content_ar = json_decode($project->content_ar);
                                    $count1 = 1;
                                    @endphp
                                    <label>المحتوى</label>
                                    @foreach((array)$content_ar as $c_ar)
                                    <textarea class="form-control" rows="6" name="c_ar{{$count1}}" required>{{$c_ar}}</textarea><br>
                                    @php $count1 = $count1+1; @endphp
                                    @endforeach
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Content</label>
                                    @php
                                    $content_en = json_decode($project->content_en);
                                    $count2 = 1;
                                    @endphp
                                    @foreach((array)$content_en as $c_en)
                                    <textarea class="form-control" rows="6" name="c_en{{$count2}}" required>{{$c_en}}</textarea><br>
                                    @php $count2 = $count2+1; @endphp
                                    @endforeach
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>الموقع</label>
                                    <input type="text" class="form-control" required name="location_ar" value="{{$project->location_ar}}">
                                </div><!--End Form-group-->
                            </div><!--End Col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Location</label>
                                    <input type="text" class="form-control" required name="location_en" value="{{$project->location_en}}">
                                </div><!-- End Form-Group -->
                            </div><!--End Col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>المساحة</label>
                                    <input type="text" class="form-control" required name="area_ar" value="{{$project->area_ar}}">
                                </div><!--End Form-group-->
                            </div><!--End Col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Area</label>
                                    <input type="text" class="form-control" required name="area_en" value="{{$project->area_en}}">
                                </div><!-- End Form-Group -->
                            </div><!--End Col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>التكلفة</label>
                                    <input type="text" class="form-control" required name="cost_ar" value="{{$project->cost_ar}}">
                                </div><!--End Form-group-->
                            </div><!--End Col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Cost</label>
                                    <input type="text" class="form-control" required name="cost_en" value="{{$project->cost_en}}">
                                </div><!-- End Form-Group -->
                            </div><!--End Col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Starting Date</label>
                                    <input type="date" class="form-control" required name="st_date" value="{{$project->st_date}}">
                                </div><!--End Form-group-->
                            </div><!--End Col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Ending Date</label>
                                    <input type="date" class="form-control" required name="end_date" value="{{$project->end_date}}">
                                </div><!-- End Form-Group -->
                            </div><!--End Col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>الترتيب</label>
                                    <input type="number" class="form-control" required name="_order" value="{{$project->_order}}">
                                </div><!-- End Form-Group -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>التفعيل</label>
                                    <select class="form-control" name="active" required>
                                        <option value="{{ $project->active }}">@if($project->active == 1)
                                                                                نعم
                                                                                @elseif($project->active == 0)
                                                                                لا
                                                                                @endif 
                                        </option>
                                        <option value="1">نعم</option>
                                        <option value="0">لا</option>
                                    </select>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>الخدمة</label>
                                    <select class="form-control" required name="service">
                                        <option value="{{ $project->service_id }}">{{ $project->s_name_ar }}</option>
                                        @foreach($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->s_name_ar }}</option>
                                        @endforeach
                                    </select>
                                </div><!-- End Form-Group -->
                            </div><!--End Col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>الفئة</label>
                                    <select class="form-control" required name="category">
                                        <option value="{{ $project->category_id }}">{{ $project->c_name_ar }}</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->c_id }}">{{ $category->c_name_ar }}</option>
                                        @endforeach
                                    </select>
                                </div><!-- End Form-Group -->
                            </div><!--End Col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>العميل</label>
                                    <select class="form-control" required name="client">
                                        <option value="{{ $project->client_id }}">{{ $project->client_name_ar }}</option>
                                        @foreach($clients as $client)
                                            <option value="{{ $client->id }}">{{ $client->client_name_ar }}</option>
                                        @endforeach
                                    </select>
                                </div><!-- End Form-Group -->
                            </div><!--End Col-md-6-->
                        </div>
                        <div class="form-action">
                            <div class="row">
                                <div class="col-xs-12">
                                    <button class="custom-btn" type="submit">حفظ التغييرات</button>
                                </div><!--End Col-->
                            </div><!--End Row-->
                        </div><!--End Form-action-->
                    </div>
                </form><!-- End row -->
            </div><!-- End Box-Item-Content -->
        </div><!-- End Box-Item -->
    </section><!--End Section-->
    @endforeach
</div><!--End page-content-->
@endsection