<x-layouts.main>
    <x-slot:title>
        Home
    </x-slot:title>
    <!-- ***** Menu Start ***** -->
    <ul class="nav">
        <li class="scroll-to-section"><a href="{{Route('home_page')}}">Bas bet</a></li>
        <li class="submenu">
            <a href="">Kategoriyalar</a>
            <ul>
                @foreach ($categories as $category)
                <li><a href="{{Route('category_product', $category->id)}}">{{$category->name}}</a></li>
                @endforeach
            </ul>
        </li>
        <li class="scroll-to-section"><a href="{{Route('products_page')}}">Ónimler</a></li>
        <li class="scroll-to-section"><a href="{{Route('profile')}}">Profil</a></li>
        <li class="scroll-to-section"><a href="{{Route('basket_page')}}"><i class="material-icons">shopping_cart</i></a></li>
        <a href="https://t.me/fashionshopnukus" target="_blank">
            <i class="fab fa-telegram fa-2x"></i>
        </a>
    </ul>

    <!-- ***** Menu End ***** -->
    </nav>
    </div>
    </div>
    </div>
    <style>
        <style>#header-carousel {
            margin-bottom: 0 !important;
        }

        .carousel-inner {
            border-radius: 0 !important;
        }

        .carousel-item img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
    </style>
    </style>
    </header>

    <div id="header-carousel" class="carousel slide mb-0" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('storage/images/Flux_Dev_A_modern_website_hero_s.jpg')}}" class="d-block w-100" alt="Slider 1" style="height: 400px; object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="{{asset('storage/images/Flux_Dev_A_modern_fashion_ecomme.jpg')}}" class="d-block w-100" alt="Slider 2" style="height: 400px; object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="{{asset('storage/images/Flux_Dev_Ecommerce_fashion_sale_banner_with_bold_text_50_ge_sh_0.jpg')}}" class="d-block w-100" alt="Slider 3" style="height: 400px; object-fit: cover;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Oldingi</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Keyingi</span>
        </button>
    </div>
    <!-- ***** Header Area End ***** -->
    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <div class="main-border-button">
                                    <a href="#">Házir satıp alıw!</a>
                                </div>
                            </div>
                            <img src="{{asset('storage/images/Flux_Dev_A_stylish_modern_fashion_clothing_store_interior_with_0.jpg') }}" alt="" height="630px">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            @foreach ($categories as $category)
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>{{$category->name}}</h4>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <div class="main-border-button">
                                                    <a href="{{Route('category_product', $category->id)}}">Kóbirek</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img style="height:300px; width: 340px; " src="{{ asset('storage/images/' . $category->image_baner) }}"" alt=" {{$category->image_banner}}">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***** Main Banner Area End ***** -->

            <!-- ***** Men Area Starts ***** -->
            @foreach($categories as $category)
            <section class="section" id="men">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section-heading">
                                <h2><a style="color:black"
                                        href="{{Route('category_product', $category->id)}}">{{$category->name}}</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="men-item-carousel">
                                <div class="owl-men-item owl-carousel">
                                    @foreach($category_products as $category_product)
                                    @if($category_product->category_id == $category->id)
                                    <div class="item">
                                        <div class="thumb">
                                            <div class="hover-content">
                                            </div>
                                            <a href="{{Route('single_product', [$category_product->product_id])}}"><img
                                                    src="{{ asset('storage/images/' . $category_product->image) }}"
                                                    alt="{{$category_product->image}}" width="300px" height="400px"></a>
                                        </div>
                                        <div class="down-content">
                                            <h4>{{$category_product->product_name}}</h4>
                                            <span>{{$category_product->price}}</span>
                                            <ul class="stars">
                                                @foreach($options as $option)
                                                @if($category_product->product_id == $option->product_id)
                                                <div class="btn-group" role="group"
                                                    aria-label="Basic radio toggle button group">
                                                    <span>{{$option->size}}</span>
                                                </div>
                                                @endif
                                                @endforeach
                                                <br>
                                                @foreach($options as $option)
                                                @if($category_product->product_id == $option->product_id)
                                                <div class="btn-group" role="group"
                                                    aria-label="Basic radio toggle button group">
                                                    <figure class="circle" style="background: {{$option->color}};">
                                                    </figure>
                                                </div>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </section>
</x-layouts.main>