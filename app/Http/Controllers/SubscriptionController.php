<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Cashier\Cashier;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        return view('subscriptions.subscribe'); 
    }

    public function subscribe2(Request $request)
    {
        return view('subscriptions.subscribe2'); 
    }

    public function store(Request $request)
    {
        return $request->user()
            ->newSubscription('default', $request->input('subscription_plan'))
            //->trialDays(5)
            ->allowPromotionCodes()
            ->checkout([
                'success_url' => route('checkout-success').'?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('checkout-cancel'),
                'metadata' => ['order_id' => 1000],
            ]);
    }

    public function subscribe2Store(Request $request)
    {
        return $request->user()
            ->newSubscription('default', $request->input('subscription_plan'))
            //->trialDays(5)
            ->allowPromotionCodes()
            ->checkout([
                'success_url' => route('checkout-success'),
                'cancel_url' => route('checkout-cancel'),
            ]);
    }

    public function checkoutSuccess(Request $request)
    {
        if ($request->user()->subscribed()){
            //session()->flash('success', 'You are subscribed.');

            if ($request->user()->subscribed()){
                dump('You are subscribed.');
            }
        }
        $sessionId = $request->get('session_id');
        $orderId = Cashier::stripe()->checkout->sessions->retrieve($sessionId)['metadata']['order_id'] ?? null;
        dump($orderId);

        return view('template');
    }

    public function checkoutCancel()
    {
        dump('Payment Cancelled!');
    }

}
