<?php

namespace App\Livewire;

use App\Models\Price;
use App\Models\Product;
use Livewire\Component;

class Counter extends Component
{
    public $count = 1;
    public $price;
    public $product_id;
    public $product_price;
    public $pcs;
    public function mount($product_id)
    {
        $this->product_id = $product_id;
        $this->product_price = Price::where("product_id", $this->product_id)->first();
        $this->price = $this->product_price->price;
        $this->pcs = Product::where("product_id", $this->product_id)->first();
    }
    public function price()
    {
        $this->price = $this->product->price * $this->count;
    }
    public function pcs()
    {
    }

    public function increment()
    {
        $this->count++;
        $this->price();
    }

    public function decrement()
    {
        if ($this->count > 1) {
            $this->count--;
            $this->price();
        }

    }
    public function render()
    {
        return view('components.livewire.counter');
    }
}
