<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('vacancies.index')}}" class="nav-link {{ Request::is('admin/vacancies') ? 'navbar-active' : '' }}">Вакансии</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('vacancies.create')}}" class="nav-link {{ Request::is('admin/vacancies/create') ? 'navbar-active' : '' }}">Добавить</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('vacancies.delete')}}" class="nav-link {{ Request::is('admin/vacancies/delete') ? 'navbar-active' : '' }}">Удалить</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
    </ul>
</nav>
<!-- /.navbar -->
