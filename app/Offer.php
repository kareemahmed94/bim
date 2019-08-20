<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable=[
        'newprice','course_id','amount','description_ar','description_en','from_date','to_date'
    ];

    public function course(){
        return $this->belongsTo('App\Course');
    }
}
