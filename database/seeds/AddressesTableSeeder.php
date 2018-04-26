<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
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
            $addr = factory(App\Address::class)->make();
            $addr->type = 'billing';
            $addr->customer_id = $cust->id;
            $addr->save();

            if (rand(1,2) == 2) {
                $addr = factory(App\Address::class)->make();
                $addr->type = 'mailing';
                $addr->customer_id = $cust->id;
                $addr->save();
            }
        }
    }
}
