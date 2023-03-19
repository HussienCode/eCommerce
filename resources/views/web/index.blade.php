@extends('web.layout.master')

@section('slider')
    <!-- start carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="web/img/slider1.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-md-block">
                    <a href="#">
                        <h1>
                            cloth & <br />
                            wood sofa
                        </h1>
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="web/img/slider2.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-md-block">
                    <a href="#">
                        <h1>
                            cloth & <br />
                            wood sofa
                        </h1>
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="web/img/slider3.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-md-block">
                    <a href="#">
                        <h1>
                            cloth & <br />
                            wood sofa
                        </h1>
                    </a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- end slider -->
@endsection

@section('content')
    <div class="row timer">
        <div class="col-md-4 col-sm-12 text-center">
            <h2>Flash sale</h2>
        </div>
        <div class="col-md-8 col-sm-12 text-center">
            <h2 id="demo"></h2>
        </div>
    </div>
    <p class="text-end text-decoration-underline">
        <a href="{{ url('/products') }}" class="text-muted">view all</a>
    </p>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <a href="{{ url('/product_details') }}">
                    <img src="web/img/Products/product_1.png" class="card-img-top" alt="product_img" />
                </a>
                <div class="card-body">
                    <a href="{{ url('/product_details') }}.html" class="text-dark">
                        <h5 class="card-title">KZ.36 Chair - Yellow</h5>
                    </a>
                    <p>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                    </p>
                    <p class="card-text">price: 230 egp
                        <i class="bi bi-heart"></i>
                    </p>
                    <p class="text-decoration-line-through text-muted">300 egp</p>
                    <button type="button" class="btn btn-primary">
                        add to cart
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <a href="{{url('/product_details')}}">
                    <img src="web/img/Products/product_2.png" class="card-img-top" alt="product_img" />
                </a>
                <div class="card-body">
                    <a href="{{url('/product_details')}}" class="text-dark">
                        <h5 class="card-title">KZ.36 Chair - Yellow</h5>
                    </a>
                    <p>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </p>
                    <p class="card-text">price: 230 egp</p>
                    <p class="text-decoration-line-through text-muted">300 egp</p>
                    <button type="button" class="btn btn-primary">
                        add to cart
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <a href="{{url('/product_details')}}">
                    <img src="web/img/Products/product_3.png" class="card-img-top" alt="product_img" />
                </a>
                <div class="card-body">
                    <a href="{{url('/product_details')}}" class="text-dark">
                        <h5 class="card-title">KZ.36 Chair - Yellow</h5>
                    </a>
                    <p>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                    </p>
                    <p class="card-text">price: 230 egp</p>
                    <p class="text-decoration-line-through text-muted">300 egp</p>
                    <button type="button" class="btn btn-primary">
                        add to cart
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <a href="{{url('/product_details')}}">
                    <img src="web/img/Products/product_4.png" class="card-img-top" alt="product_img" />
                </a>
                <div class="card-body">
                    <a href="{{url('/product_details')}}" class="text-dark">
                        <h5 class="card-title">KZ.36 Chair - Yellow</h5>
                    </a>
                    <p>
                        <i class="bi bi-star text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                    </p>
                    <p class="card-text">price: 230 egp</p>
                    <p class="text-decoration-line-through text-muted">300 egp</p>
                    <button type="button" class="btn btn-primary">
                        add to cart
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- end sale -->

    <div class="categories">
        <div class="container">
            <h1>Categories</h1>
            <div class="row">
                <div class="col-2">
                    <a href="Products.html">
                        <img src="web/img/Categories/kitchen-dt-en.png" alt="" />
                    </a>
                </div>

                <div class="col-2">
                    <a href="Products.html">
                        <img src="web/img/Categories/appliances-dt-en_2_.png" alt="" />
                    </a>
                </div>

                <div class="col-2">
                    <img src="web/img/Categories/storage-dt-en_2_.png" alt="" />
                </div>

                <div class="col-2">
                    <img src="web/img/Categories/sofa-dt-en_2_.png" alt="" />
                </div>

                <div class="col-2">
                    <img src="web/img/Categories/sports-dt-en.png" alt="" />
                </div>

                <div class="col-2">
                    <img src="web/img/Categories/decor-dt-en_2_.png" alt="" />
                </div>

                <div class="col-2">
                    <img src="web/img/Categories/kids-dt-en.png" alt="" />
                </div>

                <div class="col-2">
                    <img src="web/img/Categories/kitchen-dt-en.png" alt="" />
                </div>

                <div class="col-2">
                    <img src="web/img/Categories/office-dt-en.png" alt="" />
                </div>

                <div class="col-2">
                    <img src="web/img/Categories/chair-dt-en_1_.png" alt="" />
                </div>

                <div class="col-2">
                    <img src="web/img/Categories/buffet-dt-en.png" alt="" />
                </div>

                <div class="col-2">
                    <img src="web/img/Categories/bathroom-dt-en.png" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!--  -->

    <div class="container">
        <div class="row">
            <div class="col-12 mt-sm-3">
                <a href="Products.html">
                    <img src="web/img/sale.jpg" class="rounded-3" alt="" />
                </a>
            </div>
        </div>
    </div>
    <!--  -->

    <!-- start products -->
    <div class="products">
        <div class="container">
            <h1>Best Sellers</h1>
            <div class="slider">
                <div class="slide_track">
                    <div class="slide">
                        <a href="{{url('/product_details')}}">
                            <img src="web/img/Products/product_1.png" alt="product_i" />
                        </a>
                    </div>

                    <div class="slide">
                        <a href="{{url('/product_details')}}">
                            <img src="web/img/Products/product_2.png" alt="" />
                        </a>
                    </div>

                    <div class="slide">
                        <a href="{{url('/product_details')}}">
                            <img src="web/img/Products/product_3.png" alt="" />
                        </a>
                    </div>

                    <div class="slide">
                        <a href="{{url('/product_details')}}">
                            <img src="web/img/Products/product_4.png" alt="" />
                        </a>
                    </div>

                    <div class="slide">
                        <a href="{{url('/product_details')}}">
                            <img src="web/img/Products/product_1.png" alt="" />
                        </a>
                    </div>

                    <div class="slide">
                        <a href="{{url('/product_details')}}">
                            <img src="web/img/Products/product_2.png" alt="" />
                        </a>
                    </div>

                    <div class="slide">
                        <a href="{{url('/product_details')}}">
                            <img src="web/img/Products/product_3.png" alt="" />
                        </a>
                    </div>
                    <div class="slide">
                        <a href="{{url('/product_details')}}">
                            <img src="web/img/Products/product_4.png" alt="" />
                        </a>
                    </div>

                    <div class="slide">
                        <a href="{{url('/product_details')}}">
                            <img src="web/img/Products/product_1.png" alt="" />
                        </a>
                    </div>

                    <div class="slide">
                        <a href="{{url('/product_details')}}">
                            <img src="web/img/Products/product_2.png" alt="" />
                        </a>
                    </div>

                    <div class="slide">
                        <a href="{{url('/product_details')}}">
                            <img src="web/img/Products/product_3.png" alt="" />
                        </a>
                    </div>

                    <div class="slide">
                        <a href="{{url('/product_details')}}">
                            <img src="web/img/Products/product_4.png" alt="" />
                        </a>
                    </div>

                    <div class="slide">
                        <a href="{{url('/product_details')}}">
                            <img src="web/img/Products/product_1.png" alt="" />
                        </a>
                    </div>

                    <div class="slide">
                        <a href="{{url('/product_details')}}">
                            <img src="web/img/Products/img14.jpeg" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end products -->

    <div class="subscribe">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="subscribe_area_text text-center">
                        <h5>Join Our Newsletter</h5>
                        <h1>
                            Subscribe to get Updated <br />
                            with new offers
                        </h1>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter email address"
                                aria-label="Recipient's username" aria-describedby="basic-addon2" />
                            <div class="input-group-append">
                                <a href="#" class="input-group-text btn_2" id="basic-addon2">subscribe
                                    now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
@endsection
