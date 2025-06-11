<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrController extends Controller
{
    public function index()
    {
        $tikets = \App\Models\Tiket::with('acara')->get(); // include relasi acara
        return view('tiket', compact('tikets'));
    }

    public function generate(Request $request)
    {
        $request->validate([
            'tiket_id' => 'required|exists:tiket,id',
        ]);

        $tikets = \App\Models\Tiket::with('acara')->get();
        $tiket = \App\Models\Tiket::with('acara')->findOrFail($request->tiket_id);

        $qrContent = "Acara: {$tiket->acara->nama} - Pembeli: {$tiket->pembeli} - Kode: {$tiket->kode_tiket} ";
        $qr = \SimpleSoftwareIO\QrCode\Facades\QrCode::size(200)->generate($qrContent);

        return view('tiket', [
            'tikets' => $tikets,
            'qr' => $qr,
            'tiketTerpilih' => $tiket,
        ]);
    }
}


