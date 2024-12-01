<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Booking extends Model
{ 

    protected $fillable = ['room_id', 'user_id'];

    protected static function booted()
    {
        static::created(function ($booking) {
            if ($booking->room) {
                $booking->room->increment('bookings');
            }
        });

        static::deleted(function ($booking) {
            if ($booking->room) {
                $booking->room->decrement('bookings');
            }
        });
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //
}





