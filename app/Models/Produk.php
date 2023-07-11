<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $table = "produk";

    public function shortJudul($words = 10)
    {
        return Str::words(strip_tags($this->nama), $words);
    }

    public function shortDeskripsi($words = 7)
    {
        return Str::words(strip_tags($this->deskripsi), $words);
    }
}
