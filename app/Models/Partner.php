<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Partner extends Authenticatable
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $fillable = [
        'FirstName',
        'lastName',
        'email',
        'phoneNumber',
        'password'
    ];

}
