<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <link rel="shortcut icon" href="{{asset('public/dist/img/avatar.png')}}" type="image/x-icon">

    <!-- Brand Logo -->
    <a  class="brand-link" href="{{route('Dashboard')}}">
        <img src="{{asset('public/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light" >Clinks System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('public/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Mahmoud Samir</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            الاعدادات
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('clink.create')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>اعدادت العياده</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('doctor.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>الدكاتره </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('patient.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ادخال بيانات المريض </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('detect.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>الكشوفات</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Simple Link
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>
</div>
</body>
