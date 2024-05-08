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
        return redirect()->route('create_option_page');
    }
    public function edit_color(Request $request)
    {
        $color = Color::where('id', $request->color_id)
            ->update([
                'color' => $request->new_color
            ]);
        return redirect()->route('create_option_page');
    }
    public function delete_color($color_id)
    {
        $delete_color = Color::where('id', $color_id)
            ->delete();
        return redirect()->route('create_option_page');
    }
}
