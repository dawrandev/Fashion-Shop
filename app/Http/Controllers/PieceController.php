<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Piece;
use App\Models\Size;
use Illuminate\Http\Request;

class PieceController extends Controller
{
    public function create_pieces_page()
    {
        return view('admin.create_pieces');
    }
    public function create_pieces(Request $request)
    {
        $validate = $request->validate([
            'size_id' => 'required',
            'color_id' => 'required',
            'piece' => 'required'
        ]);
        $piece = Piece::create([
            'category_id' => $request->category_id,
            'product_id' => $request->product_id,
            'size_id' => $request->size_id,
            'color_id' => $request->color_id,
            'pcs' => $request->piece
        ]);
        return $this->create_pieces_page();
    }
}
