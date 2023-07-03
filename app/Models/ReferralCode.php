<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferralCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'referral_code',
        'partner_id',
        'post_id'
    ];

    public function advertisement()
    {
        return $this->belongsTo(Advertisement::class);
    }

    public function partners()
    {
        return $this->belongsTo(Partner::class);
    }
}
