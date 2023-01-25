<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function viewTicketPage(){
        return view('layouts.ticket');
    }

    public function purchaseTickets(Request $request){
        $price = 1000000;
        $history_id = HistoryController::createTicketHistory($request->quantity, $price);
        for($i = 0; $i < $request->quantity; $i++){
            $ticket = Ticket::create([]);
            $ticket_id = $ticket->id;
            TicketHistoryController::loadTicketHistory($history_id, $ticket_id);
        }

        return redirect('/');
    }
}
