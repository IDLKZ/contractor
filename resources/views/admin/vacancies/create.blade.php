@extends('layout.admin.template')
@push('styles')
    <!-- include summernote css/js -->
    <style>
        .border-black-1 {
            border-radius: 10px;
        }
    </style>
@endpush
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
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-header" style="background: rgba(142, 178, 221, 0.5)">
                        Добавить вакансию
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-5">
                        <form action="{{route('vacancies.store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group my-4">
                                        <label for="title" class="font-weight-normal">Вакансия *</label>
                                        <input type="text" name="title" class="form-control border-black-1" id="title">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group my-4">
                                        <label for="region" class="font-weight-normal">Регион *</label>
                                        <input type="text" name="region" class="form-control border-black-1" id="region">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group my-4">
                                <label for="editor" class="font-weight-normal">Требования *</label>
                                <textarea id="editor" name="requirements"></textarea>
                            </div>


                            <div class="row justify-content-end w-100 px-2 mx-0 my-4">
                                <button class="btn btn-info mr-3" type="submit">Сохранить</button>
                                <a class="btn btn-danger" href="{{route('vacancies.index')}}">Отмена</a>
                            </div>
                        </form>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

@endpush
