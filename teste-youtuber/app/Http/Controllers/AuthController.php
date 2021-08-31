<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    public function authenticate(string $provider){
       
        $providers = ['user', 'retailer'];

        if (!in_array($provider, $providers)){
            return response()->json(["errors" => ["main" => "Wrong provider provided"]], status: 422);
        }

    }
}