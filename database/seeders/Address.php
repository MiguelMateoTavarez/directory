<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Address extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            'client_id' => 1,
            'address' => 'AV. INDEPENDENCIA NO. 241	COL. CENTRO TUXTEPEC',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('addresses')->insert([
            'client_id' => 2,
            'address' => 'INDEPENDENCIA NO. 717 CENTRO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('addresses')->insert([
            'client_id' => 1,
            'address' => 'AV. 5 NO.1186-A FRACC. COSTA VERDE TUXTEPEC',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('addresses')->insert([
            'client_id' => 2,
            'address' => 'BLVD. BENITO JUAREZ ESQ. 20 DE NOVIEMBRE S/N	CENTRO TUXTEPEC',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('addresses')->insert([
            'client_id' => 3,
            'address' => 'CALLE MATAMOROS NO.280	COL. CENTRO TUXTEPEC',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('addresses')->insert([
            'client_id' => 1,
            'address' => 'BLVD. BENITO JUAREZ NO. 1466-A	FRACC. LOS ANGELES TUXTEPEC',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('addresses')->insert([
            'client_id' => 2,
            'address' => 'AV. 20 DE NOVIEMBRE NO.1024	COL.CENTRO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
