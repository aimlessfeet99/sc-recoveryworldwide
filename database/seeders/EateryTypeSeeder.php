<?php

namespace Database\Seeders;

use App\Models\EateryType;
use Illuminate\Database\Seeder;

class EateryTypeSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $owners = [
            [
                'type_name' => 'Bakery'
            ],
            [
                'type_name' => 'Restaurant'
            ],
            [
                'type_name' => 'Coffee Shop'
            ]            
        ];
        foreach($owners as $owner) {
            EateryType::create($owner);
        }
    }
}
