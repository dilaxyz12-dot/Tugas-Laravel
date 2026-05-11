<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // Menampilkan data produk (Query Builder)
    public function index()
    {
        $products = DB::table('products')->get();

        return view('products.index', compact('products'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('products.create');
    }

    // Menyimpan data produk (Eloquent ORM)
    public function store(Request $request)
    {
        Product::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect('/products');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $product = Product::find($id);

        return view('products.edit', compact('product'));
    }

    // Update data produk (Eloquent ORM)
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect('/products');
    }

    // Hapus data produk (Query Builder)
    public function destroy($id)
    {
        DB::table('products')->where('id', $id)->delete();

        return redirect('/products');
    }
}