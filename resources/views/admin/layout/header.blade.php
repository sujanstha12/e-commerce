<div class="topbar">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="full">
            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
            <div class="logo_section">
                <a href="index.html"><img class="img-responsive"
                        src="https://ts4.mm.bing.net/th?id=OIP.GbqAwWlDaiHQc1_NQS59kwHaHa&pid=15.1"
                        alt="#" /></a>
            </div>
            <div class="right_topbar">
                <div class="icon_info">
                    <ul>
                        <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                        <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                    </ul>
                    <ul class="user_profile_dd">
                        <li>
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                @if (Auth::user()->image == null)
                                    <img class="img-responsive rounded-circle"
                                        src="https://th.bing.com/th/id/OIP.BsKfLXkkyMCwANx4vRz8SgHaHa?w=200&h=200&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                                        alt="#" />
                                @else
                                    <img class="img-responsive rounded-circle" src="{{ Auth::user()->image }}"
                                        alt="{{ Auth::user()->name }}" />
                                @endif
                                <span class="name_user">{{ Auth::user()->name }}</span>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('admin.profile') }}">My Profile</a>
                                <a class="dropdown-item" href="">Settings</a>
                                <a class="dropdown-item" href="help.html">Help</a>

                                <form action="{{ route('admin.profile.logout') }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="dropdown-item">Log Out</button>


                                </form>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
