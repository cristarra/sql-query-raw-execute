<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'db_book';
    protected $primaryKey = 'BookID';
}
