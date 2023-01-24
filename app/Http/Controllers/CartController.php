<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function viewCartPage(){
        $user_id = Auth::user()->id;
        $merchandise = Cart::where('user_id', 'LIKE', "$user_id")->get();

        return view('cart')->with('merchandise', $merchandise);
    }

    public static function addMerchToCart($merchandise_id){
        $user_id = Auth::user()->id;
        Cart::create([
            'user_id' => $user_id,
            'merchandise_id' => $merchandise_id
        ]);
    }

    public function removeFromCart($merchandise_id){
        $remove = Cart::where('merchandise_id', 'LIKE', '$merchandise_id');

        $remove->delete();

        return redirect('/cart');
    }

    // set quantity?
}
