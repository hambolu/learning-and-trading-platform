<?php

namespace App\Traits;

use App\Models\Referral;

trait CanRefer
{
    /**
     * Get the user's referral tree.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function referrals()
    {
        return $this->hasMany(Referral::class, 'referrer_id');
    }

    /**
     * Get the user's total referral count.
     *
     * @return int
     */
    public function totalReferralsCount()
    {
        return $this->referrals()->count();
    }

    /**
     * Get the user's total referral earnings.
     *
     * @return float
     */
    public function totalReferralEarnings()
    {
        return $this->referrals()->sum('earnings');
    }

    // Other referral-related methods as needed
}
