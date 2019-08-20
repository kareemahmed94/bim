<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable=[
        'title_ar','title_en','body_ar','body_en','comment_id','course_id','blog_id','offer_id'
    ];


    public function users()
    {
        return $this->belongsToMany('App\User','user_notifications','user_id','notification_id');
    }

    public function comments()
    {
        return $this->belongsTo(Comment::class , 'comment_id');
    }

    public function courses()
    {
        return $this->belongsTo(Course::class , 'course_id');
    }


    public function blogs()
    {
        return $this->belongsTo(Blog::class , 'blog_id');
    }



}
