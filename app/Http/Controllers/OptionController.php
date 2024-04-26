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
    public function __construct()
    {
        $this->categories = Category::paginate(4);
        $this->sizes = Size::paginate(4);
        $this->colors = Color::paginate(4);
        $this->single_option = '';
    }
    public function create_option_page()
    {
        $c = 1;
        $s = 1;
        $i = 1;
        $single_option = $this->single_option;
        $categories = $this->categories;
        $sizes = $this->sizes;
        $colors = $this->colors;
        return view('admin.create_option', compact('categories', 'sizes', 'colors', 'single_option', 'i', 'c', 's'));
    }
    public function single_category($category_id)
    {
        $this->single_option = Category::where('id', $category_id)
            ->first();
        return $this->create_option_page();
    }
}
