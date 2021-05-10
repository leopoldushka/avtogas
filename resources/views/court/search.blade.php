@extends ('layouts.global')
@section('content')

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">

    <form method="POST" action="">
        <div class="form-group">
            <label for="exampleFormControlSelect1" >Суд</label>
            <select class="form-control" id="exampleFormControlSelect1" name="trial_id">
                <option value="0"> </option>
                @foreach($trials as $trial)
                    <option value="{{ $trial->id }}">{{ $trial->name }}</option>
                @endforeach
            </select>
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
            <label for="exampleFormControlSelect1" >Направление</label>
            <select class="form-control" id="exampleFormControlSelect1" name="direction_id">
                <option value="0"> </option>
                @foreach($directions as $direction)
                    <option value="{{ $direction->id }}">{{ $direction->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1" >Инстанция</label>
            <select class="form-control" id="exampleFormControlSelect1" name="instance_id">
                <option value="0"> </option>
                @foreach($instances as $instance)
                    <option value="{{ $instance->id }}">{{ $instance->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1" >Дата создания</label>
            <input type="text" id="datepicker" name="date_create"> <input type="text" id="datepicker3" name="date_create">
            <script>
                $(function(){
                    $("#datepicker").datepicker();
                });
            </script>
            <script>
                $(function(){
                    $("#datepicker3").datepicker();
                });
            </script>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1" >Дата апеляции</label>
            <input type="text" id="datepicker1" name="date_appo"><input type="text" id="datepicker4" name="date_create">
            <script>
                $(function(){
                    $("#datepicker1").datepicker();
                });
            </script>
            <script>
                $(function(){
                    $("#datepicker4").datepicker();
                });
            </script>

        </div>

              <button type="submit" class="btn btn-default">Отправить</button>
      {{ csrf_field() }}
    </form>

  </div>
</main>

@endsection
