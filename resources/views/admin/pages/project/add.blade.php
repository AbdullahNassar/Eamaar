@extends('admin.layouts.master')
@section('title')
المشاريع
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
            <div class="modal-body">
                <form class="form" method="post" action="">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="choose-img">
                                        <input type="hidden" value="{{route('admin.upload.post')}}" id="url" >
                                        <input type="hidden" value="projects" id="storage" >
                                        <input type="hidden" name="image" id="img" >
                                        <input type="file" name="image" id="image">
                                        <p>اضغط لتحميل صورة المشروع</p>
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
                                    <label>الأسم</label>
                                    <input type="text" class="form-control" required name="name_ar">
                                </div><!--End Form-group-->
                            </div><!--End Col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Name</label>
                                    <input type="text" class="form-control" required name="name_en">
                                </div><!-- End Form-Group -->
                            </div><!--End Col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>المحتوى</label>
                                    @for ($i = 0; $i < 3; $i++)
                                    <textarea class="form-control" rows="6" name="c_ar{{$i}}" required></textarea><br>
                                    @endfor
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Content</label>
                                    @for ($i = 0; $i < 3; $i++)
                                    <textarea class="form-control" rows="6" name="c_en{{$i}}" required></textarea><br>
                                    @endfor
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>الموقع</label>
                                    <input type="text" class="form-control" required name="location_ar">
                                </div><!--End Form-group-->
                            </div><!--End Col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Location</label>
                                    <input type="text" class="form-control" required name="location_en">
                                </div><!-- End Form-Group -->
                            </div><!--End Col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>المساحة</label>
                                    <input type="text" class="form-control" required name="area_ar">
                                </div><!--End Form-group-->
                            </div><!--End Col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Area</label>
                                    <input type="text" class="form-control" required name="area_en">
                                </div><!-- End Form-Group -->
                            </div><!--End Col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>التكلفة</label>
                                    <input type="text" class="form-control" required name="cost_ar">
                                </div><!--End Form-group-->
                            </div><!--End Col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Cost</label>
                                    <input type="text" class="form-control" required name="cost_en">
                                </div><!-- End Form-Group -->
                            </div><!--End Col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Starting Date</label>
                                    <input type="date" class="form-control" required name="st_date">
                                </div><!--End Form-group-->
                            </div><!--End Col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Ending Date</label>
                                    <input type="date" class="form-control" required name="end_date">
                                </div><!-- End Form-Group -->
                            </div><!--End Col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>الترتيب</label>
                                    <input type="number" class="form-control" required name="_order">
                                </div><!-- End Form-Group -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>التفعيل</label>
                                    <select class="form-control" name="active" required>
                                        <option>         </option>
                                        <option value="1">نعم</option>
                                        <option value="0">لا</option>
                                    </select>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>الخدمة</label>
                                    <select class="form-control" required name="service">
                                        <option>          </option>
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
                                        <option>          </option>
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
                                        <option>          </option>
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
</div><!--End page-content-->
@endsection