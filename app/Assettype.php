<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Assettype extends Model
{
  
    public $table = 'assettype';

    public $fillable = [
        'name','name_key','icon_sort','icon_name'
    ];

    protected $dates = ['deleted_at'];



    public $timestamps = false;

}
