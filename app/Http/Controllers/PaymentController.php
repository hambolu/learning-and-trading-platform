<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;

class PaymentController extends Controller
{
    public function addFunds(Request $request)
    {
        $user = auth()->user();
        $amount = $request->amount;
        $user->wallet += $amount;
        $user->save();

        $this->logTransaction($user, $amount, 'Add Funds', 'Wallet');

        // Return success response
    }

    public function requestPayout(Request $request)
    {
        $user = auth()->user();
        $amount = $request->amount;
        if ($user->wallet >= $amount) {
            $user->wallet -= $amount;
            $user->save();

            $this->logTransaction($user, $amount, 'Payout', 'Wallet');

            // Initiate payout process
            // Return success response
        } else {
            // Return insufficient funds error response
        }
    }

    public function buyNow(Request $request)
    {
        $user = auth()->user();
        $amount = $request->amount;
        $item = $request->item;
        $itemType = $request->item_type;

        if ($user->wallet >= $amount) {
            $user->wallet -= $amount;
            $user->save();

            // Log transaction
            $this->logTransaction($user, $amount, 'Purchase', $itemType, $item);

            // Return success response
        } else {
            // Return insufficient funds error response
        }
    }

    private function logTransaction(User $user, $amount, $type, $source, $sourceId = null)
    {
        $transaction = new Transaction();
        $transaction->transaction_ref = mt_rand(10000000, 99999999); // Generate a random reference number
        $transaction->user_id = $user->id;
        $transaction->amount = $amount;
        $transaction->type = $type;
        $transaction->source = $source;
        $transaction->source_id = $sourceId;
        $transaction->save();
    }
}
