<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'reader_id',
        'book_id',
        'borrow_date',
        'return_date',
        'status'
    ];
}
