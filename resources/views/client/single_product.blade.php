<x-layouts.main>
    <x-slot:title>
        Single Product
    </x-slot:title>
    <!-- ***** Main Banner Area Start ***** -->
    
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
                        <h4>{{$product->name}}</h4>
                        <span class="price">{{$product->price}}</span>
                        <ul class="stars">
                            <h4>Pieces:{{$pcs}}</h4>
                        </ul>
                        <span>{{$product->text_1}}</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <p>{{$product->text_2}}</p>
                        </div><hr>
                            <livewire:counter :product_id="$product_id" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <!-- ***** Product Area Ends ***** -->

</x-layouts.main>