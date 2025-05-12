<x-layouts.admin>
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section-title">Ónimler</h2>
                        <div class="row">
                            @foreach ($products as $product)
                            <div class="col-12 col-md-6 col-lg-4">
                                <article class="article article-style-c">
                                    <div class="article-header">
                                        <div class="article-image" data-background="{{ asset('storage/images/' . $product->image) }}">
                                        </div>
                                    </div>
                                    <div class="article-details">
                                        <div class="article-category">
                                            <a href="#">{{$product->category_name}}</a>
                                            <div class="bullet"></div>
                                            <a href="#"></a>
                                        </div>
                                        <div class="article-title">
                                            <h2><a
                                                    href="{{Route('single_product_admin', $product->product_id)}}">{{$product->product_name}}</a>
                                            </h2>
                                        </div>
                                        <div class="text-job">{{$product->price}}</div>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                        </div>
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.admin>