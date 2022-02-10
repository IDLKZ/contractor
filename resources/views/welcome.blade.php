@extends("layout.user.template")

@section("content")
<div class="container">
    <div class="row align-items-center min-height-100">
        <div class="col-md-6">
            <p class="main-title text-white my-2">Военная служба по контракту - профессиональная защита Отечества!</p>
            <p class="main-subtitle text-white my-2">
                Подать заявку теперь можно онлайн
            </p>
            <a class="btn main-button px-4 my-2"  href="{{route("register")}}">
                Подать заявку
            </a>
        </div>
        <div class="col-md-6  d-flex justify-content-center">
            <img class="main-img" src="assets/images/bg1.png">
        </div>
    </div>
</div>
@endsection
