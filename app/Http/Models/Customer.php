<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'db_customer';
    protected $primaryKey = 'CustomerID';
}
