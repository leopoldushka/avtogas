@extends ('layouts.global')
@section('content')

<!-- Begin page content -->
<section>
    <div class="container">

        <div class="row">

            <!-- RIGHT -->
            <div class="col-lg-9 col-md-9 order-md-2 order-lg-2">





                <!-- LIST OPTIONS -->
                <div class="clearfix shop-list-options mb-20">

                    <div class="options-left">
                        <select>
                            <option value="pos_asc">Position ASC</option>
                            <option value="pos_desc">Position DESC</option>
                            <option value="name_asc">Name ASC</option>
                            <option value="name_desc">Name DESC</option>
                            <option value="price_asc">Price ASC</option>
                            <option value="price_desc">Price DESC</option>
                        </select>

                        <a class="btn active fa fa-th" href="shop-4col-left.html"><!-- grid --></a>
                        <a class="btn fa fa-list" href="shop-1col-left.html"><!-- list --></a>
                    </div>

                </div>
                <!-- /LIST OPTIONS -->


                <ul class="shop-item-list row list-inline m-0">


                @foreach($products as $product)
                    <!-- ITEM -->
                    <li class="col-lg-3">
                            <div class="shop-item product-item">
                                <div class="thumbnail">
                                    <!-- product image(s) -->
                                    <a class="shop-item-image" href="{{ route('product.show', [$product->id]) }}">
                                        <img class="img-fluid" src="{{ asset('') }}storage/{{$product->link}}" alt="shop hover image" />
                                    </a>
                                    <!-- /product image(s) -->

                                    <!-- hover buttons -->
                                                                   <!-- /hover buttons -->
                                </div>

                                <div class="shop-item-summary text-center">
                                    <h2 class="product">{{ $product->name }}</h2>

                                    <!-- rating -->

                                    <!-- price -->
                                    <div class="shop-item-price product-price">
                                        Цена {{ $product->price }}Р
                                    </div>
                                    <!-- /price -->
                                </div>
                            </div>

                    </li>
                    <!-- /ITEM -->
                    @endforeach




                </ul>

                <hr />

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
