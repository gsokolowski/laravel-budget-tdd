@extends('layouts.app')

<div class="container">
    @foreach($transactions as $transaction )

        {{ $transaction->created_at->format('Y/m/d') }}

        {{ $transaction->description  }}

        {{ $transaction->category->name  }}

        {{ $transaction->amount  }}
    @endforeach
</div>