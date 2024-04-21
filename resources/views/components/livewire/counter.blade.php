<div>
        @foreach($options as $option)
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input wire:click="size('{{$option->size_id}}')" type="radio" class="btn-check" name="size" id="{{$option->size}}" autocomplete="on" checked>
                <label class="btn btn-outline-secondary" for="{{$option->size}}">{{$option->size}}</label>
            </div>
        @endforeach
        @foreach($options as $option)
            <div style="accent-color: {{$option->color}}">
                <input wire:click="color('{{$option->color_id}}')" type="radio" id="specifyColor{{$option->color}}" name="color" value="{{$option->color}}" autocomplete="on" checked>
                <label for="specifyColor{{$option->color}}">{{$option->color}}</label>
            </div>
        @endforeach
            <div class="quantity-content">
                <div class="left-content">
                    <h4>number of products:{{$pcs}}</h4>
                <h6>No. of Orders</h6>
                </div>
            </div>
            <div class="right-content">
                <div class="quantity buttons_added">
                    <input wire:click="decrement" type="button" value="-" class="minus">
                    <input type="number" step="1" min="1" max="" name="quantpity" value="{{$count}}" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                    <input wire:click="increment" type="button" value="+" class="plus">
                </div>
            </div>
        <div class="total">
            <h4>Total: {{$price}}</h4>
                <div class="main-border-button">
                     <a href="{{Route('basket', [$product_id, $count, $size_id, $color_id, $pcs])}}">Add To Basket</a>
                </div>
        </div>
</div>