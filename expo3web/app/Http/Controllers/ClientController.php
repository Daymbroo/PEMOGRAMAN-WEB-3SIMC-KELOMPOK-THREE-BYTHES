<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Review;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        // Fetch all products from the database
        $produk = Produk::inRandomOrder()->take(3)->get();

        $reviews = Review::all();
        // Mengirim data review ke view
        return view('client.index', compact('produk','reviews'));
    }

    public function shop()
    {
        // Mengambil semua produk dari database
        $produk = Produk::inRandomOrder()->limit(8)->get(); 
        
        // Mengirim data produk ke view 'client.shop'
        return view('client.shop', compact('produk'));
    }

    public function show($id)
    {
        $produk = Produk::find($id); // Retrieve the product by ID

        if (!$produk) {
            return redirect()->route('home')->with('error', 'Product not found.'); // Redirect if not found
        }

        return view('client.show', compact('produk')); // Pass the product to the view
    }

    public function filterByCategory($kategori)
    {
    if ($kategori == 'all') {
        // Fetch all products when 'all' category is selected
        $produk = Produk::all();
    } else {
        // Fetch products based on the category
        $produk = Produk::where('kategori', $kategori)->get();
    }

    // Return the filtered products to the view
    return view('client.shop', compact('produk'));
    }
}
