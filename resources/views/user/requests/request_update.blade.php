@extends("layout.user.template")

@section("content")

    <div class="container min-height-100">
        <div class="row">
            <div class="col-md-12 text-center my-4 py-4">
                <p class="main-title-1 text-white">
                    Подача заявки на военную службу по контраку
                </p>
            </div>
            <div class="col-md-12 text-center my-2 py-2">
                <p class="main-title-1 text-white">
                    Изменить заявку №{{$application->id}}
                </p>
            </div>

        </div>

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
        @endif

        <div class="container">
        <form id="saveRequestForm" action="{{route("change-request")}}" enctype="multipart/form-data" method="post">
            @csrf
            @method("put")
            <input name="id" hidden value="{{$application->id}}">
            <div class="row bg-white py-4 px-2">

                <div class="col-md-6">
                    <div class="text-center py-2">
                        <h4 class="font-weight-bold">Анкета кандидата *</h4>
                    </div>

                    <div class="form-group my-4">
                        <label for="name" class="font-weight-bold">Ф.И.О *</label>
                        <input type="text" name="name" class="form-control border-black-1" id="name"
                               aria-describedby="name" value="{{$application->name}}">
                        @if($errors->has('name'))
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        @endif
                    </div>

                    <div class="form-group my-4">
                        <label for="birthplace" class="font-weight-bold">Место жительства (Область, Город, Улица, Дом,
                            Квартира) *</label>
                        <input type="text" name="birthplace" class="form-control border-black-1" id="birthplace"
                               aria-describedby="birthplace" value="{{$application->birthplace}}">
                        @if($errors->has('birthplace'))
                            <small class="text-danger">{{ $errors->first('birthplace') }}</small>
                        @endif
                    </div>

                    <div class="form-group my-4">
                        <label for="iin" class="font-weight-bold">ИИН *</label>
                        <input type="text" name="iin" class="form-control border-black-1" id="iin"
                               aria-describedby="iin" value="{{$application->iin}}">
                        @if($errors->has('iin'))
                            <small class="text-danger">{{ $errors->first('iin') }}</small>
                        @endif
                    </div>


                    <div class="form-group my-4">
                        <label for="education" class="font-weight-bold">Образование *</label>
                        <select class="form-control border-black-1" name="education" id="education">
                            <option value="Общее среднее образование"> Общее среднее образование</option>
                            <option
                                value="Техническое и профессиональное образование: квалификации рабочего и специалиста среднего звена"
                                @if("Техническое и профессиональное образование: квалификации рабочего и специалиста среднего звена" == $application->education)
                                    selected
                                @endif
                            >
                                Техническое и профессиональное образование: квалификации рабочего и специалиста среднего
                                звена
                            </option>
                            <option value="Послесреднее образование: квалификации рабочего с высоким уровнем разряда"
                                    @if("Послесреднее образование: квалификации рабочего с высоким уровнем разряда" == $application->education)
                                    selected
                                @endif
                            >
                                Послесреднее образование: квалификации рабочего с высоким уровнем разряда
                            </option>
                            <option value="Неполное высшее образование – прикладной бакалавриат"
                                    @if("Неполное высшее образование – прикладной бакалавриат" == $application->education)
                                    selected
                                    @endif>
                                Неполное высшее
                                образование – прикладной бакалавриат
                            </option>
                            <option
                                value="Высшее образование: квалификации бакалавра, специалиста для медицинских специальностей"
                                @if("Высшее образование: квалификации бакалавра, специалиста для медицинских специальностей" == $application->education)
                                selected
                                @endif
                            >
                                Высшее образование: квалификации бакалавра, специалиста для медицинских специальностей
                            </option>
                            <option value="Послевузовское образование: квалификации магистра и доктора PhD."
                                    @if("Послевузовское образование: квалификации магистра и доктора PhD." == $application->education)
                                    selected
                                @endif
                            >
                                Послевузовское образование: квалификации магистра и доктора PhD
                            </option>
                        </select>
                        @if($errors->has('education'))
                            <small class="text-danger">{{ $errors->first('education') }}</small>
                        @endif
                    </div>

                    <div class="form-group my-4">

                        <label for="car_license" class="font-weight-bold">Водительские права *</label>
                        <select class="form-control car_license" name="car_licence[]" id="car_license" multiple
                                style="border: 1px solid black; border-radius: 10px">
                            <option value="Нет прав"  >Нет прав</option>
                            <option value="Категория A" >Категория A</option>
                            <option value="Категория B" >Категория B</option>
                            <option value="Категория C" >Категория C</option>
                            <option value="Категория D" >Категория D</option>
                            <option value="Категория T" >Категория T</option>
                        </select>
                        @if($errors->has('car_license'))
                            <small class="text-danger">{{ $errors->first('car_license') }}</small>
                        @endif
                    </div>

                    <div class="form-group my-4">
                        <label for="experience" class="font-weight-bold">Опыт работы *</label>
                        <select class="form-control border-black-1" name="experience" id="experience">
                            <option value="Нет опыта работы"> Нет опыта работы</option>
                            <option value="1 год" @if("1 год" == $application->experience) selected @endif> 1 год</option>
                            <option value="Более 2х лет" @if("Более 2х лет" == $application->experience) selected @endif> Более 2х лет</option>
                            <option value="Более 5 лет" @if("Более 5 лет" == $application->experience) selected @endif> Более 5 лет</option>
                            <option value="Более 10 лет" @if("Более 10 лет" == $application->experience) selected @endif> Более 10 лет</option>
                        </select>
                        @if($errors->has('experience'))
                            <small class="text-danger">{{ $errors->first('experience') }}</small>
                        @endif
                    </div>

                    <div class="mt-2">
                        <label class="font-weight-bold">Отношение к воинской службе *: </label>
                    </div>

                    <div class="form-group my-4">
                        <label for="army_service" class="font-weight-bold">1)прохождение воинской службы *</label>
                        <select class="form-control border-black-1" name="army_service" id="army_service">
                            <option value="Да" @if("Да" == $application->army_service) selected @endif>Да</option>
                            <option value="Нет" @if("Нет" == $application->army_service) selected @endif>Нет</option>
                        </select>
                        @if($errors->has('army_service'))
                            <small class="text-danger">{{ $errors->first('army_service') }}</small>
                        @endif
                    </div>

                    <div class="form-group my-4">
                        <label for="army_section_id" class="font-weight-bold">Номер воинской части </label>
                        <input type="text" name="army_section_id" class="form-control border-black-1"
                               id="army_section_id" aria-describedby="army_section_id"
                               value="{{$application->army_section_id}}">
                        @if($errors->has('army_section_id'))
                            <small class="text-danger">{{ $errors->first('army_section_id') }}</small>
                        @endif

                    </div>

                    <div class="form-group my-4">
                        <label for="position" class="font-weight-bold">Должность </label>
                        <input type="text" name="position" class="form-control border-black-1" id="position"
                               aria-describedby="position" value="{{$application->position}}">
                        @if($errors->has('position'))
                            <small class="text-danger">{{ $errors->first('position') }}</small>
                        @endif

                    </div>

                    <div class="form-group my-4">
                        <label for="rank" class="font-weight-bold">Воинское звание </label>
                        <input type="text" name="rank" class="form-control border-black-1" id="rank"
                               aria-describedby="rank" value="{{$application->rank}}">
                        @if($errors->has('rank'))
                            <small class="text-danger">{{ $errors->first('rank') }}</small>
                        @endif

                    </div>

                    <div class="form-group my-4">
                        <label for="vtsh" class="font-weight-bold">2) прошедшие подготовку в филиалах ВТШ МО РК по
                            программе военнообученного резерва *:</label>
                        <select class="form-control border-black-1" name="vtsh" id="vtsh">
                            <option value="Да" @if("Да" == $application->vtsh) selected @endif >Да</option>
                            <option value="Нет" @if("Нет" == $application->vtsh) selected @endif>Нет</option>
                        </select>
                        @if($errors->has('vtsh'))
                            <small class="text-danger">{{ $errors->first('vtsh') }}</small>
                        @endif
                    </div>

                    <div class="form-group my-4">
                        <label for="branch_name" class="font-weight-bold">Наименование филиала</label>
                        <input type="text" name="branch_name" class="form-control border-black-1" id="branch_name"
                               aria-describedby="branch_name" value="{{$application->branch_name}}">
                        @if($errors->has('branch_name'))
                            <small class="text-danger">{{ $errors->first('branch_name') }}</small>
                        @endif
                    </div>

                    <div class="form-group my-4">
                        <label for="year_service" class="font-weight-bold">Год обучения</label>
                        <input type="text" name="year_service" class="form-control border-black-1" id="year_service"
                               aria-describedby="year_service" value="{{$application->year_service}}">
                        @if($errors->has('year_service'))
                            <small class="text-danger">{{ $errors->first('year_service') }}</small>
                        @endif
                    </div>

                    <div class="mt-2">
                        <label class="font-weight-bold">Указать должность, на какую планирует поступить *:</label>
                    </div>

                    <div class="form-group my-4">
                        <label for="wanted_position" class="font-weight-bold">Наименование должности * </label>
                        <input type="text" name="wanted_position" class="form-control border-black-1"
                               id="wanted_position" aria-describedby="wanted_position"
                               value="{{$application->wanted_position}}">
                        @if($errors->has('wanted_position'))
                            <small class="text-danger">{{ $errors->first('wanted_position') }}</small>
                        @endif
                    </div>

                    <div class="form-group my-4">
                        <label for="contract_term" class="font-weight-bold">Срок заключения контракта *</label>
                        <select class="form-control border-black-1" name="contract_term" id="contract_term">
                            <option value="3 года" @if("3 года" == $application->contract_term) selected @endif>3 года</option>
                            <option value="5 лет"  @if("5 лет" == $application->contract_term) selected @endif>5 лет</option>
                            <option value="10 лет"  @if("10 лет" == $application->contract_term) selected @endif>10 лет</option>
                        </select>
                        @if($errors->has('contract_term'))
                            <small class="text-danger">{{ $errors->first('contract_term') }}</small>
                        @endif
                    </div>

                    <div class="form-group my-4">
                        <label for="region" class="font-weight-bold">Регион *</label>
                        <input type="text" name="region" class="form-control border-black-1" id="region"
                               aria-describedby="region" value="{{$application->wanted_position}}">
                        @if($errors->has('region'))
                            <small class="text-danger">{{ $errors->first('region') }}</small>
                        @endif
                    </div>

                    <div class="form-group my-4">
                        <label for="phone" class="font-weight-bold">Телефон * </label>
                        <input type="text" name="phone" class="form-control border-black-1" id="phone"
                               aria-describedby="phone" value="{{$application->phone}}">
                        @if($errors->has('phone'))
                            <small class="text-danger">{{ $errors->first('phone') }}</small>
                        @endif

                    </div>

                    <div class="form-group my-4">
                        <label for="email" class="font-weight-bold">Электронная почта * </label>
                        <input type="email" name="email" class="form-control border-black-1" id="email"
                               aria-describedby="email" value="{{$application->email}}">
                        @if($errors->has('email'))
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                        @endif
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="text-center py-2">
                        <h4 class="font-weight-bold">Дополнительные документы</h4>
                    </div>
                    <div class="form-group my-4">
                        <label for="photo" class="font-weight-bold">Фото *</label>
                        <br>
                        <input type="file" name="photo" id="files"/>
                        <a href="{{$application->getFile("photo")}}"target="blank">Посмотреть</a>
                        @if($errors->has('photo'))
                            <small class="text-danger">{{ $errors->first('photo') }}</small>
                        @endif
                    </div>

                    <div class="form-group my-4">
                        <label for="id_document" class="font-weight-bold">Удостоверение личности *</label>
                        <br>
                        <input type="file" name="id_document" id="id_document"/>
                        <a href="{{$application->getFile("id_document")}}"target="blank">Посмотреть</a>
                    @if($errors->has('id_document'))
                            <small class="text-danger">{{ $errors->first('id_document') }}</small>
                        @endif
                    </div>
                    <div class="form-group my-4">
                        <label for="autobiography" class="font-weight-bold">Автобиография *</label>
                        <br>
                        <input type="file" name="autobiography" id="autobiography"/>
                        <a href="{{$application->getFile("autobiography")}}"target="blank">Посмотреть</a>

                    @if($errors->has('autobiography'))
                            <small class="text-danger">{{ $errors->first('autobiography') }}</small>
                        @endif
                    </div>

                    <div class="form-group my-4">
                        <label for="diploma" class="font-weight-bold">Диплом с приложением *</label>
                        <br>
                        <input type="file" name="diploma" id="diploma"/>
                        <a href="{{$application->getFile("diploma")}}"target="blank">Посмотреть</a>

                    @if($errors->has('diploma'))
                            <small class="text-danger">{{ $errors->first('diploma') }}</small>
                        @endif
                    </div>

                    <div class="form-group my-4">
                        <label for="declaration" class="font-weight-bold">Декларация о доходах и имуществе *</label>
                        <br>
                        <input type="file" name="declaration" id="declaration" value="{{old("declaration")}}"/>
                        <a href="{{$application->getFile("declaration")}}"target="blank">Посмотреть</a>

                    @if($errors->has('declaration'))
                            <small class="text-danger">{{ $errors->first('declaration') }}</small>
                        @endif
                    </div>

                    <div class="form-group my-4">
                        <label for="work_book" class="font-weight-bold">Трудовая книжка *</label>
                        <br>
                        <input type="file" name="work_book" id="work_book" value="{{old("work_book")}}"/>
                        <a href="{{$application->getFile("work_book")}}"target="blank">Посмотреть</a>

                    @if($errors->has('work_book'))
                            <small class="text-danger">{{ $errors->first('work_book') }}</small>
                        @endif
                    </div>

                    <div class="form-group my-4">
                        <label for="military_id" class="font-weight-bold">Военный билет *</label>
                        <br>
                        <input type="file" name="military_id" id="military_id" value="{{old("military_id")}}"/>
                        <a href="{{$application->getFile("military_id")}}"target="blank">Посмотреть</a>

                    @if($errors->has('military_id'))
                            <small class="text-danger">{{ $errors->first('military_id') }}</small>
                        @endif
                    </div>
                </div>


                <div class="col-md-12 table-responsive">
                    <div class="text-center py-2">
                        <h4 class="font-weight-bold">Анкета на близких родственников</h4>
                    </div>
                    <input type="text" id="anketa" hidden name="anketa[]" multiple value="{{json_encode($application->anketa)}}">
                    <div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ФИО</th>
                                <th scope="col">Статус</th>
                                <th scope="col">Год рождения</th>
                                <th scope="col">ИИН</th>
                                <th scope="col">Действия</th>
                            </tr>
                            </thead>
                            <tbody id="relative_table">


                            </tbody>
                        </table>


                        <button id="add_member" class="add_button">

                            <i class="fas fa-plus"></i>
                        </button>

                    </div>
                </div>
                <input type="number" id="type" name="type" hidden value="0">

                <div class="row justify-content-between w-100 px-2 mx-0 my-4">
                    <button class="btn main-button" type="submit" id="save_button">Сохранить</button>
                    <button class="btn main-button" type="submit" id="send_button">Отправить</button>
                </div>
            </div>
        </form>
            <div class="row bg-white d-flex px-3">
                <form action="{{route("delete-request")}}" method="post">
                    @csrf
                    @method("delete")
                    <input name="id" hidden value="{{$application->id}}">
                    <button class="btn btn-danger" type="submit" id="delete_button">Удалить</button>
                </form>
            </div>

    </div>
    {{--    Modal--}}
    <div class="modal fade" id="addRelative" tabindex="-1" role="dialog" aria-labelledby="addRelative"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Добавить члена семьи</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group my-4">
                        <label for="relative_name" class="font-weight-bold">Ф.И.О *</label>
                        <input type="text" name="relative_name" class="form-control border-black-1" id="relative_name"
                               aria-describedby="relative_name" value="{{old("relative_name")}}">
                        @if($errors->has('relative_name'))
                            <small class="text-danger">{{ $errors->first('relative_name') }}</small>
                        @endif
                    </div>
                    <div class="form-group my-4">
                        <label for="relative_birthdate" class="font-weight-bold">Дата рождения *</label>
                        <input type="text" name="relative_birthdate" class="form-control border-black-1" id="relative_birthdate"
                               data-date-format="mm/dd/yyyy"
                               aria-describedby="relative_birthdate" value="{{old("relative_birthdate")}}">
                        @if($errors->has('relative_birthdate'))
                            <small class="text-danger">{{ $errors->first('relative_birthdate') }}</small>
                        @endif
                    </div>
                    <div class="form-group my-4">
                        <label for="relative_status" class="font-weight-bold">Статус *</label>
                        <input type="text" name="relative_status" class="form-control border-black-1" id="relative_status"
                               aria-describedby="relative_status" value="{{old("relative_status")}}">
                        @if($errors->has('relative_status'))
                            <small class="text-danger">{{ $errors->first('relative_status') }}</small>
                        @endif
                    </div>

                    <div class="form-group my-4">
                        <label for="relative_iin" class="font-weight-bold">ИИН *</label>
                        <input type="number" name="relative_iin" class="form-control border-black-1" id="relative_iin"
                               aria-describedby="relative_iin" value="{{old("relative_iin")}}">
                        @if($errors->has('relative_iin'))
                            <small class="text-danger">{{ $errors->first('relative_iin') }}</small>
                        @endif
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-primary" id="add_relative">Отправить</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@push("scripts")
    <script>
        drawTable();
        $(document).ready(function () {
            drawTable();
            $('.car_license').select2();

            $("#save_button").click(function (e) {
                e.preventDefault();
                $("#type").attr("value", 0);
                $("#saveRequestForm").submit();

            });

            $("#send_button").click(function (e) {
                e.preventDefault();
                $("#type").attr("value", 1);
                $("#saveRequestForm").submit();
            });
            $('#relative_birthdate').datepicker({
                format: 'mm/dd/yyyy',
            });

            $("#add_relative").click(
                function () {
                    if($("#anketa").val().length > 0){
                        let relatives = JSON.parse($("#anketa").val());
                        if(relatives.length > 0){
                            if(typeof relatives[0] == "string"){
                                relatives = JSON.parse(relatives);
                            }
                        }
                    }
                    else{
                        let relatives = [];
                    }
                    let relative_name = $("#relative_name").val();
                    let relative_birthdate = $("#relative_birthdate").val();
                    let relative_iin = $("#relative_iin").val();
                    let relative_status = $("#relative_status").val();
                    if(relative_name.length >0 && relative_iin.length == 12 && relative_birthdate.length>0 && relative_status.length>0){
                        relatives.push({"relative_name":relative_name, "relative_birthdate":relative_birthdate, "relative_iin":relative_iin, "relative_status":relative_status})
                        $("#relative_table").append('<tr><td>'+ relative_name +'</td><td>'+relative_name+'</td><td>'+relative_birthdate+'</td><td>'+relative_iin+'</td><td><p class="btn btn-danger" onclick="deleteRelative('+ relative_iin+')">Удалить</p></td></tr>');
                        $("#anketa").attr("value",JSON.stringify(relatives));
                        clearInput();
                    }
                    else {
                        alert("Заполните поля корректно")
                    }

                }
            );
        });

        function clearInput(){
            $("#relative_name").val("");
            $("#relative_birthdate").val("");
            $("#relative_iin").val("");
            $("#relative_status").val("");
        }

        function deleteRelative(relative_iin){
            let relatives = [];
            if($("#anketa").val().length > 0){
                    relatives = JSON.parse($("#anketa").val());
                    if(typeof relatives[0] == "string"){
                        relatives = JSON.parse(relatives);
                    }
            }
            for(let i =0; i < relatives.length; i++){
                if(relatives[i].relative_iin == relative_iin){
                    relatives.splice(i,1);
                }
            }
            $("#anketa").attr("value",JSON.stringify(relatives));
             drawTable();
        }

        function drawTable(){
            $("#relative_table").empty();
            if($("#anketa").val().length > 0){
                 relatives = JSON.parse($("#anketa").val());
                if(typeof relatives[0] == "string"){
                    relatives = JSON.parse(relatives);
                }            }
                for(let i =0; i < relatives.length; i++){
                    $("#relative_table").append('<tr><td>'+ relatives[i].relative_name +'</td><td>'+relatives[i].relative_name+'</td><td>'+relatives[i].relative_birthdate+'</td><td>'+relatives[i].relative_iin+'</td><td><p class="btn btn-danger" onclick="deleteRelative('+ relatives[i].relative_iin+')">Удалить</p></td></tr>');
                }
        }
        $("#add_member").click(function (e) {
            e.preventDefault();
            $('#addRelative').modal("show");
        })
    </script>
@endpush
