<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable=['name','email','photo_id'];

    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
