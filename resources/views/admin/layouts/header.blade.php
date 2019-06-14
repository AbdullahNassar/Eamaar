<header class="main-header">
                <button class="btn btn-responsive-nav" >
                    <i class="fa fa-bars"></i>
                </button>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                              <img src="{{asset('assets/admin/images/avatar.jpg')}}" class="user-image" alt="User Image">
                              <span>{{Auth::guard('admins')->user()->username}}</span>
                            </a>
                            <ul class="dropdown-menu">
                              <!-- User image -->
                                <li class="user-header">
                                    <img src="{{asset('assets/admin/images/avatar.jpg')}}" class="img-circle">
                                    <p>{{Auth::guard('admins')->user()->username}}</p>
                                </li><!--End User-header-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                      <a href="{{route('admin.home')}}" class="dropdown-btn">حسابى</a>
                                    </div>
                                    <div class="pull-right">
                                      <a href="{{route('admin.logout')}}" class="dropdown-btn">خروج</a>
                                    </div>
                                </li><!--End User-footer-->
                            </ul><!--Enddropdown-menu-->
                        </li><!--End user-menu-->
                    </ul>
                </div><!--End search-head--> 
            </header><!--End main-Header-->