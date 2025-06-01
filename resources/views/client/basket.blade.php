<x-layouts.main>
    <x-slot:title>
        Basket
    </x-slot:title>
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
    <div class="container mt-3">
        <div class="row mt-3">
            <div class="col-2"></div>
            <div class="col-8 mt-3"><br>
                <div class="row mt-5">
                    <div class="col">
                        <h2 style="border" align="start">Sebet</h2>
                    </div>
                    <div class="col">
                        <h4 style="border" align="end">Jámi:{{$summa}}</h4>
                    </div>
                </div>
                <table class="table table-hover" style="">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Súwret</th>
                            <th scope="col">Kategoriya</th>
                            <th scope="col">Ónim</th>
                            <th scope="col">Ólshem</th>
                            <th scope="col">Reń</th>
                            <th scope="col">Baxa</th>
                            <th scope="col">Sanı</th>
                            <th scope="col">Óshiriw</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($basket_products as $product)
                        <tr style="margin:auto; text-align:center">
                            <th scope="row">{{$i++}}</th>
                            <td class="img">
                                <a href="{{Route('single_product', $product->product_id)}}">
                                    <img src="{{ asset('storage/images/' . $product->image) }}" class="rounded"
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
                            Karta arqalı tólew
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