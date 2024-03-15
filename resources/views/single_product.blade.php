<x-layouts.main>
    <x-slot:title>
        Single Product
    </x-slot:title>
    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Single Product Page</h2>
                        <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Product Area Starts ***** -->
    @foreach($single_product as $product)
    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="left-images">
                        <img src="/assets1/images/{{$product->image_1}}" alt="{{$product->image_1}}">
                        <img src="/assets1/images/{{$product->image_2}}" alt="{{$product->image_1}}">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-content">
                        <h4>{{$product->product_name}}</h4>
                        <span class="price">{{$product->price}}</span>
                        <ul class="stars">
                           <h4>pcs:{{$product->pcs}}</h4>
                        </ul>
                        <span>{{$product->text_1}}</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <p>{{$product->text_2 }}</p>
                        </div>
                        <div class="quantity-content">
                            <div class="left-content">
                                <h6>No. of Orders</h6>
                            </div>
                        </div>
                            <livewire:counter :product_id="$product_id" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <!-- ***** Product Area Ends ***** -->

</x-layouts.main>