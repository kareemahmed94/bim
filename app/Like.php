<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable=[
        'user_id','comment_id','blog_id','user_id','course_id'];
}
