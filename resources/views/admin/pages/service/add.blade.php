@extends('admin.layouts.master')
@section('title')
الخدمات
@endsection
@section('content')
<div class="page-content">
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">اضافه</h3>
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
                                        
                                        <input type="hidden" value="{{route('admin.upload.post')}}" id="url" >
                                        <input type="hidden" value="services" id="storage" >
                                        <input type="hidden" name="image" id="img" >
                                        <input type="file" name="image" id="image">
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
                                        <p id="loaded_n_total"></p><br>
                                    </div><!--End upload-action-->

                                </div><!-- End Form-Group -->
                            </div><!-- End col -->

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
                                    <label>أسم الخدمة</label>
                                    <input type="text" name="name_ar"  class="form-control"  required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Service Name </label>
                                    <input type="text" name="name_en"  class="form-control" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>المحتوى</label>
                                    <textarea class="form-control" rows="6" name="c_ar1" required></textarea><br>
                                    <textarea class="form-control" rows="6" name="c_ar2" required></textarea><br>
                                    <textarea class="form-control" rows="6" name="c_ar3" required></textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Content</label>
                                    <textarea class="form-control" rows="6" name="c_en1" required></textarea><br>
                                    <textarea class="form-control" rows="6" name="c_en2" required></textarea><br>
                                    <textarea class="form-control" rows="6" name="c_en3" required></textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>لماذا تختار خدماتنا</label>
                                    <textarea class="form-control" rows="6" name="b1_ar1" required></textarea><br>
                                    <textarea class="form-control" rows="6" name="b1_ar2" required></textarea><br>
                                    <textarea class="form-control" rows="6" name="b2_ar1" required></textarea><br>
                                    <textarea class="form-control" rows="6" name="b2_ar2" required></textarea><br>
                                    <textarea class="form-control" rows="6" name="b3_ar1" required></textarea><br>
                                    <textarea class="form-control" rows="6" name="b3_ar2" required></textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Why you choose our services</label>

                                    <textarea class="form-control" rows="6" name="b1_en1" required></textarea><br>
                                    <textarea class="form-control" rows="6" name="b1_en2" required></textarea><br>
                                    <textarea class="form-control" rows="6" name="b2_en1" required></textarea><br>
                                    <textarea class="form-control" rows="6" name="b2_en2" required></textarea><br>
                                    <textarea class="form-control" rows="6" name="b3_en1" required></textarea><br>
                                    <textarea class="form-control" rows="6" name="b3_en2" required></textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->

                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>كيفية تنفيذ الخدمة</label>
                                    <textarea class="form-control" rows="6" name="h_ar1" required></textarea><br>
                                    <textarea class="form-control" rows="6" name="h_ar2" required></textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>How to perform the service</label>
                                    <textarea class="form-control" rows="6" name="h_en1" required></textarea><br>
                                    <textarea class="form-control" rows="6" name="h_en2" required></textarea>
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
</div><!--End page-content-->
@endsection