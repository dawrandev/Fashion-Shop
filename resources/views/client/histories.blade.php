<x-layouts.main>
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
        <li class="scroll-to-section"><a href="{{Route('profile')}}" class="active">Profile</a></li>
    </ul>

    <!-- ***** Menu End ***** -->
    </nav>
    </div>
    </div>
    </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-1"></div>
            <div class="col-10 mt-5">
                <div class="card w-100 mb-3">
                    <div class="card-body w-100">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{Route('profile')}}">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="true" href="#">Histories</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body w-100">
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
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($histories as $history)
                                    <tr style="margin:auto; text-align:center">
                                        <th scope="row">{{$i++}}</th>
                                        <td class="img">
                                            <a href="{{Route('single_product', $history->product_id)}}">
                                                <img src="{{ asset('images/' . $history->image) }}" class="rounded"
                                                    alt="{{$history->image}}">
                                            </a>
                                        </td>
                                        <td>{{$history->category_name}}</td>
                                        <td>{{$history->product_name}}</td>
                                        <td>{{$history->size}}</td>
                                        <td>{{$history->color}}</td>
                                        <td>{{$history->price}}</td>
                                        <td>{{$history->pcs}}</td>
                                        <td>{{$history->date}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</x-layouts.main>