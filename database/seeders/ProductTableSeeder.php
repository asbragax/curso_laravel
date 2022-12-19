<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = \App\Models\Product::all();

        foreach ($products as $product) {
            if($product->id < 50){
                $product->categories()->attach([1]);
            }elseif($product->id >=50 && $product->id < 100){
                $product->categories()->attach([2]);
            }else{
                $product->categories()->attach([1, 2]);
            }
        }
    }
}
