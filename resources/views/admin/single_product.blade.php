<x-layouts.admin>
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="article-category">
                                    <h4>{{$single_product->category_name}}</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col" style="text-align:center">
                                            <img style="object-fit:cover"
                                                src="/storage/images/{{$single_product->image}}" width="300px"
                                                height="400px" alt=""><br><br>
                                            <input type="submit" value="Edit" class="btn btn-light">
                                        </div>
                                        <div class="col" style="text-align:center">
                                            <img style="object-fit:cover"
                                                src="/storage/images/{{$single_product->image_1}}" width="300px"
                                                height="400px" alt=""><br><br>
                                            <input type="submit" value="Edit" class="btn btn-light">
                                        </div>
                                        <div class="col" style="text-align:center">
                                            <img style="object-fit:cover"
                                                src="/storage/images/{{$single_product->image_2}}" width="300px"
                                                height="400px" alt=""><br><br>
                                            <input type="submit" value="Edit" class="btn btn-light">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <select class="form-control" name="category_name" id="">
                                                @foreach ($categories as $category)
                                                    <option value="{{$category->id}}" {{ $category->name == $single_product->category_name ? 'selected' : '' }}>{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col">
                                            <input type="text" name="product_name" class="form-control"
                                                value="{{$single_product->name}}" id="">
                                        </div>
                                        <div class="col">
                                            <input type="number" name="price" class="form-control"
                                                value="{{$single_product->price}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <textarea name="" id="" cols="30" rows="10"
                                                class="form-control">{{$single_product->text_1}}</textarea>
                                        </div>
                                        <div class="col">
                                            <textarea name="" id="" cols="30" rows="10"
                                                class="form-control">{{$single_product->text_2}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.admin>