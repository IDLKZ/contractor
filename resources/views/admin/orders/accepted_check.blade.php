@extends('layout.admin.template')
@push('styles')
    <style>
        table {
            width: 100%;
            border: none;
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
                                <div class="resume-ava" style='background: url("{{asset('assets/images/ava.png')}}") no-repeat center; background-size: cover'></div>
                            </div>
                            <div class="col-md-10">
                                <h3>Белан Дмитрий Петрович</h3>
                                <hr>
                                <table>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <p class="font-weight-bold">Дата подачи</p>
                                        </td>
                                        <td>
                                            <p>10/12/2021</p>
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
                                            <p>Водитель</p>
                                        </td>
                                        <td>
                                            <p class="font-weight-bold">Телефон</p>
                                        </td>
                                        <td>
                                            <p>+7 777 123 45 67</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="font-weight-bold">Регион</p>
                                        </td>
                                        <td>
                                            <p>Карагандинская область</p>
                                        </td>
                                        <td>
                                            <p class="font-weight-bold">E-mail</p>
                                        </td>
                                        <td>
                                            <p>bd@mail.com</p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row bg-white py-4 px-2">

                            <div class="col-md-6">
                                <div class="text-center py-2">
                                    <h4 class="font-weight-bold">Дополнительные документы</h4>
                                </div>
                                <div class="form-group my-4">
                                    <label for="photo" class="font-weight-bold">Фото</label>
                                    <br>
                                    <input type="file" name="photo" id="files" hidden/>
                                    <a href="#" class="color-blue-1">Посмотреть</a>
                                </div>

                                <div class="form-group my-4">
                                    <label for="id_document" class="font-weight-bold">Удостоверение личности</label>
                                    <br>
                                    <input type="file" name="id_document" id="id_document" hidden/>
                                    <a href="#" class="color-blue-1">Посмотреть</a>
                                </div>
                                <div class="form-group my-4">
                                    <label for="autobiography" class="font-weight-bold">Автобиография</label>
                                    <br>
                                    <input type="file" name="autobiography" id="autobiography" hidden/>
                                    <a href="#" class="color-blue-1">Посмотреть</a>
                                </div>

                                <div class="form-group my-4">
                                    <label for="diploma" class="font-weight-bold">Диплом с приложением</label>
                                    <br>
                                    <input type="diploma" name="diploma" id="diploma" hidden/>
                                    <a href="#" class="color-blue-1">Посмотреть</a>
                                </div>

                                <div class="form-group my-4">
                                    <label for="declaration" class="font-weight-bold">Декларация о доходах и имуществе</label>
                                    <br>
                                    <input type="declaration" name="declaration" id="declaration" hidden/>
                                    <a href="#" class="color-blue-1">Посмотреть</a>
                                </div>

                                <div class="form-group my-4">
                                    <label for="work_book" class="font-weight-bold">Трудовая книжка</label>
                                    <br>
                                    <input type="work_book" name="work_book" id="work_book" hidden/>
                                    <a href="#" class="color-blue-1">Посмотреть</a>
                                </div>

                                <div class="form-group my-4">
                                    <label for="millitary_id" class="font-weight-bold">Военный билет</label>
                                    <br>
                                    <input type="millitary_id" name="millitary_id" id="millitary_id" hidden/>
                                    <a href="#" class="color-blue-1">Посмотреть</a>
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
                                        <tr>
                                            <th scope="row">Беланова Тамара Ренатовна</th>
                                            <td>Жена</td>
                                            <td>15/06/1990</td>
                                            <td>901506650987</td>
                                        </tr>

                                        </tbody>
                                    </table>

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
