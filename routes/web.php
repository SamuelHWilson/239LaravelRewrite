<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // App\Customer::create(['name'=>'Sam', 'email'=>'swilsondev@outlook.com']);
    // App\Address::create(['line_1'=>'5435 S Old Wire Rd','city'=>'Battlefield','state'=>'MO','zip'=>'65619','type'=>'billing','customer_id'=>'3']);  
    // App\CreditCard::create(['number'=>'1234567890123456', 'customer_id'=>'3']);
    // App\Category::create(['name'=>'Guitar']);
    // App\Product::create(['name'=>'Les Paul','desc'=>'This is an example of a description.','price'=>768.00,'category_id'=>1]);
    dd(App\Category::find(1)->products);
});
