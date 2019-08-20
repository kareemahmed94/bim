<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable=[
        'name_ar','name_en','description_ar','description_en','course_id','path','test'
    ];

    public function course(){
        return $this->belongsTo('App\course');
    }
}
