<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Client extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name' => 'Miguel',
            'last_name' => 'Mateo',
            'card_id' => '40200000008',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('clients')->insert([
            'name' => 'Sofia',
            'last_name' => 'Vergara',
            'card_id' => '09000000009',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('clients')->insert([
            'name' => 'Clark',
            'last_name' => 'Kent',
            'card_id' => '31200000002',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
