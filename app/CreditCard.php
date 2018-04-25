<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Encryptable;

class CreditCard extends Model
{
    use Encryptable;

    protected $fillable = ['number', 'customer_id'];
    protected $encryptable = ['number'];
}
