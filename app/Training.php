<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class training extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'weight' => 'required',
        'bfp' => 'required',
        'training_menu' => 'required',
        'memo' => 'required',
        );
}
