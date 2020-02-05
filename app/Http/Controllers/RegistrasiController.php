<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
class RegistrasiController extends Controller
{
    public function index(Request $request)
    {

    	return view('registrasi');
    }
    public function buatakun(Request $request)
    {
        $nama = $request->nama;
        $email = $request->email;
        $username = $request->username;
        $password = $request->password;
        $kpassword =$request->kpassword;

        if ($password === $kpassword){
            $client = new Client();
            $promise = $client->requestAsync('GET', 'http://rekusaha.com/api/bakun/?nama='.$nama.'&email='.$email.'&password='.$password.'&username='.$username);
            $promise->wait();
            $res = $promise->wait();
            $obj = json_decode($res->getBody());
                    if($obj->status == '200'){
                        $request->session()->put('username',$username);


                    Alert::success($obj->msg)->autoclose(3000);

                    return redirect('/verifikasi');
                    }else{
                    Alert::error($obj->msg)->autoclose(3000);
                    return redirect('/registrasi');
                    
                }
    
        } else {
            Alert::error("Password dan konfirmasi password berbeda")->autoclose(3000);
            return redirect('/registrasi');
        }

    }
}
