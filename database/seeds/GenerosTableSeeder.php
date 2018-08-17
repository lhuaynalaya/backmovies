<?php

use Illuminate\Database\Seeder;

class GenerosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('generos')->insert(['nombre' => 'Acción']);
        DB::table('generos')->insert(['nombre' => 'Animación']);
        DB::table('generos')->insert(['nombre' => 'Aventura']);
        DB::table('generos')->insert(['nombre' => 'Ciencia Ficción']);
        DB::table('generos')->insert(['nombre' => 'Comedia']);
        DB::table('generos')->insert(['nombre' => 'Dibujos Animados']);
        DB::table('generos')->insert(['nombre' => 'Documental']);
        DB::table('generos')->insert(['nombre' => 'Drama']);
        DB::table('generos')->insert(['nombre' => 'Familiar']);
        DB::table('generos')->insert(['nombre' => 'Fantasía']);
        DB::table('generos')->insert(['nombre' => 'Musical']);
        DB::table('generos')->insert(['nombre' => 'Romance']);
        DB::table('generos')->insert(['nombre' => 'Terror']);
        DB::table('generos')->insert(['nombre' => 'Thriller']);
    }
}
