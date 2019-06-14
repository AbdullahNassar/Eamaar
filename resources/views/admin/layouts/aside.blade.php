<aside class="main-sidebar">
    <!-- Logo -->
    <a href="{{route('admin.home')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <img class="logo-mini" src="{{asset('assets/admin/images/logo.png')}}">
        <!-- logo for regular state and mobile devices -->
        <img class="logo-lg" src="{{asset('assets/admin/images/logo.png')}}">
    </a>
    <ul class="sidebar-links">
        <li  class="@if(Route::currentRouteName()=='admin.home') active @endif">
            <a href="{{route('admin.home')}}">
                <i class="fa fa-dashboard"></i>
                <span>لوحة التحكم</span>
            </a>
        </li>
        <li  class="@if(Route::currentRouteName()=='admin.slider.index') active @endif">
            <a href="{{route('admin.slider.index')}}">
                <i class="fa fa-picture-o"></i>
                <span>الإسلايدر</span>
            </a>
        </li>

        <li  class="@if(Route::currentRouteName()=='admin.message') active @endif">
            <a href="{{route('admin.message')}}">
                <i class="fa fa-comments"></i>
                <span>الرسائل</span>
            </a>
        </li>
        <li  class="@if(Route::currentRouteName()=='admin.reservation') active @endif">
            <a href="{{route('admin.reservation')}}">
                <i class="fa fa-bar-chart"></i>
                <span>الحجوزات</span>
            </a>
        </li>
        <li  class="@if(Route::currentRouteName()=='admin.services.index') active @endif">
            <a href="{{route('admin.services.index')}}">
                <i class="fa fa-table"></i>
                <span>الخدمات</span>
            </a>
        </li>
        <li class="@if(Route::currentRouteName()=='admin.packages.index') active @endif">
            <a href="{{route('admin.packages.index')}}">
                <i class="fa fa-cubes"></i>
                <span>الباقات</span>
            </a>
        </li>
        <li class="@if(Route::currentRouteName()=='admin.programmes') active @endif">
            <a href="{{route('admin.programmes')}}">
                <i class="fa fa-cubes"></i>
                <span>البرامج</span>
            </a>
        </li>
        <li class="@if(Route::currentRouteName()=='admin.about') active @endif">
            <a href="{{route('admin.about')}}">
                <i class="fa fa-cubes"></i>
                <span>من نحن</span>
            </a>
        </li>
        <li class="@if(Route::currentRouteName()=='admin.contact') active @endif">
            <a href="{{route('admin.contact')}}">
                <i class="fa fa-cubes"></i>
                <span>اتصل بنا</span>
            </a>
        </li>
    </ul><!--End sidebar-->
</aside><!--End Main-aside-->