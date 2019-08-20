<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable=['title','facebook_link','twitter_link','logo','limkedin_link','youtube_link','download_link'];
}

