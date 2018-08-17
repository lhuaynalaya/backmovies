<?php namespace App\Repositories;

use App\Repositories\Eloquent\Repository;

class Pais extends Repository {

  function model()
  {
    return 'App\Models\Pais';
  }
}