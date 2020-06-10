<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MSG extends Model
{
    public $table = 'msg';

    public $fillable = [
        'fullname','useremail','phonenumber','message', 'cardid',
    ];    

    public $timestamps = true;

}
