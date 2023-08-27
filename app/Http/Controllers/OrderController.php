<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        // Handle the payment request
        $order = new Order();

        $donation = $order->calculateDonation($request->cash);

        $order->amount =
        $order->save();

        return response()->json([
            'message' => 'Thanks for donation enjoy!!!',
        ]);
    }
}
