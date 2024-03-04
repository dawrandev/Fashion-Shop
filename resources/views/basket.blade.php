<x-layouts.main>
    <x-slot:title>
        Basket
    </x-slot:title>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-2"></div>
            <div class="col-8 mt-5"><br>    
            <div class="row mt-5">
                <div class="col">
                <h2 style="border" align="start">Basket</h2>
                </div>
                <div class="col">
                <h4 style="border"  align="end">Total:{{$summa}}</h4> 
                </div>
            </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Category</th>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($basket_products as $product)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td class="img">
                                <img src="/assets1/images/{{$product->image}}" class="rounded" alt="...">
                            </td>
                            <td>{{$product->category_name}}</td>
                            <td>{{$product->product_name}}</td>
                            <td>{{$product->price}}</td>
                            <td><a href="{{Route('delete_basket', [$product->id])}}" class="btn btn-dark">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-2 mt-5"><br></div>
        </div>
    </div><br>
</x-layouts.main>