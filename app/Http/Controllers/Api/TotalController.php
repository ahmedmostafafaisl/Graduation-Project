<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TotalController extends Controller
{
    public function show()
    {

        // dd("From API SHow ");
        // total bill in
        $monyin = DB::table('sales_bill')->sum('paid');


        // total Remainder
        $remainder = DB::table('sales_bill')->sum('remaind');

        // total bill out

        $paymentout = DB::table('sales_return_bill')->sum('net');
        $remindout = DB::table('sales_return_bill')->sum('remaind');
        $monyreturn = $paymentout - $remindout;


        // total Net profit
        $net = $monyin - $monyreturn;

        // المصورفات الخارجية

        $otherpayment = DB::table('payments')->sum('mony_out');


        return response()->json(['incoms' => $monyin, 'outcoms' => $monyreturn, 'otherPayments' => $otherpayment, 'net' => $net, 'remainder' => $remainder]);

        // dd($outpayment);
        // return view('totalPayments', ['incoms' => $monyin, 'outcoms' => $monyreturn, 'otherPayments' => $otherpayment, 'net' => $net, 'remainder' => $remainder]);
    }
}