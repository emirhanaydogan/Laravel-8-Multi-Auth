<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;
    //sender S ile gösterim
    //receiver R ile gösterim
    protected  $primaryKey = 'id';
    protected $fillable = [
        'id','vehicle_id','sname','stcno','sphone','sadress','rname','rtcno','rphone','radress','price', 'diff_price'
    ];

    protected $table ='cargos';
    public function vehicle()
    {
        return $this->belongsTo('App\Models\Vehicle');
    }
}

