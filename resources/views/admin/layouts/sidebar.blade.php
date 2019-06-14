<aside class="main-sidebar">
                <!-- Logo -->
                <a href="{{route('admin.home')}}" class="logo">
                  <!-- mini logo for sidebar mini 50x50 pixels -->
                    <img class="logo-mini" src="{{asset('assets/admin/images/logo.png')}}">
                  <!-- logo for regular state and mobile devices -->
                    <img class="logo-lg" src="{{asset('assets/admin/images/logo.png')}}">
                </a>
                <ul class="sidebar-links">
                    <li class="@if(Request::route()->getName() == 'admin.home') {{'active'}} @endif">
                        <a href="{{route('admin.home')}}">
                            <i class="fa fa-dashboard"></i>
                            <span>الرئيسية</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-newspaper-o"></i>
                            <span>صفحات الموقع</span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="@if(Request::route()->getName() == 'admin.slider') {{'active'}} @endif">
                                <a href="{{route('admin.slider')}}">
                                    <span>الإسلايد شو</span>
                                </a>
                            </li>
                            <li class="@if(Request::route()->getName() == 'admin.services') {{'active'}} @endif">
                                <a href="{{route('admin.services')}}">
                                    <span>الخدمات</span>
                                </a>
                            </li>
                            <li class="@if(Request::route()->getName() == 'admin.projects') {{'active'}} @endif">
                                <a href="{{route('admin.projects')}}">
                                    <span>المشاريع</span>
                                </a>
                            </li>
                            <li class="@if(Request::route()->getName() == 'admin.project.gallery') {{'active'}} @endif">
                                <a href="{{route('admin.project.gallery')}}">
                                    <span>معرض صور المشاريع</span>
                                </a>
                            </li>
                            <li class="@if(Request::route()->getName() == 'admin.clients') {{'active'}} @endif">
                                <a href="{{route('admin.clients')}}">
                                    <span>العملاء</span>
                                </a>
                            </li>
                            <li class="@if(Request::route()->getName() == 'admin.team') {{'active'}} @endif">
                                <a href="{{route('admin.team')}}">
                                    <span>فريق العمل</span>
                                </a>
                            </li>
                            <li class="@if(Request::route()->getName() == 'admin.data') {{'active'}} @endif">
                                <a href="{{route('admin.data')}}">
                                    <span>البيانات الثابتة</span>
                                </a>
                            </li>
                            <li class="@if(Request::route()->getName() == 'admin.stories') {{'active'}} @endif">
                                <a href="{{route('admin.stories')}}">
                                    <span>قصص النجاح</span>
                                </a>
                            </li>
                        </ul><!--End Level-one-tree-->
                    </li>                  
                    <li class="@if(Request::route()->getName() == 'admin.message') {{'active'}} @endif">
                        <a href="{{ route('admin.message') }}">
                            <i class="fa fa-envelope-open"></i>
                            <span>الرسائل</span>
                        </a>
                    </li>
                    <li class="@if(Request::route()->getName() == 'admin.contacts') {{'active'}} @endif">
                        <a href="{{ route('admin.contacts') }}">
                            <i class="fa fa-dashboard"></i>
                            <span>بيانات الموقع</span>
                        </a>
                    </li>
                    <li class="@if(Request::route()->getName() == 'admin.users') {{'active'}} @endif">
                        <a href="{{ route('admin.users') }}">
                            <i class="fa fa-cubes"></i>
                            <span>المستخدمين</span>
                        </a>
                    </li>
                    <li class="@if(Request::route()->getName() == 'admin.subscribers') {{'active'}} @endif">
                        <a href="{{ route('admin.subscribers') }}">
                            <i class="fa fa-envelope-open"></i>
                            <span>المشتركين</span>
                        </a>
                    </li>
                </ul><!--End sidebar-->
            </aside><!--End Main-aside-->
