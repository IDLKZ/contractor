@extends("layout.user.template")
@push("styles")


@endpush
@section("content")

    <div class="container min-height-100 py-4">
        <div class="row">
            <div class="col-md-12 text-center my-4 py-4">
                <p class="main-title-1 text-white">
                    Контракт № 00000000
                </p>
            </div>
        </div>


        <div class="row card bg-white px-2 py-2">
        <div class="col-md-12 py-2 px-2">
            <p>ТРУДОВОЙ ДОГОВОР&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; г. &laquo;&raquo;&nbsp; 2021 г.<br />
                &nbsp;в лице , действующего на основании , именуемый в дальнейшем &laquo;Работодатель&raquo;, с одной стороны, и гр. , паспорт: серия , № , выданный , проживающий по адресу: , именуемый в дальнейшем &laquo;Работник&raquo;, с другой стороны, именуемые в дальнейшем &laquo;Стороны&raquo;, заключили настоящий договор, в дальнейшем &laquo;Договор&raquo;, о нижеследующем:<br />
                1. ПРЕДМЕТ ТРУДОВОГО ДОГОВОРА<br />
                1.1. Работник принимается к Работодателю для выполнения работы в должности&nbsp; в&nbsp; .<br />
                &nbsp;<br />
                1.2. Работник обязан приступить к работе с &laquo;&raquo;2021 г.<br />
                &nbsp;<br />
                1.3. Настоящий трудовой договор вступает в силу с момента подписания его обеими сторонами и заключен на неопределенный срок.<br />
                &nbsp;<br />
                1.4. Работа по настоящему договору является для Работника основной.<br />
                &nbsp;<br />
                1.5. Местом работы Работника является&nbsp; по адресу:&nbsp; .<br />
                &nbsp;<br />
                2. ПРАВА И ОБЯЗАННОСТИ СТОРОН<br />
                2.1. Работник подчиняется непосредственно Генеральному директору.<br />
                &nbsp;<br />
                2.2. Работник обязан:<br />
                &nbsp;<br />
                2.2.1. Выполнять следующие должностные обязанности:&nbsp; .<br />
                &nbsp;<br />
                2.2.2. Соблюдать установленные Работодателем Правила внутреннего трудового распорядка, производственную и финансовую дисциплину, добросовестно относиться к исполнению своих должностных обязанностей, указанных в п.2.2.1. настоящего трудового договора.<br />
                &nbsp;<br />
                2.2.3. Беречь имущество Работодателя, соблюдать конфиденциальность, не разглашать информацию и сведения, являющиеся коммерческой тайной Работодателя.<br />
                &nbsp;<br />
                2.2.4. Не давать интервью, не проводить встречи и переговоры, касающиеся деятельности Работодателя, без разрешения его руководства.<br />
                &nbsp;<br />
                2.2.5. Соблюдать требования охраны труда, техники безопасности и производственной санитарии.<br />
                &nbsp;<br />
                2.2.6. Способствовать созданию на работе благоприятного делового и морального климата.</p>

        </div>
            @if($attempt->signed_status == 0)
        <div class="col-md-12 text-right">
            <form action="{{route("signContract")}}" method="post">
                @csrf
                <input hidden name="id" value="{{$attempt->id}}">
                <button class="btn main-button">Подписать ЭЦП</button>
            </form>
        </div>
            @endif
        </div>


        @endsection

        @push("scripts")
            <script>




            </script>
    @endpush
