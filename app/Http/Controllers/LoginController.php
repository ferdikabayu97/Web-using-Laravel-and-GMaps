<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;

class LoginController extends Controller
{
    public function index(Request $request)
    {

    	// mengambil semua data pengguna
        // return data ke view
        // dd($penduduk->jk->pria);
        $id = $request->id;
        session()->flashInput($request->input());
        $pass = $request->pass;
        
        $client = new Client();
        $promise = $client->requestAsync('GET', 'http://rekusaha.com/api/login/?id='.$id.'&pass='.$pass);
        $promise->wait();
        $res = $promise->wait();
        $obj = json_decode($res->getBody());
                if($obj->status == '200'){
                    $request->session()->put('username',$obj->data->id_user);
                    $request->session()->put('token',$obj->data->token);
                    $request->session()->put('nama',$obj->data->nama);

                return redirect('/rekomend');
                }else{
                Alert::error($obj->msg)->autoclose(3000);
                return redirect('/');
                
            }
        dd($res);
    }
    public function logout(Request $request)
    {
        $request->session()->forget('username');
        $request->session()->forget('token');
        $request->session()->forget('nama');
        
        return redirect('/');
    }
}
