@extends('admin.layouts.master')
@section('title')
بيانات الموقع
@endsection
@section('content')
<div class="page-content">
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">اتصل بنا</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
                <form class="form" method="post" id="">
                    @foreach($contacts as $contact)
                    <div class="form-body">
                        <div class="row">
                            {{ csrf_field() }}
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>رقم الهاتف</label>
                                    <input value="{{$contact->phone}}" name="phone" type="tel" class="form-control" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>البريد الإلكترونى</label>
                                    <input value="{{$contact->email}}" name="email" type="text" class="form-control" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label> العنوان</label>
                                    <input type="text" name="address" value="{{$contact->address}}" class="form-control" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Address</label>
                                    <input type="text" name="address_en" value="{{$contact->address_en}}" class="form-control" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->

                            
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Facebook</label>
                                    <input type="text" name="facebook" value="{{$contact->facebook}}" class="form-control" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Twitter</label>
                                    <input type="text" name="twitter" value="{{$contact->twitter}}" class="form-control" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Google+</label>
                                    <input type="text" name="google" value="{{$contact->google}}" class="form-control" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Instagram</label>
                                    <input type="text" name="instagram" value="{{$contact->instagram}}" class="form-control" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Youtube</label>
                                    <input type="text" name="youtube" value="{{$contact->youtube}}" class="form-control" required>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">

                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-xs-12">
                                <div class="alert alert-success" style="display: none;" role="alert">
                                    تم تحديث البيانات بنجاح
                                </div>

                                <div class="alert alert-danger" style="display: none;" role="alert">

                                </div>
                            </div><!--End Col-->

                        </div><!--End Row-->


                    </div><!--End Form-body-->
                    <div class="form-action">
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="custom-btn" type="submit">حفظ التغييرات</button>
                            </div><!--End Col-->
                        </div><!--End Row-->
                    </div><!--End Form-action-->
                    @endforeach
                </form><!-- End row -->
            </div><!-- End Box-Item-Content -->
        </div><!-- End Box-Item -->
    </section><!--End Section-->
</div><!--End page-content-->
@endsection