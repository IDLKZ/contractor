@extends('layout.admin.template')

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
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th style="width: 10px">№</th>
                                <th>ФИО</th>
                                <th>Дата отказа</th>
                                <th>Статус</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($rejecteds)
                                @foreach($rejecteds as $rejected)
                                    <tr>
                                        <td>{{$loop->iteration}}.</td>
                                        <td>{{$rejected->application->name}}</td>
                                        <td>
                                            {{$rejected->updated_at->format('d/m/Y')}}
                                        </td>
                                        <td>
                                            <a href="javascript:void (0)" class="text-danger">Отклонен</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td>1.</td>
                                    <td>Белан Дмитрий Петрович</td>
                                    <td>
                                        10/12/2021
                                    </td>
                                    <td>
                                        <a href="{{route('received_show', 1)}}">Поступили документы</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Волков Анатолий Васильевич</td>
                                    <td>
                                        10/12/2021
                                    </td>
                                    <td>
                                        <a href="{{route('received_show', 1)}}">Поступили документы</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Абаев Абылай Аканович</td>
                                    <td>
                                        10/12/2021
                                    </td>
                                    <td>
                                        <a href="{{route('received_show', 1)}}">Поступили документы</a>
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>

                {!! $rejecteds->links() !!}
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
