<?php

namespace Database\Seeders;

use App\Models\EateryOwner;
use Illuminate\Database\Seeder;

class EateryOwnerSeeder extends Seeder
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
                'first_name' => 'Flo',
                'last_name' => 'Smith',
                'phone' => '407-985-9556'
            ],
            [
                'first_name' => 'Jimmy',
                'last_name' => 'Fallon',
                'phone' => '695-595-3521'
            ],
            [
                'first_name' => 'Joel',
                'last_name' => 'Monty',
                'phone' => '456-652-5223'
            ],
            [
                'first_name' => 'James',
                'last_name' => 'Richardson',
                'phone' => '625-653-8594'
            ],
            [
                'first_name' => 'Richard',
                'last_name' => 'Robins',
                'phone' => '745-569-9821'
            ]
        ];
        foreach($owners as $owner) {
            EateryOwner::create($owner);
        }
    }
}
