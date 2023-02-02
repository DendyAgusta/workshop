<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table ="orders";
    protected $guarded = ['id'];

    public function months()
    {
        return $this->belongsTo(month::class);
    }

    public function heavyequipmenttypes()
    {
        return $this->belongsTo(heavyequipmenttype::class);
    }
}
