<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header"> {{ trans('adminlte_lang::message.header') }} </li>           
            <li {{{ (Request::is('lideres_home/') ? 'class=active' : '') }}} >
                <a href="{{ url('lideres_home',$user->igreja_id) }}">
                    <i class='fa fa-dashboard '></i> 
                    <span>{{ trans('adminlte_lang::message.home') }}</span>
                </a>
            </li>  
            <li {{ (Request::is('agendas/calendario') ? 'class=active' : '') |
                   (Request::is('eventos/*') ? 'class=active' : '') }}>
                <a href="{{ route('calendario') }}"> <i class='fa fa-calendar'></i> 
                    <span> Calendário UMADEB</span>
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