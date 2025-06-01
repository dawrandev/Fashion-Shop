<x-layouts.main>
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
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-1"></div>
            <div class="col-10 mt-5">
                <div class="card w-100 mb-3">
                    <div class="card-body">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="true" href="#">Profil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="true" href="{{Route('histories')}}">Táriyx</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body w-100 mb-3">
                            <h5 class="card-title">Profil maǵlıwmatları</h5>
                            <form action="{{Route('update_client')}}" method="post">
                                @csrf
                                @foreach($client_documents as $client)
                                <p>Familiya</p>
                                <input type="text" class="form-control" name="surname" value="{{$client->surname}}"><br>
                                @error('surname')
                                <li style="color:red">{{$message}}</li>
                                @enderror
                                <p>Atı</p>
                                <input type="text" class="form-control" name="name" value="{{$client->name}}"><br>
                                @error('name')
                                <li style="color:red">{{$message}}</li>
                                @enderror
                                <p>Telefon</p>
                                <input type="number" class="form-control" name="phone" value="{{$client->phone}}"><br>
                                @error('phone')
                                <li style="color:red">{{$message}}</li>
                                @enderror
                                <p>Mánzil</p>
                                <div class="row">
                                    <div class="col-11">
                                        <input type="text" class="form-control" name="address" value="{{$client->address}}"><br>
                                        @error('address')
                                        <li style="color:red">{{$message}}</li>
                                        @enderror
                                    </div>
                                    <div class="col-1">
                                        <input type="submit" class="btn btn-outline-dark" value="Map">
                                    </div>
                                </div>
                                <div style="text-align:end">
                                    <input type="submit" class="btn btn-outline-dark" value="Save">
                                </div>
                                @endforeach
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</x-layouts.main>