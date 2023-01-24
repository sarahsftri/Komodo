<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    // insert

    // update

    // delete

    public function viewMerchandisePage(){
        return view('merchandise');
    }

    public function addToCart($merchandise_id){
        CartController::addMerchToCart($request->id);

        return redirect()->back();
    }
}
