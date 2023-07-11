<?php

namespace App\Http\Livewire;

use App\Models\Produk;
use Livewire\Component;

class PortoList extends Component
{
    public $count = 12;

    public function render()
    {
        $produk = Produk::take($this->count)->where('status', '=', 1)->get();
        $total = Produk::where('status', '=', 1)->count();

        return view('livewire.porto-list', [
            'produk' => $produk,
            'total' => $total,
        ]);
    }

    public function showMore()
    {
        $this->count += 8;
        sleep(2);
    }
}
