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
            <div class="col"></div>
            <div class="col mt-5">
                <h4>Dizimnen ótiw</h4>
                <form action="{{Route('registration')}}" method="post">
                    @csrf
                    <p>Familiya</p>
                    <input type="text" class="form-control" name="surname"><br>
                    @error('surname')
                    <li style="color:red">{{$message}}</li>
                    @enderror
                    <p>At</p>
                    <input type="text" class="form-control" name="name"><br>
                    @error('name')
                    <li style="color:red">{{$message}}</li>
                    @enderror
                    <p>Telefon</p>
                    <input type="number" class="form-control" name="phone"><br>
                    @error('phone')
                    <li style="color:red">{{$message}}</li>
                    @enderror
                    <p>Adres</p>
                    <input type="text" class="form-control" name="address"><br>
                    @error('address')
                    <li style="color:red">{{$message}}</li>
                    @enderror
                    <div style="text-align:end">
                        <input type="submit" class="btn btn-outline-dark" value="Saqlaw">
                    </div>
                    <div id="map"></div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</x-layouts.main>