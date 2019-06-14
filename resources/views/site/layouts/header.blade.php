             
                <div class="top-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="head-contact d-none d-lg-block">
                                    <ul class="contact-list">
                                        <li>
                                            <span> @if (Config::get('app.locale') == 'ar') الهاتف : @else Phone : @endif</span>
                                            <span>
                                                <i class="fa fa-phone"></i>
                                            </span>
                                            <span class="num">{{$contact->get('phone')}}</span>
                                        </li>
                                        <li>
                                            <span>@if (Config::get('app.locale') == 'ar') البريد الالكتروني : @else E-mail : @endif</span>
                                            <span>
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                            <span>{{$contact->get('email')}}</span>
                                        </li>
                                    </ul><!-- End Contact-List -->
                                </div><!-- End Head-Contact -->
                            </div><!-- End col -->
                            <div class="col-lg-3">
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
                                    <li>
                                    @if (Config::get('app.locale') == 'en')
                                    <a href="{{route('site.lang','ar')}}" class="langSwitch" data-lang="ar" title="Arabic">
                                        <i class="fa fa-language"></i>
                                    </a>
                                    @else
                                    <a href="{{route('site.lang','en')}}" class="langSwitch" data-lang="en" title="English">
                                        <i class="fa fa-language"></i>
                                    </a>
                                    @endif
                                {{ csrf_field() }}
                                </li>
                                </ul><!-- End Social-List -->
                            </div><!-- End col -->
                        </div><!-- End row -->
                    </div><!-- End container -->
                </div><!-- End Top-Header -->
                <div class="container">
                    <a href="{{URL::to('/')}}" class="logo">
                        <img src="{{asset('assets/site/images/logo.png')}}" alt="logo-img">
                    </a>
                    <button class="btn btn-responsive-nav" data-toggle="collapse" data-target="#nav-main">
                        <i class="fa fa-bars"></i>
                    </button>
                </div><!-- End container-->
                <nav class="navbar navbar-expand-lg">
                    <div class="container">
                        <div class="collapse navbar-collapse" id="nav-main">
                            <ul class="navbar-nav">
                                <li class="nav-item @if(Route::currentRouteName()=='site.home') active @endif"><a class="nav-link" href="{{URL::to('/')}}">{{trans('app.home')}}</a></li>
                                <li class="nav-item @if(Route::currentRouteName()=='site.about') active @endif"><a class="nav-link" href="{{URL::to('/about')}}">{{trans('app.about')}}</a></li>
                                <li class="nav-item @if(Route::currentRouteName()=='site.team') active @endif"><a class="nav-link" href="{{URL::to('/team')}}">{{trans('app.team')}}</a></li>
                                <li class="nav-item @if(Route::currentRouteName()=='site.services') active @endif"><a class="nav-link" href="{{URL::to('/services')}}">{{trans('app.services')}}</a></li>
                                <li class="nav-item @if(Route::currentRouteName()=='site.projects') active @endif"><a class="nav-link" href="{{URL::to('/projects')}}">{{trans('app.projects')}}</a></li>
                                <li class="nav-item @if(Route::currentRouteName()=='site.contact') active @endif"><a class="nav-link" href="{{URL::to('/contact')}}">{{trans('app.contact')}}</a></li>
                            </ul>
                            <div class="dropdown search-head">
                                <button class="dropdown-toggle search-btn" type="button" id="search-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-search"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="search-menu">
                                    <form class="search-head-form">
                                        <input type="text" class="form-control" placeholder="@if (Config::get('app.locale') == 'ar') أبحث هنا... @else Search here... @endif">
                                        <button type="submit" class="custom-btn">@if (Config::get('app.locale') == 'ar') أبحث @else Search @endif</button>
                                    </form><!-- End Search-Head-Form -->
                                </div>
                            </div>
                        </div>
                    </div><!-- End container -->
                </nav>
