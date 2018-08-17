<?php

use Illuminate\Database\Seeder;

class CompaniasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companias')->insert(['nombre' => 'Universal Studios']);
        DB::table('companias')->insert(['nombre' => 'Columbia Pictures']);
        DB::table('companias')->insert(['nombre' => 'HBO Films']);
        DB::table('companias')->insert(['nombre' => 'Warner Bros']);
        DB::table('companias')->insert(['nombre' => 'Sony Pictures']);  
    }
}
