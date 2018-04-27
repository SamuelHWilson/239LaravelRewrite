<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
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
            for ($i = 0; $i < rand(1, 5); $i++) {
                $order = factory(App\Order::class)->make();
                $order->address_id = $cust->addresses()->where('type', 'billing')->first()->id;
                $order->credit_card_id = $cust->creditCards->random()->id;
                $order->customer_id = $cust->id;
                $order->save();
            }
        }
    }
}
