@extends ('layouts.global')
@section('content')

<!-- Begin page content -->
<section>
    <div class="container">

        <div class="row">

            <!-- RIGHT -->
            <div class="col-lg-9 col-md-9 col-sm-9 order-md-2 order-lg-2">

                <div class="row">

                    <!-- IMAGE -->
                    <div class="col-lg-6 col-sm-6">

                        <div class="thumbnail relative mb-3">

                            <!--
                                IMAGE ZOOM

                                data-mode="mouseover|grab|click|toggle"
                            -->
                            <figure id="zoom-primary" class="zoom" data-mode="mouseover">
                                <!--
                                    zoom buttton

                                    positions available:
                                        .bottom-right
                                        .bottom-left
                                        .top-right
                                        .top-left
                                -->


                                <!--
                                    image

                                    Extra: add .image-bw class to force black and white!
                                -->
                                <img class="img-fluid" src="{{ asset('') }}storage/{{$product->link}}" width="1200" height="1500" alt="This is the product title" />
                            </figure>

                        </div>



                    </div>
                    <!-- /IMAGE -->

                    <!-- ITEM DESC -->
                    <div class="col-lg-6 col-sm-6">

                        <!-- buttons -->

                        <!-- /buttons -->

                        <!-- price -->
                        <div class="shop-item-price">
                            Цена: {{$product->price}}
                        </div>
                        <!-- /price -->

                        <hr />

                        <div class="clearfix mb-30">
                            <span class="float-right text-success"><i class="fa fa-check"></i> Статус наличия</span>
                            <!--
                            <span class="float-right text-danger"><i class="fa fa-remove"></i> Out of Stock</span>
                            -->


                        </div>


                        <!-- short description -->
                        <p>{{$product->Text}}</p>
                        <!-- /short description -->


                        <!-- countdown -->
                        <div class="text-center">
                            <h5>Производитель</h5>

                        </div>
                        <!-- /countdown -->


                        <hr />


                        <hr />

                        <small class="text-muted">
                            Возможная информация
                        </small>

                        <hr />


                    </div>
                    <!-- /ITEM DESC -->

                </div>




                <hr class="mt-80 mb-80" />


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
