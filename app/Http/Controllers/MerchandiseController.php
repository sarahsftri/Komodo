<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchandise;

class MerchandiseController extends Controller
{
    public function insertMerchPage(){
        return view('layouts.addmerch');
    }

    public function insertMerchandise(Request $request){
        // validations

        $ext = $request->image->getClientOriginalExtension();
        $first = explode(" ", $request->name)[0];
        $imageName = $first . "-" . time() . "." . $ext;
        $request->image->move('merch', $imageName);

        Merchandise::create([
            'name' => $request->name,
            'price' => $request->price,
            'detail' => $request->detail,
            'stock' => $request->stock,
            'image' => "merch/" . $imageName
        ]);

        return redirect('/merchandise');
    }

    public function updateMerchPage($merchandise_id){
        $merchandise = Merchandise::find($merchandise_id);

        return view('layouts.editmerch')->with('merchandise', $merchandise);
    }

    public function updateMerchandise(Request $request, $merchandise_id){
        $currMerch = Merchandise::find($merchandise_id);
        $currMerch->name = $request->name;
        $currMerch->price = $request->price;
        $currMerch->detail = $request->detail;
        $currMerch->stock = $request->stock;

        if($request->image != null){
            $ext = $request->image->getClientOriginalExtension();
            $first = explode(" ", $request->name)[0];
            $imageName = $first . "-" . time() . "." . $ext;
            $request->image->move('merch', $imageName);

            $currMerch->image = "merch/" . $imageName;
        }

        $currMerch->save();

        return redirect('/merchandise');
    }

    public function deleteMerchandise($merchandise_id){
        $currMerch = Merchandise::find($merchandise_id);
        $currMerch->delete();

        return redirect('/merchandise');
    }

    public function viewMerchandisePage(){
        $latest = Merchandise::orderBy('created_at', 'DESC')->paginate(5);
        $merch = Merchandise::paginate(5);

        return view('layouts.merchandise')->with('latest', $latest)->with('merch', $merch);
    }

    public function addToCart($merchandise_id){
        CartController::addMerchToCart($merchandise_id);

        return redirect()->back();
    }
}
