<!-- Main Header -->
<header class="main-header">
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation"></nav>
    <li>
            <a href="{{ url('/logout') }}" class="btn"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ trans('adminlte_lang::message.signout') }}
            </a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                 <input type="submit" value="logout" style="display: none;">
            </form>
        </li>
</header>
