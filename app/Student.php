<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable=[
        'id',
		'name',
        'class',
        'email',
        'address',
        'zip',
        'cell_phone',
    ];
}



