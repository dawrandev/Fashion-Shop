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
    public function __construct()
    {
        $this->categories = Category::paginate(4);
        $this->sizes = Size::paginate(4);
        $this->colors = Color::paginate(4);
    }
    public function create_option_page()
    {
        $c = 1;
        $s = 1;
        $i = 1;
        $single_category = '';
        $categories = $this->categories;
        $sizes = $this->sizes;
        $colors = $this->colors;
        return view('admin.create_option', compact('categories', 'sizes', 'colors', 'single_category', 'i', 'c', 's'));
    }
}
