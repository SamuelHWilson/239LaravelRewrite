<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['order_date','ship_date','discount_percent','tax_amount','shipping_cost','address_id','credit_card_id','customer_id'];

    public function address() {
        return $this->belongsTo('App\Address');
    }
    public function creditCard() {
        return $this->belongsTo('App\CreditCard');
    }
    public function customer() {
        return $this->belongsTo('App\Customer');
    }
    public function products() {
        return $this->belongsToMany('App\Product');
    }
}
