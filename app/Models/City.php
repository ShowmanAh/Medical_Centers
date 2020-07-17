<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    protected $fillable = ['name'];
    public function areas(){
       return $this->hasMany(Area::class);
    }
}
