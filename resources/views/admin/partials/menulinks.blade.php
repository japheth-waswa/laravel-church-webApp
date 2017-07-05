<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- END SIDEBAR -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item start {{ Route::currentRouteName() == 'dashboard' ? 'active open' : '' }}">
                <a href="{{route('dashboard')}}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    @if(Route::currentRouteName() == 'dashboard')
                    <span class="selected"></span>
                    <span class="arrow "></span>
                    @endif
                </a>
            </li>
            <li class="nav-item  {{ Route::currentRouteName() == 'user.list' 
                || Route::currentRouteName() == 'user.edit'
                        || Route::currentRouteName() == 'user.create' ? 'active open' : '' }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title">Users</span>
                    @if(Route::currentRouteName() == 'user.list' || Route::currentRouteName() == 'user.create' || Route::currentRouteName() == 'user.edit')
                    <span class="selected"></span>
                    <span class="arrow "></span>
                    @endif
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  {{ Route::currentRouteName() == 'user.list' ? 'active' : '' }}">
                        <a href="{{route('user.list')}}" class="nav-link ">
                            <span class="title">All Users</span>
                        </a>
                    </li>
                    <li class="nav-item  {{ Route::currentRouteName() == 'user.create' ? 'active' : '' }}">
                        <a href="{{route('user.create')}}" class="nav-link ">
                            <span class="title">Add user</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  {{ Route::currentRouteName() == 'sermon.list' 
                || Route::currentRouteName() == 'sermon.edit'
                        || Route::currentRouteName() == 'sermon.create' ? 'active open' : '' }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Sermons</span>
                    @if(Route::currentRouteName() == 'sermon.list' || Route::currentRouteName() == 'sermon.create' || Route::currentRouteName() == 'sermon.edit')
                    <span class="selected"></span>
                    <span class="arrow "></span>
                    @endif
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  {{ Route::currentRouteName() == 'sermon.list' ? 'active' : '' }}">
                        <a href="{{route('sermon.list')}}" class="nav-link ">
                            <span class="title">All Sermons</span>
                        </a>
                    </li>
                    <li class="nav-item  {{ Route::currentRouteName() == 'sermon.create' ? 'active' : '' }}">
                        <a href="{{route('sermon.create')}}" class="nav-link ">
                            <span class="title">Add sermon</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  {{ Route::currentRouteName() == 'slider.list' 
                || Route::currentRouteName() == 'slider.edit'
                        || Route::currentRouteName() == 'slider.create' ? 'active open' : '' }} ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-puzzle"></i>
                    <span class="title">Sliders</span>
                    @if(Route::currentRouteName() == 'slider.list' || Route::currentRouteName() == 'slider.create' || Route::currentRouteName() == 'slider.edit')
                    <span class="selected"></span>
                    <span class="arrow "></span>
                    @endif
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  {{ Route::currentRouteName() == 'slider.list' ? 'active' : '' }}">
                        <a href="{{route('slider.list')}}" class="nav-link ">
                            <span class="title">Slider Items</span>
                        </a>
                    </li>
                    <li class="nav-item  {{ Route::currentRouteName() == 'slider.create' ? 'active' : '' }}">
                        <a href="{{route('slider.create')}}" class="nav-link ">
                            <span class="title">Add Slider</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ Route::currentRouteName() == 'staff.list' 
                || Route::currentRouteName() == 'staff.edit'
                        || Route::currentRouteName() == 'staff.create' ? 'active open' : '' }} ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-settings"></i>
                    <span class="title">Staff</span>
                    @if(Route::currentRouteName() == 'staff.list' || Route::currentRouteName() == 'staff.create' || Route::currentRouteName() == 'staff.edit')
                    <span class="selected"></span>
                    <span class="arrow "></span>
                    @endif
                </a>
                <ul class="sub-menu">
                    <li class="nav-item {{ Route::currentRouteName() == 'staff.list' ? 'active' : '' }}">
                        <a href="{{route('staff.list')}}" class="nav-link ">
                            <span class="title">All Staffs</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'staff.create' ? 'active' : '' }}">
                        <a href="{{route('staff.create')}}" class="nav-link ">
                            <span class="title">Add Staff</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ Route::currentRouteName() == 'donation.list' 
                || Route::currentRouteName() == 'donation.edit'
                        || Route::currentRouteName() == 'donation.create' ? 'active open' : '' }} ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-briefcase"></i>
                    <span class="title">Donations</span>
                    @if(Route::currentRouteName() == 'donation.list' || Route::currentRouteName() == 'donation.create' || Route::currentRouteName() == 'donation.edit')
                    <span class="selected"></span>
                    <span class="arrow "></span>
                    @endif
                </a>
                <ul class="sub-menu">
                    <li class="nav-item {{ Route::currentRouteName() == 'donation.list' ? 'active' : '' }}">
                        <a href="{{route('donation.list')}}" class="nav-link ">
                            <span class="title">Donation Items</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'donation.create' ? 'active' : '' }}">
                        <a href="{{route('donation.create')}}" class="nav-link ">
                            <span class="title">Add Donation Item</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ Route::currentRouteName() == 'congregation.list' 
                || Route::currentRouteName() == 'congregation.edit'
                        || Route::currentRouteName() == 'congregation.create' ? 'active open' : '' }} ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">Congregation</span>
                    @if(Route::currentRouteName() == 'congregation.list' || Route::currentRouteName() == 'congregation.create' || Route::currentRouteName() == 'congregation.edit')
                    <span class="selected"></span>
                    <span class="arrow "></span>
                    @endif
                </a>
                <ul class="sub-menu">
                    <li class="nav-item {{ Route::currentRouteName() == 'congregation.list' ? 'active' : '' }}">
                        <a href="{{route('congregation.list')}}" class="nav-link ">
                            <i class="icon-user"></i>
                            <span class="title">Entire Congregation</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'congregation.create' ? 'active' : '' }}">
                        <a href="{{route('congregation.create')}}" class="nav-link ">
                            <i class="icon-user-female"></i>
                            <span class="title">Add congregation</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ Route::currentRouteName() == 'sunday.list' 
                        || Route::currentRouteName() == 'sunday.edit'
                        || Route::currentRouteName() == 'sunday.create'
                        || Route::currentRouteName() == 'sunday.show'
                        || Route::currentRouteName() == 'sundaypage.edit'
                        || Route::currentRouteName() == 'sundaypage.create'? 'active open' : '' }} ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Schedules</span>
                    @if(Route::currentRouteName() == 'sunday.list' 
                    || Route::currentRouteName() == 'sunday.edit'
                    || Route::currentRouteName() == 'sunday.create'
                    || Route::currentRouteName() == 'sunday.show'
                    || Route::currentRouteName() == 'sundaypage.edit'
                    || Route::currentRouteName() == 'sundaypage.create')
                    <span class="selected"></span>
                    <span class="arrow "></span>
                    @endif
                </a>
                <ul class="sub-menu">
                    <li class="nav-item {{ Route::currentRouteName() == 'sunday.list' ? 'active' : '' }}">
                        <a href="{{route('sunday.list')}}" class="nav-link ">
                            <span class="title">All Schedules</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'sunday.create' ? 'active' : '' }}">
                        <a href="{{route('sunday.create')}}" class="nav-link ">
                            <span class="title">Add Schedule</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ Route::currentRouteName() == 'blog.list' 
                        || Route::currentRouteName() == 'blog.edit'
                        || Route::currentRouteName() == 'blog.create'
                        || Route::currentRouteName() == 'blogcategory.list'
                        || Route::currentRouteName() == 'blogcategory.edit'
                        || Route::currentRouteName() == 'blogcategory.create'? 'active open' : '' }} ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-wallet"></i>
                    <span class="title">Blog</span>
                    @if(Route::currentRouteName() == 'blog.list' 
                    || Route::currentRouteName() == 'blog.create' 
                    || Route::currentRouteName() == 'blog.edit'
                    || Route::currentRouteName() == 'blogcategory.list'
                    || Route::currentRouteName() == 'blogcategory.edit'
                    || Route::currentRouteName() == 'blogcategory.create')
                    <span class="selected"></span>
                    <span class="arrow "></span>
                    @endif
                </a>
                <ul class="sub-menu">
                    <li class="nav-item {{ Route::currentRouteName() == 'blog.list' ? 'active' : '' }}">
                        <a href="{{route('blog.list')}}" class="nav-link ">
                            <span class="title">Blog Items</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'blog.create' ? 'active' : '' }}">
                        <a href="{{route('blog.create')}}" class="nav-link ">
                            <span class="title">Add Blog</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'blogcategory.list' ? 'active' : '' }}">
                        <a href="{{route('blogcategory.list')}}" class="nav-link ">
                            <span class="title">Blog Categories</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'blogcategory.create' ? 'active' : '' }}">
                        <a href="{{route('blogcategory.create')}}" class="nav-link ">
                            <span class="title">Add Blog Category</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ Route::currentRouteName() == 'event.list' 
                        || Route::currentRouteName() == 'event.edit'
                        || Route::currentRouteName() == 'event.create'
                        || Route::currentRouteName() == 'eventcategory.list'
                        || Route::currentRouteName() == 'eventcategory.edit'
                        || Route::currentRouteName() == 'eventcategory.create' ? 'active open' : '' }} ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-layers"></i>
                    <span class="title">Events</span>
                    @if(Route::currentRouteName() == 'event.list' 
                    || Route::currentRouteName() == 'event.create'  
                    || Route::currentRouteName() == 'event.edit' 
                    || Route::currentRouteName() == 'eventcategory.list'
                    || Route::currentRouteName() == 'eventcategory.edit'
                    || Route::currentRouteName() == 'eventcategory.create')
                    <span class="selected"></span>
                    <span class="arrow "></span>
                    @endif
                </a>
                <ul class="sub-menu">
                    <li class="nav-item {{ Route::currentRouteName() == 'event.list' ? 'active' : '' }}">
                        <a href="{{route('event.list')}}" class="nav-link ">
                            <span class="title">Event Items</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'event.create' ? 'active' : '' }}">
                        <a href="{{route('event.create')}}" class="nav-link ">
                            <span class="title">Add Event</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'eventcategory.list' ? 'active' : '' }}">
                        <a href="{{route('eventcategory.list')}}" class="nav-link ">
                            <span class="title">Event Categories</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'eventcategory.create' ? 'active' : '' }}">
                        <a href="{{route('eventcategory.create')}}" class="nav-link ">
                            <span class="title">Add Event Category</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ Route::currentRouteName() == 'gallery.list' 
                        || Route::currentRouteName() == 'gallery.edit'
                        || Route::currentRouteName() == 'gallery.create' 
                        || Route::currentRouteName() == 'gallerycategory.list'
                        || Route::currentRouteName() == 'gallerycategory.edit'
                        || Route::currentRouteName() == 'gallerycategory.create' 
                        || Route::currentRouteName() == 'gallery.manageimages'? 'active open' : '' }} ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-docs"></i>
                    <span class="title">Gallery</span>
                    @if(Route::currentRouteName() == 'gallery.list' 
                    || Route::currentRouteName() == 'gallery.create'
                    || Route::currentRouteName() == 'gallery.edit' 
                    || Route::currentRouteName() == 'gallerycategory.list'
                    || Route::currentRouteName() == 'gallerycategory.edit'
                    || Route::currentRouteName() == 'gallerycategory.create'
                    || Route::currentRouteName() == 'gallery.manageimages' )
                    <span class="selected"></span>
                    <span class="arrow "></span>
                    @endif
                </a>
                <ul class="sub-menu">
                    <li class="nav-item {{ Route::currentRouteName() == 'gallery.list' ? 'active' : '' }}">
                        <a href="{{route('gallery.list')}}" class="nav-link ">
                            <span class="title">Gallery Items</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'gallery.create' ? 'active' : '' }}">
                        <a href="{{route('gallery.create')}}" class="nav-link ">
                            <span class="title">Add Gallery Item</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'gallerycategory.list' ? 'active' : '' }}">
                        <a href="{{route('gallerycategory.list')}}" class="nav-link ">
                            <span class="title">Gallery Categories</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'gallerycategory.create' ? 'active' : '' }}">
                        <a href="{{route('gallerycategory.create')}}" class="nav-link ">
                            <span class="title">Add Gallery Category</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ Route::currentRouteName() == 'settings.edit' ? 'active open' : '' }} ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-settings"></i>
                    <span class="title">System</span>
                    @if(Route::currentRouteName() == 'settings.edit')
                    <span class="selected"></span>
                    <span class="arrow "></span>
                    @endif
                </a>
                <ul class="sub-menu">
                    <li class="nav-item {{ Route::currentRouteName() == 'settings.edit' ? 'active' : '' }}">
                        <a href="{{route('settings.edit',1)}}" class="nav-link ">
                            <span class="title">Settings</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{route('homepage')}}" target="_blank"class="nav-link nav-toggle">
                    <i class="icon-globe"></i>
                    <span class="title">Website</span>
                </a>
            </li>

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->