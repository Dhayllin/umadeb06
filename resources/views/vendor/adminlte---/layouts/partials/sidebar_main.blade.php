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
            <li {{{ (Request::is('matriz') ? 'class=active' : '') }}} |
                {{{ (Request::is('matriz/*') ? 'class=active' : '') }}}
                {{{ (Request::is('matriz/*/*') ? 'class=active' : '') }}}>
                <a href="{{ url('matriz') }}">
                    <i class='fa fa-building'></i> 
                    <span>Matriz</span>
                </a>
            </li>  
            <li>
                <a href="{{ url('#') }}">
                    <i class='fa  fa-file'></i> 
                    <span>Cotações</span>
                </a>
            </li>          
            <li>
                <a href="{{ url('#') }}">
                    <i class='fa fa-calendar'></i> 
                    <span>Calendário</span>
                </a>
            </li>           
            <li {{{ (Request::is('manage/*/*/*') ? 'class=active' : '') | 
                    (Request::is('manage/*/*') ? 'class=active' : '') | 
                    (Request::is('manage/*') ? 'class=active' : '')}}} >
                <a href="#">
                    <i class='fa fa-users'></i> 
                    <span>Administração</span> 
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li {{{ (Request::is('manage/users/*/*') ? 'class=active' : '')|
                            (Request::is('manage/users/*') ? 'class=active' : '') |
                            (Request::is('manage/users') ? 'class=active' : '') }}}>
                        <a href="{{ url('manage/users') }}"> <i class='fa fa-user'></i> 
                            <span> Usuários</span>
                        </a>
                    </li>                    
                    <li {{{ (Request::is('manage/permissions') ? 'class=active' : '') |
                            (Request::is('manage/permissions/*/*') ? 'class=active' : '') |
                            (Request::is('manage/permissions/*') ? 'class=active' : '')}}}>
                       <a href="{{ url('manage/permissions') }}"><i class="fa fa-unlock-alt"></i>
                           <span> Papéis & Permissões</span>
                       </a>
                    </li> 
                </ul>               
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