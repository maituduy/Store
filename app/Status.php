<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    protected $table = 'statuses';
    protected $fillable = ['name'];
    public $timestamps = false;

    public function orders() {
        return $this->belongsToMany('App\Order','order_status', 'status_id', 'order_id');
    }
}
