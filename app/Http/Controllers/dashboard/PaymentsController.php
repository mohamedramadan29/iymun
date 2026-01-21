<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\front\Payment;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function index(){
        $payments = Payment::latest()->get();

        return view('dashboard.payments.index',compact('payments'));
    }
}
