<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;

use Weedeej\AuthSpace\Authentication;

class RiotAuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function mfa()
    {
        return view("auth.mfa");
    }

    public function logout(Request $request)
    {
        setcookie("csid", "", time() - 3600);
        setcookie("clid", "", time() - 3600);
        setcookie("ssid", "", time() - 3600);
        setcookie("shard", "", time() - 3600);

        if ($request->session()->has('accessToken')) {
            $request->session()->forget('accessToken');
         }

        return redirect()->route('login');
    }

    public function auth(Request $request)
    {
        if($request->mfa == true){
            $request->validate([
                "multifactorcode" => "required",
             ]);

            $authObject = new Authentication();

            $authTokens = $authObject->authByUsername(true, $request->multifactorcode);
            dd($authTokens);


            if($authTokens == "2FA"){
                return view("auth.mfa");
            }elseif (is_array($authTokens)) {
                if($authTokens['accessToken'] != null){
                    return redirect()->route('dashboard');
                }elseif ($authTokens['error'] != null) {
                    return redirect()->route('login')->with('error', $authTokens);
                }
            }elseif ($authTokens == '{"error":"Invalid username or password"}') {
                return redirect()->route('login')->with('error', 'Invalid username or password');
            }elseif ($authTokens == '{"error":"multifactor_attempt_failed"}'){
                return redirect()->route('login')->with('error', 'This code was invalid. Please try again.');
            }
            else{
                return redirect()->route('login')->with('error', 'Riot servers are unreachable!');
            }
        }else{
            $request->validate([
                "username" => "required",
                "password" => "required"
            ]);

            $authObject = new Authentication(["username"=>$request->username, "password"=>$request->password, "shard"=>"ap", "remember"=>true]);
            $authTokens = $authObject->authByUsername();

            if($authTokens == "2FA"){
                return view("auth.mfa");
            }elseif (is_array($authTokens)) {
                if($authTokens['accessToken'] != null){
                    return redirect()->route('dashboard');
                }elseif ($authTokens['error'] != null) {
                    return redirect()->route('login')->with('error', $authTokens);
                }
            }elseif ($authTokens == '{"error":"Invalid username or password"}') {
                return redirect()->route('login')->with('error', 'Invalid username or password');
            }else{
                return redirect()->route('login')->with('error', 'Riot servers are unreachable!');
            }
        }


    }
}
