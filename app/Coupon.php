<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable=['code','discount','discount_type','limit_use','min_amount','from_date','to_date'];
}
