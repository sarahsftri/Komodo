<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchandise;

class MerchandiseController extends Controller
{
    public function insertMerchPage(){
        return view('insert-merch');
    }

    public function insertMerchandise(Request $request){
        // upload image here
        // $path = ???

        Merchandise::create([
            'name' => $request->name,
            'price' => $request->price,
            'detail' => $request->detail,
            'stock' => $request->stock,
            // 'image' => $path
        ]);

        return redirect('/merchandise');
    }

    public function updateMerchPage($merchandise_id){
        $merchandise = Merchandise::find($merchandise_id);

        return view('update-merch')->with('merchandise', $merchandise);
    }

    public function updateMerchandise(Request $request, $merchandise_id){
        $currMerch = Merchandise::find($merchandise_id);
        $currMerch->name = $request->name;
        $currMerch->price = $request->price;
        $currMerch->detail = $request->detail;
        $currMerch->stock = $request->stock;

        $path = //;

        $currMerch->image = $request->path;

        return redirect('/merchandise');
    }

    public function deleteMerchandise($merchandise_id){
        $currMerch = Merchandise::find($merchandise_id);
        $currMerch->delete();

        return redirect('/merchandise');
    }

    public function viewMerchandisePage(){
        $latest = Merchandise::orderBy('created_at', 'DESC')->get();
        $merch = Merchandise::paginate(8);

        return view('merchandise')->with('latest', $latest)->with('merch', $merch);
    }

    public function addToCart($merchandise_id){
        CartController::addMerchToCart($merchandise_id);

        return redirect()->back();
    }
}
