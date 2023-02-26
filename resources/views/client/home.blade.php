@extends('layouts.app2')
@section('contenu')
    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="{{ asset('assets2/img/carousel-1.jpg') }}" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Informatiques</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">{{ __('messages.shop now') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="{{ asset('assets2/img/carousel-2.jpg') }}" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Electroménagers</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">{{ __('messages.shop now') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="{{ asset('assets2/img/carousel-3.jpg') }}" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">matériaux de construction</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#">{{ __('messages.shop now') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="{{ asset('assets2/img/offer-1.jpg') }}" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary">{{ __('messages.shop now') }}</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="{{ asset('assets2/img/offer-2.jpg') }}" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary">{{ __('messages.shop now') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    {{-- @foreach ( $marques as $marque ) --}}
    <!-- Vendor Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
            <span class="bg-secondary pr-3">{{ __('messages.Marques') }}</span>
        </h2>
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    @foreach ($marques as $marque)
                    <a href="{{ url('viewM/'.$marque->id) }}">
                        <div class="bg-light p-4">
                            <img src="/storage/icon/{{ $marque->icon }}" alt="">
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

        {{-- @foreach ( $marques as $marque ) --}}
        <!-- Vendor Start -->
        <div class="container-fluid pt-5">
            <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
                <span class="bg-secondary pr-3">{{ __('messages.CATEGORIES') }}</span>
            </h2>
                <div class="col">
                    <div class="owl-carousel vendor-carousel">
                        @foreach ( $categories as $categorie )
                        <a href="{{ url('viewC/'.$categorie->id) }}">
                            <div class="bg-light p-3" style="padding: 5px; width: 350px; height: 180px; aligne: centre;">
                                <img style="width: 100px; height: 100px; align-content: center" class="img-fluid" src="/storage/image_c/{{ $categorie->image_c }}" alt="">
                                <h6>{{ $categorie->category_name }}</h6>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Vendor End -->

        <!-- Products Start -->
        <div class="container-fluid pt-5 pb-3">
            <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
            <span class="bg-secondary pr-3">{{ __('messages.Featured Products') }}</span>
        </h2>
        <div class="row px-xl-5">

        <!-- Vendor Start -->
        <div class="col">
            <div class="owl-carousel vendor-carousel">
                @foreach ( $produits as $produit )
                <a href="{{ url('viewP/'.$produit->id) }}">
                    <div class="bg-light p-4">
                        <img style="height: 150px;" src="/storage/image_p/{{ $produit->image_p }}" alt="icon">
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        <!-- Vendor End -->

    <!-- Products End -->

    <!-- Offer Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="{{ asset('assets2/img/offer-1.jpg') }}" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase"></h6>
                        <h3 class="text-white mb-3">{{ __('messages.Special Offer') }}</h3>
                        <a href="" class="btn btn-primary">{{ __('messages.shop now') }}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="{{ asset('assets2/img/offer-2.jpg') }}" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase"></h6>
                        <h3 class="text-white mb-3">{{ __('messages.Special Offer') }}</h3>
                        <a href="" class="btn btn-primary">{{ __('messages.shop now') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->

    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
            <span class="bg-secondary pr-3">{{ __('messages.Recent Products') }}</span>
        </h2>
        <div class="row px-xl-5">
            @foreach ( $produits as $produit )
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" style="width: 500px; height: 200px;" src="/storage/image_p/{{ $produit->image_p }}" alt="image">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="/panier/{{ $produit->id }}">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="{{ url('viewP/'.$produit->id) }}">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="{{ url('viewP/'.$produit->id) }}">{{ $produit->product_name }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>${{ $produit->prix }}</h5>{{-- <h6 class="text-muted ml-2"><del>$170.00</del></h6> --}}
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <h5>{{ $produit->categories->category_name }}</h5>
                            </div>
                        <h5>{{ $produit->categories->marques->marke_name }}</h5>
                        </div>
                    </div>
                </div>
        @endforeach
        </div>
    </div>
    <!-- Products End -->

    <!-- Vendor Start -->
    <div class="col">
        <div class="owl-carousel vendor-carousel">
            @foreach ($marques as $marque)
            <a href="{{ url('viewM/'.$marque->id) }}">
                <div class="bg-light p-4">
                    <img src="/storage/icon/{{ $marque->icon }}" alt="">
                </div>
            </a>
            @endforeach
        </div>
    </div>
    <!-- Vendor End -->
@endsection
