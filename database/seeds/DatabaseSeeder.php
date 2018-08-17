<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ActoresTableSeeder::class);
        $this->call(CensurasTableSeeder::class);
        $this->call(CompaniasTableSeeder::class);
        $this->call(DirectoresTableSeeder::class);
        $this->call(GenerosTableSeeder::class);
        $this->call(IdiomasTableSeeder::class);
        $this->call(PaisesTableSeeder::class);
        $this->call(PeliculaTableSeeder::class);
        


    }
}
