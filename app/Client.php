<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable=['name','email','country_id','mobile'];

    public function country(){
        return $this->belongsTo('App\Country');
    }
}
