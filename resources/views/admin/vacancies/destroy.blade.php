@extends('layout.admin.template')

@section('content')
    @include('admin.vacancies.navbar')
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
                                <th>Вакансия</th>
                                <th>Дата</th>
                                <th>Регион</th>
                                <th>Требования</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($data)
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->created_at->format('d/m/Y')}}</td>
                                        <td>
                                            {{$item->region}}
                                        </td>
                                        <td>
                                            {!! $item->requirements !!}
                                        </td>
                                        <td>
                                            <form action="{{route('vacancies.destroy', $item->id)}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn">
                                                    <img src="{{asset('assets/images/x_circle.png')}}">
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                            </tbody>
                        </table>

                    </div>
                    <!-- /.card-body -->
                </div>
                {!! $data->links() !!}
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
