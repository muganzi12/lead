@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
@if (Auth::check())

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

             

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>

            
            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('quickadmin.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('role_access')
                <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('quickadmin.roles.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('user_access')
                <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('quickadmin.users.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
     

            <li class="{{ $request->segment(2) == 'subscriptions' ? 'active' : '' }}">
                <a href="{{ route('employee-management.index') }}">
                    <i class="fa fa-user"></i>
                    <span class="title">Individual Membership</span>
                </a>
            </li>
              
            <li class="{{ $request->segment(2) == 'subscriptions' ? 'active' : '' }}">
                <a href="{{ route('membership.index') }}">
                    <i class="fa fa-user"></i>
                    <span class="title">Institutional Membership</span>
                </a>
            </li>

           
            
            <li class="{{ $request->segment(2) == 'subscriptions' ? 'active' : '' }}">
                <a href="{{ route('events.index') }}">
                    <i class="fa fa-credit-card"></i>
                    <span class="title">Events</span>
                </a>
            </li>

           

            @endcan
            @can('folder_access')
            <li class="{{ $request->segment(2) == 'folders' ? 'active' : '' }}">
                <a href="{{ route('admin.folders.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('quickadmin.folders.title')</span>
                </a>
            </li>
            @endcan
<!--             
            @can('file_access')
            <li class="{{ $request->segment(2) == 'files' ? 'active' : '' }}">
                <a href="{{ route('admin.files.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('quickadmin.files.title')</span>
                </a>
            </li>
            @endcan -->


            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
@end if
  @else
  
@endif
