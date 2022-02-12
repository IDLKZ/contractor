@extends('layout.admin.template')
@push('styles')
    <style>
        table {
            width: 100%;
            border: none;
        }
        .modal-content {background-color: #0066C3!important;color: white!important;}
        .img-view {
            width: 100%;
            height: 450px;
        }
        textarea {
            border-radius: 10px;
            padding: 7px;
        }
    </style>
@endpush
@section('content')
    @include('admin.orders.navbar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2"></div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="card resume">
                    <!-- /.card-header -->
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="resume-ava" style='background: url("{{asset($app->getFile('photo'))}}") no-repeat center; background-size: cover'></div>
                            </div>
                            <div class="col-md-10">
                                <h3>{{$app->name}}</h3>
                                <hr>
                                <table>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <p class="font-weight-bold">Дата подачи</p>
                                        </td>
                                        <td>
                                            <p>{{$app->created_at->format('d/m/Y')}}</p>
                                        </td>
                                        <td>
                                            <p class="font-weight-bold">Контакты:</p>
                                        </td>
                                        <td>
                                            <p>&nbsp;</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="font-weight-bold">Вакансия</p>
                                        </td>
                                        <td>
                                            <p>{{$app->position}}</p>
                                        </td>
                                        <td>
                                            <p class="font-weight-bold">Телефон</p>
                                        </td>
                                        <td>
                                            <p>{{$app->phone}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="font-weight-bold">Регион</p>
                                        </td>
                                        <td>
                                            <p>{{$app->region}}</p>
                                        </td>
                                        <td>
                                            <p class="font-weight-bold">E-mail</p>
                                        </td>
                                        <td>
                                            <p>{{$app->email}}</p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row bg-white py-4 px-2">

                            <div class="col-md-6">
                                <div class="text-center py-2">
                                    <h4 class="font-weight-bold">Анкета кандидата *</h4>
                                </div>

                                <div class="form-group my-4">
                                    <label for="name" class="font-weight-bold">Ф.И.О *</label>
                                    <input type="text" name="name" class="form-control border-black-1" id="name" aria-describedby="name" value="{{$app->name}}">
                                </div>

                                <div class="form-group my-4">
                                    <label for="birthplace" class="font-weight-bold">Место жительства (Область, Город, Улица, Дом, Квартира) *</label>
                                    <input type="text" name="birthplace" class="form-control border-black-1" id="birthplace" aria-describedby="birthplace" value="{{$app->birthplace}}">
                                </div>

                                <div class="form-group my-4">
                                    <label for="iin" class="font-weight-bold">ИИН *</label>
                                    <input type="text" name="iin" class="form-control border-black-1" id="iin" aria-describedby="iin" value="{{$app->iin}}">
                                </div>


                                <div class="form-group my-4">
                                    <label for="education" class="font-weight-bold">Образование *</label>
                                    <select class="form-control border-black-1" name="education" id="education">
                                        <option value="{{$app->education}}">{{$app->education}}</option>
                                    </select>
                                </div>

                                <div class="form-group my-4">
                                    <label for="car_license" class="font-weight-bold">Водительские права *</label>
                                    <select class="form-control car_license" id="car_license" style="border: 1px solid black; border-radius: 10px">
                                        @foreach($app->car_licence as $item)
                                            <option value="{{$item}}">{{$item}}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="form-group my-4">
                                    <label for="experience" class="font-weight-bold">Опыт работы *</label>
                                    <select class="form-control border-black-1" name="experience" id="experience">
                                        <option value="{{$app->experience}}">{{$app->experience}}</option>
                                    </select>
                                </div>

                                <div class="mt-2">
                                    <label class="font-weight-bold">Отношение к воинской службе *: </label>
                                </div>

                                <div class="form-group my-4">
                                    <label for="army_service" class="font-weight-bold">1)прохождение воинской службы *</label>
                                    <select class="form-control border-black-1" name="army_service" id="army_service">
                                        <option value="{{$app->army_service}}">{{$app->army_service}}</option>
                                    </select>
                                </div>

                                <div class="form-group my-4">
                                    <label for="army_section_id" class="font-weight-bold">Номер воинской части </label>
                                    <input type="text" name="army_section_id" class="form-control border-black-1" id="army_section_id" aria-describedby="army_section_id" value="{{$app->army_section_id}}">
                                </div>

                                <div class="form-group my-4">
                                    <label for="position" class="font-weight-bold">Должность </label>
                                    <input type="text" name="position" class="form-control border-black-1" id="position" aria-describedby="position" value="{{$app->position}}">
                                </div>

                                <div class="form-group my-4">
                                    <label for="rank" class="font-weight-bold">Воинское звание </label>
                                    <input type="text" name="rank" class="form-control border-black-1" id="rank" aria-describedby="rank" value="{{$app->rank}}">
                                </div>

                                <div class="form-group my-4">
                                    <label for="vtsh" class="font-weight-bold">2)	прошедшие подготовку в филиалах ВТШ МО РК по программе военнообученного резерва *:</label>
                                    <select class="form-control border-black-1" name="vtsh" id="vtsh">
                                        <option value="{{$app->vtsh}}">{{$app->vtsh}}</option>
                                    </select>
                                </div>

                                <div class="form-group my-4">
                                    <label for="branch_name" class="font-weight-bold">Наименование филиала</label>
                                    <input type="text" name="branch_name" class="form-control border-black-1" id="branch_name" aria-describedby="branch_name" value="{{$app->branch_name}}">
                                </div>

                                <div class="form-group my-4">
                                    <label for="year_service" class="font-weight-bold">Год обучения</label>
                                    <input type="text" name="year_service" class="form-control border-black-1" id="year_service" aria-describedby="year_service" value="{{$app->year_service}}">
                                </div>

                                <div class="mt-2">
                                    <label class="font-weight-bold">Указать должность, на какую планирует поступить *:</label>
                                </div>

                                <div class="form-group my-4">
                                    <label for="wanted_position" class="font-weight-bold">Наименование должности * </label>
                                    <input type="text" name="wanted_position" class="form-control border-black-1" id="wanted_position" aria-describedby="wanted_position" value="{{$app->wanted_position}}">
                                </div>

                                <div class="form-group my-4">
                                    <label for="contract_term" class="font-weight-bold">Срок заключения контракта *</label>
                                    <select class="form-control border-black-1" name="contract_term" id="contract_term">
                                        <option value="{{$app->contract_term}}">{{$app->contract_term}}</option>
                                    </select>
                                </div>

                                <div class="form-group my-4">
                                    <label for="region" class="font-weight-bold">Регион *</label>
                                    <input type="text" name="region" class="form-control border-black-1" id="region" aria-describedby="region" value="{{$app->region}}">
                                </div>

                                <div class="form-group my-4">
                                    <label for="phone" class="font-weight-bold">Телефон * </label>
                                    <input type="text" name="phone" class="form-control border-black-1" id="phone" aria-describedby="phone" value="{{$app->phone}}">
                                </div>

                                <div class="form-group my-4">
                                    <label for="email" class="font-weight-bold">Электронная почта * </label>
                                    <input type="email" name="email" class="form-control border-black-1" id="email" aria-describedby="email" value="{{$app->email}}">
                                </div>

                            </div>

                            <div class="col-md-6 pl-5">
                                <div class="text-center py-2">
                                    <h4 class="font-weight-bold">Дополнительные документы</h4>
                                </div>
                                <div class="form-group my-4">
                                    <label for="photo" class="font-weight-bold">Фото</label>
                                    <br>
                                    <label for="photo" class="color-blue-1">
                                        @include('admin.orders.modal', ['title' => 'Фото', 'url' => $app->getFile('photo'), 'id' => 1])
                                    </label>
                                </div>

                                <div class="form-group my-4">
                                    <label for="id_document" class="font-weight-bold">Удостоверение личности</label>
                                    <br>
                                    <label for="id_document" class="color-blue-1">
                                        @include('admin.orders.modal', ['title' => 'Удостоверение личности', 'url' => $app->getFile('id_document'), 'id' => 2])
                                    </label>
                                </div>
                                <div class="form-group my-4">
                                    <label for="autobiography" class="font-weight-bold">Автобиография</label>
                                    <br>
                                    <label for="autobiography" class="color-blue-1">
                                        @include('admin.orders.modal', ['title' => 'Автобиография', 'url' => $app->getFile('autobiography'), 'id' => 3])
                                    </label>
                                </div>

                                <div class="form-group my-4">
                                    <label for="diploma" class="font-weight-bold">Диплом с приложением</label>
                                    <br>
                                    <label for="diploma" class="color-blue-1">
                                        @include('admin.orders.modal', ['title' => 'Диплом с приложением', 'url' => $app->getFile('diploma'), 'id' => 4])
                                    </label>
                                </div>

                                <div class="form-group my-4">
                                    <label for="declaration" class="font-weight-bold">Декларация о доходах и имуществе</label>
                                    <br>
                                    <label for="declaration" class="color-blue-1">
                                        @include('admin.orders.modal', ['title' => 'Декларация о доходах и имуществе', 'url' => $app->getFile('declaration'), 'id' => 5])
                                    </label>
                                </div>

                                <div class="form-group my-4">
                                    <label for="work_book" class="font-weight-bold">Трудовая книжка</label>
                                    <br>
                                    <label for="work_book" class="color-blue-1">
                                        @include('admin.orders.modal', ['title' => 'Трудовая книжка', 'url' => $app->getFile('work_book'), 'id' => 6])
                                    </label>
                                </div>

                                <div class="form-group my-4">
                                    <label for="millitary_id" class="font-weight-bold">Военный билет</label>
                                    <br>
                                    <label for="millitary_id" class="color-blue-1">
                                        @include('admin.orders.modal', ['title' => 'Военный билет', 'url' => $app->getFile('military_id'), 'id' => 7])
                                    </label>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="text-center py-2">
                                    <h4 class="font-weight-bold">Анкета на близких родственников</h4>
                                </div>

                                <div>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">ФИО</th>
                                            <th scope="col">Статус</th>
                                            <th scope="col">Год рождения</th>
                                            <th scope="col">ИИН</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($app->anketa)
                                            @foreach(json_decode($app->anketa[0],1) as $item)
                                                <tr>
                                                    <th scope="row">{{$item['relative_name']}}</th>
                                                    <td>{{$item['relative_status']}}</td>
                                                    <td>{{$item['relative_birthdate']}}</td>
                                                    <td>{{$item['relative_iin']}}</td>
                                                </tr>
                                            @endforeach
                                        @else
                                        <tr>
                                            <th scope="row">Беланова Тамара Ренатовна</th>
                                            <td>Жена</td>
                                            <td>15/06/1990</td>
                                            <td>901506650987</td>
                                        </tr>
                                        @endif
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                            <div class="row justify-content-end w-100 px-2 mx-0 my-4">
                                <form action="{{route('received_update', $app->id)}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$app->id}}">
                                    <button class="btn btn-info" type="submit">Принять</button>
                                </form>
                                <button class="btn btn-danger ml-3" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Отклонить</button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <form action="{{route('received_update', $app->id)}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$app->id}}">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title m-auto" id="exampleModalLabel">Напишите комментарий</h5>
                                                </div>
                                                <div class="modal-body px-4">
                                                    <textarea name="accepted_comment" id="" cols="40" rows="5">Не полный пакет документов</textarea>
                                                </div>
                                                <div class="modal-footer justify-content-center">
                                                    <button type="submit" class="btn btn-info">Сохранить</button>
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Отмена</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@push('scripts')

@endpush
