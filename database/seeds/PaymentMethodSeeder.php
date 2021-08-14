<?php

use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_methods')->insert([
            'name' => 'Credit Card',
            'created_at'       => now(),
            'updated_at'       => now()
        ]);
        DB::table('payment_methods')->insert([
            'name' => 'Multibanco',
            'created_at'       => now(),
            'updated_at'       => now()
        ]);
        DB::table('payment_methods')->insert([
            'name' => 'Paypal',
            'created_at'       => now(),
            'updated_at'       => now()
        ]);
    }
}
