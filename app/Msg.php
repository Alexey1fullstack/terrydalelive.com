<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MSG extends Model
{
    public $table = 'msg';

    public $fillable = [
        'firstname','secondname','useremail','usercontact', 'information', 'cardid'
    ];    

    public $timestamps = true;

}
