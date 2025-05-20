<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Message extends  Authenticatable
{
    use HasFactory, Notifiable;
    //

    protected $fillable = [
        'message',
        'admin_id',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
 
}
