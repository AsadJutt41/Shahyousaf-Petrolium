<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fuel extends Model
{
    use HasFactory;
    protected $table = "fuels";

    public function stock()
    {
        return $this->belongsToMany(Stock::class);
    }
    public function sale()
    {
        return $this->belongsToMany(Sale::class);
    }
    public function remaningStock()
    {
        return $this->belongsToMany(RemaningStock::class);
    }
}
