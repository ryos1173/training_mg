<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'email' => 'required',
        'age' => 'required',
        'height' => 'required',
        'weight' => 'required',
        'bfp' => 'required',
        'goal' => 'required',
        );
}
