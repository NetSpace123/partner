<?php

namespace App\Utils;

use App\Models\ReferralCode;

class PublicFunctions
{
    /**
     * Updates tax amount of a tax group
     *
     * @param int $group_tax_id
     *
     * @return void
     *
     */
    public function CheckUser()
    {
        if (empty(auth('partner')->user()->id)) {
            return true;
        }
    }

    public function generateUniqueCode()
    {
        do {
            $referal_code = random_int(100000, 999999);
        } while (ReferralCode::where("referral_code", "=", $referal_code)->first());

        return $referal_code;
    }
}
