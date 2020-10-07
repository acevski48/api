<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redis;

class AuthController extends Controller
{
    public function login()
    {
		$url = config('api.url') . 'token/';
    	$body = config('api.credentials');

    	$response = Http::retry(2, 200)->post($url, $body)->throw()->json();

    	if($response['status'] == 'success'){
	        session(['access_token' => $response['data']['access_token']]);
	        return redirect()->back()->with('success', 'user successfully loged in');
	    }

		return redirect()->back()->with('error', 'user failed to log in');


    }
}
