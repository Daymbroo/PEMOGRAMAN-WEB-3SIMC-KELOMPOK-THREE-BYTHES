<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        // Retrieve cart from session
        $cart = session()->get('cart', []);

        // Return cart view
        return view('client.cart', compact('cart'));
    }

    public function add(Request $request)
    {
        // Extract product data
        $product = $request->only(['id', 'name', 'price', 'image']);

        // Retrieve cart from session
        $cart = session()->get('cart', []);

        // Check if product is already in the cart
        if (isset($cart[$product['id']])) {
            // Increase quantity if the product is already in the cart
            $cart[$product['id']]['quantity'] += 1;
        } else {
            // Add new product to cart
            $cart[$product['id']] = array_merge($product, ['quantity' => 1]);
        }

        // Save updated cart to session
        session()->put('cart', $cart);

        // Return the updated cart count (length of the cart)
        return response()->json([
            'success' => true, 
            'cart_count' => count($cart),  // Return the cart item count
        ]);
    }

    public function update(Request $request)
    {
        // Get cart from session
        $cart = session()->get('cart');

        // Update cart quantities based on the request
        foreach ($request->quantity as $id => $quantity) {
            if (isset($cart[$id])) {
                $cart[$id]['quantity'] = $quantity;
            }
        }

        // Save updated cart to session
        session()->put('cart', $cart);

        // Redirect back to cart index
        return redirect()->route('cart');
    }

    public function remove($id)
    {
        // Get cart from session
        $cart = session()->get('cart');

        // Remove item from cart
        if (isset($cart[$id])) {
            unset($cart[$id]);
        }

        // Save updated cart to session
        session()->put('cart', $cart);

        // Redirect back to cart index
        return redirect()->route('cart');
    }

    public function getCartCount()
{
    $cartCount = session()->get('cart', collect())->count(); // Atau gunakan logika keranjang Anda
    return response()->json(['cart_count' => $cartCount]);
}
}
