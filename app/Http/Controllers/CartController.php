<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CartController extends Controller
{
    public function viewCartPage(){
        $user_id = Auth::user()->id;
        $merchandises = Cart::where('user_id', 'LIKE', "$user_id")->get();
        $total_price = 0;
        $quantity = count($merchandises);

        foreach($merchandises as $item){
            $total_price += ($item->merchandise->price * $item->quantity);
        }

        return view('registered.cart')->with('merchandises', $merchandises)->with('price', $total_price)->with('quantity', $quantity);
    }

    public static function addMerchToCart($merchandise_id){
        $user_id = Auth::user()->id;
        $currItem = Cart::where('user_id', 'LIKE', "$user_id")->where('merchandise_id', 'LIKE', "$merchandise_id")->get();
        if(count($currItem) == 0){
            Cart::create([
                'user_id' => $user_id,
                'merchandise_id' => $merchandise_id
            ]);
        }else{
            $quantity = $currItem[0]->quantity + 1;
            Cart::where('user_id', 'LIKE', "$user_id")->where('merchandise_id', 'LIKE', "$merchandise_id")->update([
                'quantity' => $quantity
            ]);
        }
    }

    public function removeFromCart($merchandise_id){
        $user_id = Auth::user()->id;
        Cart::where('merchandise_id', 'LIKE', "$merchandise_id")->where('user_id', 'LIKE', "$user_id")->delete();

        return redirect('/cart');
    }

    public function addQuantity($merchandise_id){
        $user_id = Auth::user()->id;

        $currCart = Cart::where('user_id', 'LIKE', "$user_id")->where('merchandise_id', 'LIKE', "$merchandise_id")->get();

        $quantity = $currCart[0]->quantity + 1;
        if($quantity == 0){
            Cart::where('user_id', 'LIKE', "$user_id")->where('merchandise_id', 'LIKE', "$merchandise_id")->delete();
        }else{
            Cart::where('user_id', 'LIKE', "$user_id")->where('merchandise_id', 'LIKE', "$merchandise_id")->update([
                'quantity' => $quantity
            ]);
        }

        return redirect('/cart');
    }

    public function reduceQuantity($merchandise_id){
        $user_id = Auth::user()->id;

        $currCart = Cart::where('user_id', 'LIKE', "$user_id")->where('merchandise_id', 'LIKE', "$merchandise_id")->get();

        $quantity = $currCart[0]->quantity - 1;

        if($quantity == 0){
            Cart::where('user_id', 'LIKE', "$user_id")->where('merchandise_id', 'LIKE', "$merchandise_id")->delete();
        }else{
            Cart::where('user_id', 'LIKE', "$user_id")->where('merchandise_id', 'LIKE', "$merchandise_id")->update([
                'quantity' => $quantity
            ]);
        }

        return redirect('/cart');
    }

    public function checkOut(){
        $user_id = Auth::user()->id;
        $cart = Cart::where('user_id', 'LIKE', "$user_id")->get();
        $quantity = 0;
        $price = 0;

        foreach($cart as $item){
            $quantity += $item->quantity;
            $price += $item->merchandise->price;
        }

        $history_id = HistoryController::createMerchHistory($quantity, $price, $user_id);

        foreach($cart as $item){
            MerchandiseHistoryController::loadMerchHistory($history_id, $item->merchandise_id, $item->quantity);
        }

        Cart::where('user_id', 'LIKE', "$user_id")->delete();

        return redirect('/cart');
    }

    public static function getCartCount(){
        if(Auth::check() == true){
            $user_id = Auth::user()->id;
            $cart = Cart::where('user_id', 'LIKE', "$user_id")->get();
            $cart_quantity = count($cart);
        }else{
            $cart_quantity = 0;
        }

        return $cart_quantity;
    }
}
