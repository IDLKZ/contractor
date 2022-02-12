<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('received')}}" class="nav-link {{ Request::is('admin/orders/received*') ? 'navbar-active' : '' }}">Поступившие</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('accepted')}}" class="nav-link {{ Request::is('admin/orders/accepted*') ? 'navbar-active' : '' }}">Принятые</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('special_check')}}" class="nav-link {{ Request::is('admin/orders/special_check') ? 'navbar-active' : '' }}">Спецпроверка</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="javascript:void (0)" class="nav-link">Обследование</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="javascript:void (0)" class="nav-link">На подписании</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="javascript:void (0)" class="nav-link">Подписанные</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('rejected')}}" class="nav-link {{ Request::is('admin/orders/rejected') ? 'navbar-active' : '' }}">Отклоненные</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
    </ul>
</nav>
<!-- /.navbar -->
