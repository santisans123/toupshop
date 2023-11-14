<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert(
            [
                [
                    'name' => 'Free Fire',
                    'image' => 'images/item/item1.png',
                ],
                [
                    'name' => 'PUBG',
                    'image' => 'images/item/item2.png',
                ],
                [
                    'name' => 'Genshin',
                    'image' => 'images/item/item3.png',
                ],
                [
                    'name' => 'Call Duty',
                    'image' => 'images/item/item4.png',
                ],
                [
                    'name' => 'Valorant',
                    'image' => 'images/item/item5.png',
                ],
                [
                    'name' => 'Mobile Legend Bang Bang',
                    'image' => 'images/item/item6.png',
                ],
                [
                    'name' => 'Undawn',
                    'image' => 'images/item/item7.png',
                ],
                [
                    'name' => 'Sausage Man',
                    'image' => 'images/item/item8.png',
                ],
                [
                    'name' => 'League Off Legends',
                    'image' => 'images/item/item9.png',
                ],
                [
                    'name' => 'Arena of Valor',
                    'image' => 'images/item/item10.png',
                ],
                [
                    'name' => 'M Seal',
                    'image' => 'images/item/item11.png',
                ],
                [
                    'name' => 'Bego Live',
                    'image' => 'images/item/item12.png',
                ],
            ]
        );
    }
}
