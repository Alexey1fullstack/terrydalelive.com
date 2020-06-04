<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Constant extends Model
{
    public $table = 'constant';
    //



    public $fillable = [
        'type','constant',
    ];

    public $hidden = [
        'id',
    ];


}
