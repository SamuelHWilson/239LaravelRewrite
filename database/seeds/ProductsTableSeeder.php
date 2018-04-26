<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = App\Category::all();
        
        foreach($categories as $cat) {
            for ($i = 0; $i<rand(2,7); $i++) {
                $prod = factory(App\Product::class)->make();
                $prod->category_id = $cat->id;
                $prod->save();
            }
        }
    }
}
