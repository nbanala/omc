<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $fillable=[
        'id',
        'name',
        'email',
        'address',
        'zip',
        'cell_phone'


    ];
}