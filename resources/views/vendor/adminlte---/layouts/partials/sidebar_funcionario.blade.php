<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header"> {{ trans('adminlte_lang::message.header') }} </li>

            <li {{{ (Request::is('home') ? 'class=active' : '') }}} >
                    <a href="{{ url('home') }}">
                        <i class='fa fa-home'></i> 
                        <span>{{ trans('adminlte_lang::message.home') }}</span>
                    </a>
            </li>
            <li {{{ (Request::is('encomendas') ? 'class=active' : '') }}} |
                {{{ (Request::is('encomendas/*') ? 'class=active' : '') }}}
                {{{ (Request::is('encomendas/*/*') ? 'class=active' : '') }}}>
                <a href="{{ url('#') }}">
                    <i class='fa fa-truck'></i> 
                    <span>Encomendas</span>
                </a>
            </li>  
        </ul>
    </section>
</aside>