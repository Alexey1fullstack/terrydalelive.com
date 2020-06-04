<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public $table = 'site_setting';
    //



    public $fillable = [
        'logo_url' ,'site_name' ,'site_email', 'site_code1', 'site_code2','site_address','site_domain'
    ];

    public $hidden = [
        'id',
    ];


    public $timestamps = false;

}
