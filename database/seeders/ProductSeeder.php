<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakerID = Factory::create('id_ID');
        $fakerFR = Factory::create('fr_FR');
        $fakerIT = Factory::create('it_IT');
        $fakerRU = Factory::create('ru_RU');
        $fakerUS = Factory::create('en_US');

        $index = 0;

        foreach (Supplier::all() as $supplier) {
            if ($index == 0) {
                Product::factory()->create([
                    'product_image' => 'Product1.jpg',
                    'supplier_id' => $supplier,
                ]);
            } else if ($index == 1) {
                Product::factory()->create([
                    'product_image' => 'Product2.jpg',
                    'supplier_id' => $supplier,
                ]);
            } else if ($index == 2) {
                Product::factory()->create([
                    'product_image' => 'Product3.jpg',
                    'supplier_id' => $supplier,
                ]);
            }
            $index++;
        }
    }
}
