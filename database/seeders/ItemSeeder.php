<?php

namespace Database\Seeders;

use App\Models\AHItemMalls;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AHItemMalls::create([
            'name' => 'Dagger',
            'price' => 10000,
            'type' => 2621441,
            'description' => 'Lorem ipsum sit dolor amet',
            'img' => '07_bank_bag.jpg',
            'category' => 'Weapon'
        ]);
    }
}
