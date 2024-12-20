<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;
use App\Models\Review;
use App\Models\Coupon;


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function fetchFromApi()
    {
        $url = 'https://localhost:7269/api/produk'; 
        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->json();

            foreach ($data as $item) {
                Produk::create([
                    'nama' => $item['nama'],
                    'kategori' => $item[''],
                    'harga_jual' => $item['harga_jual'],
                    'harga_beli' => $item['harga_beli'],
                    'deskripsi' => $item['deskripsi'] ?? null,
                    'foto' => $item['foto'] ?? 'nophoto.jpg',
                ]);
            }

            return redirect()->route('index.index')->with('success', 'Data produk berhasil diambil dari API');
        } else {
            return redirect()->route('index.index')->with('error', 'Gagal mengambil data dari API');
        }
    }
     
    public function index()
    {
    // Check if the authenticated user is an admin
    if(auth()->user()->role === 'admin'){
            // Fetch all products for admin view
            $produk = Produk::all();
            return view('produk.index', compact('produk'));
        } else {
            // Redirect non-admin users to the client view
            return redirect()->route('client');
        }
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'nama' => 'required|max:45',
            'kategori' => 'required|max:45',
            'harga_jual' => 'required|numeric',
            'harga_beli' => 'required|numeric',
            'deskripsi' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ], [
            'nama.required' => 'Nama wajib diisi',
            'nama.max' => 'Nama maksimal 45 karakter',
            'kategori.required' => 'Kategori wajib diisi',
            'kategori.max' => 'Kategori maksimal 45 karakter',
            'deskripsi.max' => 'Deskripsi maksimal 255 karakter',
            'foto.max' => 'Foto maksimal 2 MB',
            'foto.mimes' => 'File ekstensi hanya bisa jpg, png, jpeg, gif, svg',
            'foto.image' => 'File harus berbentuk image'
        ]);

        // Handle photo upload
        if ($request->hasFile('foto')) {
            $fileName = 'foto-' . uniqid() . '.' . $request->foto->extension();
            $request->foto->move(public_path('image'), $fileName);
        } else {
            $fileName = 'nophoto.jpg';
        }

        // Insert the new product
        DB::table('produks')->insert([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'harga_jual' => $request->harga_jual,
            'harga_beli' => $request->harga_beli,
            'deskripsi' => $request->deskripsi, // Add description
            'foto' => $fileName,
        ]);

        return redirect()->route('index.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $id)
    {
        return view('produk.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate incoming data
        $request->validate([
            'nama' => 'required|max:45',
            'kategori' => 'required|max:45',
            'harga_jual' => 'required|numeric',
            'harga_beli' => 'required|numeric',
            'deskripsi' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ], [
            'nama.required' => 'Nama wajib diisi',
            'nama.max' => 'Nama maksimal 45 karakter',
            'kategori.required' => 'Kategori wajib diisi',
            'kategori.max' => 'Kategori maksimal 45 karakter',
            'deskripsi.max' => 'Deskripsi maksimal 255 karakter',
            'foto.max' => 'Foto maksimal 2 MB',
            'foto.mimes' => 'File ekstensi hanya bisa jpg, png, jpeg, gif, svg',
            'foto.image' => 'File harus berbentuk image'
        ]);
    
        // Fetch the existing product
        $produk = Produk::findOrFail($id);
    
        // Handle photo upload
        if ($request->hasFile('foto')) {
            // Delete old photo if it exists and isn't the default "nophoto.jpg"
            if ($produk->foto && $produk->foto != 'nophoto.jpg' && file_exists(public_path('image/' . $produk->foto))) {
                unlink(public_path('image/' . $produk->foto));
            }
    
            // Upload new photo
            $fileName = 'foto-' . uniqid() . '.' . $request->foto->extension();
            $request->foto->move(public_path('image'), $fileName);
        } else {
            // Retain the old photo if no new one is uploaded
            $fileName = $produk->foto;
        }
    
        // Update the product data
        $produk->update([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'harga_jual' => $request->harga_jual,
            'harga_beli' => $request->harga_beli,
            'deskripsi' => $request->deskripsi,
            'foto' => $fileName,
        ]);
    
        return redirect()->route('index.index')->with('success', 'Data produk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $id)
    {
        // Delete the product record
        $id->delete();

        return redirect()->route('index.index')->with('success', 'Data berhasil dihapus');
    }

    public function show($id)
    {
    $produk = Produk::findOrFail($id);
    return view('produk.show', compact('produk'));
    }

    public function review()
    {
    $reviews = Review::all(); // Ambil data review
    return view('produk.review', compact('reviews'));
    }

    public function coupon()
{
    // Ambil data produk dan kupon
    $coupons = Coupon::all();

    // Kembalikan ke tampilan dengan data produk dan kupon
    return view('produk.coupon', compact( 'coupons'));
}

}