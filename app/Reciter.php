<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reciter extends Model
{
    protected $fillable = [
    	'name',
    	'description',
    	'address'
    ];

    public function qurans()
    {
    	return $this->hasMany(Reciter::class);
    }
}