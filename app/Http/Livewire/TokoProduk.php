<?php

namespace App\Http\Livewire;

use App\Models\Produk;
use Livewire\Component;
use Livewire\WithPagination;

class TokoProduk extends Component
{
    public $search = '';
    public $kategori = '';
    use WithPagination;

    public function render()
    {
        $produk = Produk::query()
            ->join('kategori_produk as kp', 'kp.produk_id', '=', 'produk.id')
            ->join('kategori as k', 'k.id', '=', 'kp.kategori_id')
            ->where('status', '=', '1')
            ->where('produk.nama', 'like', '%'.$this->search.'%')
            ->where('k.nama', 'like', '%'.$this->kategori.'%')
            ->select('produk.*')
            ->orderBy('produk.created_at', 'desc')->paginate(16);

        return view('livewire.toko-produk', [
            'produk' => $produk,
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
        $this->kategori = '';
    }

    public function produkByKateogri($request = '')
    {
        $this->kategori = $request;
    }
}
