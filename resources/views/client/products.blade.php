<x-layouts.main>
    <x-slot:title>
        All Products
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
    </header>
    <!-- ***** Header Area End ***** -->
    <!-- ***** Main Banner Area Start ***** -->

    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Bizlerdiń ónimlerimiz</h2>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <a href="{{Route('single_product', $product->product_id)}}">
                                <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{$product->image}}" width="300px"
                                    height="400px">
                            </a>
                        </div>
                        <div class="down-content">
                            <h4>{{$product->product_name}}</h4>
                            <span>{{$product->price}}</span>
                            <ul class="stars">
                                @foreach($options as $option)
                                @if($product->product_id == $option->product_id)
                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <span>{{$option->size}}</span>
                                </div>
                                @endif @endforeach
                                <br>
                                @foreach($options as $option)
                                @if($product->product_id == $option->product_id)
                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <figure class="circle" style="background: {{$option->color}}"></figure>
                                </div>
                                @endif @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-12">
                    @if ($products->lastPage() > 1)
                    <div class="pagination">
                        <ul>
                            <li class="{{ ($products->currentPage() == 1) ? ' disabled' : '' }}">
                                <a href="{{$products->url(1)}}">
                                    < </a>
                            </li>
                            @for ($i = 1; $i <= $products->lastPage(); $i++)
                                <li class="{{ ($products->currentPage() == $i) ? ' active' : '' }}">
                                    <a href="{{ $products->url($i) }}">{{$i}}</a>
                                </li>
                                @endfor
                                <li class="{{ ($products->currentPage() == $products->lastPage()) ? ' disabled' : '' }}">
                                    <a href="{{ $products->url($products->currentPage() + 1) }}">></a>
                                </li>
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->
</x-layouts.main>