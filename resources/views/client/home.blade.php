<x-layouts.main>
    <x-slot:title>
        Home
    </x-slot:title>
    <!-- ***** Main Banner Area Start ***** -->
    {{Auth::user()->id}}
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4 style="border: solid white; border-radius:15px">Bizde 50% skidka</h4>
                                <h5
                                style="background-image: linear-gradient(to right, #f22, #f2f, #22f, #2ff, #2f2, #ff2); color: transparent; -webkit-background-clip: text; background-clip: text;">
                                Skidkadagi tovarlardi koriw ushin</h5>
                                <div class="main-border-button">
                                    <a href="#">Purchase Now!</a>
                                </div>
                            </div>
                            <img style="" src="assets1/images/baner.jpg" alt="" height="630px">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4
                                            style="font-family:Stencil Std, fantasy; border:solid black; color:black">
                                            Ayaq kiyim
                                        </h4>
                                        
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4></h4>
                                            <p>Kobirek magliwmatlardi koriwdi qaleysiz ba?
                                                </p>
                                                <div class="main-border-button">
                                                    <a href="{{route('category_product', 'shoe')}}">Kobirek...</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img style="border:solid" src="assets1/images/shoe-3.jpg" width="400px"
                                        height="300px">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4
                                            style="font-family:Stencil Std, fantasy; border:solid black; color:black">
                                            Koylekler</h4>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <p>Kobirek magliwmatlardi koriwdi qaleysiz ba?
                                                    </p>
                                                    <div class="main-border-button">
                                                        <a href="{{Route('category_product', 'shirt')}}">Kobirek...</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <img style="border:solid" src="assets1/images/shirt-1.png" width="400px"
                                            height="300px">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="right-first-image">
                                        <div class="thumb">
                                            <div class="inner-content">
                                                <h4
                                                style="font-family:Stencil Std, fantasy; border:solid black; color:black">
                                                Shalbarlar</h4>
                                                <span></span>
                                            </div>
                                            <div class=" hover-content">
                                                <div class="inner">
                                                    <h4></h4>
                                                    <p>Kobirek magliwmatlardi koriwdi qaleysiz ba?
                                                        </p>
                                                        <div class="main-border-button">
                                                            <a href="{{Route('category_product', 'pant')}}">Kobirek...</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img style="border:solid" src="assets1/images/pant-3.png" width="400px"
                                                height="300px">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="right-first-image">
                                            <div class="thumb">
                                                <div class="inner-content">
                                                    <h4
                                                    style="font-family:Stencil Std, fantasy; border:solid black; color:black">
                                                    Kurtka</h4>
                                                    <span></span>
                                                </div>
                                                <div class=" hover-content">
                                                    <div class="inner">
                                                <h4>Kurtka</h4>
                                                <p>Kobirek magliwmatlardi koriwdi qaleysiz ba?
                                                    </p>
                                                    <div class="main-border-button">
                                                        <a href="{{Route('category_product', 'jacket')}}">Kobirek...</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <img style="border:solid" src="assets1/images/jacket-1.png" width="400px"
                                            height="300px">
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
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
                       <h2><a style="color:black" href="{{Route('category_product', $category->name)}}">{{$category->name}}</a></h2>
                        <span>En jana turdegi ayaq kiyimler</span>
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
                                    <a href="{{Route('single_product', [$category_product->product_id])}}"><img src="assets1/images/{{$category_product->image}}" alt="{{$category_product->image}}" width="300px"
                                        height="400px"></a>
                                </div>
                                <div class="down-content">
                                    <h4>{{$category_product->product_name}}</h4>
                                    <span>{{$category_product->price}}</span>
                                    <ul class="stars">
                                        @foreach($options as $option)
                                        @if($category_product->product_id == $option->product_id)
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                               <span>{{$option->size}}</span>
                                            </div>
                                        @endif 
                                        @endforeach 
                                        <br>
                                        @foreach($options as $option)
                                        @if($category_product->product_id == $option->product_id)
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                               <figure class="circle" style="background: {{$option->color}};"></figure>
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
    <!-- ***** Men Area Ends ***** -->

    <!-- ***** Explore Area Starts ***** -->
    <section class="section" id="explore">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <h2>Explore Our Products</h2>
                        <span>You are allowed to use this HexaShop HTML CSS template. You can feel free to modify or
                            edit this layout. You can convert this template as any kind of ecommerce CMS theme as you
                            wish.</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <p>You are not allowed to redistribute this template ZIP file on any other website.</p>
                        </div>
                        <p>There are 5 pages included in this HexaShop Template and we are providing it to you for
                            absolutely free of charge at our TemplateMo website. There are web development costs for us.
                        </p>
                        <p>If this template is beneficial for your website or business, please kindly <a rel="nofollow"
                                href="https://paypal.me/templatemo" target="_blank">support us</a> a little via PayPal.
                            Please also tell your friends about our great website. Thank you.</p>
                        <div class="main-border-button">
                            <a href="products.html">Discover More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="leather">
                                    <h4>Leather Bags</h4>
                                    <span>Latest Collection</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="first-image">
                                    <img src="assets1/images/explore-image-01.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="second-image">
                                    <img src="assets1/images/explore-image-02.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="types">
                                    <h4>Different Types</h4>
                                    <span>Over 304 Products</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Explore Area Ends ***** -->

</x-layouts.main>