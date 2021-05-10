@extends ('layouts.global')
@section('content')

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">

    <form method="POST" action="{{route('courts.update',[$court->id])}}">
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="exampleFormControlSelect1" >Юрисдикция</label>
            <select class="form-control" id="exampleFormControlSelect1" name="jurisdiction_id">
                <option value="{{ $court->jurisdiction->id }}">{{ $court->jurisdiction->name }}</option>
                @foreach($jurisdictions as $jurisdiction)
                    <option value="{{ $jurisdiction->id }}">{{ $jurisdiction->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1" >Суд</label>
            <select class="form-control" id="exampleFormControlSelect1" name="trial_id">
                <option value="{{ $court->trial->id }}">{{ $court->trial->name }}</option>
                @foreach($trials as $trial)
                    <option value="{{ $trial->id }}">{{ $trial->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1" >Ответственное лицо</label>
            <select class="form-control" id="exampleFormControlSelect1" name="user_id">
                <option value="{{ $court->user->id }}">{{ $court->user->name }}</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Истец</label>
            <input class="form-control" id="exampleFormControlInput1" name="plaintiff" value="{{ $court->plaintiff }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Ответчик</label>
            <input class="form-control" id="exampleFormControlInput1" name="defendant" value="{{ $court->defendant }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Третье лицо</label>
            <input class="form-control" id="exampleFormControlInput1" name="third_party" value="{{ $court->third_party }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Заинтересованное лицо</label>
            <input class="form-control" id="exampleFormControlInput1" name="interested_person" value="{{ $court->interested_person }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Предмет спора</label>
            <input class="form-control" id="exampleFormControlInput1" name="issue" value="{{ $court->issue }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1" >Направление</label>
            <select class="form-control" id="exampleFormControlSelect1" name="direction_id">
                <option value="{{ $court->direction->id }}">{{ $court->direction->name }}</option>
                @foreach($directions as $direction)
                    <option value="{{ $direction->id }}">{{ $direction->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1" >Инстанция</label>
            <select class="form-control" id="exampleFormControlSelect1" name="instance_id">
                <option value="{{ $court->instance->id }}">{{ $court->instance->name }}</option>
                @foreach($instances as $instance)
                    <option value="{{ $instance->id }}">{{ $instance->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1" >Аппеляция</label>
            <select class="form-control" id="exampleFormControlSelect1" name="appeal_id">
                <option value="{{ $court->appeal->id }}">{{ $court->appeal->name }}</option>
                @foreach($appeals as $appeal)
                    <option value="{{ $appeal->id }}">{{ $appeal->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Результат</label>
            <input class="form-control" id="exampleFormControlInput1" name="result" value="{{ $court->result }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1" >Дата создания</label>
            <input type="text" id="datepicker" name="date_create" value="{{ $court->date_create }}">
            <script>
                $(function(){
                    $("#datepicker").datepicker();
                });
            </script>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1" >Дата апеляции</label>
            <input type="text" id="datepicker1" name="date_appo" value="{{ $court->date_appo }}">
            <script>
                $(function(){
                    $("#datepicker1").datepicker();
                });
            </script>
            <input type="text" id="time" name="time_appo" value="{{ $court->time_appo }}">
        </div>
        <div class="form-group">
         <label for="exampleFormControlTextarea1" >Комментарий</label>
         <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $court->comment }}</textarea>
        </div>
              <button type="submit" class="btn btn-default">Отправить</button>
      {{ csrf_field() }}
    </form>

  </div>
</main>

@endsection
