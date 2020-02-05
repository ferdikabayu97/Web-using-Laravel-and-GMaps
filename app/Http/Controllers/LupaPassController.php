<?php

namespace App\Http\Controllers;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Alert;

class LupaPassController extends Controller
{
    public function index(Request $request)
    {

    	return view('lupapass');
    }
    public function kirim(Request $request)
    {
        $username = $request->username;
        $email = $request->email;

        $client = new Client();
        $promise = $client->requestAsync('GET', 'http://rekusaha.com/api/lpass/?username='.$username.'&email='.$email);
        $promise->wait();
        $res = $promise->wait();
        $obj = json_decode($res->getBody());
        if($obj->status == '200'){
            Alert::success($obj->msg)->autoclose(3000);
            return redirect('/');
            }else{
            Alert::error($obj->msg)->autoclose(3000);
            return redirect('/lupapass');
            
        }
    }
}
