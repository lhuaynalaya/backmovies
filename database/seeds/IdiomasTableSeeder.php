<?php

use Illuminate\Database\Seeder;

class IdiomasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('idiomas')->insert(['codigo' => 'en', 'nombre' => 'English']);
      DB::table('idiomas')->insert(['codigo' => 'es', 'nombre' => 'español']);
      DB::table('idiomas')->insert(['codigo' => 'fr', 'nombre' => 'français']);
      DB::table('idiomas')->insert(['codigo' => 'it', 'nombre' => 'italiano']);
      DB::table('idiomas')->insert(['codigo' => 'ja', 'nombre' => '日本語']);
      DB::table('idiomas')->insert(['codigo' => 'ko', 'nombre' => '한국어']);
      DB::table('idiomas')->insert(['codigo' => 'nl', 'nombre' => 'Nederlands']);
      DB::table('idiomas')->insert(['codigo' => 'pt', 'nombre' => 'português']);
      DB::table('idiomas')->insert(['codigo' => 'zh', 'nombre' => '中文']);
    }
}
