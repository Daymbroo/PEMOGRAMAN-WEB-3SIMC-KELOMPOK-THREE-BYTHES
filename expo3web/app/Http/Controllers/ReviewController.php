<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'comment' => 'required|string|max:1000',
        ]);

        // Simpan data review
        Review::create([
            'name' => $request->name,
            'comment' => $request->comment,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('client.index')->with('success', 'Review berhasil disimpan');
    }
}
