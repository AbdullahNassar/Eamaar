@extends('admin.layouts.master')
@section('title')
قصص النجاح
@endsection
@section('content')
<div class="page-content">
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">اضافة</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
                <form class="form" method="post" action=""  id="dropzone_image">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="row">
                        <div class="form-group">
                            <div class="choose-img">
                                <input type="hidden" value="{{route('admin.upload.post')}}" id="url" >
                                <input type="hidden" value="stories" id="storage" >
                                <input type="hidden" name="image" id="img" >
                                <input type="file" name="image" id="image" required>
                                <p>اضغط لتحميل صورة</p>
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
                                    <input type="number" name="_order" class="form-control" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->

                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>التفعيل</label>
                                    <select class="form-control"  name="active" required>
                                            <option>            </option>
                                            <option value="1">نعم</option>
                                            <option value="0">لا</option>
                                        </select>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->


                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>أسم الطبيب</label>
                                    <input type="text" name="name"  class="form-control" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->

                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Doctor Name </label>
                                    <input type="text" name="name_en"  class="form-control" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->

                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>العنوان </label>
                                    <input type="text" class="form-control" rows="5" name="title" required>

                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Title </label>
                                    <input type="text" class="form-control" rows="5" name="title_en" required>

                                </div><!-- End Form-Group -->
                            </div><!-- End col -->

                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>القصة </label>
                                    <textarea class="form-control" rows="10" name="story" required></textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Story </label>
                                    <textarea class="form-control" rows="10" name="story_en" required></textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                        </div>
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
</div><!--End page-content-->
@endsection