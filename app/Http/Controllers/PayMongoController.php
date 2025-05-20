<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PayMongoController extends Controller
{
    //
    public function createGCashPayment(Request $request)
    {
        $amount = $request->input('amount') * 100; // PayMongo uses cents
        $response = Http::withBasicAuth(env('PAYMONGO_SECRET_KEY'), '')
            ->post('https://api.paymongo.com/v1/checkout_sessions', [
                'data' => [
                    'attributes' => [
                        'send_email_receipt' => false,
                        'show_description' => true,
                        'show_line_items' => true,
                        'line_items' => [
                            [
                                'currency' => 'PHP',
                                'amount' => $amount,
                                'name' => 'BHSystem Payment',
                                'quantity' => 1,
                            ]
                        ],
                        'payment_method_types' => ['gcash'],
                        'description' => 'GCash payment via PayMongo',
                        'success_url' => route('payment.success'),
                        'cancel_url' => route('payment.cancel')
                    ]
                ]
            ]);

        if ($response->successful()) {
            $checkoutUrl = $response['data']['attributes']['checkout_url'];
            return redirect($checkoutUrl);
        } else {
            return response()->json(['error' => 'Failed to create payment'], 500);
        }
    }

    public function success()
    {
        return view('payment.success');
    }

    public function cancel()
    {
        return view('payment.cancel');
    }
}
