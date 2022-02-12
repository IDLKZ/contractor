@extends("layout.user.template")

@section("content")


    <div class="container min-height-100">
        <div class="row">
            <div class="col-md-12 text-center my-4 py-4">
                <p class="main-title-1 text-white">
                    Кабинет кандидата
                </p>
            </div>

            <div class="text-left">
                <p class="main-title-1 text-white">
                    Заявка № {{$attempt->id}}
                </p>
                <a href="{{route("show-request",$attempt->id)}}" class="text-white text-underline">
                    Посмотреть
                </a>

            </div>

        </div>

        <div class="card bg-white my-2">
            <div class="row my-2 px-4">
                <div class="col-md-12 my-4 ">
                    <div>
                        <p class="font-weight-bold">
                            Поздравляем, Ваша кандидатура одобрена для поступления  на контрактную службу. Вам необходимо скачать Контракт, распечатать, подписать и явиться по месту службы не позднее
                            22/07/2022.
                            В случае не согласия с предложенной должностью или отказа от контрактной службы необходитмо нажать кнопку “Отклонить” и написать мотивированный отказ в комментарии.
                        </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="d-flex py-2">
                        <p class="font-weight-bold ma-0 mx-2 align-self-center" style="margin-top: 0!important; margin-bottom: 0!important;">Должность</p>
                        <input type="text"  class="form-control border-black-1 d-inline" style="width: auto" aria-describedby="relative_name" value="Начальник отдела" disabled>
                    </div>
                </div>
                <div class="col-md-12">
                <div class="d-flex py-2">
                    <p class="font-weight-bold ma-0 mx-2 align-self-center" style="margin-top: 0!important; margin-bottom: 0!important;">Воинская часть</p>
                    <input type="text"  class="form-control border-black-1 d-inline" style="width: auto" aria-describedby="relative_name" value="0000000" disabled>
                </div>
                </div>
                <div class="col-md-12">
                    <div class="d-flex py-2">
                        <p class="font-weight-bold ma-0 mx-2 align-self-center" style="margin-top: 0!important; margin-bottom: 0!important;">Дата прибытия</p>
                        <input type="text"  class="form-control border-black-1 d-inline" style="width: auto" aria-describedby="relative_name" value="22/07/2021" disabled>
                    </div>
                </div>
            </div>
            @if($attempt->offered_status == 0)
            <div class="row justify-content-end w-100 px-2 mx-0 my-4">
                <form action="{{route("update-attempt")}}" method="post">
                    @csrf
                    <input hidden name="status" value="1">
                    <input hidden name="attempt_id" value="{{$attempt->id}}">
                    <button class="btn main-button mx-2" type="submit" id="save_button">Сохранить</button>
                </form>
                <form action="{{route("update-attempt")}}" method="post">
                    @csrf
                    <input hidden name="status" value="-1">
                    <input hidden name="attempt_id" value="{{$attempt->id}}">
                    <button class="btn btn-danger mx-2" type="submit" id="cancel_button">Отклонить</button>
                </form>
            </div>
            @endif
        </div>






    </div>

@endsection
