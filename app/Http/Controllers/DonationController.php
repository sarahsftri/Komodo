<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function viewDonationPage(){
        return view('layouts.donation');
    }
    // insert (donate)

    public function makeDonation(Request $request){
        $history_id = HistoryController::createDonationHistory($request->amount);

        $amount = Donnation::create([]);

        return redirect('/');
    }

    // count total donation

    public function countTotalDonation(Request $request){

    }

}
