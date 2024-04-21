<x-layouts.main>
    <x-slot:title>
        Клиенты
    </x-slot:title>
    <!-- ***** Main Banner Area Start ***** -->
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
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Ayaq kiyimler</h2>
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
                            @foreach($shoes as $shoe)
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="{{Route('single_product', [$shoe->product_id])}}"><i
                                                        class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                            <li><a href="{{Route('basket', [$shoe->product_id, 1])}}"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <img src="assets1/images/{{$shoe->image}}" alt="{{$shoe->image}}" width="300px"
                                        height="400px">
                                </div>
                                <div class="down-content">
                                    <h4>{{$shoe->product_name}}</h4>
                                    <span>{{$shoe->price}}</span>
                                    <ul class="stars">
                                        @foreach($options as $option)
                                        @if($shoe->product_id == $option->product_id)
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                               <span>{{$option->size}}</span>
                                            </div>
                                        @endif 
                                        @endforeach 
                                        <br>
                                        @foreach($options as $option)
                                        @if($shoe->product_id == $option->product_id)
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                               <figure class="circle" style="background: {{$option->color}};"></figure>
                                            </div>
                                        @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->

    <!-- ***** Women Area Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Koylekler</h2>
                        <span>En sapali koylekler bizde</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="women-item-carousel">
                        <div class="owl-women-item owl-carousel">
                            @foreach($shirts as $shirt)
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="{{Route('single_product', [$shirt->product_id])}}"><i
                                                        class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                            <li><a href="{{Route('basket', [$shirt->product_id, 1])}}"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <img src="assets1/images/{{$shirt->image}}" alt="{{$shirt->image}}" width="300px"
                                        height="400px">
                                </div>
                                <div class="down-content">
                                    <h4>{{$shirt->product_name}}</h4>
                                    <span>{{$shirt->price}}</span>
                                    <ul class="stars">
                                    @foreach($options as $option)
                                        @if($shirt->product_id == $option->product_id)
                                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                       <span>{{$option->size}}</span>
                                    </div>
                                        @endif
                                        @endforeach
                                        <br>
                                        @foreach($options as $option)
                                        @if($shirt->product_id == $option->product_id)
                                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                       <figure class="circle" style="background: {{$option->color}};"></figure>
                                    </div>
                                        @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Women Area Ends ***** -->

    <!-- ***** Kids Area Starts ***** -->
    <section class="section" id="kids">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Shalbarlar</h2>
                        <span>Har turli stildegi shalbarlardi bizde tapsaniz boladi</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="kid-item-carousel">
                        <div class="owl-kid-item owl-carousel">
                            @foreach($pants as $pant)
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="{{Route('single_product', [$pant->product_id])}}"><i
                                                        class="fa fa-eye"></i></a>
                                            </li>
                                            <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                            <li><a href="{{Route('basket', [$pant->product_id, 1])}}"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <img src="assets1/images/{{$pant->image}}" alt="{{$pant->image}}" width="300px"
                                        height="400px">
                                </div>
                                <div class="down-content">
                                    <h4>{{$pant->product_name}}</h4>
                                    <span>{{$pant->price}}</span>
                                    <ul class="stars">
                                    @foreach($options as $option)
                                        @if($pant->product_id == $option->product_id)
                                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <span>{{$option->size}}</span>
                                    </div>
                                        @endif
                                        @endforeach 
                                        <br>
                                        @foreach($options as $option)
                                        @if($pant->product_id == $option->product_id)
                                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <figure class="circle" style="background: {{$option->color}}"></figure>
                                    </div>
                                        @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Kids Area Ends ***** -->

    <!-- ***** Kids Area Starts ***** -->
    <section class="section" id="kids">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Kurtkalar</h2>
                        <span>Har qiyli assortimenlerimizden bar</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="kid-item-carousel">
                        <div class="owl-kid-item owl-carousel">
                            @foreach($jackets as $jacket)
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="{{Route('single_product', [$jacket->product_id])}}"><i
                                                        class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                            <li><a href="{{Route('basket', [$jacket->product_id, 1])}}"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <img src="assets1/images/{{$jacket->image}}" alt="{{$jacket->image}}">
                                </div>
                                <div class="down-content">
                                    <h4>{{$jacket->product_name}}</h4>
                                    <span>{{$jacket->price}}</span>
                                    <ul class="stars">
                                    @foreach($options as $option)
                                        @if($jacket->product_id == $option->product_id)
                                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <span>{{$option->size}}</span>
                                    
                                    </div>
                                        @endif
                                        @endforeach
                                        <br>
                                        @foreach($options as $option)
                                        @if($jacket->product_id == $option->product_id)
                                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <figure class="circle" style="background: {{$option->color}};"></figure>
                                    </div>
                                        @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Kids Area Ends ***** -->

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