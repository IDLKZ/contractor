@extends("layout.user.template")

@section("content")


    <div class="container min-height-100">
        <div class="row">
            <div class="col-md-12 text-center my-4 py-4">
                <p class="main-title-1 text-white">
                    Мои заявки
                </p>
            </div>
             @if($applications->isNotEmpty())
            <div class="col-md-12">


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
                        @foreach($applications as $application)
                            @if(count($application->attempts)> 0)
                                @foreach($application->attempts as $attempt)
                                    <tr>
                                        <th scope="row">Заявка № {{$attempt->id}}</th>
                                        <td>{{$attempt->published_date}}</td>
                                        <td>{{$attempt->step->title}}:{{$attempt->getStatus()}}</td>
                                        <td><a class="text-black" href="{{route("show-request",[$attempt->id])}}">Посмотреть</a></td>
                                    </tr>
                                @endforeach

                            @else
                                <tr>
                                    <th scope="row">Сохраненная Заявка №{{$application->id}}</th>
                                    <td>{{$application->updated_at}}</td>
                                    <td>Сохранена, но не отправлена </td>
                                    <td>
                                        <a href="{{route("update-request",[$application->id])}}">Изменить</a>

                                    </td>
                                </tr>
                            @endif
                        @endforeach


                        </tbody>
                    </table>


                </div>

            </div>
                 @endif

        </div>





    </div>

@endsection
