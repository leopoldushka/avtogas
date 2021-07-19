@extends ('layouts.global')
@section('content')

<!-- Begin page content -->
<section>
    <div class="container">

        <div class="row">

            <!-- RIGHT -->
            <div class="col-lg-9 col-md-9 order-md-2 order-lg-2">


                <!-- CAROUSEL -->
                <div class="owl-carousel buttons-autohide controlls-over mb-30 radius-4" data-plugin-options='{"singleItem": true, "autoPlay": 6000, "navigation": true, "pagination": true, "transitionStyle":"fade"}'>
                    <!-- item -->
                    <div>
                        <div class="caption-slider-default">
                            <div class="display-table">
                                <div class="display-table-cell vertical-align-middle">
                                    <div class="caption-container text-left">
                                        <h2>SHOP <strong>NOW</strong> &ndash; 50% OFF</h2>
                                        <p>
                                            This is a category banner rotator<br />
                                            for any category of your shop.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <img class="img-fluid radius-4" src="demo_files/images/shop/banners/top_2.png" width="851" height="335" alt="">
                    </div>
                    <!-- /item -->

                    <!-- item -->
                    <div>

                        <div class="caption-slider-default">
                            <div class="display-table">
                                <div class="display-table-cell vertical-align-middle">
                                    <div class="caption-container text-left">
                                        <h2>LOREM IPSUM <strong>DOLOR</strong></h2>
                                        <p>
                                            Unlimited designs, unlimited combinations <br />
                                            imagination is the limit!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <img class="img-fluid radius-4" src="demo_files/images/shop/banners/top_1.png" width="851" height="335" alt="">
                    </div>
                    <!-- /item -->

                </div>
                <!-- /CAROUSEL -->


                <!-- LIST OPTIONS -->
                <div class="clearfix shop-list-options mb-20">

                    <ul class="pagination m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>

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
                            <div class="shop-item">
                                <div class="thumbnail">
                                    <!-- product image(s) -->
                                    <a class="shop-item-image" href="shop-single-left.html">
                                        <img class="img-fluid" src="demo_files/images/shop/products/300x450/p11.jpg" alt="shop hover image" />
                                        <img class="img-fluid" src="demo_files/images/shop/products/300x450/p3.jpg" alt="shop first image" />
                                    </a>
                                    <!-- /product image(s) -->

                                    <!-- hover buttons -->
                                    <div class="shop-option-over"><!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
                                        <a class="btn btn-light add-wishlist" href="#" data-item-id="2" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart p-0"></i></a>
                                        <a class="btn btn-light add-compare" href="#" data-item-id="2" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o p-0" data-toggle="tooltip"></i></a>
                                    </div>
                                    <!-- /hover buttons -->
                                </div>

                                <div class="shop-item-summary text-center">
                                    <h2>{{ $product->name }}</h2>

                                    <!-- rating -->
                                    <div class="shop-item-rating-line">
                                        <div class="rating rating-0 fs-13"><!-- rating-0 ... rating-5 --></div>
                                    </div>
                                    <!-- /rating -->

                                    <!-- price -->
                                    <div class="shop-item-price">
                                        {{ $product->price }}
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
                <div class="text-center">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </div>
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
