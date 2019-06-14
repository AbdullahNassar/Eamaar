@extends('admin.layouts.master')
@section('title')
الخدمات
@endsection
@section('content')
<div class="page-content">
@foreach($services as $service)
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">تعديل</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
                <form class="form" method="post" action="" >
                    <div class="form-body">
                        <div class="row">
                            {{ csrf_field() }}
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="choose-img">
                                        <input type="hidden" name="s_id" value="{{ $service->id }}">
                                        <input type="hidden" value="{{route('admin.upload.post')}}" id="url" >
                                        <input type="hidden" value="services" id="storage" >
                                        <input type="hidden" name="image" value="{{$service->image}}" id="img" >
                                        <input type="file" name="image" id="image" required>
                                        <img src="{{asset('storage/uploads/services').'/'.$service->image}}"/>
                                    </div><!-- End Choose-Img -->
                                    <div class="upload-action"><br>
                                        <button class="upload-btn" type="button" id="upload-btn">
                                            تحميل الصورة
                                        </button>
                                        <div class="progress">
                                            <div id="progressBar" value="0" max="100" class="progress-bar" role="progressbar" style="width: 0%;">0%
                                            </div>
                                        </div>
                                        <h3 id="status"></h3>
                                        <p id="loaded_n_total"></p><br>
                                    </div><!--End upload-action-->
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>الترتيب</label>
                                    <input type="number" name="_order" class="form-control" value="{{ $service->_order }}" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>التفعيل</label>
                                    <select class="form-control" name="active" required>
                                        <option value="{{ $service->active }}">@if($service->active == 1)
                                                                                نعم
                                                                                @elseif($service->active == 0)
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
                                    <label>أسم الخدمة</label>
                                    <input type="text" name="name_ar"  class="form-control" value="{{ $service->s_name_ar }}" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Service Name </label>
                                    <input type="text" name="name_en"  class="form-control" value="{{ $service->s_name_en }}" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    @php
                                    $content_ar = json_decode($service->content_ar);
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
                                    $content_en = json_decode($service->content_en);
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
                                    <label>لماذا تختار خدماتنا</label>
                                    @php
                                    $whyb1_ar = json_decode($service->whyb1_ar);
                                    $count3 = 1;
                                    @endphp
                                    @foreach((array)$whyb1_ar as $b1_ar)
                                    <textarea class="form-control" rows="6" name="b1_ar{{$count3}}" required>{{$b1_ar}}</textarea><br>
                                    @php $count3 = $count3+1; @endphp
                                    @endforeach
                                    @php
                                    $whyb2_ar = json_decode($service->whyb2_ar);
                                    $count4 = 1;
                                    @endphp
                                    @foreach((array)$whyb2_ar as $b2_ar)
                                    <textarea class="form-control" rows="6" name="b2_ar{{$count4}}" required>{{$b2_ar}}</textarea><br>
                                    @php $count4 = $count4+1; @endphp
                                    @endforeach
                                    @php
                                    $whyb3_ar = json_decode($service->whyb3_ar);
                                    $count5 = 1;
                                    @endphp
                                    @foreach((array)$whyb3_ar as $b3_ar)
                                    <textarea class="form-control" rows="6" name="b3_ar{{$count5}}" required>{{$b3_ar}}</textarea><br>
                                    @php $count5 = $count5+1; @endphp
                                    @endforeach
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Why you choose our services</label>
                                    @php
                                    $whyb1_en = json_decode($service->whyb1_en);
                                    $count6 = 1;
                                    @endphp
                                    @foreach((array)$whyb1_en as $b1_en)
                                    <textarea class="form-control" rows="6" name="b1_en{{$count6}}" required>{{$b1_en}}</textarea><br>
                                    @php $count6 = $count6+1; @endphp
                                    @endforeach
                                    @php
                                    $whyb2_en = json_decode($service->whyb2_en);
                                    $count7 = 1;
                                    @endphp
                                    @foreach((array)$whyb2_en as $b2_en)
                                    <textarea class="form-control" rows="6" name="b2_en{{$count7}}" required>{{$b2_en}}</textarea><br>
                                    @php $count7 = $count7+1; @endphp
                                    @endforeach
                                    @php
                                    $whyb3_en = json_decode($service->whyb3_en);
                                    $count8 = 1;
                                    @endphp
                                    @foreach((array)$whyb3_en as $b3_en)
                                    <textarea class="form-control" rows="6" name="b3_en{{$count8}}" required>{{$b3_en}}</textarea><br>
                                    @php $count8 = $count8+1; @endphp
                                    @endforeach
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    @php
                                    $how1 = json_decode($service->how_ar);
                                    @endphp
                                    <label>كيفية تنفيذ الخدمة</label>
                                    @php $count9 = 1; @endphp
                                    @foreach((array)$how1 as $h_ar)
                                    <textarea class="form-control" rows="6" name="h_ar{{$count9}}" required>{{$h_ar}}</textarea><br>
                                    @php $count9 = $count9+1; @endphp
                                    @endforeach
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>How to perform the service</label>
                                    @php
                                    $how_en = json_decode($service->how_en);
                                    $count10 = 1;
                                    @endphp
                                    @foreach((array)$how_en as $h_en)
                                    <textarea class="form-control" rows="6" name="h_en{{$count10}}" required>{{$h_en}}</textarea><br>
                                    @php $count10 = $count10+1; @endphp
                                    @endforeach
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                        </div><!--End Row-->
                    </div><!--End Form-body-->
                    <div class="form-action">
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="custom-btn" type="submit">حفظ التغييرات</button>
                            </div><!--End Col-->
                        </div><!--End Row-->
                    </div><!--End Form-action-->
                </form><!-- End row -->
            </div><!-- End Box-Item-Content -->
        </div><!-- End Box-Item -->
    </section><!--End Section-->
@endforeach
</div><!--End page-content-->
@endsection