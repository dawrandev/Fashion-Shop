<x-layouts.main>
    <x-slot:title>
        Single Product
    </x-slot:title>
    <!-- ***** Menu Start ***** -->
    <ul class="nav">
        <li class="scroll-to-section"><a href="{{Route('home_page')}}">Home</a></li>
        <li class="submenu">
            <a href="">Categories</a>
            <ul>
                @foreach ($categories as $category)
                    <li><a href="{{Route('category_product', $category->id)}}">{{$category->name}}</a></li>
                @endforeach
            </ul>
        </li>
        <li class="scroll-to-section"><a href="{{Route('products_page')}}">Products</a></li>
        <li class="scroll-to-section"><a href="{{Route('basket_page')}}">Basket</a></li>
        <li class="scroll-to-section"><a href="{{Route('about_page')}}">About Us</a></li>
        <li class="scroll-to-section"><a href="#">Contact Us</a></li>
        <li class="scroll-to-section"><a href="#explore">Explore</a></li>
        <li class="scroll-to-section"><a href="{{Route('profile')}}">Profile</a></li>
    </ul>

    <!-- ***** Menu End ***** -->
    </nav>
    </div>
    </div>
    </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <!-- ***** Main Banner Area Start ***** -->

    <!-- ***** Main Banner Area End ***** -->
    <!-- ***** Product Area Starts ***** -->
    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="left-images">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img style="object-fit:contain" src="/storage/images/{{$single_product->image_1}}"
                                        class="d-block w-100" height="600px" width="250px"
                                        alt="{{$single_product->image_1}}">
                                </div>
                                <div class="carousel-item">
                                    <img src="/storage/images/{{$single_product->image_2}}" class="d-block w-100"
                                        height="600px" width="250px" alt="{{$single_product->image_1}}">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-content">
                        <h4>{{$single_product->name}}</h4>
                        <span class="price">Pieces:{{$pcs}}</span>
                        <ul class="stars">
                            <h4>{{$single_product->price}}</h4>
                        </ul>
                        <span>{{$single_product->text_1}}</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <p>{{$single_product->text_2}}</p>
                        </div>
                        <hr>
                        <livewire:counter :product_id="$product_id" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Product Area Ends ***** -->

</x-layouts.main>