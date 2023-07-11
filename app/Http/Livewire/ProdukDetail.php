<?php

namespace App\Http\Livewire;

use App\Models\Produk;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ProdukDetail extends Component
{
    public function render(Request $request)
    {
        $produk = Produk::query()
            ->join('kategori_produk as kp', 'kp.produk_id', '=', 'produk.id')
            ->join('kategori as k', 'k.id', '=', 'kp.kategori_id')
            ->join('bahan as b', 'b.id', '=', 'produk.bahan_id')
            ->where('produk.slug', '=', $request->slug)
            ->select('produk.*', 'produk.deskripsi', 'k.nama as nama_kategori', 'b.nama as nama_bahan', 'k.id as id_kategori')
            ->get();

        $produkSerupa = Produk::query()
            ->join('kategori_produk as kp', 'kp.produk_id', '=', 'produk.id')
            ->join('kategori as k', 'k.id', '=', 'kp.kategori_id')
            ->where('k.id', '=', $produk[0]->id_kategori)
            ->select('produk.*')
            ->take(8)
            ->get();

        return view('livewire.produk-detail', [
            'produk' => $produk,
            'produkSerupa' => $produkSerupa,
        ]);
    }
}
