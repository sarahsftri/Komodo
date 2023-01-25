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
        $request->validate([
            'name' => 'required|min:3',
            'price' => 'required',
            'detail' => 'required|min:10',
            'stock' => 'required',
            'image' => 'required|file|mimes:jpeg,jpg,png,gif',
        ],[
            'name.required' => 'name is required',
            'name.min' => 'name is too short',
            'price.required' => 'price is required',
            'detail.required' => 'detail is required',
            'detail.min' => 'detail is too short',
            'stock.required' => 'stock is required',
            'image.required' => 'image is required',
            'image.file' => 'image needs to be a file',
            'image.mimes' => 'image needs to be filled with jpeg, jpg, png, or gif',
        ]);

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
        $request->validate([
            'name' => 'required|min:3',
            'price' => 'required',
            'detail' => 'required|min:10',
            'stock' => 'required',
            'image' => 'file|mimes:jpeg,jpg,png,gif',
        ],[
            'name.required' => 'name is required',
            'name.min' => 'name is too short',
            'price.required' => 'price is required',
            'detail.required' => 'detail is required',
            'detail.min' => 'detail is too short',
            'stock.required' => 'stock is required',
            'image.file' => 'image needs to be a file',
            'image.mimes' => 'image needs to be filled with jpeg, jpg, png, or gif',
        ]);

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

    public function removeMerchandise($merchandise_id){
        $currMerch = Merchandise::find($merchandise_id);
        $currMerch->delete();

        return redirect('/merchandise');
    }

    public function viewMerchandisePage(){
        $latest = Merchandise::orderBy('created_at', 'DESC')->paginate(5);
        $merch = Merchandise::paginate(5);
        $cart_quantity = CartController::getCartCount();

        return view('layouts.merchandise')->with('latest', $latest)->with('merch', $merch)->with('cart_quantity', $cart_quantity);
    }

    public function addToCart($merchandise_id){
        CartController::addMerchToCart($merchandise_id);

        return redirect()->back();
    }

    public function viewMerchandise($merchandise_id){
        $merchandise = Merchandise::find($merchandise_id);

        return view('layouts.viewmerch')->with('merchandise', $merchandise);
    }
}
