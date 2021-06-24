<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="{{asset('public/images/logo.png')}}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="{{asset('public/images/logo2.png')}}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{url('/admin')}}"> <i class="menu-icon fa fa-dashboard"></i>Beranda </a>
                        <a href="{{url('/admin/kategori')}}"> <i class="menu-icon fa fa-table"></i>Kategori </a>
                        <a href="{{url('/admin/tugas')}}"> <i class="menu-icon fa fa-list"></i>Tugas </a>
                        <a href="{{url('/admin/uts')}}"> <i class="menu-icon fa fa-calendar"></i>UTS </a>
                        <a href="{{url('/admin/akun')}}"> <i class="menu-icon fa fa-address-card"></i>Akun </a>
                        @role('admin')
                        <a href="{{url('/admin/roles')}}"> <i class="menu-icon fa fa-database"></i>Role </a>
                        <a href="{{url('/admin/users')}}"> <i class="menu-icon fa fa-users"></i>User </a>
                        @endrole
                    </li>
                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Halaman</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->