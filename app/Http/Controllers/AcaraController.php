<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use Illuminate\Http\Request;

class AcaraController extends Controller
{
    public function explore()
    {
        $acaras = Acara::latest()->limit(8)->get(); // ambil 8 acara terbaru
        return view('explore', compact('acaras'));
    }
        
    public function detail($id)
    {
        $acara = Acara::findOrFail($id);
        return view('detail', compact('acara'));
    }

}
