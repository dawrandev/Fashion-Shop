<div>
    <div class="right-content">
        <div class="quantity buttons_added">
            <input wire:click="decrement" type="button" value="-" class="minus">
                <input type="number" step="1" min="1" max="" name="quantity" value="{{$count}}" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                    <input wire:click="increment" type="button" value="+" class="plus">
        </div>
    </div>
        <div class="total">
            {{$pcs}}
            <h4>Total: {{$price}}</h4>
                <div class="main-border-button">
                     <a href="#">Add To Cart</a>
                </div>
        </div>
</div>