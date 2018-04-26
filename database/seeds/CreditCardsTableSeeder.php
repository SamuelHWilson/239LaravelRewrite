<?php

use Illuminate\Database\Seeder;

class CreditCardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = App\Customer::all();

        foreach($customers as $cust) {
            for ($i = 0; $i<rand(1,3); $i++) {
                $cc = factory(App\CreditCard::class)->make();
                $cc->customer_id = $cust->id;
                $cc->save();
            }
        }
    }
}
