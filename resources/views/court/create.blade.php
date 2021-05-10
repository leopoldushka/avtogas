@extends ('layouts.global')
@section('content')

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">

    <form method="POST" action="{{route('courts.store')}}">
        <div class="form-group">
            <label for="exampleFormControlSelect1" >Юрисдикция</label>
            <select class="form-control" id="exampleFormControlSelect1" name="jurisdiction_id">
                <option value="0"> </option>
                @foreach($jurisdictions as $jurisdiction)
                    <option value="{{ $jurisdiction->id }}">{{ $jurisdiction->name }}</option>
                @endforeach

            </select>
            <a href="/jurisdiction" class="btn btn-secondary btn-sm" tabindex="-1" role="button" >Добавить</a>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1" >Суд</label>
            <select class="form-control" id="exampleFormControlSelect1" name="trial_id">
                <option value="0"> </option>
                @foreach($trials as $trial)
                    <option value="{{ $trial->id }}">{{ $trial->name }}</option>
                @endforeach
            </select>
            <a href="/trials" class="btn btn-secondary btn-sm" tabindex="-1" role="button" >Добавить</a>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1" >Ответственное лицо</label>
            <select class="form-control" id="exampleFormControlSelect1" name="user_id">
                <option value="0"> </option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Истец</label>
            <input class="form-control" id="exampleFormControlInput1" name="plaintiff">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Ответчик</label>
            <input class="form-control" id="exampleFormControlInput1" name="defendant">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Третье лицо</label>
            <input class="form-control" id="exampleFormControlInput1" name="third_party">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Заинтересованное лицо</label>
            <input class="form-control" id="exampleFormControlInput1" name="interested_person">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Предмет спора</label>
            <input class="form-control" id="exampleFormControlInput1" name="issue">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1" >Направление</label>
            <select class="form-control" id="exampleFormControlSelect1" name="direction_id">
                <option value="0"> </option>
                @foreach($directions as $direction)
                    <option value="{{ $direction->id }}">{{ $direction->name }}</option>
                @endforeach
            </select>
            <a href="/direction" class="btn btn-secondary btn-sm" tabindex="-1" role="button" >Добавить</a>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1" >Инстанция</label>
            <select class="form-control" id="exampleFormControlSelect1" name="instance_id">
                <option value="0"> </option>
                @foreach($instances as $instance)
                    <option value="{{ $instance->id }}">{{ $instance->name }}</option>
                @endforeach
            </select>
            <a href="/instance" class="btn btn-secondary btn-sm" tabindex="-1" role="button" >Добавить</a>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1" >Аппеляция</label>
            <select class="form-control" id="exampleFormControlSelect1" name="appeal_id">
                <option value="0"> </option>
                @foreach($appeals as $appeal)
                    <option value="{{ $appeal->id }}">{{ $appeal->name }}</option>
                @endforeach
            </select>
            <a href="/appeal" class="btn btn-secondary btn-sm" tabindex="-1" role="button" >Добавить</a>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Результат</label>
            <input class="form-control" id="exampleFormControlInput1" name="result">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1" >Дата создания</label>
            <input type="text" id="datepicker" name="date_create">
            <script>
                $(function(){
                    $("#datepicker").datepicker();
                });
            </script>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1" >Дата апеляции</label>
            <input type="text" id="datepicker1" name="date_appo">
            <script>
                $(function(){
                    $("#datepicker1").datepicker();
                });
            </script>
            <input type="text" id="time" name="time_appo">
        </div>
        <div class="form-group">
         <label for="exampleFormControlTextarea1" >Комментарий</label>
         <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
              <button type="submit" class="btn btn-default">Отправить</button>
      {{ csrf_field() }}
    </form>

  </div>
</main>

@endsection
