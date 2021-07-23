<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Stripe;
use Illuminate\Support\Facades\Session;
use Exception;

class SubscriptionController extends Controller
{
    public function index()
    {
        $data = [
            'intent' => auth()->user()->createSetupIntent()
        ];
        return view('subscribe')->with($data);
    }

    public function subscribe(Request $request)
    {

        $user = auth()->user();

        $input = $request->all();
        $stripeToken =  $request->stripeToken;
        $paymentMethod = $request->payment_token;
        try {

            Stripe\Stripe::setApiKey('sk_test_51J99a0IadGfgle9bNK3zwP1tgiZ4dHYvo7pviVPgbud4vxpEPuyXVM83yhnd0ttrec0i09CsHoD8PvGBhBLcDUUd007KetfMD5');

            if (is_null($user->stripe_id)) {
                $stripeCustomer = $user->createAsStripeCustomer();
            }

            \Stripe\Customer::createSource(
                $user->stripe_id,
                ['source' => $stripeToken]
            );

            $user->newSubscription('test',$input['plan'])
                ->create($paymentMethod, [
                    'email' => $user->email,
                ]);

            return back()->with('success','Subscription is completed.');
        } catch (Exception $e) {
            return back()->with('success',$e->getMessage());
        }

    }
}
