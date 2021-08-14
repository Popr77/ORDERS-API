<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Product A',
            'price' => rand(5, 100),
            'created_at'       => now(),
            'updated_at'       => now()
        ]);
        DB::table('products')->insert([
            'name' => 'Product B',
            'price' => rand(5, 100),
            'created_at'       => now(),
            'updated_at'       => now()
        ]);
        DB::table('products')->insert([
            'name' => 'Product C',
            'price' => rand(5, 100),
            'created_at'       => now(),
            'updated_at'       => now()
        ]);
        DB::table('products')->insert([
            'name' => 'Product D',
            'price' => rand(5, 100),
            'created_at'       => now(),
            'updated_at'       => now()
        ]);
        DB::table('products')->insert([
            'name' => 'Product E',
            'price' => rand(5, 100),
            'created_at'       => now(),
            'updated_at'       => now()
        ]);
    }
}
