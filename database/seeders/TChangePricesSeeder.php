<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TChangePrices;
class TChangePricesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        TChangePrices::factory()->create([
            "change_type"=> 'Change Nickname',
            'price'=> '20000',

        ]);

        TChangePrices::factory()->create([
            "change_type"=> 'Change Gender',
            'price'=> '15000',
        ]);
    }
}
