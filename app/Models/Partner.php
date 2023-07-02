<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Partner extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $guarded = ['id'];

    protected $fillable = [
        'FirstName',
        'lastName',
        'email',
        'phoneNumber',
        'password',
        'image'
    ];

}
