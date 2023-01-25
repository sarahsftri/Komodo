<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\History;

class HistoryController extends Controller
{
    public function viewHistoryPage(){
        $user_id = Auth::user()->id;

        $history = History::where('user_id', 'LIKE', "$user_id")->get();

        return view('layouts.history')->with('history', $history);
    }

    public static function createTicketHistory($quantity, $price){
        $user_id = Auth::user()->id;
        $type = "Ticket";
        $total_price = $quantity * $price;

        $history = History::create([
            'user_id' => $user_id,
            'type' => $type,
            'total_quantity' => $quantity,
            'total_price' => $total_price,
        ]);

        return $history->id;
    }

    public static function createMerchHistory($quantity, $price, $user_id){
        $type = "Merchandise";

        $history = History::create([
            'user_id' => $user_id,
            'type' => $type,
            'total_quantity' => $quantity,
            'total_price' => $price,
        ]);

        return $history->id;
    }

    public static function createDonationHistory($amount){
        $user_id = Auth::user()->id;
        $type = "Donation";

        $history = History::create([ // default quantity = 1 for donations
            'user_id' => $user_id,
            'type' => $type,
            'total_quantity' => 1,
            'total_price' => $amount,
        ]);

        return $history->id;
    }
}
