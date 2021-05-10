@extends ('layouts.global')
@section('content')

<!-- Begin page content -->
  <main role="main" class="flex-shrink-0">
    <div class="container">
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-in-work" role="tabpanel" aria-labelledby="nav-home-tab">
          <table class="table table-striped">
            <thead>
            <tr>
              <th scope="col">Поступление</th>
              <th scope="col">Дата назначения</th>
              <th scope="col">Предмет спора</th>
              <th scope="col">Суд, судья</th>
              <th scope="col">Истец</th>
              <th scope="col">Ответчик</th>
              <th scope="col">Направление</th>
              <th scope="col">Действие</th>
            </tr>
            </thead>
            <tbody>
                @foreach($courts as $court)

                    <tr>

                        <td>{{ $court->date_create }}</td>
                        <td>{{ $court->date_appo }}</td>
                        <td>{{ $court->issue }}</td>
                        <td>{{ $court->trial->name}}</td>
                        <td>{{ $court->plaintiff }}</td>
                        <td>{{ $court->defendant }}</td>
                        <td>{{ $court->direction->name }}</td>
                        <td><div class="dropdown">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Выбрать действие
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('courts.show', [$court->id]) }}">Просмотр</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('courts.edit', [$court->id]) }} ">Редактировать</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href=" ">Удалить</a>
                                </div>
                            </div>
                        </td>
                    </tr>

                @endforeach
            </tbody>
          </table>
            <a href="/courts/create" class="btn btn-secondary btn-lg" tabindex="-1" role="button" >Добавить</a>
            <a href="/search_courts" class="btn btn-secondary btn-lg" tabindex="-1" role="button" >Отфильтровать</a>
        </div>

      </div>
    </div>
  </main>

@endsection
