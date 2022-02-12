@extends("layout.user.template")
@push("styles")

<style>
    .nav-pills.nav-wizard > li {
        position: relative;
        overflow: visible;
        border-right: 15px solid transparent;
        border-left: 15px solid transparent;
    }
    .nav-pills.nav-wizard > li + li {
        margin-left: 0;
    }
    .nav-pills.nav-wizard > li:first-child {
        border-left: 0;
    }
    .nav-pills.nav-wizard > li:first-child a {
        border-radius: 5px 0 0 5px;
    }
    .nav-pills.nav-wizard > li:last-child {
        border-right: 0;
    }
    .nav-pills.nav-wizard > li:last-child a {
        border-radius: 0 5px 5px 0;
    }
    .nav-pills.nav-wizard > li a {
        border-radius: 0;
        background-color: #eee;
    }
    .nav-pills.nav-wizard > li .nav-arrow {
        position: absolute;
        top: 0px;
        right: -20px;
        width: 0px;
        height: 0px;
        border-style: solid;
        border-width: 20px 0 20px 20px;
        border-color: transparent transparent transparent #eee;
        z-index: 150;
    }
    .nav-pills.nav-wizard > li .nav-wedge {
        position: absolute;
        top: 0px;
        left: -20px;
        width: 0px;
        height: 0px;
        border-style: solid;
        border-width: 20px 0 20px 20px;
        border-color: #eee #eee #eee transparent;
        z-index: 150;
    }
    .nav-pills.nav-wizard > li:hover .nav-arrow {
        border-color: transparent transparent transparent #aaa;
    }
    .nav-pills.nav-wizard > li:hover .nav-wedge {
        border-color: #aaa #aaa #aaa transparent;
    }
    .nav-pills.nav-wizard > li:hover a {
        background-color: #aaa;
        color: #fff;
    }
    .nav-pills.nav-wizard > li.active .nav-arrow {
        border-color: transparent transparent transparent #428bca;
    }
    .nav-pills.nav-wizard > li.active .nav-wedge {
        border-color: #428bca #428bca #428bca transparent;
    }
    .nav-pills.nav-wizard > li.active a {
        background-color: #428bca;
    }
</style>
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

        <div class="bg-white my-2">
            <ul class='nav nav-wizard'>

                <li class="my-arrow my-arrow-success"><a>Документы отправлены</a></li>

                <li
                @if($attempt->step_id >= 2)
                    @if($attempt->accepted_status == 1)
                    class="my-arrow my-arrow-success"

                @elseif($attempt->accepted_status == -1)
                class="my-arrow my-arrow-error"
                @else
                class="my-arrow"
                @endif
                @else
                class="my-arrow"
                @endif
                ><a>Принято в работу</a></li>

                <li
                    @if($attempt->step_id >= 3)
                    @if($attempt->checked_status == 1)
                    class="my-arrow my-arrow-success"

                    @elseif($attempt->checked_status == -1)
                    class="my-arrow my-arrow-error"
                    @else
                    class="my-arrow"
                    @endif
                    @else
                    class="my-arrow"
                    @endif
                ><a>Спецпроверка КНБ РК</a></li>
                <li
                    @if($attempt->step_id >= 5)
                    @if($attempt->signed_status == 1)
                    class="my-arrow my-arrow-success"

                    @elseif($attempt->signed_status == -1)
                    class="my-arrow my-arrow-error"
                    @else
                    class="my-arrow"
                    @endif
                    @else
                    class="my-arrow"
                    @endif


                ><a>Подписание контракта</a></li>

            </ul>

        </div>

        <div>

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
                    <th scope="row">Заявка № {{$attempt->id}}</th>
                    <td>{{$attempt->published_date}}</td>
                    <td>
                        Документы отправлены<br>
                        {{$attempt->getStatusCode($attempt->accepted_status)}}</td>
                    <td></td>
                </tr>
                @endif
                @if($attempt->step_id  >= 2)
                    <tr>
                        <th scope="row">Заявка № {{$attempt->id}}</th>
                        <td>{{$attempt->accepted_date}}</td>
                        <td>
                            Принято в обработку<br>
                            {{$attempt->getStatusCode($attempt->accepted_status)}}</td>
                        <td>{{$attempt->accepted_comment}}</td>
                    </tr>
                @endif
                @if($attempt->step_id  >= 3)
                    <tr>
                        <th scope="row">Заявка № {{$attempt->id}}</th>
                        <td>{{$attempt->checked_date}}</td>
                        <td>
                            Спецпроверка КНБ РК<br>
                            {{$attempt->getStatusCode($attempt->checked_status)}}</td>
                        <td>{{$attempt->checked_comment}}</td>
                    </tr>
                @endif
                @if($attempt->step_id  >= 4)
                    <tr>
                        <th scope="row">Заявка № {{$attempt->id}}</th>
                        <td>{{$attempt->offered_date}}</td>
                        <td>
                            Предложение должности <br>
                            {{$attempt->getStatusCode($attempt->offered_status)}}</td>
                        <td>
                                <a href="{{route("offer",[$attempt->id])}}">
                                    Посмотреть
                                </a>
                        </td>
                    </tr>
                @endif
                @if($attempt->step_id  >= 5)
                    <tr>
                        <th scope="row">Заявка № {{$attempt->id}}</th>
                        <td>{{$attempt->signed_date}}</td>
                        <td>
                            Подписание контракта<br>
                            {{$attempt->getStatusCode($attempt->signed_status)}}</td>
                        <td>
                            <a href="{{route("contract",[$attempt->id])}}">
                                Посмотреть
                            </a>
                        </td>
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
