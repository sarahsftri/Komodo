<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\History;

class HistoryController extends Controller
{
    public function viewHistoryPage(){
        $user_id = Auth::user()->id;

        $history = History::where('user_id', 'LIKE', "$user_id");

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
            'total_price' => $total_price
        ]);

        return $history->id;
    }

    public static function createMerchHistory($quantity, $price, $user_id){
        $type = "Merchandise";

        $history = History::create([
            'user_id' => $user_id,
            'type' => $type,
            'total_quantity' => $quantity,
            'total_price' => $price
        ]);

        return $history->id;
    }

    // show all history
}
