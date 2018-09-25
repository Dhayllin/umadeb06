<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="{{ url('/home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>UMADED</b> Setor 06</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>UMADED</b> Setor 06 </span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">{{ trans('adminlte_lang::message.togglenav') }}</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">              
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">             
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="{{ url('/logout') }}" class="btn"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                     Sair
                    </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                         <input type="submit" value="logout" style="display: none;">
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</header>