<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket_History;

class TicketHistoryController extends Controller
{
    public static function loadTicketHistory($history_id, $ticket_id){
        Ticket_History::create([
            'history_id' => $history_id,
            'ticket_id' => $ticket_id
        ]);
    }

    //  show ticket history
}
