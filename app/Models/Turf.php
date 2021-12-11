<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models;
class Turf extends Model
{
    use HasFactory;

    /**
     * 
     */
    public function slots() {

        return  $this->hasMany(Slots::class);
    }
}
