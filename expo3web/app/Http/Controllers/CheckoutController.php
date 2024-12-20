<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart; // Make sure the Cart model exists
use App\Models\Coupon;
use Carbon\Carbon;

class CheckoutController extends Controller
{
    public function index()
    {
        // Get cart items from the session
        $cart = session()->get('cart', []);
        
        // Calculate the total price
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity']; // Calculate total based on price and quantity
        }

        // Send cart data and total to the view
        return view('checkout', compact('cart', 'total'));
    }

    public function showCart()
    {
        // Get cart items from session
        $cart = session()->get('cart', []); 
        
        if (empty($cart)) {
            return redirect()->route('client.shop')->with('error', 'Your cart is empty.');
        }

        // Calculate subtotal and total
        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }
        $total = $subtotal; // Optionally, you can add shipping costs or other fees here

        return view('client.checkout', compact('cart', 'subtotal', 'total'));
    }

    public function applyCoupon(Request $request)
    {
        $couponCode = $request->input('coupon_code');
        
        // Retrieve the coupon from the database
        $coupon = Coupon::where('code', $couponCode)->first();

        // Check if coupon exists
        if (!$coupon) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid coupon code.'
            ]);
        }

        // Check if coupon is expired
        if ($coupon->expires_at && now()->greaterThan($coupon->expires_at)) {
            return response()->json([
                'success' => false,
                'message' => 'Coupon has expired.'
            ]);
        }

        // Get cart total (you can modify this as per your requirements)
        $cart = session()->get('cart', []);
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        
        // Calculate discount and updated total based on coupon type
        $discountValue = 0;
        $discountedTotal = $total;

        if ($coupon->discount_type == Coupon::DISCOUNT_TYPE_PERCENTAGE) {
            $discountValue = ($total * $coupon->discount_value) / 100;
            $discountedTotal = $total - $discountValue;
        } elseif ($coupon->discount_type == Coupon::DISCOUNT_TYPE_FIXED) {
            $discountValue = $coupon->discount_value;
            $discountedTotal = $total - $discountValue;
        }

        // Return updated total and discount
        return response()->json([
            'success' => true,
            'discount' => $discountValue,
            'new_total' => $discountedTotal,
            'message' => "Coupon applied successfully!"
        ]);
    }
}
