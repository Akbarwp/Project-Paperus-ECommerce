<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SalesController extends Controller
{
    public function getSales($request)
    {
        $user = auth()->user();
        if ($request == 'exist') {
            $sales = DB::table('sales')
                ->join('sales_detail as sd', 'sd.sales_id', '=', 'sales.id')
                ->join('produk as p', 'p.id', '=', 'sd.produk_id')
                ->where('user_id', '=', $user->id)
                ->where('sales.status', '=', 'keranjang')
                ->orderBy('sd.id', 'desc')
                ->select(
                    'sales.id as sales_id', 'sales.grand_total', 'sales.biaya_kirim',
                    'sd.kuantitas', 'sd.total', 'sd.id as sales_detail_id',
                    'p.nama as nama_produk', 'p.foto'
                )
                ->exists();

        } elseif ($request == 'get') {
            $sales = DB::table('sales')
                ->join('sales_detail as sd', 'sd.sales_id', '=', 'sales.id')
                ->join('produk as p', 'p.id', '=', 'sd.produk_id')
                ->where('user_id', '=', $user->id)
                ->where('sales.status', '=', 'keranjang')
                ->orderBy('sd.id', 'desc')
                ->select(
                    'sales.id as sales_id', 'sales.grand_total', 'sales.biaya_kirim',
                    'sd.kuantitas', 'sd.total', 'sd.id as sales_detail_id',
                    'p.id as produk_id', 'p.nama as nama_produk', 'p.foto'
                )
                ->get();
        }

        return $sales;
    }

    public function cart()
    {
        if (!auth()->user()) {
            return redirect('login');
        }

        $sales = $this->getSales('exist');
        if (!$sales) {
            $sales = null;
            return view('home.cart', [
                'sales' => $sales,
            ]);
        }

        $sales = $this->getSales('get');
        
        // dd($sales);

        $subTotal = 0;
        foreach ($sales as $item) {
            $subTotal += $item->total;
        }
        $totalSemua = $subTotal + $sales[0]->biaya_kirim;

        return view('home.cart', [
            'sales' => $sales,
            'subTotal' => $subTotal,
            'totalSemua' => $totalSemua,
        ]);
    }

    public function ubahJml(Request $request)
    {
        $produk = DB::table('produk')->where('id', '=', $request->produk_id)->get();

        if ($request->jml <= 0) {
            return redirect('cart')->with('error', 'Jumlah pembelian produk tidak boleh kurang dari 0');
        }

        if ($request->jml >= $produk[0]->stok) {
            return redirect('cart')->with('error', 'Jumlah pembelian produk '. $produk[0]->nama .' melebihi stok');
        }

        $user = auth()->user();
        $salesItem = DB::table('sales')
            ->join('sales_detail as sd', 'sd.sales_id', '=', 'sales.id')
            ->join('produk as p', 'p.id', '=', 'sd.produk_id')
            ->where('user_id', '=', $user->id)
            ->where('sales.status', '=', 'keranjang')
            ->where('sd.id', '=', $request->sales_detail_id)
            ->select(
                'sales.id as sales_id', 'sales.grand_total', 'sales.biaya_kirim',
                'sd.kuantitas', 'sd.total', 'sd.id as sales_detail_id',
                'p.nama as nama_produk', 'p.harga', 'p.modal'
            )
            ->get();
        
        $totalBaru = $request->jml * $salesItem[0]->harga;
        $keuntungan = ($salesItem[0]->harga * $request->jml) - ($salesItem[0]->modal * $request->jml);

        $salesDetailUpdate = DB::table('sales')
            ->join('sales_detail as sd', 'sd.sales_id', '=', 'sales.id')
            ->join('produk as p', 'p.id', '=', 'sd.produk_id')
            ->where('user_id', '=', $user->id)
            ->where('sales.status', '=', 'keranjang')
            ->where('sd.id', '=', $request->sales_detail_id)
            ->update([
                'kuantitas' => $request->jml,
                'total' => $totalBaru,
                'keuntungan' => $keuntungan,
                'grand_total' => ($salesItem[0]->grand_total - $salesItem[0]->total) + $totalBaru,
            ]);

        return redirect('cart');
    }

    public function hapusItem(Request $request)
    {
        $user = auth()->user();
        $salesItem = DB::table('sales_detail')
            ->where('id', '=', $request->sales_detail_id)
            ->delete();

        $cekSales = DB::table('sales')
            ->join('sales_detail as sd', 'sd.sales_id', '=', 'sales.id')
            ->where('sales.id', '=', $request->sales_id)
            ->first();

        if ($cekSales == null) {
            $sales = DB::table('sales')
                ->where('id', '=', $request->sales_id)
                ->delete();
        }

        return redirect('cart');
    }

    public function pembayaran(Request $request)
    {
        if ($request->metode_bayar == null) {
            return redirect('cart')->with('error', 'Silakan pilih metode bayar');
        }

        $user = auth()->user();
        $sales = DB::table('sales')
                ->join('sales_detail as sd', 'sd.sales_id', '=', 'sales.id')
                ->join('produk as p', 'p.id', '=', 'sd.produk_id')
                ->where('user_id', '=', $user->id)
                ->where('sales.status', '=', 'keranjang')
                ->orderBy('sd.id', 'desc')
                ->select(
                    'sales.id as sales_id', 'sales.grand_total', 'sales.biaya_kirim',
                    'sd.kuantitas', 'sd.total', 'sd.id as sales_detail_id',
                    'p.id as produk_id',
                )
                ->get();

        foreach ($sales as $item) {
            $produk = Produk::where('id', '=', $item->produk_id)->get();
            $produkUpdate = Produk::where('id', '=', $item->produk_id)->update([
                'stok' => $produk[0]->stok - $item->kuantitas,
            ]);
        }

        $user = auth()->user();
        $salesUpdate = DB::table('sales')
                ->where('user_id', '=', $user->id)
                ->where('id', '=', $request->sales_id)
                ->update([
                    'tanggal_transaksi' => Carbon::now(),
                    'status' => 'baru',
                    'metode_pembayaran' => $request->metode_bayar,
                    'updated_at' => Carbon::now(),
                ]);
            
        return view('home.pembayaran', [
            'metode_bayar' => $request->metode_bayar,
        ]);
    }

    public function findSales()
    {
        $user = auth()->user();
        $findSales = DB::table('sales')
            ->where('user_id', '=', $user->id)
            ->where('status', '=', 'keranjang')
            ->first();
        
        return $findSales;
    }

    public function keranjang(Request $request)
    {
        if(!auth()->user()) {
            return redirect('login');
        }

        $user = auth()->user();
        $produk = Produk::find($request);
        // $sales_id = 'SS'.Carbon::now()->format('dmY');

        //* Tabel Sales
        $findSales = $this->findSales();

        if ($findSales == null) {
            $sales = DB::table('sales')->insert([
                'tanggal_transaksi' => Carbon::now(),
                'grand_total' => $produk[0]->harga,
                'biaya_kirim' => 10000,
                'status' => 'keranjang',
                'user_id' => $user->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

        } else {
            $sales = DB::table('sales')
            ->where('user_id', '=', $user->id)
            ->where('status', '=', 'keranjang')
            ->update([
                'grand_total' => $findSales->grand_total + $produk[0]->harga,
            ]);
        }

        //* Tabel Sales Detail
        $findSales = $this->findSales();
        $findSalesDetail = DB::table('sales_detail')
            ->where('sales_id', '=', $findSales->id)
            ->where('produk_id', '=', $produk[0]->id)
            ->first();

        // dd($findSalesDetail);

        if ($findSalesDetail == null) {
            $keuntungan = ($produk[0]->harga * 1) - ($produk[0]->modal * 1);
            $salesDetail = DB::table('sales_detail')->insert([
                'kuantitas' => 1,
                'total' => $produk[0]->harga,
                'keuntungan' => $keuntungan,
                'diskon' => null,
                'keterangan' => null,
                'sales_id' => $findSales->id,
                'produk_id' => $produk[0]->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

        } else {
            $total = $findSalesDetail->kuantitas + 1;
            $keuntungan = ($produk[0]->harga * $total) - ($produk[0]->modal * $total);
            $salesDetail = DB::table('sales_detail')
            ->where('sales_id', '=', $findSales->id)
            ->where('produk_id', '=', $produk[0]->id)
            ->update([
                'kuantitas' => $total,
                'total' => $produk[0]->harga * $total,
                'keuntungan' => $keuntungan,
                'diskon' => null,
                'keterangan' => null,
                'updated_at' => Carbon::now(),
            ]);
        }

        return redirect('toko')->with('success', 'Berhasil dimasukkan ke dalam keranjang');
    }

    public function beliSekarang(Request $request)
    {
        if(!auth()->user()) {
            return redirect('login');
        }

        $user = auth()->user();
        $produk = Produk::find($request);
        // $sales_id = 'SS'.Carbon::now()->format('dmY');
        $findSales = $this->findSales();

        // dd($findSales);

        if ($findSales == null) {
            $sales = DB::table('sales')->insert([
                // 'id' => $sales_id,
                'tanggal_transaksi' => Carbon::now(),
                'grand_total' => $produk[0]->harga,
                'biaya_kirim' => 10000,
                'status' => 'keranjang',
                'user_id' => $user->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

        } else {
            $sales = DB::table('sales')
            ->where('user_id', '=', $user->id)
            ->where('status', '=', 'keranjang')
            ->update([
                'grand_total' => $findSales->grand_total + $produk[0]->harga,
                'updated_at' => Carbon::now(),
            ]);
        }

        $findSales = $this->findSales();
        $findSalesDetail = DB::table('sales_detail')
            ->where('sales_id', '=', $findSales->id)
            ->where('produk_id', '=', $produk[0]->id)
            ->first();

        if ($findSalesDetail == null) {
            $keuntungan = ($produk[0]->harga * 1) - ($produk[0]->modal * 1);
            $salesDetail = DB::table('sales_detail')->insert([
                'kuantitas' => 1,
                'total' => $produk[0]->harga,
                'keuntungan' => $keuntungan,
                'diskon' => null,
                'keterangan' => null,
                'sales_id' => $findSales->id,
                'produk_id' => $produk[0]->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

        } else {
            $total = $findSalesDetail->kuantitas + 1;
            $keuntungan = ($produk[0]->harga * 1) - ($produk[0]->modal * 1);

            $salesDetail = DB::table('sales_detail')
            ->where('sales_id', '=', $findSales->id)
            ->where('produk_id', '=', $produk[0]->id)
            ->update([
                'kuantitas' => $total,
                'total' => $produk[0]->harga * $total,
                'keuntungan' => $keuntungan,
                'diskon' => null,
                'keterangan' => null,
                'updated_at' => Carbon::now(),
            ]);
        }

        return redirect('cart');
    }
}
