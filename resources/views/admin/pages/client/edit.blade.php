@extends('admin.layouts.master')
@section('title')
العملاء
@endsection
@section('content')
@foreach($clients as $client)
<div class="page-content">
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
                                <div class="col-md-12">
                                    <div class="choose-img">
                                        <input type="hidden" name="s_id" value="{{ $client->id }}">
                                        <input type="hidden" value="{{route('admin.upload.post')}}" id="url" >
                                        <input type="hidden" value="clients" id="storage" >
                                        <input type="hidden" name="image" value="{{$client->image}}" id="img" >
                                        <input type="file" name="image" id="image" required>
                                            @if($client->image)
                                            <img src="{{asset('storage/uploads/clients').'/'.$client->image}}"/>
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
                                    <label>أسم العميل</label>
                                    <input type="text" name="client_name_ar" value="{{$client->client_name_ar}}" class="form-control" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->

                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Client Name </label>
                                    <input type="text" name="client_name_en" value="{{$client->client_name_en}}" class="form-control" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
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
@endforeach
@endsection