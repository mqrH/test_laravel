<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class СustomerData extends Model
{
    protected $fillable = ['customer_id', 'data'];
    public $timestamps = false;
}
