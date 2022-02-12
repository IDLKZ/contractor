@extends("layout.user.template")
@push("styles")


@endpush
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
                <a href="" class="text-white text-underline">
                    Посмотреть
                </a>

            </div>
        </div>


        <div class="card bg-white px-2 py-2">

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Наименование</th>
                    <th scope="col">Дата</th>
                    <th scope="col">Статус</th>
                    <th scope="col">Комментарий</th>
                </tr>
                </thead>
                <tbody>
                @if($attempt->step_id  >= 1)
                <tr>
                    <th scope="row">Документы отправлены</th>
                    <td>{{$attempt->published_date}}</td>
                    <td>{{$attempt->getStatusCode($attempt->accepted_status)}}</td>
                    <td></td>
                </tr>
                @endif
                @if($attempt->step_id  >= 2)
                    <tr>
                        <th scope="row">Принято в обработку</th>
                        <td>{{$attempt->accepted_date}}</td>
                        <td>{{$attempt->getStatusCode($attempt->accepted_status)}}</td>
                        <td>{{$attempt->accepted_comment}}</td>
                    </tr>
                @endif
                @if($attempt->step_id  >= 3)
                    <tr>
                        <th scope="row">Спецпроверка КНБ РК</th>
                        <td>{{$attempt->checked_date}}</td>
                        <td>{{$attempt->getStatusCode($attempt->checked_status)}}</td>
                        <td>{{$attempt->checked_comment}}</td>
                    </tr>
                @endif
                @if($attempt->step_id  >= 4)
                    <tr>
                        <th scope="row">Предложение должности</th>
                        <td>{{$attempt->offered_date}}</td>
                        <td>{{$attempt->getStatusCode($attempt->offered_status)}}</td>
                        <td>

                            @if($attempt->offers->first())

                                <a href="{{route("offer",[$attempt->offers->first()->id])}}">
                                    Посмотреть
                                </a>

                            @endif
                        </td>
                    </tr>
                @endif
                @if($attempt->step_id  >= 5)
                    <tr>
                        <th scope="row">Подписание контракта</th>
                        <td>{{$attempt->signed_date}}</td>
                        <td>{{$attempt->getStatusCode($attempt->signed_status)}}</td>
                        <td>{{$attempt->signed_comment}}</td>
                    </tr>
                @endif
                </tbody>
            </table>


        </div>


@endsection

@push("scripts")
    <script>




    </script>
@endpush
