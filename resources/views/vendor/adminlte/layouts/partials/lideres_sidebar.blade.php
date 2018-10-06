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
         <!--   <li {{ (Request::is('jovens/')  ? 'class=active' : '') | 
                      (Request::is('jovens/*')  ? 'class=active' : '') |  
                      (Request::is('jovens/*/*')  ? 'class=active' : '')  }}>
                <a href="#">
                    <i class="fa fa-calendar"></i> 
                    <span>Eventos</span> 
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li  {{ (Request::is('jovens')  ? 'class=active' : '') |
                            (Request::is('jovens/*')  ? 'class=active' : '') |  
                            (Request::is('jovens/*/*')  ? 'class=active' : '') }}>
                        <a href="{{ url('jovens/lideres_index',$user->igreja_id) }}"> <i class='fa fa-book'></i> 
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
            </li>-->
        </ul>
    </section>
</aside>