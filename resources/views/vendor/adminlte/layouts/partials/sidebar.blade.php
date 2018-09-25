<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header"> {{ trans('adminlte_lang::message.header') }} </li>
           
            <li {{{ (Request::is('home') ? 'class=active' : '') }}} >
                    <a href="{{ url('home') }}">
                        <i class='fa fa-dashboard '></i> 
                        <span>{{ trans('adminlte_lang::message.home') }}</span>
                    </a>
            </li>
            <li {{{ (Request::is('encomendas') ? 'class=active' : '') }}} |
                {{{ (Request::is('encomendas/*') ? 'class=active' : '') }}}
                {{{ (Request::is('encomendas/*/*') ? 'class=active' : '') }}}>
                    <a href="{{ url('#') }}">
                        <i class='fa fa-users'></i> 
                        <span>Jovens</span>
                    </a>
            </li>
            <li {{{ (Request::is('matriz') ? 'class=active' : '') }}} |
                {{{ (Request::is('matriz/*') ? 'class=active' : '') }}}
                {{{ (Request::is('matriz/*/*') ? 'class=active' : '') }}}>
                <a href="{{ url('#') }}">
                    <i class='fa fa-users'></i> 
                    <span>Líderes</span>
                </a>
            </li>  
            <li>
                <a href="{{ url('#') }}">
                    <i class='fa  fa-home'></i> 
                    <span>Igrejas</span>
                </a>
            </li>  
            <li {{ (Request::is('jovens')  ? 'class=active' : '')}}>
                <a href="#">
                    <i class="fa fa-calendar"></i> 
                    <span>Eventos</span> 
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li  {{ (Request::is('jovens')  ? 'class=active' : '')}}>
                        <a href="{{ route('jovens.index') }}"> <i class='fa fa-book'></i> 
                            <span> I Capacitar</span>
                        </a>
                    </li>  
                </ul>               
            </li> 
            <li {{{ (Request::is('manage/users/*/*') ? 'class=active' : '')|
            (Request::is('manage/users/*') ? 'class=active' : '') |
            (Request::is('manage/users') ? 'class=active' : '') }}}>
        <a href="{{ url('#') }}"> <i class='fa fa-calendar'></i> 
            <span> Calendário UMADEB</span>
        </a>
    </li>  
            <li>
                <a href="{{ url('#') }}">
                    <i class='fa fa-area-chart'></i> 
                    <span>Relatórios</span>
                </a>
            </li>
        </ul>
    </section>
</aside>