<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dogs extends Model
{
    protected $fillable = ['name','age'];

    function dogsRequiringAntiRabbitBiteShot(){
        return $this->ageGreaterThan(6);
    }

     function scopeAgeGreaterThan($query, $age) {
        return $query->where('age', '>', $age);
    }
}
