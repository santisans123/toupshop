<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::insert(
            [
                [
                    'user_id' => 1,
                    'item_id' => 1,
                    'uid' => '123456789',
                    'serverid' => '987654321',
                    'nominal_id' => 1,
                    'payment' => 'BCA',
                    'account_name' => 'user 1',
                    'whatsapp' => '08961276371623',
                    'status' => 0
                ],
                [
                    'user_id' => 2,
                    'item_id' => 2,
                    'uid' => '987654321',
                    'serverid' => '123456789',
                    'nominal_id' => 2,
                    'payment' => 'Indomaret',
                    'account_name' => 'user 2',
                    'whatsapp' => '081928319892312',
                    'status' => 1
                ],
            ]
        );
    }
}
