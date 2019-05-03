<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KontakSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('kontak')->insert([
                'nama' => $faker->name,
                'email' => $faker->unique()->email,
                'nohp' => $faker->phoneNumber,
                'alamat' => $faker->address
            ]);
        }
    }
}
