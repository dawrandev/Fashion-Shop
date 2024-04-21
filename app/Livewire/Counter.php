<?php

namespace App\Livewire;

use App\Models\Piece;
use App\Models\Price;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Counter extends Component
{
    public $count = 1;
    public $product;
    public $price;
    public $product_id;
    public $pcs;
    public $options;
    public $size_id;
    public $color_id;
    public function mount($product_id)
    {
        $piece = Piece::where('product_id', $product_id)->first();
        $this->product = Product::where("id", $product_id)->first();
        $this->price = $this->product->price;
        $this->pcs = $piece->pcs;
        $this->options = DB::table('options')
                        ->join('products', 'options.product_id', '=', 'products.id')
                        ->join('sizes', 'options.size_id', '=', 'sizes.id')
                        ->join('colors', 'options.color_id', '=', 'colors.id')
                        ->where('products.id', $this->product_id)
                        ->select('sizes.id as size_id', 'sizes.size', 'colors.id as color_id', 'colors.color')
                        ->get();
        $this->size_id = $piece->size_id;
        $this->color_id = $piece->color_id;
    }
    public function price()
    {
        $this->price = $this->product->price * $this->count;
    }
    public function pcs()
    {
        $this->pcs = Piece::where('product_id', $this->product_id)
                          ->where('size_id', $this->size_id)
                          ->where('color_id', $this->color_id)
                          ->first()->pcs - $this->count;
    }
    public function size($size_id){
        $this->size_id = $size_id;
        $this->pcs();
    }
    public function color($color_id){
        $this->color_id = $color_id;
        $this->pcs();
    }
    public function increment()
    {
        if ($this->pcs != 0) {
            $this->count++;
            $this->price();
            $this->pcs();
        }
    }
    public function decrement()
    {
        if ($this->count > 1) {
            $this->count--;
            $this->price();
            $this->pcs();
        }
    }
    public function render()
    {
        return view('components.livewire.counter');
    }
}
