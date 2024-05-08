<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function create_size(Request $request)
    {
        $validate = $request->validate([
            'size' => 'required|unique:sizes'
        ]);
        Size::create([
            'size' => $request->size
        ]);
        return redirect()->route('create_option_page');
    }
    public function edit_size(Request $request)
    {
        $size = Size::where('id', $request->id)
            ->update([
                'size' => $request->new_size
            ]);
        return redirect()->route('create_option_page');
    }
    public function delete_size($size_id)
    {
        $delete_size = Size::where('id', $size_id)
            ->delete();
        return redirect()->route('create_option_page');
    }
}
