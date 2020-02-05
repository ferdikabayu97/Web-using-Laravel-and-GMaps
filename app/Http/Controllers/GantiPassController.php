<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Alert;
class GantiPassController extends Controller
{
    public function index(Request $request)
    {

    	return view('gantipass');
    }
    public function gpass(Request $request)
    {
        $token = $request->session()->get('token');
        $username = $request->session()->get('username');
        $newpass = $request->passbaru;
        $oldpass = $request->passlama;
        $knewpass = $request->kpassbaru;

        if ($newpass === $knewpass){
            $client = new Client();
            $promise = $client->requestAsync('GET', 'http://rekusaha.com/api/gpass/?token='.$token.'&username='.$username.'&newpass='.$newpass.'&oldpass='.$oldpass);
            $promise->wait();
            $res = $promise->wait();
            $obj = json_decode($res->getBody());
                    if($obj->status == '200'){
                    Alert::success($obj->msg)->autoclose(3000);
                    return redirect('/gpass');
                    }else{
                    Alert::error($obj->msg)->autoclose(3000);
                    return redirect('/gpass');
                }
        } else {
            Alert::error("Password dan konfirmasi password berbeda")->autoclose(3000);
            return redirect('/gpass');
        }


    }
    
}
