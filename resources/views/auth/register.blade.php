@extends("layout.user.template")

@section("content")

    <div class="container">
        <div class="row min-height-100 justify-content-center align-items-center">

            <div class="col-md-4 text-center">
                <p class="main-title text-white mb-4">
                    Регистрация
                </p>

                <form>
                    <div class="form-group my-4">
                        <label for="exampleInputEmail1" class="text-white">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group my-4">
                        <label for="exampleInputPassword1" class="text-white">Пароль</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary main-button w-100">Регистрация</button>

                    <div class="form-group form-check my-4">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <a class="form-check-label text-white" href="">Я согласен с Правилами и Условиями</a>
                    </div>
                </form>


            </div>
        </div>
    </div>


@endsection
