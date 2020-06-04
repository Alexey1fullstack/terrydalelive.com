<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Card extends Model
{
    use SoftDeletes;
    public $table = 'card';

    public $fillable = [
        'id','type','value1','value2','value3','value4','value5','value6','value7','value8','value9','status','card_img','category', 'description'
    ];

    protected $dates = ['deleted_at'];



    public $timestamps = true;
    
    public function get_assettype(){
        return $this->belongsTo('App\Assettype','type','id');

    }

}
