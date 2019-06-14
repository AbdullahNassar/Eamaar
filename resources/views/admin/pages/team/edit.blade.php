@extends('admin.layouts.master')
@section('title')
Team
@endsection
@section('content')
<div class="page-content">
@foreach($teams as $team)
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
                                <input type="hidden" name="s_id" value="{{ $team->id }}">
                                <input type="hidden" value="{{route('admin.upload.post')}}" id="url" >
                                <input type="hidden" value="team" id="storage" >
                                <input type="hidden" name="image" value="{{$team->image}}" id="img" >
                                <input type="file" name="image" id="image" required>
                                    @if($team->image)
                                    <img src="{{asset('storage/uploads/team').'/'.$team->image}}"/>
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
                                    <input type="number" name="_order" class="form-control" value="{{$team->_order}}" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->

                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>التفعيل</label>
                                    <select class="form-control"  name="active" required>
                                        <option value="{{ $team->active }}">@if($team->active == 1)
                                                                                نعم
                                                                                @elseif($team->active == 0)
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
                                    <label>الاسم</label>
                                    <input type="text" name="name"  class="form-control" value="{{$team->name_ar}}" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->

                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Name</label>
                                    <input type="text" name="name_en"  class="form-control" value="{{$team->name_en}}" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->

                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>اللقب</label>
                                    <input type="text" class="form-control" rows="5" name="title" value="{{$team->title_ar}}" required>

                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Title</label>
                                    <input type="text" class="form-control" rows="5" name="title_en" value="{{$team->title_en}}" required>

                                </div><!-- End Form-Group -->
                            </div><!-- End col -->

                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Facebook Link </label>
                                    <input type="text" class="form-control" rows="5" name="facebook" value="{{$team->facebook}}" required>

                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Twitter Link </label>
                                    <input type="text" class="form-control" rows="5" name="twitter" value="{{$team->twitter}}" required>

                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Google Link </label>
                                    <input type="text" class="form-control" rows="5" name="google" value="{{$team->google}}" required>

                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Linkedin Link </label>
                                    <input type="text" class="form-control" rows="5" name="linkedin" value="{{$team->linkedin}}" required>

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