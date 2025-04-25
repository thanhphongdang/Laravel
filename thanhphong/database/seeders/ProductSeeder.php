<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    const MAX_RECORDS = 15;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'name'        => 'Sẩn phẩm 1',
                'image'       => 'Hình sản phẩm 1',
                'price'       => 10000,
                'quantity'    => 10,
                'description' => "Mô tả sản phẩm 1",
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);

        for ($i = 2; $i < self::MAX_RECORDS; $i++) {
            DB::table('products')->insert([
                [
                    'name'        => 'Sẩn phẩm ' . $i,
                    'image'       => 'Hình sản phẩm ' . $i,
                    'price'       => 10000,
                    'quantity'    => 10,
                    'description' => "Mô tả sản phẩm " . $i,
                    'created_at'  => now(),
                    'updated_at'  => now(),
                ],
            ]);
        }
    }
}
