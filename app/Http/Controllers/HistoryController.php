<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\History;

class HistoryController extends Controller
{
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

    // show all history
}
