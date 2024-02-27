<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class otpController extends Controller
{
    //
    public function recieveOtp(Request $request)
    {
        $tel = $request["tel"];
        $ex_res = '{
            "status": "success",
            "token": "Nb1DM2Ogl6z0LaOI5f5kYnRm8Xj5PGWZ",
            "refno": "PPSUO"
        }';
        $ex_res = json_decode($ex_res);
        return response()->json($ex_res,200);
        if(preg_match('/^\d{10}$/', $tel)) {
            $client = new Client();
            try {
                $response = $client->post('https://otp.thaibulksms.com/v2/otp/request', [
                    'headers' => [
                        'accept' => 'application/json',
                        'content-Type' => 'application/x-www-form-urlencoded',
                    ],
                    'form_params' => [
                        'key' => '1792062017743310',
                        'secret' => '2e2b83f42c69bc7c495b69c41e276845',
                        'msisdn' => $tel,
                    ],
                ]);

                $body = $response->getBody()->getContents();
                $response = json_decode($body, true);
                if(isset($response['errors'])) {
                    return response()->json(['success' => false, 'result' => $response['errors']]);
                }
                return response()->json($response);
            } catch (\Throwable $th) {
                //throw $th;
                return response()->json(['success' => false, 'message' => 'you has been locked']);
            }

        }else {
            return response()->json(['success' => false, 'message' => 'Wrong format']);
        }
    }

    public function verifyOtp(Request $request) {
        $otp = $request['otp'];
        $token = $request['token'];

        $client = new Client();
            try {
                $response = $client->request('POST', 'https://otp.thaibulksms.com/v2/otp/verify', [
                    'form_params' => [
                      'key' => '1792062017743310',
                      'secret' => '2e2b83f42c69bc7c495b69c41e276845',
                      'token' => $token,
                      'pin' => $otp
                    ],
                    'headers' => [
                      'accept' => 'application/json',
                      'content-type' => 'application/x-www-form-urlencoded',
                    ],
                  ]);

                $body = $response->getBody()->getContents();
                $response = json_decode($body, true);
                if(isset($response['errors'])) {
                    return response()->json(['success' => false, 'result' => $response['errors']]);
                }
                return response()->json($response);
            } catch (\Throwable $th) {
                //throw $th;
                return response()->json(['success' => false, 'message' => $th]);
            }
    }
}
