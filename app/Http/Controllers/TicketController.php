<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function viewTicketPage(){
        return view('ticket');
    }

    public function purchaseTickets(Request $request){
        $ticket_id = $request->id;
        $history_id = HistoryController::createTicketHistory($request->quantity, $request->price);
        for($i = 0; $i <= $request->quantity; $i++){
            TicketHistoryController::loadTicketHistory($history_id, $ticket_id);
        }

        return redirect('/');
    }
}
