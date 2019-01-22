<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">Example user</strong>
                            </span> <span class="text-muted text-xs block">Example menu <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="{{ isActiveRoute('main') }}">
                <a href="{{ url('/') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Main view</span></a>
            </li>
            
            <li class="{{ isActiveRoute('aluno') }}">
                <a href="{{ url('aluno') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Alunos</span> </a>
            </li>
          
            <li class="{{ isActiveRoute('conteudo') }}">
                <a href="{{ url('conteudo') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Conteudo</span> </a>
            </li>
            
        </ul>

    </div>
</nav>
