@extends('admin.layouts.master')
@section('title')
من نحن
@endsection
@section('content')
<div class="page-content">
    @foreach($abouts as $about)
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">من نحن</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
                <form class="form" method="post" action="{{URL::to('admin/about')}}" id="update_about">
                                    {{ csrf_field() }}
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="choose-img">
                                        <input type="hidden" name="s_id" value="{{ $about->id }}">
                                        <input type="hidden" value="{{route('admin.upload.post')}}" id="url" >
                                        <input type="hidden" value="about" id="storage" >
                                        <input type="hidden" name="image" value="{{$about->image}}" id="img" required>
                                        <input type="file" name="image" id="image">
                                        @if($about->image)
                                        <img src="{{asset('storage/uploads/about').'/'.$about->image}}"/>
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
                                    </div>
                                            <div class="col-md-6">
                                                <div class="form-group ar">
                                                    <label>العنوان</label>
                                                    <input type="text" name="_header" class="form-control" value="{{ $about->_header }}" required>
                                                </div><!-- End Form-Group -->
                                            </div><!-- End col -->
                                            <div class="col-md-6">
                                                <div class="form-group en">
                                                    <label>title</label>
                                                    <input type="text" name="_header_en" class="form-control" value="{{ $about->_header_en }}" required>
                                                </div><!-- End Form-Group -->
                                            </div><!-- End col -->

                                            <div class="col-md-6">
                                                <div class="form-group ar">
                                                    <label>المحتوى</label>
                                                    <textarea class="form-control" name="p1" rows="5" required>{{ $about->p1 }}</textarea>
                                                </div><!-- End Form-Group -->
                                            </div><!-- End col -->
                                            <div class="col-md-6">
                                                <div class="form-group en">
                                                    <label>content</label>
                                                    <textarea class="form-control" name="p1_en" rows="5" required>{{ $about->p1_en }}</textarea>
                                                </div><!-- End Form-Group -->
                                            </div><!-- End col -->

                                            <div class="col-md-6">
                                                <div class="form-group ar">
                                                    <label>المحتوى</label>
                                                    <textarea class="form-control" name="p2" rows="5" required>{{ $about->p2 }}</textarea>
                                                </div><!-- End Form-Group -->
                                            </div><!-- End col -->
                                            <div class="col-md-6">
                                                <div class="form-group en">
                                                    <label>content</label>
                                                    <textarea class="form-control" name="p2_en" rows="5" required>{{ $about->p2_en }}</textarea>
                                                </div><!-- End Form-Group -->
                                            </div><!-- End col -->

                                            <div class="col-md-6">
                                                <div class="form-group ar">
                                                    <label>المحتوى</label>
                                                    <textarea class="form-control" name="p3" rows="5" required>{{ $about->p3 }}</textarea>
                                                </div><!-- End Form-Group -->
                                            </div><!-- End col -->
                                            <div class="col-md-6">
                                                <div class="form-group en">
                                                    <label>content</label>
                                                    <textarea class="form-control" name="p3_en" rows="5" required>{{ $about->p3_en }}</textarea>
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