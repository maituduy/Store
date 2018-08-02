<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $guarded = [];

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function orders() {
        return $this->belongsToMany('App\Order','detail')->withPivot('quantity','price');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }
}
