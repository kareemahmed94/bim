<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable=[
        'content_en','content_ar','title_en','title_ar','author_id','photo_id','status','author_id'
    ];


    public function comments()
    {
        return $this->hasMany('App\Comment', 'blog_id');
    }


    public function user(){
        return $this->belongsTo('App\User','author_id');
    }


    public function photo(){
        return $this->belongsTo('App\Photo');
    }


    public function getCover(){
        return isset($this->photo) ? $this->photo->path : 'images/blog.png';
    }


    public function likes(){
        return $this->hasMany('App\Like');
    }

    public function notifications(){
        return $this->hasMany('App\Notification');
    }
}

