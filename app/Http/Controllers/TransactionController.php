<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($userId)
    {
        $transactions = Transaction::where('user_id', $userId)->latest()->get();
        return view('transactions.index', compact('transactions', 'userId'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $userId)
    {
        // dd($request->all());
        $request->validate([
            'transaction_id' => 'required',
            'transaction_date' => 'required|date',
            'amount' => 'required|numeric',
        ]);

        $transaction                    = new Transaction();
        $transaction->user_id           = $userId;
        $transaction->transaction_id    = $request->transaction_id;
        $transaction->date              = $request->transaction_date;
        $transaction->amount            = $request->amount;
        $transaction->save();
        

        return back()->with('message', 'Transaction added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $userId, string $id)
    {
        $request->validate([
            'transaction_id' => 'required',
            'transaction_date' => 'required|date',
            'amount' => 'required|numeric',
        ]);

        $transaction = Transaction::find($id);
        $transaction->transaction_id    = $request->transaction_id;
        $transaction->date              = $request->transaction_date;
        $transaction->amount            = $request->amount;
        $transaction->save();

        return back()->with('message', 'Transaction updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, $userId)
    {
        Transaction::where('id', $id)->where('user_id', $userId)->delete();
        return back()->with('message', 'Transaction deleted successfully!');
    }

    public function deleteMultiple(Request $request)
    {
        $ids = explode(',', $request->ids);

        if (count($ids) > 0) {
            Transaction::whereIn('id', $ids)->delete();
        }

        return redirect()->back()->with('success', 'Selected transactions deleted successfully.');
    }
}
