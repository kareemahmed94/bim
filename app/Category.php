<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[
        'name_ar','name_en','category_id',
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function Courses(){
        return $this->hasMany('App\Course');
    }
}
