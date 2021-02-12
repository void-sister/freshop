<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            [
                'name' => 'Ataulfo Mango Pack',
                'price' => 23.00,
            ],
            [
                'name' => 'Australian orange juice',
                'price' => 10.00,
            ],
            [
                'name' => 'Eodem modo vel mattis ante facilisis',
                'price' => 49.00,
            ],
            [
                'name' => 'Grape Tomatoes',
                'price' => 45.00,
            ],
            [
                'name' => 'Green Cucumber',
                'price' => 55.00,
            ],
            [
                'name' => 'Organic Bananas',
                'price' => 50.00,
            ],
        ]);
    }
}
