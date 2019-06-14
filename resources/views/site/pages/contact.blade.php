@extends('site.layouts.master')
@section('content')
                <div class="page-head">
                    <div class="container">
                        <h2 class="page-head-title">
                            @if (Config::get('app.locale') == 'ar') تواصل معنا @else Contact Us @endif
                        </h2>
                        <ol class="breadcrumb">
                            <li><a href="{{URL::to('/')}}">@if (Config::get('app.locale') == 'ar') الرئيسية @else Home @endif</a></li>
                            <li class="active">@if (Config::get('app.locale') == 'ar') تواصل معنا @else Contact Us @endif</li>
                        </ol>
                    </div><!--End Container-->
                </div><!-- End Page-Head -->
                <div class="page-content">
                    <section class="section-lg contact">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="section-head">
                                        <h3 class="section-title no-before">@if (Config::get('app.locale') == 'ar') تواصل معنا @else Contact Us @endif</h3><!-- End Section-Title -->
                                        <p>
                                            @if (Config::get('app.locale') == 'ar') {{$data->get('contact_ar')}} @else {{$data->get('contact_en')}} @endif
                                        </p>
                                    </div><!-- End Section-Head -->
                                </div><!-- End col -->
                            </div><!-- End row -->
                            <div class="section-content">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <form class="form" method="post" action="{{URL::to('/send')}}">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="first_name" class="form-control" placeholder="@if (Config::get('app.locale') == 'ar') الاسم الاول @else First Name @endif" required>
                                                    </div><!-- End Form-Group -->
                                                </div><!-- End col -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="last_name" class="form-control" placeholder="@if (Config::get('app.locale') == 'ar') الاسم الاخير @else Last Name @endif" required>
                                                    </div><!-- End Form-Group -->
                                                </div><!-- End col -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-control" placeholder="@if (Config::get('app.locale') == 'ar') البريد الالكتروني @else E-mail Address @endif" required>
                                                    </div><!-- End Form-Group -->
                                                </div><!-- End col -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="tel" name="phone" class="form-control" placeholder="@if (Config::get('app.locale') == 'ar') رقم الهاتف @else Phone Number @endif" required>
                                                    </div><!-- End Form-Group -->
                                                </div><!-- End col -->
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" placeholder="@if (Config::get('app.locale') == 'ar') اكتب رسالتك @else Write Message @endif" rows="8" required></textarea>
                                                    </div><!-- End Form-Group -->
                                                </div><!-- End col -->
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="custom-btn">@if (Config::get('app.locale') == 'ar') ارســــــــــــــال @else Send @endif</button>
                                                    </div><!-- End Form-Group -->
                                                </div><!-- End col -->
                                            </div><!-- End row -->
                                        </form>
                                    </div><!-- End col-->
                                    <div class="col-lg-4">
                                        <div class="contact-info">
                                            <div class="contact-widget has-bg">
                                                <div class="contact-icon">
                                                    <img src="{{asset('assets/site/images/contact-icon-1.png')}}" alt="">
                                                </div><!-- End Contact-Widget-Head -->
                                                <div class="contact-body">
                                                    <span> @if (Config::get('app.locale') == 'ar') الهاتف : @else Phone : @endif</span>
                                                    <span>{{$contact->get('phone')}}</span>
                                                </div><!-- End Contact-Body -->
                                            </div><!-- End Contact-Widget -->
                                            <div class="contact-widget has-bg">
                                                <div class="contact-icon">
                                                    <img src="{{asset('assets/site/images/contact-icon-2.png')}}" alt="">
                                                </div><!-- End Contact-Widget-Head -->
                                                <div class="contact-body">
                                                    <span>@if (Config::get('app.locale') == 'ar') البريد الالكتروني : @else E-mail : @endif</span>
                                                    <span>{{$contact->get('email')}}</span>
                                                </div><!-- End Contact-Body -->
                                            </div><!-- End Contact-Widget -->
                                            <div class="contact-widget has-bg">
                                                <div class="contact-icon">
                                                    <img src="{{asset('assets/site/images/contact-icon-3.png')}}" alt="">
                                                </div><!-- End Contact-Widget-Head -->
                                                <div class="contact-body">
                                                    <span>@if (Config::get('app.locale') == 'ar') العنوان : @else Address : @endif</span>
                                                    <span>@if (Config::get('app.locale') == 'ar') {{$contact->get('address')}} @else {{$contact->get('address_en')}} @endif</span>
                                                </div><!-- End Contact-Body -->
                                            </div><!-- End Contact-Widget -->
                                        </div><!-- End Contact-Info -->
                                    </div><!-- End col-->
                                </div><!-- End row -->
                            </div><!-- End Section-Content -->
                        </div><!-- End container -->
                    </section><!-- End Section -->

@endsection