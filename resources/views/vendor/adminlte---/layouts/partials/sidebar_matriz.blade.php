<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header"> {{ trans('adminlte_lang::message.header') }} </li>
           {{-- Lembrar de criar dashboard para a matriz --}}
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
        </ul>
    </section>
</aside>