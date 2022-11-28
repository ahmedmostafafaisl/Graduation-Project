<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TotalController extends Controller
{
    public function show()
    {
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




        // dd($outpayment);
        return view('totalPayments', ['incoms' => $monyin, 'outcoms' => $monyreturn, 'otherPayments' => $otherpayment, 'net' => $net, 'remainder' => $remainder]);
    }
}
