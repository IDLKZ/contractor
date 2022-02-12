@extends('layout.admin.template')
@push('styles')
    <style>
        table {
            width: 100%;
            border: none;
        }
        label {
            display: flex;
            justify-content: space-between;
        }
        .check-icon {
            background: url("{{asset('assets/images/check_icon.png')}}") no-repeat center;
            background-size: contain;
            width: 23px;
            height: 23px;
        }
        .modal-content {background-color: #0066C3!important;color: white!important;}
        .img-view {
            width: 100%;
            height: 450px;
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
                                <div class="resume-ava" style='background: url("{{$app->getFile('photo')}}") no-repeat center; background-size: cover'></div>
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
                                <div class="form-group my-4">
                                    <label for="photo" class="font-weight-bold">
                                        <span>Анкета кандидата</span>
                                        <span class="check-icon"></span>
                                    </label>
                                    <label for="">
                                        @include('admin.orders.modal', ['title' => 'Фото', 'url' => $app->getFile('photo'), 'id' => 1])
                                    </label>

                                </div>

                                <div class="form-group my-4">
                                    <label for="id_document" class="font-weight-bold">
                                        <span>Удостоверение личности</span>
                                        <span class="check-icon"></span>
                                    </label>
                                    <label for="">
                                        @include('admin.orders.modal', ['title' => 'Удостоверение личности', 'url' => $app->getFile('id_document'), 'id' => 2])
                                    </label>
                                </div>

                                <div class="form-group my-4">
                                    <label for="diploma" class="font-weight-bold">
                                        <span>Диплом с приложением</span>
                                        <span class="check-icon"></span>
                                    </label>
                                    <label for="">
                                        @include('admin.orders.modal', ['title' => 'Диплом с приложением', 'url' => $app->getFile('diploma'), 'id' => 4])
                                    </label>
                                </div>

                                <div class="form-group my-4">
                                    <label for="declaration" class="font-weight-bold">
                                        <span>Декларация о доходах и имуществе</span>
                                        <span class="check-icon"></span>
                                    </label>
                                    <label for="">
                                        @include('admin.orders.modal', ['title' => 'Декларация о доходах и имуществе', 'url' => $app->getFile('declaration'), 'id' => 5])
                                    </label>
                                </div>

                                <div class="form-group my-4">
                                    <label for="work_book" class="font-weight-bold">
                                        <span>Трудовая книжка</span>
                                        <span class="check-icon"></span>
                                    </label>
                                    <label for="">
                                        @include('admin.orders.modal', ['title' => 'Трудовая книжка', 'url' => $app->getFile('work_book'), 'id' => 6])
                                    </label>
                                </div>

                                <div class="form-group my-4">
                                    <label for="millitary_id" class="font-weight-bold">
                                        <span>Военный билет</span>
                                        <span class="check-icon"></span>
                                    </label>
                                    <label for="">
                                        @include('admin.orders.modal', ['title' => 'Военный билет', 'url' => $app->getFile('military_id'), 'id' => 7])
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6"></div>

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
                                <form action="{{route('accepted_update', $app->id)}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$app->id}}">
                                    <button class="btn btn-info" type="submit">Отправить на спецпроверку</button>
                                </form>
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
