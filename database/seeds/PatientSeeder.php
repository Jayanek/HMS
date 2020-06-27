<?php

use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            DB::table('patients')->insert([
                'name' => Str::random(10),
                'age' => '35',
                'address' => Str::random(26),
                'description' => Str::random(102),
            ]);
        }
    }
}
