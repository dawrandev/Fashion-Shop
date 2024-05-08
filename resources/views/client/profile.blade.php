<x-layouts.main>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-3"></div>
            <div class="col-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="true" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="true" href="{{Route('my_purchases_page')}}">My
                                        purchases</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Profile Documents</h5>
                            <form action="{{Route('update_client')}}" method="post">
                                @csrf
                                @foreach($client_documents as $client)
                                    <p>Surname</p>
                                    <input type="text" class="form-control" name="surname" value="{{$client->surname}}"><br>
                                    @error('surname')
                                        <li style="color:red">{{$message}}</li>
                                    @enderror
                                    <p>Name</p>
                                    <input type="text" class="form-control" name="name" value="{{$client->name}}"><br>
                                    @error('name')
                                        <li style="color:red">{{$message}}</li>
                                    @enderror
                                    <p>Phone</p>
                                    <input type="number" class="form-control" name="phone" value="{{$client->phone}}"><br>
                                    @error('phone')
                                        <li style="color:red">{{$message}}</li>
                                    @enderror
                                    <p>Address</p>
                                    <input type="text" class="form-control" name="address" value="{{$client->address}}"><br>
                                    @error('address')
                                        <li style="color:red">{{$message}}</li>
                                    @enderror
                                    <div style="text-align:end">
                                        <input type="submit" class="btn btn-outline-dark" value="Save">
                                    </div>
                                @endforeach
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</x-layouts.main>