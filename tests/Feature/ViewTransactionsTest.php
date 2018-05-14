<?php

namespace Tests\Feature;

use App\Transaction;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewTransactionsTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testItCanDisplayAllTransactions()
    {
        //$this->assertTrue(true);

        // create() an instance of a model class App\Transaction and
        // create() will persist to a database with information we provide to the model factory
        $transaction = factory('App\Transaction')->create();

        // visit the page with all transactions and assert that you can see transactions on the screen
        // get() transactions and make sure you have $transaction->description

        $this->get('/transactions')
            ->assertSee($transaction->description);

    }
}
