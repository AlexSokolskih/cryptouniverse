<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function Bids()
    {
        return $this->hasMany('App\Bid', 'product_id');
    }
}
