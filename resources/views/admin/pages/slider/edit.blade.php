@extends('admin.layouts.master')
@section('title')
Slider
@endsection
@section('content')
<div class="page-content">
@foreach($sliders as $slider)
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
                                        <input type="hidden" name="s_id" value="{{ $slider->id }}">
                                        <input type="hidden" value="{{route('admin.upload.post')}}" id="url" >
                                        <input type="hidden" value="slider" id="storage" required>
                                        <input type="hidden" name="image" value="{{$slider->image}}" id="img" required>
                                        <input type="file" name="image" id="image" required>
                                        @if($slider->image)
                                        <img src="{{asset('storage/uploads/slider').'/'.$slider->image}}"/>
                                        @else
                                        <p>اضغط لتحميل صورة</p>
                                        @endif
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
                                        <h5>التفعيل</h5><br>
                                        <select class="form-control" name="active" required>
                                            <option value="{{ $slider->active }}">@if($slider->active == 1)
                                                                                  نعم
                                                                                  @elseif($slider->active == 0)
                                                                                  لا
                                                                                  @endif 
                                            </option>
                                            <option value="1">نعم</option>
                                            <option value="0">لا</option>
                                        </select><hr>
                                        <h5>الترتيب</h5><br>
                                        <input type="number" name="_order" class="form-control" value="{{ $slider->_order }}" required>
                                        <br>
                                    </div><!--End upload-action-->
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>العنوان</label>
                                    <input type="text" name="_header" value="{{ $slider->_header }}" class="form-control" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->

                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Title</label>
                                    <input type="text" name="_header_en" value="{{ $slider->_header_en }}" class="form-control" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->

                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>المحتوى</label>
                                    <textarea class="form-control" rows="10" name="content" required>{{ $slider->content }}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Content</label>
                                    <textarea class="form-control" rows="10" name="content_en" required>{{ $slider->content_en }}</textarea>
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