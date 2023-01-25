<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchandise_History;

class MerchandiseHistoryController extends Controller
{
    public static function loadMerchHistory($history_id, $merchandise_id, $quantity){
        Merchandise_History::create([
            'history_id' => $history_id,
            'merchandise_id' => $merchandise_id,
            'quantity' => $quantity
        ]);
    }
}
