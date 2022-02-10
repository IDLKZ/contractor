@extends("layout.user.template")

@section("content")


    <div class="container min-height-100">
        <div class="row">
            <div class="col-md-12 text-center my-4 py-4">
                <p class="main-title-1 text-white">
                    Мои заявки
                </p>
            </div>

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
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>


                </div>

            </div>

        </div>





    </div>

@endsection
