@extends("layout.user.template")
@push("styles")
    <style>
        .sw-theme-arrows{
            border: none!important;
        }
        .toolbar-bottom{
            display: none;
        }
        .sw-theme-arrows>.nav {
            border-bottom:none!important;
        }
        .sw-theme-arrows>.nav .nav-link.active::after {
            border-left-color:#1FE233;
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
                    Заявка № 00001
                </p>
                <a href="" class="text-white text-underline">
                    Посмотреть
                </a>

            </div>
        </div>

        <div class="my-2" id="smartwizard">
            <ul class="nav">
                <li>
                    <a class="nav-link" href="#step-1">
                        Step 1
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#step-2">
                        Step 2
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#step-3">
                        Step 3
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#step-4">
                        Step 4
                    </a>
                </li>
            </ul>

            <div class="tab-content d-none">

            </div>
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


@endsection

@push("scripts")
    <script>

            // SmartWizard initialize
            $('#smartwizard').smartWizard(
                {
                    theme:"arrows",
                    backButtonSupport:false
                }
            );


    </script>
@endpush
