<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected  $primaryKey = 'id';
    protected $fillable = [
        'id','name','type','plate'
    ];
    protected $table = 'vehicles';

    public function cargo()
    {
        return $this->hasMany('App\Models\Cargo','vehicle_id');
    }
}
