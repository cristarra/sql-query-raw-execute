<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'db_order';
    protected $primaryKey = 'OrderID';
}
