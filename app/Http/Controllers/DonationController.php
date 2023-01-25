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

        $amount = Donation::create([
            'history_id' => $history_id,
            'amount' => $request->amount
        ]);

        return redirect('/');
    }

    // count total donation
    public function countTotalDonation(){
        $donations = Donation::all();
        $total = 0;

        foreach($donations as $donation){
            $total += $donation->amount;
        }

        return $total;
    }
}
