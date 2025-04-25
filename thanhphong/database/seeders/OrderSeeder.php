<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    const MAX_RECORDS = 300;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->truncate();
        DB::table('orders')->insert([
            [
                'user_id'      => rand(1, 99),
                'total_amount' => 1000000,
                "address"      => "Địa chỉ 1",
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
        ]);

        for ($i = 2; $i < self::MAX_RECORDS; $i++) {
            DB::table('orders')->insert([
                [
                    'user_id'      => rand(1, 99),
                    'total_amount' => 1000000,
                    "address"      => "Địa chỉ " . $i,
                    'created_at'   => now(),
                    'updated_at'   => now(),
                ],
            ]);
        }
    }
}
