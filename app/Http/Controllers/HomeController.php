<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function portofolio()
    {
        return view('home.portofolio');
    }

    public function aboutUs()
    {
        return view('home.about-us');
    }

    public function toko()
    {
        return view('home.toko');
    }

    public function produk(Request $request)
    {
        $produk = Produk::query()
            ->join('kategori_produk as kp', 'kp.produk_id', '=', 'produk.id')
            ->join('kategori as k', 'k.id', '=', 'kp.kategori_id')
            ->join('bahan as b', 'b.id', '=', 'produk.bahan_id')
            ->where('produk.slug', '=', $request->slug)
            ->select('produk.*', 'k.nama as nama_kategori', 'b.nama as nama_bahan')
            ->get();

        // dd($produk);

        return view('home.produk', [
            'produk' => $produk,
        ]);
    }

    public function profil()
    {
        if(!auth()->user()) {
            return redirect('login');
        }

        $user = User::query()
            ->join('user_identitas as ui', 'ui.user_id', '=', 'users.id')
            ->where('users.id', auth()->user()->id)
            ->first();
        
        return view('home.profil', [
            'user' => $user
        ]);
    }

    public function updateProfil(Request $request)
    {
        if(!auth()->user()) {
            return redirect('login');
        }

        $validate = $request->validate([
            'nama_lengkap' => 'required|string',
            'telepon' => 'required|string|min:12|max:15',
            'jalan' => 'required|string',
            'kelurahan' => 'required|string',
            'kecamatan' => 'required|string',
            'kabupaten' => 'required|string',
            'provinsi' => 'required|string',
            'kode_pos' => 'required|string|min:5|max:5',
        ]);

        $user = DB::table('user_identitas')
            ->where('user_id', auth()->user()->id)
            ->update([
                'nama_lengkap' => $request->nama_lengkap,
                'telepon' => $request->telepon,
                'jalan' => $request->jalan,
                'kelurahan' => $request->kelurahan,
                'kecamatan' => $request->kecamatan,
                'kabupaten' => $request->kabupaten,
                'provinsi' => $request->provinsi,
                'kode_pos' => $request->kode_pos,
                'updated_at' => Carbon::now('Asia/Jakarta'),
            ]);

        return redirect('profil')->with('success', 'Data User berhasil diperbarui!');
    }
}
