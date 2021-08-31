@extends ('layouts.global')
@section('content')

<!-- Begin page content -->
<section>
    <div class="container">

        <div class="row">

            <!-- RIGHT -->
            <div class="col-lg-9 col-md-9 order-md-2 order-lg-2">







                <!-- Pagination Default -->

                <!-- /Pagination Default -->

            </div>


            <!-- LEFT -->
            <div class="col-lg-3 col-md-3 order-md-1 order-lg-1">

                <!-- CATEGORIES -->
                <div class="side-nav mb-60">

                    <div class="side-nav-head">
                        <button class="fa fa-bars"></button>
                        <h4>Категории товара</h4>
                    </div>

                    <ul class="list-group list-group-bordered list-group-noicon uppercase">
                        @foreach($categories as $category)
                        <li class="list-group-item active">
                            <a class="dropdown-toggle" href="#">{{ $category->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / -->

@endsection
