<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RemaningStock extends Model
{
    use HasFactory;
    protected $table = "remaning_stocks";

    public function fuel()
    {
        return $this->belongsTo(Fuel::class, 'petrol_type', 'id');
    }
}
