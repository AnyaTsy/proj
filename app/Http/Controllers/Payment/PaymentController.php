<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function generateForm() {
        $liqpay = new \LiqPay(env('LIQPAY_PUBLIC_KEY'), env('LIQPAY_PRIVATE_KEY'));
        $html = $liqpay->cnb_form(array(
            'action'         => 'pay',
            'amount'         => '1',
            'currency'       => 'USD',
            'description'    => 'description text',
            'order_id'       => 'order_id_1',
            'version'        => '3',
            'server_url'        => '3'
        ));
        return view('payments.liqpay', compact('html'));
    }
}
