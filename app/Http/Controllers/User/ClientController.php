<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    public function add()
    {
        return view('user.client.create');
    }
    
    public function create()
    {
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
