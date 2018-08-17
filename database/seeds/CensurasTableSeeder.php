<?php

use Illuminate\Database\Seeder;

class CensurasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('censuras')->insert(['nombre' => '+14']);
        DB::table('censuras')->insert(['nombre' => 'APT']);
    }
}
