
                <footer class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="footer-logo">
                                    <a href="{{URL::to('/')}}">
                                        <img src="{{asset('assets/site/images/footer-logo.png')}}" alt="logo-img">
                                    </a>
                                </div><!-- End Footer-Widget -->
                            </div><!-- End col -->
                            <div class="col-lg-2 col-md-6">
                                <div class="contact-widget">
                                    <div class="contact-icon">
                                        <i class="fa fa-phone"></i>
                                    </div><!-- End Contact-Widget-Head -->
                                    <div class="contact-body">
                                        <span> @if (Config::get('app.locale') == 'ar') الهاتف : @else Phone : @endif</span>
                                        <span>{{$contact->get('phone')}}</span>
                                    </div><!-- End Contact-Body -->
                                </div><!-- End Contact-Widget -->
                            </div><!-- End col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="contact-widget">
                                    <div class="contact-icon">
                                        <i class="fa fa-envelope"></i>
                                    </div><!-- End Contact-Widget-Head -->
                                    <div class="contact-body">
                                        <span>@if (Config::get('app.locale') == 'ar') البريد الالكتروني : @else E-mail : @endif</span>
                                        <span>{{$contact->get('email')}}</span>
                                    </div><!-- End Contact-Body -->
                                </div><!-- End Contact-Widget -->
                            </div><!-- End col -->
                            <div class="col-lg-4 col-md-6">
                                <div class="contact-widget">
                                    <div class="contact-icon">
                                        <i class="fa fa-map-marker"></i>
                                    </div><!-- End Contact-Widget-Head -->
                                    <div class="contact-body">
                                        <span>@if (Config::get('app.locale') == 'ar') العنوان : @else Address : @endif</span>
                                        <span>@if (Config::get('app.locale') == 'ar') {{$contact->get('address')}} @else {{$contact->get('address_en')}} @endif</span>
                                    </div><!-- End Contact-Body -->
                                </div><!-- End Contact-Widget -->
                            </div><!-- End col -->
                        </div><!-- End row -->
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="footer-widget">
                                    <div class="widget-head">
                                        <h3 class="title">@if (Config::get('app.locale') == 'ar') عن الشركة @else About Company @endif</h3>
                                    </div><!-- End Widget-Head -->
                                    <div class="widget-content">
                                        <p>
                                            @if (Config::get('app.locale') == 'ar') {{$data->get('why_ar')}} @else {{$data->get('why_en')}} @endif
                                        </p>
                                        <ul class="social-list">
                                            <li>
                                                <a href="{{$contact->get('youtube')}}">
                                                    <i class="fa fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{$contact->get('instagram')}}">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{$contact->get('google')}}">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{$contact->get('twitter')}}">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{$contact->get('facebook')}}">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- End Widget-Content -->
                                </div>
                            </div><!-- End col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="footer-widget">
                                    <div class="widget-head">
                                    <h3 class="title">@if (Config::get('app.locale') == 'ar') روابط سريعة @else Fast Links @endif</h3>
                                </div><!-- End Widget-Head -->
                                <div class="widget-content">
                                    <ul class="important-links second-list">
                                        <li><a href="{{URL::to('/')}}">{{trans('app.home')}}</a></li>
                                        <li><a href="{{URL::to('/about')}}">{{trans('app.about')}}</a></li>
                                        <li><a href="{{URL::to('/team')}}">{{trans('app.team')}}</a></li>
                                        <li><a href="{{URL::to('/services')}}">{{trans('app.services')}}</a></li>
                                        <li><a href="{{URL::to('/projects')}}">{{trans('app.projects')}}</a></li>
                                        <li><a href="{{URL::to('/contact')}}">{{trans('app.contact')}}</a></li>
                                    </ul><!-- End Important-links -->
                                </div><!-- End Widget-Content -->
                                </div>
                            </div><!-- End col -->
                            <div class="col-lg-6 col-md-6 subscribe">
                                <div class="footer-widget">
                                    <div class="widget-head">
                                        <h3 class="title">@if (Config::get('app.locale') == 'ar') النشرة البريدية @else Contact Us @endif</h3>
                                    </div><!-- End Widget-Head -->
                                    <div class="widget-content">
                                        <p>
                                            @if (Config::get('app.locale') == 'ar') {{$data->get('subscribe_ar')}} @else {{$data->get('subscribe_en')}} @endif
                                        </p>
                                        <form class="subscribe-form" method="post" id="subscriber" action="{{URL::to('/subscribe')}}">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <input type="email" name="subscribe" class="form-control" placeholder="@if (Config::get('app.locale') == 'ar') ادخل بريدك الالكتروني @else Enter Your E-mail @endif" required>
                                        <button class="custom-btn">@if (Config::get('app.locale') == 'ar') اشترك @else Subscribe @endif</button>
                                            </div><!--End Form-group-->
                                        </form>
                                    </div><!-- End Widget-Content -->
                                </div>
                            </div><!-- End col -->
                        </div><!-- End row -->
                    </div><!-- End container -->
                </footer><!-- End Footer -->
                <div class="copy-right">
                    <div class="container">
                        <div class="float-right">
                            © All Rights Reserved <a href="{{URL::to('/')}}">Eamaar Contracting</a>
                        </div>
                        <div class="float-left">
                            Design and Developed By <a href="http://upureka.com/">Upureka</a>
                        </div>
                    </div><!-- End container -->
                </div><!--End Copy-Right -->
