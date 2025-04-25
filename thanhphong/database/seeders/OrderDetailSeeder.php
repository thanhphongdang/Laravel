<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    const MAX_RECORDS = 1000;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < self::MAX_RECORDS; $i++) {
            DB::table('order_details')->insert([
                [
                    'order_id'   => rand(1, 99),
                    'product_id' => rand(1, 14),
                    'quantity'   => 5,
                    'notes'      => "Ghi chú " . $i,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }
    }
}
