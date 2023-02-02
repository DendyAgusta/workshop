<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class heavyequipmenttype extends Model
{
    use HasFactory;
    protected $table ="heavyequipmenttypes";
    protected $guarded = ['id'];

    public function order()
    {
        return $this->hasMany(order::class);	
    }
}
