<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create('id_ID');
        for($i = 1;$i<=100;$i++){

        DB::table('penduduks')->insert([
            'nama'  => $faker->name,
            'nik'   => $faker->nik,
            'alamat'=> $faker->address,
            ]);
        }
    }
}
