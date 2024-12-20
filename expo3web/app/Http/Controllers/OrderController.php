<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'required|string|max:500',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'total_amount' => 'required|numeric',
            'cart_items' => 'required|array',
        ]);

        // Simpan data order
        // Contoh:
        // Order::create($validatedData);

        // Berikan respons JSON
        return response()->json([
            'success' => true,
            'message' => 'Order placed successfully!',
        ]);
    }
}
