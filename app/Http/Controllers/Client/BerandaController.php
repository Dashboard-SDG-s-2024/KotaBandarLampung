<?php

namespace App\Http\Controllers\Client;

use App\Models\Pilar;
use App\Models\Tujuan;
use App\Models\Berita;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $pilars = Pilar::all();
        $tujuans = Tujuan::all();
        $beritas = Berita::orderBy('created_at', 'desc')->take(3)->get();
        return view('home', compact('tujuans', 'pilars', 'beritas'));
    }

    public function show($id)
    {
        $pilar = Pilar::findOrFail($id);
        $tujuans = Tujuan::where('pilar_id', $id)->get();
        return view('client.detail-pilar', compact('pilar', 'tujuans'));
    }
}
