<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PayPalController extends Controller
{
    public function payment(Request $request)
{
    // Just for debugging (optional)
    // dd($request->all());

    $provider = new PayPalClient;
    $provider->setApiCredentials(config('paypal'));
    $paypalToken = $provider->getAccessToken();

    // Get managed user ID (if admin is paying for someone else)
    $managedUserId = $request->get('managed_user_id');

    // Append managed_user_id to success and cancel URLs
    $returnUrl = route('paypal.success', ['managed_user_id' => $managedUserId]);
    $cancelUrl = route('paypal.cancel', ['managed_user_id' => $managedUserId]);

    $discount = $request->discountAmount;
    $totalPrice = $request->totalPrice;

    $description = '';
    if ($discount > 0) {
        $description .= ' (Discount - ' . $discount . '%)';
    }

    $response = $provider->createOrder([
        "intent" => "CAPTURE",
        "application_context" => [
            "return_url" => $returnUrl,
            "cancel_url" => $cancelUrl,
        ],
        "purchase_units" => [
            [
                "amount" => [
                    "currency_code" => "USD",
                    "value" => $totalPrice, // must be numeric
                ],
                "description" => $description, // ✅ discount text shown here
            ]
        ]
    ]);

    if (isset($response['id']) && $response['id'] != null) {
        foreach ($response['links'] as $link) {
            if ($link['rel'] === 'approve') {
                return redirect()->away($link['href']);
            }
        }
        return redirect()->route('paypal.cancel', ['managed_user_id' => $managedUserId]);
    } else {
        return redirect()->route('paypal.cancel', ['managed_user_id' => $managedUserId]);
    }
}


    public function success(Request $request)
{
    $provider = new PayPalClient;
    $provider->setApiCredentials(config('paypal'));
    $provider->getAccessToken();
    $response = $provider->capturePaymentOrder($request['token']);

    $userId = $request->get('managed_user_id');

    if (isset($response['status']) && $response['status'] == 'COMPLETED') {
        if ($userId) {
            return redirect()
                ->route('admin.users.dashboard', ['user' => $userId])
                ->with('success', 'Payment successful!');
        }
        return redirect()->route('home')->with('success', 'Payment successful!');
    } else {
        if ($userId) {
            return redirect()
                ->route('admin.users.dashboard', ['user' => $userId])
                ->with('error', 'Payment failed!');
        }
        return redirect()->route('home')->with('error', 'Payment failed!');
    }
}

public function cancel(Request $request)
{
    $userId = $request->get('managed_user_id');

    if ($userId) {
        return redirect()
            ->route('admin.users.dashboard', ['user' => $userId])
            ->with('error', 'You canceled the payment.');
    }

    return redirect()->route('home')->with('error', 'You canceled the payment.');
}


}
