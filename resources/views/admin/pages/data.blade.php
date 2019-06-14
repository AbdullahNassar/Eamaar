@extends('admin.layouts.master')
@section('title')
البيانات الثابتة
@endsection
@section('content')
<div class="page-content">
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">البيانات الثابتة</h3>
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
                                    @php
                                    $about_ar = json_decode($contact->about_content_ar);
                                    $count1 = 1;
                                    @endphp
                                    <label>عن اعمار</label>
                                    @foreach((array)$about_ar as $a_ar)
                                    <textarea rows="6" name="a_ar{{$count1}}" class="form-control" required>{{$a_ar}}</textarea><br>
                                    @php $count1 = $count1+1; @endphp
                                    @endforeach
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    @php
                                    $about_en = json_decode($contact->about_content_en);
                                    $count2 = 1;
                                    @endphp
                                    <label>About Eamaar</label>
                                    @foreach((array)$about_en as $a_en)
                                    <textarea rows="6" name="a_en{{$count2}}" class="form-control" required>{{$a_en}}</textarea><br>
                                    @php $count2 = $count2+1; @endphp
                                    @endforeach
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>لماذا إعمار</label>
                                    <textarea rows="5" name="why_ar" class="form-control" required>{{$contact->why_ar}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Why Eamaar</label>
                                    <textarea rows="5" name="why_en" class="form-control" required>{{$contact->why_en}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    @php
                                    $block1_ar = json_decode($contact->block1_ar);
                                    $count3 = 1;
                                    @endphp
                                    <label>عن اعمار</label>
                                    @foreach((array)$block1_ar as $b1_ar)
                                    <textarea rows="6" name="b1_ar{{$count3}}" class="form-control" required>{{$b1_ar}}</textarea><br>
                                    @php $count3 = $count3+1; @endphp
                                    @endforeach
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    @php
                                    $block1_en = json_decode($contact->block1_en);
                                    $count4 = 1;
                                    @endphp
                                    <label>About Eamaar</label>
                                    @foreach((array)$block1_en as $b1_en)
                                    <textarea rows="6" name="b1_en{{$count4}}" class="form-control" required>{{$b1_en}}</textarea><br>
                                    @php $count4 = $count4+1; @endphp
                                    @endforeach
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    @php
                                    $block2_ar = json_decode($contact->block2_ar);
                                    $count5 = 1;
                                    @endphp
                                    <label>عن اعمار</label>
                                    @foreach((array)$block2_ar as $b2_ar)
                                    <textarea rows="6" name="b2_ar{{$count5}}" class="form-control" required>{{$b2_ar}}</textarea><br>
                                    @php $count5 = $count5+1; @endphp
                                    @endforeach
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    @php
                                    $block2_en = json_decode($contact->block2_en);
                                    $count6 = 1;
                                    @endphp
                                    <label>About Eamaar</label>
                                    @foreach((array)$block2_en as $b2_en)
                                    <textarea rows="6" name="b2_en{{$count6}}" class="form-control" required>{{$b2_en}}</textarea><br>
                                    @php $count6 = $count6+1; @endphp
                                    @endforeach
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    @php
                                    $block3_ar = json_decode($contact->block3_ar);
                                    $count7 = 1;
                                    @endphp
                                    <label>عن اعمار</label>
                                    @foreach((array)$block3_ar as $b3_ar)
                                    <textarea rows="6" name="b3_ar{{$count7}}" class="form-control" required>{{$b3_ar}}</textarea><br>
                                    @php $count7 = $count7+1; @endphp
                                    @endforeach
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    @php
                                    $block3_en = json_decode($contact->block3_en);
                                    $count8 = 1;
                                    @endphp
                                    <label>About Eamaar</label>
                                    @foreach((array)$block3_en as $b3_en)
                                    <textarea rows="6" name="b3_en{{$count8}}" class="form-control" required>{{$b3_en}}</textarea><br>
                                    @php $count8 = $count8+1; @endphp
                                    @endforeach
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    @php
                                    $block4_ar = json_decode($contact->block4_ar);
                                    $count9 = 1;
                                    @endphp
                                    <label>عن اعمار</label>
                                    @foreach((array)$block4_ar as $b4_ar)
                                    <textarea rows="6" name="b4_ar{{$count9}}" class="form-control" required>{{$b4_ar}}</textarea><br>
                                    @php $count9 = $count9+1; @endphp
                                    @endforeach
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    @php
                                    $block4_en = json_decode($contact->block4_en);
                                    $count10 = 1;
                                    @endphp
                                    <label>About Eamaar</label>
                                    @foreach((array)$block4_en as $b4_en)
                                    <textarea rows="6" name="b4_en{{$count10}}" class="form-control" required>{{$b4_en}}</textarea><br>
                                    @php $count10 = $count10+1; @endphp
                                    @endforeach
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>قصص النجاح</label>
                                    <textarea rows="5" name="stories_ar" class="form-control" required>{{$contact->stories_ar}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Stories</label>
                                    <textarea rows="5" name="stories_en" class="form-control" required>{{$contact->stories_en}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>العملاء</label>
                                    <textarea rows="5" name="clients_ar" class="form-control" required>{{$contact->clients_ar}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Clients</label>
                                    <textarea rows="5" name="clients_en" class="form-control" required>{{$contact->clients_en}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>الخدمات</label>
                                    <textarea rows="5" name="services_ar" class="form-control" required>{{$contact->services_ar}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Services</label>
                                    <textarea rows="5" name="services_en" class="form-control" required>{{$contact->services_en}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>المشاريع</label>
                                    <textarea rows="5" name="projects_ar" class="form-control" required>{{$contact->projects_ar}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Projects</label>
                                    <textarea rows="5" name="projects_en" class="form-control" required>{{$contact->projects_en}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>اتصل بنا</label>
                                    <textarea rows="5" name="contact_ar" class="form-control" required>{{$contact->contact_ar}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Contact Us</label>
                                    <textarea rows="5" name="contact_en" class="form-control" required>{{$contact->contact_en}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    <label>اشترك معنا</label>
                                    <textarea rows="5" name="subscribe_ar" class="form-control" required>{{$contact->subscribe_ar}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    <label>Subscribe with us</label>
                                    <textarea rows="5" name="subscribe_en" class="form-control" required>{{$contact->subscribe_en}}</textarea>
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group ar">
                                    @php
                                    $team_ar = json_decode($contact->team_ar);
                                    $count11 = 1;
                                    @endphp
                                    <label>فريق العمل</label>
                                    @foreach((array)$team_ar as $t_ar)
                                    <textarea rows="6" name="t_ar{{$count11}}" class="form-control" required>{{$t_ar}}</textarea><br>
                                    @php $count11 = $count11+1; @endphp
                                    @endforeach
                                </div><!-- End Form-Group -->
                            </div><!-- End col -->
                            <div class="col-md-6">
                                <div class="form-group en">
                                    @php
                                    $team_en = json_decode($contact->team_en);
                                    $count12 = 1;
                                    @endphp
                                    <label>Team</label>
                                    @foreach((array)$team_en as $t_en)
                                    <textarea rows="6" name="t_en{{$count12}}" class="form-control" required>{{$t_en}}</textarea><br>
                                    @php $count12 = $count12+1; @endphp
                                    @endforeach
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