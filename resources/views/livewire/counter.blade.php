<div>
    <div class="right-content">
        <div class="quantity buttons_added">
            <input type="button" value="-" class="minus" wire:click="increment">
            <input type="number" step="1" min="1" max="" name="quantity" value="{{$count}}" title="Qty"
                class="input-text qty text" size="4" pattern="" inputmode="">
            <input type="button" value="+" class="plus" wire:click="decrement">
        </div>
    </div>
</div>