<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Client Modelを使う
use App\Client;


class NewClientController extends Controller
{
    public function add()
    {
        return view('user.newclient.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Client::$rules);
        $clients = new Client;
        $form = $request->all();
        
        unset($form['_token']);
        
        $clients->fill($form);
        $clients->save();
        
        return redirect('user/newclient/create');
    }
}
