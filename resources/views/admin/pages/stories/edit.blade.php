@extends('admin.layouts.master')
@section('title')
الأطباء
@endsection
@section('content')
<div class="page-content">
@foreach($stories as $story)
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">تعديل</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
                <form class="form" method="post" action=""  id="dropzone_image">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="row">
                        <div class="form-group">
                            <div class="choose-img">
                                <input type="hidden" name="s_id" value="{{ $story->id }}">
                                <input type="hidden" value="{{route('admin.upload.post')}}" id="url" >
                                <input type="hidden" value="stories" id="storage" >
                                <input type="hidden" name="image" value="{{$story->image}}" id="img" >
                                <input type="file" name="image" id="image" required>
                                    @if($story->image)
                                    <img src="{{asset('storage/uploads/stories').'/'.$story->image}}"/>
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
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>الترتيب</label>
                                    <input type="number" name="_order" class="form-control" value="{{$story->_order}}" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->

                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>التفعيل</label>
                                    <select class="form-control"  name="active" required>
                                        <option value="{{ $story->active }}">@if($story->active == 1)
                                                                                نعم
                                                                                @elseif($story->active == 0)
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
                                    <label>أسم الطبيب</label>
                                    <input type="text" name="name"  class="form-control" value="{{$story->name}}" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->

                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Doctor Name </label>
                                    <input type="text" name="name_en"  class="form-control" value="{{$story->name_en}}" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->

                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>العنوان </label>
                                    <input type="text" class="form-control" rows="5" name="title" value="{{$story->title}}" required>

                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Title </label>
                                    <input type="text" class="form-control" rows="5" name="title_en" value="{{$story->title_en}}" required>

                                </div><!-- End Form-Group -->
                            </div><!-- End col -->

                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>القصة </label>
                                    <textarea class="form-control" rows="10" name="story" required>{{$story->story}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Story </label>
                                    <textarea class="form-control" rows="10" name="story_en" required>{{$story->story_en}}</textarea>
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
                    </div>
                </form><!-- End row -->
            </div><!-- End Box-Item-Content -->
        </div><!-- End Box-Item -->
    </section><!--End Section-->
 @endforeach
</div><!--End page-content-->
@endsection