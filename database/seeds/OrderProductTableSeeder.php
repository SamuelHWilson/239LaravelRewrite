<?php

use Illuminate\Database\Seeder;

class OrderProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = App\Order::all();
        $products = App\Product::all();

        foreach($orders as $order) {
            for($i = 0; $i < rand(1, 7); $i++) {
                $link = App\OrderProduct::make();
                $link->order_id = $order->id;
                $link->product_id = $products->random()->id;
                $link->save();
            }
        }
    }
}
