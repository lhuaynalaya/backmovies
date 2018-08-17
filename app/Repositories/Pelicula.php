<?php namespace App\Repositories;

use App\Repositories\Eloquent\Repository;

class Pelicula extends Repository {

  function model()
  {
    return 'App\Models\Pelicula';
  }
}