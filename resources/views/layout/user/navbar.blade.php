<div class="container-fluid container-lg">
    <nav class="navbar navbar-expand-md navbar-light">
        <span class="mr-md-5">
                    <a class="navbar-brand color-blue-1 navbar-logo" href="/">Kontraktnik.kz</a><br>
                    <small class="navbar-sub color-blue-1">Сервис по приему на воинскую службу по контракту</small>

        </span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link color-blue-1 navbar-links" href="#">Контрактная служба <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-blue-1 navbar-links" href="#">Вакансии</a>
                </li>
                <li class="nav-item">
                            <a class="nav-link color-blue-1 navbar-links" href="{{route("create-request")}}">Подать заявку</a>
                </li>
                @if(auth()->check())
                    @if(auth()->user()->role_id == 2)
                <li class="nav-item">
                    <a class="nav-link color-blue-1 navbar-links" href="#">Мои заявки</a>
                </li>
                        @endif
                @endif
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    @if(auth()->check())
                        @if(auth()->user()->role_id == 1)

                        @else
                            <a class="nav-link color-blue-1 navbar-links" href="{{route("cabinet")}}">{{auth()->user()->name}}</a>
                        @endif
                    @else
                        <a class="nav-link color-blue-1 navbar-links" href="{{route("login")}}">Войти</a>

                    @endif
                </li>
            </ul>
        </div>
    </nav>

</div>
