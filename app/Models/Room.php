<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $fillable = ['name','capacity' , 'price', 'image', 'status'];

    // Define the relationship
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
   
    public function getBookingsAttribute()
    {
        return $this->bookings()->count();
    }
    
     
}
