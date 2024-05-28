<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Color;
use App\Models\Option;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SelectInput extends Component
{
    public $categories;
    public $selectedCategory;
    public $category_products;
    public $selectedProduct;
    public $sizes;
    public $colors;
    public function mount()
    {
        $this->categories = Category::all();
        $this->selectedCategory = 1;
        $this->selectedProduct = 1;
        $this->CategoryProducts();
        $this->ProductOptions();
    }
    public function CategoryProducts()
    {
        $this->category_products = Product::where('category_id', $this->selectedCategory)
            ->get();
    }

    public function ProductOptions()
    {
        $this->sizes = DB::table('options')
            ->join('sizes', 'options.size_id', '=', 'sizes.id')
            ->where('product_id', $this->selectedProduct)
            ->select('sizes.id', 'sizes.size')
            ->get();
        $this->colors = DB::table('options')
            ->join('colors', 'options.color_id', 'colors.id')
            ->where('product_id', $this->selectedProduct)
            ->select('colors.id', 'colors.color')
            ->get();
    }
    public function render()
    {
        return view('components.livewire.select-input');
    }
}
