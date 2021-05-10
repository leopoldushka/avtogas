@extends ('layouts.global')
@section('content')
    <main role="main" class="flex-shrink-0">
        <div class="container">

            <form method="POST" action="{{route('instance_store')}}">

                <div class="form-group">
                    <label for="exampleFormControlInput1">Добавить инстанцию</label>
                    <input class="form-control" id="exampleFormControlInput1" name="name">
                </div>

                <button type="submit" class="btn btn-default">Отправить</button>
                {{ csrf_field() }}
            </form>

        </div>
    </main>



@endsection
