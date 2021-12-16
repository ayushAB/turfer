<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    use HasFactory;

    public $appends = [
        'start_date_and_time',
        'end_date_and_time'
    ];

    public function bookings() {
        return $this->hasMany(Booking::class);
    }

    public function getStartDateAndTimeAttribute() 
    {
        $dt =Carbon::create($this->start_date_time);
        return $dt->format('g:ia \o\n l jS F Y');
    }
    public function getEndDateAndTimeAttribute() 
    {
        $dt =Carbon::create($this->end_date_time);
        return $dt->format('g:ia \o\n l jS F Y');
    }
}
