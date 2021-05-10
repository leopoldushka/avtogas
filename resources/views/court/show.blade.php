@extends ('layouts.global')
@section('content')

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">

    <form method="POST" action="{{route('courts.store')}}">
        <div class="form-group">
            <label for="exampleFormControlSelect1" >Юрисдикция: {{ $court->jurisdiction->name }}</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1" >Суд: {{ $court->trial->name }}</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1" >Ответственное лицо: {{ $court->user->name }}</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Истец: {{ $court->plaintiff }}</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Ответчик: {{ $court->defendant }}</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Третье лицо: {{ $court->third_party }}</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Заинтересованное лицо: {{ $court->interested_person }}</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Предмет спора: {{ $court->issue }}</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1" >Направление: {{ $court->direction->name }}</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1" >Инстанция: {{ $court->instance->name }}</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1" >Аппеляция: {{ $court->appeal->name }}</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Результат: {{ $court->result }}</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1" >Дата создания: {{ $court->date_create }}</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1" >Дата апеляции: {{ $court->date_appo }} {{ $court->time_appo }}</label>
        </div>
        <div class="form-group">
             <label for="exampleFormControlTextarea1" >Комментарий</label>
             <p>{{ $court->comment }}</p>
        </div>
        <a href="/courts" class="btn btn-secondary btn-lg" tabindex="-1" role="button" >К списку</a>
    </form>

  </div>
</main>

@endsection
