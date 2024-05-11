<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public $histories;
    public function __construct()
    {
        $this->histories = DB::table('histories')
            ->join('clients', 'histories.user_id', '=', 'clients.user_id')
            ->join('categories', 'histories.category_id', '=', 'categories.id')
            ->join('products', 'histories.product_id', '=', 'products.id')
            ->join('sizes', 'histories.size_id', '=', 'sizes.id')
            ->join('colors', 'histories.color_id', '=', 'colors.id')
            ->select('clients.user_id as user_id', 'categories.name as category_name', 'products.name as product_name', 'products.*', 'clients.*', 'histories.*', 'sizes.*', 'colors.*');
    }
    public function clients_table()
    {
        $histories = $this->histories->get();
        $summa = $this->CalculateSumma();
        $i = 1;
        return view('admin.clients_table', compact('histories', 'i', 'summa'));
    }
    public function CalculateSumma()
    {
        $summa = 0;
        foreach ($this->histories->get() as $history) {
            $summa += $history->summa;
        }
        return $summa;
    }
    public function client_products($user_id)
    {
        $client_products = $this->histories->where('clients.user_id', $user_id)->paginate(10);
        foreach ($client_products as $product) {
            $surname = $product->surname;
            $name = $product->name;
        }
        $i = 1;
        return view('admin.client_products', compact('client_products', 'i', 'surname', 'name'));
    }

}
