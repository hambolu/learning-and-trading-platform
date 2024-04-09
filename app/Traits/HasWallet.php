<?php

namespace App\Traits;

use App\Models\Transaction;

trait HasWallet
{
    /**
     * Get the user's wallet balance.
     *
     * @return float
     */
    public function getWalletBalance()
    {
        return $this->wallet_balance;
    }

    /**
     * Add funds to the user's wallet.
     *
     * @param float $amount
     * @return void
     */
    public function addFundsToWallet($amount)
    {
        $this->wallet_balance += $amount;
        $this->save();
    }

    /**
     * Deduct funds from the user's wallet.
     *
     * @param float $amount
     * @return void
     */
    public function deductFundsFromWallet($amount)
    {
        if ($this->wallet_balance < $amount) {
            return false; // Insufficient funds
        }

        $this->wallet_balance -= $amount;
        $this->save();

        return true; // Deduction successful
    }

    /**
     * Check if the user has sufficient funds in the wallet.
     *
     * @param float $amount
     * @return bool
     */
    public function hasSufficientFundsInWallet($amount)
    {
        return $this->wallet_balance >= $amount;
    }
    /**
     * Get the transaction history of the user's wallet.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function walletTransactions()
    {
        // Define the relationship with the wallet transactions
        return $this->hasMany(Transaction::class);
    }

    // Other wallet-related methods as needed
}
