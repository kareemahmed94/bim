<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','country_id','role_id','block','api_token','phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function role(){
     return $this->belongsTo('App\Role');
    }


    public function country(){
        return $this->belongsTo('App\Country');
    }


    public function comments(){
        return $this->hasMany('App\Comment','user_id');
    }


    public function commentsLike()
    {
        return $this->belongsToMany('App\Comment', 'likes', 'user_id', 'comment_id')->withPivot('user_id', 'comment_id');
    }


    public function blogsLike()
    {
        return $this->belongsToMany('App\Blog', 'likes', 'user_id', 'blog_id')->withPivot('user_id', 'blog_id');
    }


    public function orders()
    {
        return $this->hasMany('App\Order');
    }



    public function notifications()
    {
        return $this->belongsToMany('App\Notification', 'user_notifications', 'user_id', 'notification_id');
    }


}
