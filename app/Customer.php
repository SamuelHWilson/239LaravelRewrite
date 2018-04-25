<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Encryptable;

class Customer extends Model
{
    use Encryptable;

    protected $fillable = ['name', 'email'];
    protected $encryptable = ['email'];

    public function addresses() {
        return $this->hasMany('App\Address');
    }
    public function creditCards() {
        return $this->hasMany('App\CreditCard');
    }
}
