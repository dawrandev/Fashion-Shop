<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OptionController extends Controller
{
    public $categories;
    public $sizes;
    public $colors;
    public $single_option;
    public $single_size;
    public $single_color;
    public function __construct()
    {
        $this->categories = Category::paginate(4);
        $this->sizes = Size::paginate(4);
        $this->colors = Color::paginate(4);
        $this->single_category = '';
        $this->single_size = '';
        $this->single_color = '';
    }
    public function create_option_page()
    {
        $c = 1;
        $s = 1;
        $i = 1;
        $single_category = $this->single_category;
        $single_size = $this->single_size;
        $single_color = $this->single_color;
        $categories = $this->categories;
        $sizes = $this->sizes;
        $colors = $this->colors;
        return view('admin.create_option', compact('categories', 'sizes', 'colors', 'single_category', 'single_size', 'single_color', 'i', 'c', 's'));
    }
    public function single_category($category_id)
    {
        $this->single_category = Category::where('id', $category_id)
            ->first();
        return $this->create_option_page();
    }
    public function single_size($size_id)
    {
        $this->single_size = Size::where('id', $size_id)
            ->first();
        return $this->create_option_page();
    }
    public function single_color($color_id)
    {
        $this->single_color = Color::where('id', $color_id)
            ->first();
        return $this->create_option_page();
    }
}
