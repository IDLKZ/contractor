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
                    Заявка № 000001
                </p>
            </div>

        </div>
        <form>
          <div class="row bg-white py-4 px-2">

            <div class="col-md-6">
                <div class="text-center py-2">
                    <h4 class="font-weight-bold">Анкета кандидата</h4>
                </div>

                <div class="form-group my-4">
                    <label for="name" class="font-weight-bold">Ф.И.О</label>
                    <input type="text" name="name" class="form-control border-black-1" id="name" aria-describedby="name">
                </div>

                <div class="form-group my-4">
                    <label for="birthplace" class="font-weight-bold">Место жительства (Область, Город, Улица, Дом, Квартира)</label>
                    <input type="text" name="birthplace" class="form-control border-black-1" id="birthplace" aria-describedby="birthplace">
                </div>

                <div class="form-group my-4">
                    <label for="iin" class="font-weight-bold">ИИН</label>
                    <input type="text" name="iin" class="form-control border-black-1" id="iin" aria-describedby="iin">
                </div>


                <div class="form-group my-4">
                    <label for="education" class="font-weight-bold">Образование</label>
                    <select class="form-control border-black-1" name="education" id="education">
                        <option value="Общее среднее образование"> Общее среднее образование </option>
                        <option value="Техническое и профессиональное образование: квалификации рабочего и специалиста среднего звена"> Техническое и профессиональное образование: квалификации рабочего и специалиста среднего звена </option>
                        <option value="Послесреднее образование: квалификации рабочего с высоким уровнем разряда">Послесреднее образование: квалификации рабочего с высоким уровнем разряда</option>
                        <option value="Неполное высшее образование – прикладной бакалавриат">Неполное высшее образование – прикладной бакалавриат</option>
                        <option value="Высшее образование: квалификации бакалавра, специалиста для медицинских специальностей">Высшее образование: квалификации бакалавра, специалиста для медицинских специальностей</option>
                        <option value="Послевузовское образование: квалификации магистра и доктора PhD.">Послевузовское образование: квалификации магистра и доктора PhD</option>
                    </select>
                </div>

                <div class="form-group my-4">
                    <label for="car_license" class="font-weight-bold">Водительские права</label>
                    <select class="form-control car_license" name="car_license[]" id="car_license" multiple  style="border: 1px solid black; border-radius: 10px">
                        <option value="Нет прав">Нет прав</option>
                        <option value="Категория A">Категория A</option>
                        <option value="Категория B">Категория B</option>
                        <option value="Категория C">Категория C</option>
                        <option value="Категория D">Категория D</option>
                        <option value="Категория T">Категория T</option>
                    </select>
                </div>

                <div class="form-group my-4">
                    <label for="experience" class="font-weight-bold">Опыт работы</label>
                    <select class="form-control border-black-1" name="experience" id="experience">
                        <option value="Нет опыта работы"> Нет опыта работы</option>
                        <option value="1 год"> 1 год </option>
                        <option value="Более 2х лет"> Более 2х лет </option>
                        <option value="Более 5 лет"> Более 5 лет  </option>
                        <option value="Более 10 лет"> Более 10 лет  </option>
                    </select>
                </div>

                <div class="mt-2">
                    <label class="font-weight-bold">Отношение к воинской службе:</label>
                </div>

                <div class="form-group my-4">
                    <label for="army_service" class="font-weight-bold">1)прохождение воинской службы</label>
                    <select class="form-control border-black-1" name="army_service" id="army_service">
                        <option value="Да">Да</option>
                        <option value="Нет">Нет</option>
                    </select>
                </div>

                <div class="form-group my-4">
                    <label for="army_section_id" class="font-weight-bold">Номер воинской части </label>
                    <input type="text" name="army_section_id" class="form-control border-black-1" id="army_section_id" aria-describedby="army_section_id">
                </div>

                <div class="form-group my-4">
                    <label for="position" class="font-weight-bold">Должность </label>
                    <input type="text" name="position" class="form-control border-black-1" id="position" aria-describedby="position">
                </div>

                <div class="form-group my-4">
                    <label for="rank" class="font-weight-bold">Воинское звание </label>
                    <input type="text" name="rank" class="form-control border-black-1" id="rank" aria-describedby="rank">
                </div>

                <div class="form-group my-4">
                    <label for="vtsh" class="font-weight-bold">2)	прошедшие подготовку в филиалах ВТШ МО РК по программе военнообученного резерва:</label>
                    <select class="form-control border-black-1" name="vtsh" id="vtsh">
                        <option value="Да">Да</option>
                        <option value="Нет">Нет</option>
                    </select>
                </div>

                <div class="form-group my-4">
                    <label for="branch_name" class="font-weight-bold">Наименование филиала</label>
                    <input type="text" name="branch_name" class="form-control border-black-1" id="branch_name" aria-describedby="branch_name">
                </div>

                <div class="form-group my-4">
                    <label for="year_service" class="font-weight-bold">Год обучения</label>
                    <input type="text" name="year_service" class="form-control border-black-1" id="year_service" aria-describedby="year_service">
                </div>

                <div class="mt-2">
                    <label class="font-weight-bold">Указать должность, на какую планирует поступить:</label>
                </div>

                <div class="form-group my-4">
                    <label for="wanted_position" class="font-weight-bold">Наименование должности </label>
                    <input type="text" name="wanted_position" class="form-control border-black-1" id="wanted_position" aria-describedby="wanted_position">
                </div>

                <div class="form-group my-4">
                    <label for="contract_term" class="font-weight-bold">Срок заключения контракта</label>
                    <select class="form-control border-black-1" name="contract_term" id="contract_term">
                        <option value="3 года">3 года</option>
                        <option value="5 лет">5 лет</option>
                        <option value="10 лет">10 лет</option>
                    </select>
                </div>

                <div class="form-group my-4">
                    <label for="region" class="font-weight-bold">Регион </label>
                    <input type="text" name="region" class="form-control border-black-1" id="region" aria-describedby="region">
                </div>

                <div class="form-group my-4">
                    <label for="phone" class="font-weight-bold">Телефон </label>
                    <input type="text" name="phone" class="form-control border-black-1" id="phone" aria-describedby="phone">
                </div>

                <div class="form-group my-4">
                    <label for="email" class="font-weight-bold">Электронная почта </label>
                    <input type="email" name="email" class="form-control border-black-1" id="email" aria-describedby="email">
                </div>

            </div>

              <div class="col-md-6">
                  <div class="text-center py-2">
                      <h4 class="font-weight-bold">Дополнительные документы</h4>
                  </div>
                  <div class="form-group my-4">
                      <label for="photo" class="font-weight-bold">Фото</label>
                      <br>
                      <input type="file" name="photo" id="files" hidden/>
                      <label for="photo" class="color-blue-1">Прикрепить</label>
                  </div>

                  <div class="form-group my-4">
                      <label for="id_document" class="font-weight-bold">Удостоверение личности</label>
                      <br>
                      <input type="file" name="id_document" id="id_document" hidden/>
                      <label for="id_document" class="color-blue-1">Прикрепить</label>
                  </div>
                  <div class="form-group my-4">
                      <label for="autobiography" class="font-weight-bold">Автобиография</label>
                      <br>
                      <input type="file" name="autobiography" id="autobiography" hidden/>
                      <label for="autobiography" class="color-blue-1">Прикрепить</label>
                  </div>

                  <div class="form-group my-4">
                      <label for="diploma" class="font-weight-bold">Диплом с приложением</label>
                      <br>
                      <input type="diploma" name="diploma" id="diploma" hidden/>
                      <label for="diploma" class="color-blue-1">Прикрепить</label>
                  </div>

                  <div class="form-group my-4">
                      <label for="declaration" class="font-weight-bold">Декларация о доходах и имуществе</label>
                      <br>
                      <input type="declaration" name="declaration" id="declaration" hidden/>
                      <label for="declaration" class="color-blue-1">Прикрепить</label>
                  </div>

                  <div class="form-group my-4">
                      <label for="work_book" class="font-weight-bold">Трудовая книжка</label>
                      <br>
                      <input type="work_book" name="work_book" id="work_book" hidden/>
                      <label for="work_book" class="color-blue-1">Прикрепить</label>
                  </div>

                  <div class="form-group my-4">
                      <label for="millitary_id" class="font-weight-bold">Военный билет</label>
                      <br>
                      <input type="millitary_id" name="millitary_id" id="millitary_id" hidden/>
                      <label for="millitary_id" class="color-blue-1">Прикрепить</label>
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

              <div class="row justify-content-between w-100 px-2 mx-0 my-4">
                  <button class="btn main-button" type="submit">Сохранить</button>
                  <button class="btn main-button" type="submit">Отправить</button>


              </div>
          </div>


        </form>




    </div>

@endsection
@push("scripts")
    <script>

        $(document).ready(function() {
            $('.car_license').select2();
        });

    </script>
@endpush
