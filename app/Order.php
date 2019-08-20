<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable=[
       'status','address','deliver_time','course_id','user_id'
    ];




public function user(){
    return $this->belongsTo('App\User');
}


public function course(){
    return $this->belongsTo('App\Course');
}


}
