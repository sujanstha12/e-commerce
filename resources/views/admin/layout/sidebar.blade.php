<nav id="sidebar">
    <div class="sidebar_blog_1">
        <div class="sidebar-header">
            <div class="logo_section">
                <a href="index.html"><img class="logo_icon img-responsive"
                        src="{{ asset('assets/images/logo/logo_icon.png') }}g" alt="#" /></a>
            </div>
        </div>
        <div class="sidebar_user_info">
            <div class="icon_setting"></div>
            <div class="user_profle_side">
                <div class="user_img">
                    @if (Auth::user()->image == null)
                        <img class="img-responsive"
                            src="https://th.bing.com/th/id/OIP.BsKfLXkkyMCwANx4vRz8SgHaHa?w=200&h=200&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                            alt="#" />
                    @else
                        <img class="img-responsive" src="{{ Auth::user()->image }}" alt="{{ Auth::user()->name }}" />
                    @endif
                </div>
                <div class="user_info">
                    <h6>{{ Auth::user()->name }}</h6>
                    <p><span class="online_animation"></span> Online</p>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar_blog_2">
        <h4>General</h4>
        <ul class="list-unstyled components">


            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-table purple_color2"></i>
                    <span>Dashboard</span></a></li>



                            <li>
                                <a href="{{ route('admin.systemSetting.index') }}">
                                    <i class="fa fa-rocket red_color"></i>
                                    <span>System Setting</span></a>
                                </li>



            <li>
                <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                        class="fa fa-diamond purple_color"></i> <span>Products</span></a>
                <ul class="collapse list-unstyled" id="element">
                    <li>
                        <a href="{{ route('admin.category.index') }}">
                            <i class="fa fa-paper-plane red_color"></i> <span>Category</span></a>
                    </li>

                    <li><a href="{{ route('admin.product.index') }}"><i class="fa fa-briefcase blue1_color"></i>
                            <span>ProductsList</span></a></li>



                </ul>
            </li>
            <li><a href="{{ route('admin.about.index') }}"><i class="fa fa-table purple_color2"></i>
                    <span>About</span></a></li>

            <li><a href="{{ route('admin.feature.index') }}"><i class="fa fa-briefcase blue1_color"></i>
                    <span>Features</span></a></li>


            <li>
                <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                        class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
                <ul class="collapse list-unstyled" id="apps">
                    <li><a href="email.html">> <span>Email</span></a></li>
                    <li><a href="calendar.html">> <span>Calendar</span></a></li>
                    <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                </ul>
            </li>
            <li class="active">
                <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                        class="fa fa-clone yellow_color"></i> <span>Additional Pages</span></a>
                <ul class="collapse list-unstyled" id="additional_page">
                    <li>
                        <a href="profile.html">> <span>Profile</span></a>
                    </li>
                    <li>
                        <a href="project.html">> <span>Projects</span></a>
                    </li>
                    <li>
                        <a href="login.html">> <span>Login</span></a>
                    </li>
                    <li>
                        <a href="404_error.html">> <span>404 Error</span></a>
                    </li>
                </ul>
            </li>
            <li><a href="map.html"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
            <li><a href="charts.html"><i class="fa fa-bar-chart-o green_color"></i> <span>Charts</span></a></li>
            <li><a href="settings.html"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a></li>
        </ul>
    </div>
</nav>
