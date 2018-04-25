<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Encryptable;

class Address extends Model
{
    use Encryptable;

    protected $fillable = ['line_1', 'line_2', 'city', 'state', 'zip', 'type', 'customer_id'];
    protected $encryptable = ['line_1', 'line_2', 'city', 'state', 'zip'];
}
