<?php

namespace App\Http\Controllers\Api;

use App\Models\Order;
use App\Models\Donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index(Request $request, Donation $donation)
    {
        // Handle the payment request
        $order = new Order();
        $donation = new Donation();

        // $donation = $order->calculateDonation($request->cash);
        if ($request->donation == true) {
            $donationData = $request->fill([
                'amount' => $request->donation_data['amount'],
                'user_id' => $request->user_id,
                'organization_id' => $request->organization_id,
            ]);
            $donationData->save();
        } else {
        }

        $order->fill([
            'store_id' => 1,
            'user_id' => $request->user_id,
            'payment_type' => $request->payment_type,
            'cash' => $request->cash,
            'Billdenomination' => $request->Billdenomination,
            'amount' => $request->amount,
            'suggest_donation' => $request->suggest_donation,
            'donation' => $request->donation,
            'organization_id' => $request->organization_id,
            'donation_id' => $donationData->id ?? null,
        ]);

        $order->save();

        return response()->json([
            'message' => 'Thanks for your donation enjoy!!!',
        ]);
    }
}
