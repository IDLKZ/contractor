@extends("layout.user.template")
@push("styles")


@endpush
@section("content")

    <div class="container min-height-100 py-4">
        <div class="row">
            <div class="col-md-12 text-center mt-4 pt-4">
                <p class="main-title-1 text-white">
                    Поиск вакансий
                </p>
            </div>
        </div>


        <form action="{{route("search-vacancies")}}">
        <div class="row">
                @csrf
                <div class="col-md-6">
                    <div class="form-group my-4">
                        <label for="region" class="font-weight-bold text-white">Регион *</label>
                        <input type="text" name="region" class="form-control border-black-1" id="region"
                               aria-describedby="region" value="{{old("region")}}">
                        @if($errors->has('region'))
                            <small class="text-danger">{{ $errors->first('region') }}</small>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group my-4">
                        <label for="title" class="font-weight-bold text-white">Должность *</label>
                        <input type="text" name="title" class="form-control border-black-1" id="title"
                               aria-describedby="title" value="{{old("title")}}">
                        @if($errors->has('title'))
                            <small class="text-danger">{{ $errors->first('title') }}</small>
                        @endif
                    </div>
                </div>
                <div class="col-md-12 text-right">
                    <button class="btn main-button">Найти</button>
                </div>
        </div>
        </form>


        <div class="row card bg-white px-2 py-2 my-4">
            <div class="card bg-white px-2 py-2 table-responsive">

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Вакансия</th>
                        <th scope="col">Регион</th>
                        <th scope="col">Требования</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($vacancies as $vacancy)
                        <tr>
                            <th scope="row">{{$vacancy->title}}</th>
                            <td>{{$vacancy->region}}</td>
                            <td>
                                {!! $vacancy->requirements !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="d-flex justify-content-center my-4">
                    {{$vacancies->links()}}
                </div>


            </div>

        </div>


        @endsection

        @push("scripts")
            <script>




            </script>
    @endpush
