<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatBooking extends Model
{
    use HasFactory;
    protected $table = "seat_booking";
    protected $fillabe = [
        'session_id',
        'seat_id',
        'seat_price',
        'pickup_date',
        'dropoff_date',
        'state',
    ];
    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('type', 'like', '%' . $search . '%')
            ->orWhere('session_id', 'like', '%' . $search . '%')
            ->orWhere('pickup_date', 'like', '%' . $search . '%')
            ->orWhere('dropoff_date', 'like', '%' . $search . '%')
            ->orWhere('state', 'like', '%' . $search . '%');
    }
}
