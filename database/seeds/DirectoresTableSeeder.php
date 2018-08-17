<?php

use Illuminate\Database\Seeder;

class DirectoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('directores')->insert(['nombre' => 'Guillermo del Toro']);
        DB::table('directores')->insert(['nombre' => 'Billy Wilder']);
        DB::table('directores')->insert(['nombre' => 'Steven Spielberg']);
        DB::table('directores')->insert(['nombre' => 'Roman Lousky ']);
    }
}
