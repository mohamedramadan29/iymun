<?php

namespace App\Http\Controllers\front\auth;

use Stripe\Stripe;
use App\Models\User;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use App\Models\front\Payment;
use App\Http\Traits\Message_Trait;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Stripe\Exception\ApiErrorException;
use Illuminate\Support\Facades\Redirect;

class PaymentController extends Controller
{
    use Message_Trait;
    public function payment(Request $request)
    {
        try {
            $data = $request->all();
            $user = Auth::user();
            if (!$user) {
                return Redirect()->back()->withErrors(['يجب تسجيل الدخول اولا']);
            }
            $package_id = 1;
            $package_name = 'Early Bird';
            $price = 10;
            Stripe::setApiKey(env('STRIPE_SECRET'));
            $metadata = [
                'user_id' => Auth::id(),
                'name' => $user->name,
                'email' => $user->email,
                'package_id' => $package_id,
                'product_data' => $package_name,
                'price' => $price,
            ];


            $session = Session::create([
                'payment_method_types' => ['card', 'alipay'],
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => 'usd',
                            'product_data' => ['name' => $package_name],
                            'unit_amount' => $price * 100,
                        ],
                        'quantity' => 1,
                    ]
                ],
                'mode' => 'payment',
                'metadata' => $metadata,
                'success_url' => route('user.payment.success') . '?session_id={CHECKOUT_SESSION_ID}&package_id=' . $package_id,
                'cancel_url' => route('user.payment.cancel'),
            ]);

            return redirect($session->url);
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function paymentSuccess(Request $request)
    {
        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));

            $session = Session::retrieve($request->session_id);
            if (!$session) {
                return Redirect::route('front.index')->withErrors(['حدث خطأ أثناء التحقق من الدفع.']);
            }

            $metadata = $session->metadata;
            // $product = Product::findOrFail($metadata->product_id);
            $package_price = 10;

            DB::beginTransaction();
            $payment = new Payment();
            $payment->user_id = $metadata->user_id;
            $payment->name = $metadata->name;
            $payment->email = $metadata->email;
            $payment->package_id = $metadata->package_id;
            $payment->package_name = $metadata->product_data;
            $payment->price = $package_price;
            $payment->status = 'completed';
            $payment->save();
            $user = User::where('id', $metadata->user_id)->first();
            $user->payment_status = 'paid';
            $user->save();
            // Send Activation Email To User
            $email = $metadata->email;
            $MessageDate = [
                'name' => $metadata->name,
                "email" => $metadata->email,
                'package_name' => $metadata->product_data,
            ];
            // Mail::send('website.emails.DigitalProductMail', $MessageDate, function ($message) use ($email) {
            //     $message->to($email)->subject(' شراء المنتج الرقمي من نفذها   ');
            // });

            DB::commit();
            return Redirect()->route('user.dashboard')->with('success', ' Success Payment');
        } catch (ApiErrorException $e) {
            return $this->exception_message($e);
        }
    }

    public function PaymentCancel()
    {
        return $this->Error_message('Cancel Payment');
    }
}
