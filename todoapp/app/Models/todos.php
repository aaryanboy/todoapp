<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class todos extends Model
{
    use HasFactory;
    protected $table='todos';
    protected $primary_key='id';
}
