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
            <div class="col"></div>
            <div class="col mt-5">
                <h4>Registration</h4>
                <form action="{{Route('registration')}}" method="post">
                    @csrf
                    <p>Surname</p>
                    <input type="text" class="form-control" name="surname"><br>
                    @error('surname')
                        <li style="color:red">{{$message}}</li>
                    @enderror
                    <p>Name</p>
                    <input type="text" class="form-control" name="name"><br>
                    @error('name')
                        <li style="color:red">{{$message}}</li>
                    @enderror
                    <p>Phone</p>
                    <input type="number" class="form-control" name="phone"><br>
                    @error('phone')
                        <li style="color:red">{{$message}}</li>
                    @enderror
                    <p>Address</p>
                    <input type="text" class="form-control" name="address"><br>
                    @error('address')
                        <li style="color:red">{{$message}}</li>
                    @enderror
                    <div style="text-align:end">
                        <input type="submit" class="btn btn-outline-dark" value="Save">
                    </div>
                    <div id="map"></div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</x-layouts.main>