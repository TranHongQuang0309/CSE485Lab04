<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    //
    public $timestamps = false;
    protected $filltable =['name', 'birthday', 'address', 'phone'];

    public function borrows()
    {
        return $this->hasMany(Borrow::class);
    }
}
