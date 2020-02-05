<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Alert;

class VerifikasiController extends Controller
{
    public function index(Request $request)
    {

    	return view('verifikasi');
    }
    public function sending(Request $request)
    {
        $kode = $request->verify;
        $username = $request->session()->get('username');
        $client = new Client();
        $promise = $client->requestAsync('GET', 'http://rekusaha.com/api/veri/?username='.$username.'&kode='.$kode);
        $promise->wait();
        $res = $promise->wait();
        $obj = json_decode($res->getBody());
        if($obj->status == '200'){
            Alert::success($obj->msg)->autoclose(3000);
            return redirect('/');
            }else{
            Alert::error($obj->msg)->autoclose(3000);
            return redirect('/verifikasi');
            
        }
    }
}
