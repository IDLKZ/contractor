@extends("layout.user.template")

@section("content")

    <div class="container">
        <div class="row min-height-100 justify-content-center align-items-center">

            <div class="col-md-4 text-center">
                <p class="main-title text-white mb-4">
                    Вход
                </p>
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        @foreach ($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    </div>
                @endif

                <form method="post" action="{{route("signIn")}}" >
                    @csrf
                    <div class="form-group my-4">
                        <label for="exampleInputEmail1" class="text-white">Email</label>
                        <input required type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old("email")}}">
                        @if($errors->has('email'))
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                        @endif
                    </div>
                    <div class="form-group my-4">
                        <label for="exampleInputPassword1" class="text-white">Пароль</label>
                        <input required type="password" name="password" class="form-control" id="exampleInputPassword1">
                        @if($errors->has('password'))
                            <small class="text-danger">{{ $errors->first('password') }}</small>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary main-button w-100">Войти</button>
                </form>
                <div class="my-4">
                    <a class="form-check-label text-white" href="{{route("register")}}">Регистрация</a>
                </div>
                <div class="my-4">
                    <a class="form-check-label text-white" href="">Забыли пароль?</a>
                </div>


            </div>
        </div>
    </div>


@endsection
