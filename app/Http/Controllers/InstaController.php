<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstaController extends Controller
{
    public function redirect(Request $request){
        return $request;
    }
    public function create_request(Request $request){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
                    array("X-Api-Key:test_c80f8ead4d198510cb38143793c",
                        "X-Auth-Token:test_2dd2462e45e59fe30c18075b64c"));
        $payload = Array(
            'purpose' => $request->input('purpose'),
            'amount' => $request->input('amount'),
            'phone' => $request->input('phone'),
            'buyer_name' => $request->input('username'),
            'redirect_url' => 'http://sam.io/instamojo-lara/public/redirect',
            'send_email' => false,
            'webhook' => 'http://sam.io/instamojo-lara/public/webhook',
            'send_sms' => false,
            'email' => $request->input('email'),
            'allow_repeated_payments' => false
        );
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
        $response = curl_exec($ch);
        curl_close($ch); 

        $data = json_decode($response, true);
        return redirect($data['payment_request']['longurl']);
    }
}
