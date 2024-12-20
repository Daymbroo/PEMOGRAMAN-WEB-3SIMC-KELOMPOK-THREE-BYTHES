<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth; // Menambahkan import untuk kelas Auth
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
{
    $user = Auth::user();
    return view('client.profile', compact('user')); // Pastikan menggunakan 'client.profile'
}
}
