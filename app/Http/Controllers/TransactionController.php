<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index() {

        $transactions = Transaction::all();
        return view('transactions.index', [
            'transactions'=>$transactions
        ]);
    }
}
