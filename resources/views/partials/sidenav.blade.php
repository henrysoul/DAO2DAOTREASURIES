<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="@yield('dashboard')">
                    <a href="{{route('dashboard')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                @if(Auth::user()->is_admin==1)
                <li class="@yield('users')">
                    <a href="{{route('users')}}"><i class="menu-icon fa fa-user"></i>Users </a>
                </li>
                @endif
                <li class="menu-item-has-children dropdown @yield('components')">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Components</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-bars"></i><a href="{{route('header_components')}}">Header</a></li>
                        <li><i class="fa  fa-credit-card"></i><a href="{{route('card_components')}}">Cards</a></li>
                        <li><i class="fa  fa-clock-o"></i><a href="{{route('live_components')}}">Live</a></li>
                        <li><i class="fa fa-table"></i><a href="{{route('table_components')}}">Table</a></li>
                        <li><i class="fa fa-table"></i><a href="{{route('header_info')}}">Table header info</a></li>
                    </ul>
                </li>


            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>