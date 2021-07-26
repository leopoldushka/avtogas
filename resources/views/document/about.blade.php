@extends ('layouts.global')
@section('content')

<!-- Begin page content -->
<section>
    <div class="container">

        <div class="row">

            <!-- FORM -->
            <div class="col-md-9">

                <h3>Расположение на карте города</h3>
                <img class="img-fluid img-thumbnail" src="{{ asset('img/station.jpg') }}" alt="IMG_station" />


            </div>
            <!-- /FORM -->


            <!-- INFO -->
            <div class="col-md-3">

                <h2>Наше расположение</h2>

                <p>

                </p>

                <hr />

                <p>
                    <span class="block"><strong><i class="fa fa-map-marker"></i> Адрес:</strong> Костюшко - Григоровича, 29ст2 </span>
                    <span class="block"><strong><i class="fa fa-phone"></i> Телефон:</strong> <a href="tel:1800-555-1234">8-914-460-98-23, 8-914-461-51-19, 8-924-519-92-97</a></span>
                    <span class="block"><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="mailto:Avtogas75@mail.ru">Avtogas75@mail.ru</a></span>
                </p>

                <hr />

                <h4 class="font300">Часы работы</h4>
                <p>
                    <span class="block"><strong>Понедельник - Пятница</strong>10:00-18:00 вечера</span>
                    <span class="block"><strong>Суббота:</strong>10:00-14:00</span>
                    <span class="block"><strong>Воскресень:</strong> Выходной</span>
                </p>

            </div>
            <!-- /INFO -->

        </div>

    </div>
</section>
<!-- / -->

@endsection
