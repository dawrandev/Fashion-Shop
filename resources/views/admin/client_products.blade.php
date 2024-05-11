<x-layouts.admin>
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">

                            </div>
                            <div class="card-body">
                                <div class="section-title mt-0" style="text-align:start">
                                    {{$surname}} {{$name}}
                                </div>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Size</th>
                                            <th scope="col">Color</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Pcs</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($client_products as $product)
                                            <tr>
                                                <th scope="row">{{$i++}}</th>
                                                <td>{{$product->category_name}}</td>
                                                <td>{{$product->product_name}}</td>
                                                <td>{{$product->size}}</td>
                                                <td>{{$product->color}}</td>
                                                <td>{{$product->image}}</td>
                                                <td>{{$product->pcs}}</td>
                                                <td>{{$product->date}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    {{$client_products->links()}}
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</x-layouts.admin>