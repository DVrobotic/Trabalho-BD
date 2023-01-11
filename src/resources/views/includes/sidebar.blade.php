<!-- Sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="overflow-x: hidden; background-color: #222222;">
    <div class="sidebar">
        <div class="user-panel mt-3 pb-2 d-flex">
            <div class="image">
                <a href="">
                    <img src="{{ asset('img/admin.png') }}" class="img-circle" alt="User Image">
                </a>
            </div>
            <div class="info">
                <a href="" class="d-block">Usuário</a>
            </div>
            <div class="info align-self-center">
                <form id="logout-form" method="post" action="">
                    @csrf
                    <button style="background-color: #222222;" class="btn-dark border-0" type="submit"><a href="" onclick="$('#logout-form').submit()" class="d-block"><i class="nav-icon fas fa-power-off"></i></a></button>
                </form>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="{{ route('users.index') }}" class="nav-link {{ Route::is('users.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>Usuários</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('queryMaker') }}" class="nav-link {{ Route::is('users.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-pen"></i>
                        <p>Testar Queries</p>
                    </a>
                </li>
            </ul>
    </nav>
        <!-- Fim Sidebar Menu -->

    </div>
</aside>
<!-- Fim Sidebar -->
