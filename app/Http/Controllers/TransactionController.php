<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::latest()->paginate(10);
        return view('transactions.index', compact('transactions'));
    }

    public function show($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('transactions.show', compact('transaction'));
    }

    public function refund($id)
    {
        $transaction = Transaction::findOrFail($id);
        // Implement refund logic
        return back()->with('success', 'Transaction refunded successfully');
    }

    public function cancel($id)
    {
        $transaction = Transaction::findOrFail($id);
        // Implement cancellation logic
        return back()->with('success', 'Transaction cancelled successfully');
    }

    public function userTransactions()
    {
        $user = auth()->user();
        $transactions = $user->transactions()->latest()->paginate(10);
        return view('transactions.user_transactions', compact('transactions'));
    }
}
