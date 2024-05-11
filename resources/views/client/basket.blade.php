<x-layouts.main>
    <x-slot:title>
        Basket
    </x-slot:title>
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
        <li class="scroll-to-section"><a href="{{Route('basket_page')}}" class="active">Basket</a></li>
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
    <div class="container mt-3">
        <div class="row mt-3">
            <div class="col-2"></div>
            <div class="col-8 mt-3"><br>
                <div class="row mt-5">
                    <div class="col">
                        <h2 style="border" align="start">Basket</h2>
                    </div>
                    <div class="col">
                        <h4 style="border" align="end">Total:{{$summa}}</h4>
                    </div>
                </div>
                <table class="table table-hover" style="">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Category</th>
                            <th scope="col">Product</th>
                            <th scope="col">Size</th>
                            <th scope="col">Color</th>
                            <th scope="col">Price</th>
                            <th scope="col">Pcs</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($basket_products as $product)
                            <tr style="margin:auto; text-align:center">
                                <th scope="row">{{$i++}}</th>
                                <td class="img">
                                    <a href="{{Route('single_product', $product->product_id)}}">
                                        <img src="/assets1/images/{{$product->image}}" class="rounded"
                                            alt="{{$product->image}}">
                                    </a>
                                </td>
                                <td>{{$product->category_name}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->size}}</td>
                                <td>{{$product->color}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->pcs}}</td>
                                <td><a href="{{Route('delete_basket', [$product->id])}}" class="btn btn-dark">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="total">
                    <div class="main-border-button">
                        <a href="{{Route('card_page', $summa)}}">
                            Add To Card
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-2 mt-5">
            </div>
        </div>
    </div>
    </div><br>
</x-layouts.main>