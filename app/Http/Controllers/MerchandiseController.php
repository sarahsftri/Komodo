<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchandise;

class MerchandiseController extends Controller
{
    public function insertMerchandise(){

    }

    public function updateMerchandise(){

    }

    public function deleteMerchandise(){

    }

    public function viewMerchandisePage(){
        $latest = Merchandise::orderBy('created_at', 'DESC')->get();
        $merch = Merchandise::paginate(8);

        return view('merchandise')->with('latest')->with('merch');
    }

    public function addToCart($merchandise_id){
        CartController::addMerchToCart($request->id);

        return redirect()->back();
    }
}
