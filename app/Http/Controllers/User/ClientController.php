<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Training;

class ClientController extends Controller
{
    public function add()
    {
        return view('user.client.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Training::$rules);
        $trainings = new Training;
        $form = $request->all();
        
        unset($form['_token']);
        
        $trainings->fill($form);
        $trainings->save();
        
        return redirect('user/client/create');
    }
    
    public function edit()
    {
        return view('user.client.edit');
    }
    
    public function update()
    {
        return redirect('user/client/edit');
    }
}
