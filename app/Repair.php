<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'nit', 'price', 'total-price'];
}
