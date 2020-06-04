<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $table = 'company';
    //



    public $fillable = [
        'name','address','phone','ein','user_id',
    ];

    public $hidden = [
        'id',
    ];


}
