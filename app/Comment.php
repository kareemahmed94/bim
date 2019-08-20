<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=[
        'content','blog_id','course_id','user_id','status'
    ];


        public function user()
        {
            return $this->belongsTo('App\User', 'user_id');
        }


        public function blog()
        {
            return $this->belongsTo('App\Blog', 'blog_id');
        }

        public function course()
        {
            return $this->belongsTo('App\Course', 'course_id');
        }

        public function likes(){
            return $this->hasMany('App\Like');
        }

        public function notifications(){
            return $this->hasMany('App\Notification');
        }

}


