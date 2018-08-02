<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';
    protected $fillable = [
      'products_amount', 'address', 'note'
    ];

    public function statuses() {
        return $this->belongsToMany('App\Status','order_status','order_id', 'status_id')->withTimestamps();
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function products() {
        return $this->belongsToMany('App\Product','detail')->withPivot('quantity','price');
    }
}
