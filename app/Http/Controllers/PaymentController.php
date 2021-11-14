<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function finish()
    {
        //
    }

    public function unfinish()
    {
        //
    }

    public function store(Request $request)
    {
        $transaction_details = array('order_id' => '', 'gross_amount' => '');

        $billing_address = array(
            'first_name' => '',
            'last_name' => '',
            'email' => '',
            'phone' => '',
            'address' => '',
            'city' => '',
            'postal_code' => '',
            'country_code' => 'IDN'
        );

        $shipping_address = array(
            'first_name' => '',
            'last_name' => '',
            'email' => '',
            'phone' => '',
            'address' => '',
            'city' => '',
            'postal_code' => '',
            'country_code' => 'IDN'
        );

        $customer_details = array(
            'first_name' => '',
            'last_name' => '',
            'email' => '',
            'phone' => '',
            'billing_address' => $billing_address,
            'shipping_address' => $shipping_address
        );
    }
}
