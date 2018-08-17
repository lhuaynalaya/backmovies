<?php

use Illuminate\Database\Seeder;

class ActoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actores')->insert(['nombre' => 'Johnny Depp']);
        DB::table('actores')->insert(['nombre' => 'Brad Pitt']);
        DB::table('actores')->insert(['nombre' => 'Angelina Jolie']);
        DB::table('actores')->insert(['nombre' => 'Will Smith']);
    }
}
