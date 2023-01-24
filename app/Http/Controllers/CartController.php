<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public static function addMerchToCart($merchandise_id){
        $user_id = Auth::user()->id;
        Cart::create([
            'user_id' => $user_id,
            'merchandise_id' => $merchandise_id
        ]);
    }

    // remove merch

    // set quantity?
}
