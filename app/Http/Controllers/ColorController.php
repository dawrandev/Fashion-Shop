<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function create_color(Request $request)
    {
        $validate = $request->validate([
            'color' => 'required|unique:colors'
        ]);
        $color = Color::create([
            'color' => $request->color
        ]);
        return back();
    }
    public function update_color(Request $request)
    {
        $color = Color::where('id', $request->id)
            ->update([
                'color' => $request->color
            ]);
        return back();
    }
    public function delete_color($color_id)
    {
        $delete_color = Color::where('id', $color_id)
            ->delete();
        return back();
    }
}
