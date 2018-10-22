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
            <li {{{ (Request::is('users') ? 'class=active' : '') }}} |
                {{{ (Request::is('users/*') ? 'class=active' : '') }}}
                {{{ (Request::is('users/*/*') ? 'class=active' : '') }}}>
                <a href="{{ url('users') }}">
                    <i class='fa fa-users'></i> 
                    <span>Acessos</span>
                </a>
            </li>  
            <li {{ (Request::is('igrejas')  ? 'class=active' : '')}}>
                <a href="{{ route('igrejas.index') }}">
                    <i class='fa  fa-home'></i> 
                    <span>Igrejas</span>
                </a>
            </li>  
          <li {{ (Request::is('eventos')  ? 'class=active' : '') |
                 (Request::is('eventos/*') ? 'class=active' : '') }}>
                <a href="{{ url('eventos') }}">
                    <i class="fa fa-calendar"></i> 
                    <span>Eventos</span>                   
                </a>                           
            </li> 
          <li {{ (Request::is('agendas/calendario') ? 'class=active' : '') }}>
                <a href="{{ route('calendario') }}"> <i class='fa fa-calendar'></i> 
                    <span> Calendário UMADEB</span>
                </a>
            </li> 
            <li>
                <a href="{{ route('checkin') }}">
                    <i class='fa fa-calendar-check-o'></i> 
                    <span>Check-in </span>
                </a>
            </li>
            <li>
                <a href="{{ route('presentes') }}">
                    <i class='fa fa-area-chart'></i> 
                    <span>Relatórios</span>
                </a>
            </li>
        </ul>
    </section>
</aside>