<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentRequest;
use  App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    // Get all outpayments and total
    public function index()
    {
        $outpayment = Payment::all();
        $total = Payment::sum('mony_out');
        // dd($outpayment);
        return response()->json(['payments' => $outpayment, 'pays' => $total]);
    }


    // get one payment
    public function show($id)
    {
        $singlePayment = Payment::findOrFail($id);
        return response()->json(['singlePayment' => $singlePayment]);
    }

    // create payment method

    public function store(PaymentRequest $request)
    {
        $payment =  Payment::create(
            [
                'mony_out' =>  $request->mony_out,
                'description' => $request->description
            ]
        );
        return response()->json(['payment' => $payment]);
    }


    // update payment method

    public function update(Request $request, $id)
    {
        $updatePayment = Payment::findOrFail($id);
        $updatePayment->update([
            'mony_out' => $request->mony_out,
            'description' => $request->description
        ]);
        return response()->json(['payment' => $updatePayment]);
    }
    public function destroy($id)
    {
        $deletedpayment = Payment::findOrFail($id);
        $deletedpayment->delete();
        return response()->json(['deletedpayment' => $deletedpayment]);
    }
}